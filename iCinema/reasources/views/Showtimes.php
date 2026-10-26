
<?php
// Set the website name for the shared header.
$websiteName = "iCinema";

// Include the shared website header.
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Header.php";
?>

<!-- Main content area -->
<main class="container py-4">

    <!-- ==========================================
         MOVIE DETAILS
         Displays the selected movie's poster,
         title, classification and description.
         ========================================== -->
    <section class="mb-5">

        <div class="row align-items-start g-4">

            <!-- Movie poster placeholder -->
            <div class="col-5 col-md-3">

                <div class="bg-body-secondary rounded
                            d-flex align-items-center justify-content-center"
                     style="min-height: 220px;">

                    <span class="text-secondary text-center p-2">
                        Movie Poster
                    </span>

                </div>

            </div>

            <!-- Movie description and information -->
            <div class="col-7 col-md-9">

                <!-- Movie title -->
                <h1 class="h2">Movie Title</h1>

                <!-- Release year, genre, age rating and runtime -->
                <p class="text-muted">
                    2026 | Sci-Fi | 12A | 2h 15m
                </p>

                <!-- Brief movie synopsis -->
                <p>
                    A short description of the movie goes here.
                    Introduce the story, the main characters,
                    and what makes the film interesting.
                </p>

            </div>

        </div>

    </section>


    <!-- ==========================================
         CINEMA AND DATE SELECTION
         Allows the customer to choose a cinema
         and screening date before finding showtimes.
         ========================================== -->
    <section class="border rounded p-3 p-md-4 mb-5"
             id="booking">

        <h2 class="h4 mb-3">Find Showtimes</h2>

        <!-- Submit the selected cinema and date using GET -->
        <form action="Index.PHP" method="get" id="showtimesForm">
            <input type="hidden" name="page" value="showtimes">
            <input type="hidden" name="format" id="selectedFormat" value="2D">

            <div class="row g-3">

                <!-- Cinema selection dropdown -->
                <div class="col-12 col-md-6">
                    <div class="date-picker-card h-100">
                        <label for="cinema" class="form-label fw-semibold">Choose a cinema</label>
                        <select class="form-select cinema-picker-input"
                                id="cinema"
                                name="cinema"
                                required>
                            <option value="" selected disabled>Choose a cinema</option>
                            <option value="central-london">iCinema Central London</option>
                            <option value="manchester">iCinema Manchester</option>
                            <option value="edinburgh">iCinema Edinburgh</option>
                        </select>
                        <p class="form-text mb-0">Choose the location for your screening.</p>
                    </div>
                </div>


                <!-- Modern date picker -->
                <div class="col-12 col-md-6">
                    <div class="date-picker-card h-100">
                        <label for="date" class="form-label fw-semibold">
                            Select a Date
                        </label>
                        <input class="form-control date-picker-input"
                               type="date"
                               id="date"
                               name="date"
                               required>
                        <p class="form-text mb-0">Choose a screening date to see available showtimes.</p>
                    </div>
                </div>


                <!-- Submit the selected cinema and date -->
                <div class="col-12">

                    <button type="submit"
                            class="btn btn-primary w-100">
                        Find Showtimes
                    </button>

                </div>

            </div>

        </form>

    </section>


    <!-- ==========================================
         SCREENING FORMAT
         Allows the customer to choose between
         2D, 3D, IMAX and 4DX formats.
         ========================================== -->
    <section class="mb-4">

        <!-- Screening format section heading -->
        <label class="form-label fw-semibold">
            Select Screening Format
        </label>

        <!-- Radio buttons styled as Bootstrap buttons -->
        <div class="d-flex flex-wrap gap-2"
             role="group"
             aria-label="Screening format">

            <!-- 2D screening option (selected by default) -->
            <input type="radio"
                   class="btn-check"
                   name="format"
                   id="btnradio1"
                   value="2D"
                   autocomplete="off"
                   checked>

            <label class="btn btn-outline-primary px-4 py-3"
                   for="btnradio1">
                2D
            </label>


            <!-- 3D screening option -->
            <input type="radio"
                   class="btn-check"
                   name="format"
                   id="btnradio2"
                   value="3D"
                   autocomplete="off">

            <label class="btn btn-outline-primary px-4 py-3"
                   for="btnradio2">
                3D
            </label>


            <!-- IMAX screening option -->
            <input type="radio"
                   class="btn-check"
                   name="format"
                   id="btnradio3"
                   value="IMAX"
                   autocomplete="off">

            <label class="btn btn-outline-primary px-4 py-3"
                   for="btnradio3">
                IMAX
            </label>


            <!-- 4DX screening option -->
            <input type="radio"
                   class="btn-check"
                   name="format"
                   id="btnradio4"
                   value="4DX"
                   autocomplete="off">

            <label class="btn btn-outline-primary px-4 py-3"
                   for="btnradio4">
                4DX
            </label>

        </div>

    </section>


    <!-- ==========================================
         FILM SUMMARY
         Provides a description of the movie's
         atmosphere, tone and viewing experience.
         ========================================== -->
    <section class="mb-4">

        <h2 class="h5">Film Summary</h2>

        <p>
            A summary of the film, describing its story,
            atmosphere and overall viewing experience.
            Use descriptive language to help customers
            decide whether the film interests them.
        </p>

    </section>


    <!-- ==========================================
         CONTINUE TO SEATS AND EXTRAS
         Links the customer to the next stage
         of the booking process.
         ========================================== -->
    <div class="text-center mb-5">

        <a id="continueToSeats" href="Index.PHP?page=seats" class="btn btn-primary btn-lg">
            Continue to Seats and Extras
        </a>

    </div>

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
    const showtimesForm = document.getElementById('showtimesForm');
    const selectedFormat = document.getElementById('selectedFormat');
    const continueToSeats = document.getElementById('continueToSeats');

    function updateSeatsLink() {
        const params = new URLSearchParams(new FormData(showtimesForm));
        params.set('page', 'seats');
        continueToSeats.href = `Index.PHP?${params.toString()}`;
    }

    document.querySelectorAll('input[name="format"]').forEach(function (formatInput) {
        formatInput.addEventListener('change', function () {
            selectedFormat.value = this.value;
            updateSeatsLink();
        });
    });
    updateSeatsLink();

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
