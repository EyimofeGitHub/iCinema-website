<?php
// Set the website name for the shared header.
$websiteName = "iCinema";
$locationSearch = strtolower(trim((string) ($_GET['location'] ?? '')));

// Include the shared website header.
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Header.php";
?>

<!-- Main content area -->
<main class="container py-4">

    <!-- ==========================================
         PAGE HEADING
         Introduces the cinema locations available
         to customers.
         ========================================== -->
    <section class="mb-4">

        <h1 class="h2">Our Cinemas</h1>

        <p class="text-secondary">
            Discover your nearest iCinema location, explore
            our facilities and plan your next cinema visit.
        </p>

    </section>


    <!-- ==========================================
         CINEMA SEARCH
         Allows customers to enter a town or city
         to search for cinema locations.
         ========================================== -->
    <section class="mb-4">

        <form class="d-flex"
              role="search"
              action="Index.PHP"
              method="get">
            <input type="hidden" name="page" value="cinemas">

            <!-- Location search input -->
            <input
                class="form-control me-2"
                type="search"
                name="location"
                placeholder="Enter your location (e.g. London)"
                aria-label="Search cinemas">

            <!-- Submit the search query -->
            <button class="btn btn-outline-secondary"
                    type="submit">
                Search
            </button>

        </form>

    </section>


    <!-- ==========================================
         CINEMA LOCATIONS
         Displays cinema cards using Bootstrap's
         responsive grid system.
         ========================================== -->
    <section class="mb-5">

        <div class="row row-cols-1 row-cols-sm-2
                    row-cols-lg-4 g-4">


            <!-- ==================================
                 CINEMA 1: CENTRAL LONDON
                 ================================== -->
            <div class="col">

                <div class="card h-100">

                    <div class="row g-0 h-100">

                        <!-- Cinema image placeholder -->
                        <div class="col-4 col-md-12">

                            <div class="bg-body-secondary
                                        d-flex align-items-center
                                        justify-content-center h-100"
                                 style="min-height: 130px;">

                                <span class="text-secondary
                                             text-center small p-2">
                                    Cinema Picture
                                </span>

                            </div>

                        </div>

                        <!-- Cinema name, location and description -->
                        <div class="col-8 col-md-12">

                            <div class="card-body
                                        d-flex flex-column h-100">

                                <h2 class="h5 card-title">
                                    iCinema Central London
                                </h2>

                                <p class="text-muted small mb-2">
                                    123 Example Street, London
                                </p>

                                <p class="card-text">
                                    Experience the latest blockbusters
                                    in the heart of the capital, with
                                    comfortable seating, modern screens
                                    and a great choice of refreshments.
                                </p>

                                <!-- Open the cinema details page -->
                                <a href="Index.PHP?page=showtimes"
                                   class="btn btn-primary mt-auto">
                                    View Cinema
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ==================================
                 CINEMA 2: MANCHESTER
                 ================================== -->
            <div class="col">

                <div class="card h-100">

                    <div class="row g-0 h-100">

                        <!-- Cinema image placeholder -->
                        <div class="col-4 col-md-12">

                            <div class="bg-body-secondary
                                        d-flex align-items-center
                                        justify-content-center h-100"
                                 style="min-height: 130px;">

                                <span class="text-secondary
                                             text-center small p-2">
                                    Cinema Picture
                                </span>

                            </div>

                        </div>

                        <!-- Cinema name, location and description -->
                        <div class="col-8 col-md-12">

                            <div class="card-body
                                        d-flex flex-column h-100">

                                <h2 class="h5 card-title">
                                    iCinema Manchester
                                </h2>

                                <p class="text-muted small mb-2">
                                    45 Market Street, Manchester
                                </p>

                                <p class="card-text">
                                    Enjoy a relaxed cinema experience
                                    with a variety of films, spacious
                                    auditoriums and convenient access
                                    to Manchester's city centre.
                                </p>

                                <!-- Open the cinema details page -->
                                <a href="Index.PHP?page=showtimes"
                                   class="btn btn-primary mt-auto">
                                    View Cinema
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ==================================
                 CINEMA 3: BIRMINGHAM
                 ================================== -->
            <div class="col">

                <div class="card h-100">

                    <div class="row g-0 h-100">

                        <!-- Cinema image placeholder -->
                        <div class="col-4 col-md-12">

                            <div class="bg-body-secondary
                                        d-flex align-items-center
                                        justify-content-center h-100"
                                 style="min-height: 130px;">

                                <span class="text-secondary
                                             text-center small p-2">
                                    Cinema Picture
                                </span>

                            </div>

                        </div>

                        <!-- Cinema name, location and description -->
                        <div class="col-8 col-md-12">

                            <div class="card-body
                                        d-flex flex-column h-100">

                                <h2 class="h5 card-title">
                                    iCinema Birmingham
                                </h2>

                                <p class="text-muted small mb-2">
                                    78 Example Square, Birmingham
                                </p>

                                <p class="card-text">
                                    Make your next movie night special
                                    with a welcoming atmosphere,
                                    contemporary screening rooms and
                                    a selection of snacks and drinks.
                                </p>

                                <!-- Open the cinema details page -->
                                <a href="Index.PHP?page=showtimes"
                                   class="btn btn-primary mt-auto">
                                    View Cinema
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ==================================
                 CINEMA 4: EDINBURGH
                 ================================== -->
            <div class="col">

                <div class="card h-100">

                    <div class="row g-0 h-100">

                        <!-- Cinema image placeholder -->
                        <div class="col-4 col-md-12">

                            <div class="bg-body-secondary
                                        d-flex align-items-center
                                        justify-content-center h-100"
                                 style="min-height: 130px;">

                                <span class="text-secondary
                                             text-center small p-2">
                                    Cinema Picture
                                </span>

                            </div>

                        </div>

                        <!-- Cinema name, location and description -->
                        <div class="col-8 col-md-12">

                            <div class="card-body
                                        d-flex flex-column h-100">

                                <h2 class="h5 card-title">
                                    iCinema Edinburgh
                                </h2>

                                <p class="text-muted small mb-2">
                                    20 Example Road, Edinburgh
                                </p>

                                <p class="card-text">
                                    Discover a great range of films
                                    in Scotland's capital, with
                                    comfortable viewing spaces and
                                    a convenient base for a day out.
                                </p>

                                <!-- Open the cinema details page -->
                                <a href="Index.PHP?page=showtimes"
                                   class="btn btn-primary mt-auto">
                                    View Cinema
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </div>

    </section>

</main>


<?php
// Include the shared website footer.
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Footer.php";
?>

<!-- Bootstrap JavaScript bundle.
     Enables interactive Bootstrap components. -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous">
</script>
<script>
    const locationSearch = <?php echo json_encode($locationSearch, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
    if (locationSearch) {
        document.querySelectorAll('.row.row-cols-1.row-cols-sm-2.row-cols-lg-4.g-4 > .col').forEach(function (card) {
            card.classList.toggle('d-none', !card.textContent.toLowerCase().includes(locationSearch));
        });
    }
</script>

</body>
</html>
