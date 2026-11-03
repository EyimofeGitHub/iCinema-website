
<?php
$websiteName = "iCinema";
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Header.php";

$confirmationEmail = filter_var($_GET['email'] ?? '', FILTER_VALIDATE_EMAIL);
$confirmationCinema = [
    'central-london' => 'iCinema Central London',
    'manchester' => 'iCinema Manchester',
    'edinburgh' => 'iCinema Edinburgh',
][(string) ($_GET['cinema'] ?? '')] ?? 'iCinema Central London';
$confirmationDate = DateTime::createFromFormat('!Y-m-d', (string) ($_GET['date'] ?? ''));
$confirmationDateText = $confirmationDate
    ? $confirmationDate->format('l, j F Y')
    : 'The selected screening date';
$confirmationSeats = array_values(array_filter(
    explode(',', (string) ($_GET['seats'] ?? '')),
    static fn (string $seat): bool => preg_match('/^[A-H](?:[1-9]|1[0-2])$/', $seat) === 1
));
?>

<!-- Main content area -->
<main class="container py-4">

    <!-- ==========================================
         BOOKING CONFIRMATION MESSAGE
         Displays the success message after booking.
         ========================================== -->
    <section class="text-center py-5">

        <!-- Green circle containing the confirmation tick -->
        <div class="rounded-circle bg-success text-white
                    d-flex align-items-center justify-content-center
                    mx-auto mb-4"
             style="width: 80px; height: 80px; font-size: 2.5rem;">
            &#10003;
        </div>

        <!-- Confirmation heading -->
        <h1 class="h2 mb-3">Booking Confirmed!</h1>

        <!-- Booking success message -->
        <p class="lead mb-2">
            Your booking has been successfully confirmed.
        </p>

        <!-- Confirmation email message (currently a placeholder) -->
        <p class="text-muted mb-2">
            A confirmation email has been sent to
            <strong><?php echo htmlspecialchars($confirmationEmail ?: 'the email address provided', ENT_QUOTES, 'UTF-8'); ?></strong>.
        </p>

        <!-- Instructions for the customer -->
        <p class="small text-muted mb-0">
            Please check your inbox for your booking details.
        </p>

    </section>


    <!-- ==========================================
         BOOKING DETAILS CARD
         Summarises the movie, cinema, screening,
         seats and number of tickets.
         ========================================== -->
    <section class="card shadow-sm mb-5">

        <!-- Card heading -->
        <div class="card-header bg-body py-3">
            <h2 class="h4 mb-0">Booking Details</h2>
        </div>

        <!-- Card content -->
        <div class="card-body p-3 p-md-4">

            <!-- Bootstrap row for the poster and movie information -->
            <div class="row g-4">

                <!-- Movie poster placeholder -->
                <div class="col-5 col-md-3">
                    <div class="bg-body-secondary rounded
                                d-flex align-items-center justify-content-center"
                         style="min-height: 200px;">

                        <span class="text-secondary text-center p-2">
                            Movie Poster
                        </span>

                    </div>
                </div>


                <!-- Movie information and booking details -->
                <div class="col-7 col-md-9">

                    <!-- Movie title -->
                    <h3 class="h4 mb-2">Movie Title</h3>

                    <!-- Movie release year, genre, age rating and runtime -->
                    <p class="text-muted small mb-3">
                        2026 | Sci-Fi | 12A | 2h 15m
                    </p>


                    <!-- Cinema location -->
                    <div class="mb-3">

                        <h4 class="h6 mb-1">Cinema</h4>

                        <p class="mb-1">
                            <?php echo htmlspecialchars($confirmationCinema, ENT_QUOTES, 'UTF-8'); ?>
                        </p>

                        <p class="text-muted small mb-0">
                            123 Example Street, London
                        </p>

                    </div>


                    <!-- Screening date, time, format and screen number -->
                    <div class="mb-3">

                        <h4 class="h6 mb-1">Screening Details</h4>

                        <p class="mb-1">
                            <?php echo htmlspecialchars($confirmationDateText, ENT_QUOTES, 'UTF-8'); ?>
                        </p>

                        <p class="text-muted small mb-0">
                            7:30 PM | 2D | Screen 3
                        </p>

                    </div>


                    <!-- Divider separating screening information from tickets -->
                    <hr>


                    <!-- Selected seats and ticket quantity -->
                    <div class="row g-3">

                        <!-- Seat numbers -->
                        <div class="col-6">

                            <h4 class="h6 mb-1">Seats</h4>

                            <p class="mb-0">
                                <?php echo htmlspecialchars($confirmationSeats ? implode(', ', $confirmationSeats) : 'No seats selected', ENT_QUOTES, 'UTF-8'); ?>
                            </p>

                        </div>

                        <!-- Total number of tickets -->
                        <div class="col-6">

                            <h4 class="h6 mb-1">Tickets</h4>

                            <p class="mb-0">
                                <?php echo count($confirmationSeats); ?> ticket<?php echo count($confirmationSeats) === 1 ? '' : 's'; ?>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ==========================================
         RETURN HOME BUTTON
         Allows the customer to navigate back to
         the website's home page.
         ========================================== -->
    <div class="text-center mb-5">

        <a href="Index.PHP?page=home" class="btn btn-primary btn-lg">
            Return to Home <span class="ms-2">→</span>
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

</body>
</html>
