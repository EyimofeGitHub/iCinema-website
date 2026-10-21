<?php
$websiteName = "iCinema";
include_once "header.php";
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
                        <a href="Movies.php" class="btn btn-primary">
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
                        <a href="Movies.php" class="btn btn-primary">
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
        <img src="image/PitchPerfect.png"
             class="card-img-top"
             alt="Pitch Perfect movie poster"
             style="height: 250px; object-fit: contain;">

        <div class="card-body">
            <h5 class="card-title">Pitch Perfect</h5>

            <p class="card-text">
                Discover this film and find a screening near you.
            </p>

            <a href="MovieDetail.php" class="btn btn-primary">
                More Details
            </a>
        </div>

    </div>
</div>

<div class="col">
    <div class="card h-100">

        <!-- Movie Poster -->
        <img src="image/TheHeat.png"
             class="card-img-top"
             alt="Pitch Perfect movie poster"
             style="height: 250px; object-fit: contain;">

        <div class="card-body">
            <h5 class="card-title">The Heat</h5>

            <p class="card-text">
                Discover this film and find a screening near you.
            </p>

            <a href="MovieDetail.php" class="btn btn-primary">
                More Details
            </a>
        </div>

    </div>
</div>

<div class="col">
    <div class="card h-100">

        <!-- Movie Poster -->
        <img src="image/JackFrost.png"
             class="card-img-top"
             alt="Pitch Perfect movie poster"
             style="height: 250px; object-fit: contain;">

        <div class="card-body">
            <h5 class="card-title">Jack Frost: Rise Of The Guardians</h5>

            <p class="card-text">
                Discover this film and find a screening near you.
            </p>

            <a href="MovieDetail.php" class="btn btn-primary">
                More Details
            </a>
        </div>

    </div>
</div>
    </section>


    <!-- Find Showtimes -->
    <section class="container mb-5" id="find-showtimes">

        <h2 class="mb-4">Find Showtimes</h2>

        <form action="Showtimes.php" method="get">

            <div class="row g-3 justify-content-center">

                <div class="col-12 col-md-4">
                    <label for="cinema" class="form-label">Cinema</label>

                    <select class="form-select" id="cinema" name="cinema" required>
                        <option value="" selected disabled>
                            Select a cinema
                        </option>
                        <option value="cinema1">Cinema One</option>
                        <option value="cinema2">Cinema Two</option>
                        <option value="cinema3">Cinema Three</option>
                    </select>
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
                    <label for="date" class="form-label">Date</label>

                    <input class="form-control"
                           type="date"
                           id="date"
                           name="date"
                           required>
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
                        <a href="MovieDetail.php" class="btn btn-outline-primary">
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
                        <a href="MovieDetail.php" class="btn btn-outline-primary">
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
                        <a href="MovieDetail.php" class="btn btn-outline-primary">
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

            <a href="Membership.php" class="btn btn-primary">
                Explore Membership
            </a>

        </div>
    </section>
<?php include_once "footer.php"; ?>
</main>


<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous">
</script>

</body>
</html>
