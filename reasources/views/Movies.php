
<?php
$websiteName = "iCinema";
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Header.php";
?>

<main class="container py-4">

    <!-- Page Heading -->
    <section class="mb-4">
        <h2>Movies</h2>
        <p class="text-secondary">
            Browse our films and find your next cinema experience.
        </p>
    </section>


    <!-- Search Bar -->
    <section class="mb-4">
        <form class="d-flex" role="search" action="Index.PHP" method="get">
            <input type="hidden" name="page" value="movies">
            <input
                class="form-control me-2"
                type="search"
                name="search"
                placeholder="Search movies..."
                aria-label="Search movies">

            <button class="btn btn-outline-secondary" type="submit">
                Search
            </button>
        </form>
    </section>


    <!-- Genre, Rating and Sort Filters -->
    <section class="mb-4">

        <form action="Index.PHP" method="get">
            <input type="hidden" name="page" value="movies">

            <div class="row g-3">

                <!-- Genre -->
                <div class="col-12 col-md-4">
                    <label class="form-label" for="genre">Genre</label>

                    <select class="form-select" id="genre" name="genre">
                        <option value="" selected>All Genres</option>
                        <option value="Action">Action</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Drama">Drama</option>
                        <option value="Horror">Horror</option>
                        <option value="Animation">Animation</option>
                    </select>
                </div>

                <!-- Rating -->
                <div class="col-12 col-md-4">
                    <label class="form-label" for="rating">Certificate</label>

                    <select class="form-select" id="rating" name="rating">
                        <option value="" selected>All Certificates</option>
                        <option value="U">U</option>
                        <option value="PG">PG</option>
                        <option value="12A">12A</option>
                        <option value="15">15</option>
                        <option value="18">18</option>
                    </select>
                </div>

                <!-- Sort -->
                <div class="col-12 col-md-4">
                    <label class="form-label" for="sort">Sort By</label>

                    <select class="form-select" id="sort" name="sort">
                        <option value="popularity" selected>Popularity</option>
                        <option value="title">Title (A–Z)</option>
                        <option value="newest">Newest</option>
                    </select>
                </div>

                <!-- Filter Buttons -->
                <div class="col-12 text-center">
                    <button class="btn btn-primary btn-sm px-4" type="submit">
                        Apply Filters
                    </button>

                    <a href="Index.PHP?page=movies"
                       class="btn btn-outline-secondary btn-sm px-4">
                        Clear
                    </a>
                </div>

            </div>

        </form>
    </section>


    <!-- Now Showing -->
    <section class="mb-5">

        <h3 class="mb-4">Now Showing</h3>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($nowShowing as $movie): ?>
                <div class="col">
                    <article class="card h-100"
                             data-genre="<?php echo htmlspecialchars($movie['genre'], ENT_QUOTES, 'UTF-8'); ?>"
                             data-rating="<?php echo htmlspecialchars((string) $movie['rating'], ENT_QUOTES, 'UTF-8'); ?>"
                             data-release="<?php echo htmlspecialchars((string) $movie['year'], ENT_QUOTES, 'UTF-8'); ?>">
                        <a href="Index.PHP?page=movie-details">
                            <img src="Assets/img/<?php echo htmlspecialchars($movie['poster'], ENT_QUOTES, 'UTF-8'); ?>"
                                 class="card-img-top"
                                 alt="<?php echo htmlspecialchars($movie['title'], ENT_QUOTES, 'UTF-8'); ?> poster"
                                 style="height: 250px; object-fit: contain;">
                        </a>

                        <div class="card-body p-3">
                            <h3 class="fs-6 mb-1"><?php echo htmlspecialchars($movie['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="text-body-secondary small mb-3">
                                <?php echo htmlspecialchars($movie['genre'], ENT_QUOTES, 'UTF-8'); ?>
                                &nbsp;|&nbsp;
                                <?php echo htmlspecialchars($movie['duration'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>

                            <a class="btn btn-primary btn-sm w-100" href="Index.PHP?page=showtimes">
                                Book Tickets
                            </a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

</main>

<?php include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Footer.php"; ?>

<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous">
</script>
<script>
    const movieParams = new URLSearchParams(window.location.search);
    const movieSearch = (movieParams.get('search') || '').toLowerCase().trim();
    const selectedGenre = (movieParams.get('genre') || '').toLowerCase();
    const selectedRating = (movieParams.get('rating') || '').toLowerCase();
    const selectedSort = movieParams.get('sort') || 'popularity';
    const movieCards = document.querySelectorAll('section.mb-5 .card');
    const movieGrid = movieCards[0] ? movieCards[0].parentElement : null;

    if (movieGrid && selectedSort !== 'popularity') {
        [...movieCards]
            .sort(function (first, second) {
                if (selectedSort === 'title') {
                    return first.querySelector('.card-title').textContent.localeCompare(
                        second.querySelector('.card-title').textContent
                    );
                }
                return Number(second.dataset.release) - Number(first.dataset.release);
            })
            .forEach(function (card) {
                movieGrid.appendChild(card.closest('.col'));
            });
    }

    movieCards.forEach(function (card) {
        const content = card.textContent.toLowerCase();
        const matchesSearch = !movieSearch || content.includes(movieSearch);
        const matchesGenre = !selectedGenre || card.dataset.genre.toLowerCase() === selectedGenre;
        const matchesRating = !selectedRating || card.dataset.rating.toLowerCase() === selectedRating;
        card.closest('.col').classList.toggle('d-none', !(matchesSearch && matchesGenre && matchesRating));
    });
</script>

</body>
</html>
