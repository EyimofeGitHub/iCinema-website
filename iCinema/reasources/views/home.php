<?php
$websiteName = "iCinema";
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Header.php";
?>

<main>

    <!-- Featured Movies Carousel -->
    <section class="container-fluid px-0 mb-5">

        <div id="carouselExampleDark"
             class="carousel carousel-dark slide"
             data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button"
                        data-bs-target="#carouselExampleDark"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"></button>

                <button type="button"
                        data-bs-target="#carouselExampleDark"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"></button>

                <button type="button"
                        data-bs-target="#carouselExampleDark"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="bg-body-secondary d-flex align-items-center justify-content-center"
                         style="height: 350px;">
                        <span class="text-secondary">Featured Movie</span>
                    </div>

                    <div class="carousel-caption">
                        <h2>Featured Movie</h2>
                        <p>Discover something great to watch.</p>
                        <a href="Index.PHP?page=movies" class="btn btn-primary">
                            Browse Movies
                        </a>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-body-secondary d-flex align-items-center justify-content-center"
                         style="height: 350px;">
                        <span class="text-secondary">Movie Promotion</span>
                    </div>

                    <div class="carousel-caption">
                        <h2>Your Next Cinema Experience</h2>
                        <p>Find a film and plan your next visit.</p>
                        <a href="Index.PHP?page=movies" class="btn btn-primary">
                            View Movies
                        </a>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-body-secondary d-flex align-items-center justify-content-center"
                         style="height: 350px;">
                        <span class="text-secondary">Book Your Tickets</span>
                    </div>

                    <div class="carousel-caption">
                        <h2>Book Your Tickets</h2>
                        <p>Your next movie is waiting.</p>
                        <a href="#find-showtimes" class="btn btn-primary">
                            Find Showtimes
                        </a>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">

                <span class="carousel-control-prev-icon"
                      aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">

                <span class="carousel-control-next-icon"
                      aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </section>


    <!-- Now Showing -->
    <section class="container mb-5">

        <h2 class="mb-4">Now Showing</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">

<div class="col">
    <div class="card h-100">

        <!-- Movie Poster -->
        <img src="Assets/img/PitchPerfect.png"
             class="card-img-top"
             alt="Pitch Perfect movie poster"
             style="height: 250px; object-fit: contain;">

        <div class="card-body">
            <h5 class="card-title">Pitch Perfect</h5>

            <p class="card-text">
                Discover this film and find a screening near you.
            </p>

            <a href="Index.PHP?page=movie-details" class="btn btn-primary">
                More Details
            </a>
        </div>

    </div>
</div>

<div class="col">
    <div class="card h-100">

        <!-- Movie Poster -->
        <img src="Assets/img/TheHeat.png"
             class="card-img-top"
             alt="The Heat movie poster"
             style="height: 250px; object-fit: contain;">

        <div class="card-body">
            <h5 class="card-title">The Heat</h5>

            <p class="card-text">
                Discover this film and find a screening near you.
            </p>

            <a href="Index.PHP?page=movie-details" class="btn btn-primary">
                More Details
            </a>
        </div>

    </div>
</div>

<div class="col">
    <div class="card h-100">

        <!-- Movie Poster -->
        <img src="Assets/img/JackFrost.png"
             class="card-img-top"
             alt="Jack Frost: Rise of the Guardians movie poster"
             style="height: 250px; object-fit: contain;">

        <div class="card-body">
            <h5 class="card-title">Jack Frost: Rise Of The Guardians</h5>

            <p class="card-text">
                Discover this film and find a screening near you.
            </p>

            <a href="Index.PHP?page=movie-details" class="btn btn-primary">
                More Details
            </a>
        </div>

    </div>
</div>
        </div>
    </section>


    <!-- Find Showtimes -->
    <section class="container mb-5" id="find-showtimes">

        <h2 class="mb-4">Find Showtimes</h2>

        <form action="Index.PHP" method="get">
            <input type="hidden" name="page" value="showtimes">

            <div class="row g-3 justify-content-center">

                <div class="col-12 col-md-4">
                    <div class="date-picker-card h-100">
                        <label for="cinema" class="form-label fw-semibold">Choose a cinema</label>
                        <select class="form-select cinema-picker-input" id="cinema" name="cinema" required>
                            <option value="" selected disabled>Select a cinema</option>
                            <option value="central-london">iCinema Central London</option>
                            <option value="manchester">iCinema Manchester</option>
                            <option value="edinburgh">iCinema Edinburgh</option>
                        </select>
                        <p class="form-text mb-0">Choose the location for your screening.</p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <label for="movie" class="form-label">Movie</label>

                    <select class="form-select" id="movie" name="movie" required>
                        <option value="" selected disabled>
                            Select a movie
                        </option>
                        <option value="movie1">Movie Title One</option>
                        <option value="movie2">Movie Title Two</option>
                        <option value="movie3">Movie Title Three</option>
                    </select>
                </div>

                <div class="col-12 col-md-4">
                    <div class="date-picker-card h-100">
                        <label for="date" class="form-label fw-semibold">
                            Choose a date
                        </label>
                        <input class="form-control date-picker-input"
                               type="date"
                               id="date"
                               name="date"
                               required>
                        <p class="form-text mb-0">Pick the day you'd like to see a film.</p>
                    </div>
                </div>

                <div class="col-12 text-center mt-4">
                    <button class="btn btn-primary px-4" type="submit">
                        Search Showtimes
                    </button>
                </div>

            </div>
        </form>
    </section>


    <!-- Coming Soon -->
    <section class="container mb-5">

        <h2 class="mb-4">Coming Soon</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100">
                    <div class="bg-body-secondary d-flex align-items-center justify-content-center"
                         style="height: 250px;">
                        <span class="text-secondary">Movie Poster</span>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Upcoming Movie One</h5>
                        <p class="card-text">Coming soon to iCinema.</p>
                        <a href="Index.PHP?page=movie-details" class="btn btn-outline-primary">
                            More Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="bg-body-secondary d-flex align-items-center justify-content-center"
                         style="height: 250px;">
                        <span class="text-secondary">Movie Poster</span>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Upcoming Movie Two</h5>
                        <p class="card-text">Look out for this upcoming release.</p>
                        <a href="Index.PHP?page=movie-details" class="btn btn-outline-primary">
                            More Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="bg-body-secondary d-flex align-items-center justify-content-center"
                         style="height: 250px;">
                        <span class="text-secondary">Movie Poster</span>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Upcoming Movie Three</h5>
                        <p class="card-text">Find out more about this upcoming film.</p>
                        <a href="Index.PHP?page=movie-details" class="btn btn-outline-primary">
                            More Details
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Membership Promotion -->
    <section class="container mb-5">
        <div class="p-4 p-md-5 text-center bg-body-tertiary rounded">

            <h2>Join iCinema Membership</h2>

            <p class="mb-4">
                Discover cinema offers and make your next visit special.
            </p>

            <a href="Index.PHP?page=membership" class="btn btn-primary">
                Explore Membership
            </a>

        </div>
    </section>
<?php include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Footer.php"; ?>
</main>


<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous">
</script>
<script>
    document.querySelectorAll('input[type="date"]').forEach(function (dateInput) {
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        dateInput.min = new Date(tomorrow.getTime() - tomorrow.getTimezoneOffset() * 60000)
            .toISOString()
            .slice(0, 10);
    });
</script>

</body>
</html>
