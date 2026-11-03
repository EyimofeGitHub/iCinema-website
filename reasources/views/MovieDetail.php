<?php
// Set the website name for the shared header.
$websiteName = "iCinema";

// Include the shared navigation and header.
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Header.php";
?>

<main>

    <!-- Movie Overview: Poster, Description and Booking Button -->
    <section class="container my-4">
        <div class="row align-items-start g-4">

            <!-- Movie Poster Placeholder -->
            <div class="col-5 col-md-3">
                <div class="bg-body-secondary rounded d-flex align-items-center justify-content-center"
                     style="min-height: 220px; height: 100%;">
                    <span class="text-secondary text-center p-2">
                        Movie Poster
                    </span>
                </div>
            </div>

            <!-- Main Movie Details -->
            <div class="col-7 col-md-9">
                <h1 class="h2">Movie Title</h1>

                <!-- Basic movie information displayed beneath the title -->
                <p class="text-muted">
                    2026 | Sci-Fi | 12A | 2h 15m
                </p>

                <!-- Placeholder for the movie synopsis -->
                <p>
                    A short description of the movie goes here.
                    Introduce the story, the main characters,
                    and what makes the film interesting.
                </p>

                <!-- Continue to the showtimes and ticket booking page -->
                <a href="Index.PHP?page=showtimes" class="btn btn-primary">
                    Book Tickets
                </a>
            </div>

        </div>
    </section>


    <!-- Movie Information: Release Date, Runtime, Genre and Certificate -->
    <section class="container my-4">
        <h2 class="h4 mb-3">Movie Information</h2>

        <div class="row g-3">

            <!-- Release Date -->
            <div class="col-6 col-md-3">
                <div class="p-3 border rounded h-100">
                    <h3 class="h6">Release Date</h3>
                    <p class="mb-0">15 October 2026</p>
                </div>
            </div>

            <!-- Runtime -->
            <div class="col-6 col-md-3">
                <div class="p-3 border rounded h-100">
                    <h3 class="h6">Runtime</h3>
                    <p class="mb-0">2h 10m</p>
                </div>
            </div>

            <!-- Genre -->
            <div class="col-6 col-md-3">
                <div class="p-3 border rounded h-100">
                    <h3 class="h6">Genre</h3>
                    <p class="mb-0">Action, Adventure</p>
                </div>
            </div>

            <!-- Age Certificate -->
            <div class="col-6 col-md-3">
                <div class="p-3 border rounded h-100">
                    <h3 class="h6">Certificate</h3>
                    <p class="mb-0">12A</p>
                </div>
            </div>

        </div>
    </section>


    <!-- Cast and Crew Information Alongside the Audience Rating -->
    <section class="container my-5">
        <div class="row g-4">

            <!-- Cast and Crew Section -->
            <div class="col-12 col-md-8">
                <h2 class="h4 mb-3">Cast &amp; Crew</h2>

                <!-- Button toggles the visibility of the cast list -->
                <button class="btn btn-outline-secondary mb-3"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#castCrew"
                        aria-expanded="false"
                        aria-controls="castCrew">

                    View Cast &amp; Crew
                    <span aria-hidden="true">▼</span>
                </button>

                <!-- Collapsible Cast List -->
                <div class="collapse" id="castCrew">

                    <!-- Cast Member 1 -->
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-body-secondary rounded d-flex align-items-center justify-content-center flex-shrink-0"
                             style="width: 75px; height: 75px;">
                            <span class="text-secondary small">Photo</span>
                        </div>

                        <div>
                            <h3 class="h6 mb-1">Character Name</h3>
                            <p class="text-muted mb-0">Actor's Real Name</p>
                        </div>
                    </div>

                    <!-- Cast Member 2 -->
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-body-secondary rounded d-flex align-items-center justify-content-center flex-shrink-0"
                             style="width: 75px; height: 75px;">
                            <span class="text-secondary small">Photo</span>
                        </div>

                        <div>
                            <h3 class="h6 mb-1">Character Name</h3>
                            <p class="text-muted mb-0">Actor's Real Name</p>
                        </div>
                    </div>

                    <!-- Cast Member 3 -->
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-body-secondary rounded d-flex align-items-center justify-content-center flex-shrink-0"
                             style="width: 75px; height: 75px;">
                            <span class="text-secondary small">Photo</span>
                        </div>

                        <div>
                            <h3 class="h6 mb-1">Character Name</h3>
                            <p class="text-muted mb-0">Actor's Real Name</p>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Movie Audience Rating -->
            <div class="col-12 col-md-4">
                <div class="border rounded p-4 h-100">
                    <h2 class="h4">Movie Rating</h2>

                    <p class="mb-1">
                        <span class="fs-2 fw-bold">8.2</span> / 10
                    </p>

                    <!-- Visual representation of the rating -->
                    <p class="mb-2" aria-label="4 out of 5 stars">
                        ★★★★☆
                    </p>

                    <p class="text-muted mb-0">
                        Audience rating
                    </p>
                </div>
            </div>

        </div>
    </section>


    <!-- Similar Movies: Suggested Films Displayed as Bootstrap Cards -->
    <section class="container my-5">
        <h2 class="h4 mb-4">Similar Movies</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">

            <!-- Similar Movie 1 -->
            <div class="col">
                <div class="card h-100">

                    <!-- Movie Poster Placeholder -->
                    <div class="bg-body-secondary d-flex align-items-center justify-content-center"
                         style="height: 250px;">
                        <span class="text-secondary">Movie Poster</span>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h3 class="h5 card-title">Movie 1</h3>
                        <p class="card-text">Movie description goes here.</p>

                        <!-- Keep the button at the bottom of the card -->
                        <a href="Index.PHP?page=movie-details"
                           class="btn btn-primary mt-auto">
                            More Details
                        </a>
                    </div>

                </div>
            </div>


            <!-- Similar Movie 2 -->
            <div class="col">
                <div class="card h-100">

                    <div class="bg-body-secondary d-flex align-items-center justify-content-center"
                         style="height: 250px;">
                        <span class="text-secondary">Movie Poster</span>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h3 class="h5 card-title">Movie 2</h3>
                        <p class="card-text">Movie description goes here.</p>

                        <a href="Index.PHP?page=movie-details"
                           class="btn btn-primary mt-auto">
                            More Details
                        </a>
                    </div>

                </div>
            </div>


            <!-- Similar Movie 3 -->
            <div class="col">
                <div class="card h-100">

                    <div class="bg-body-secondary d-flex align-items-center justify-content-center"
                         style="height: 250px;">
                        <span class="text-secondary">Movie Poster</span>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h3 class="h5 card-title">Movie 3</h3>
                        <p class="card-text">Movie description goes here.</p>

                        <a href="Index.PHP?page=movie-details"
                           class="btn btn-primary mt-auto">
                            More Details
                        </a>
                    </div>

                </div>
            </div>


            <!-- Similar Movie 4 -->
            <div class="col">
                <div class="card h-100">

                    <div class="bg-body-secondary d-flex align-items-center justify-content-center"
                         style="height: 250px;">
                        <span class="text-secondary">Movie Poster</span>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h3 class="h5 card-title">Movie 4</h3>
                        <p class="card-text">Movie description goes here.</p>

                        <a href="Index.PHP?page=movie-details"
                           class="btn btn-primary mt-auto">
                            More Details
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

</main>

<!-- Include the shared footer -->
<?php include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Footer.php"; ?>

<!-- Bootstrap JavaScript bundle enables the Cast & Crew collapse -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous">
</script>

</body>
</html>
