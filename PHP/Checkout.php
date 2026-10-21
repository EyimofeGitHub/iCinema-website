
<?php
$websiteName = "iCinema";
include_once "header.php";
?>

<main class="container py-4">

<!-- Booking Progress Bar -->
<section class="mb-5">

    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">

            <li class="breadcrumb-item">
                <a href="Index.php">Home</a>
            </li>

            <li class="breadcrumb-item">
                <a href="Movies.php">Movies</a>
            </li>

            <li class="breadcrumb-item">
                <a href="MovieDetail.php">Movie Title</a>
            </li>

            <li class="breadcrumb-item">
                <a href="Showtimes.php">Showtimes & Tickets</a>
            </li>

            <li class="breadcrumb-item">
                <a href ="Seats.php">Seats & Extras</a>
            </li>

            <li class="breadcrumb-item active" aria-current="page">
            Checkout
            </li>
        </ol>
    </nav>
    <div class="d-flex align-items-start justify-content-between">

        <!-- Step 1: Showtimes - Completed -->
        <div class="text-center">
            <div class="rounded-circle bg-success text-white
                        d-flex align-items-center justify-content-center
                        mx-auto mb-2"
                 style="width: 40px; height: 40px;">
                &#10003;
            </div>
            <small class="fw-bold">Showtimes</small>
        </div>

        <!-- Connector -->
        <div class="flex-grow-1 border-top border-success mt-3 mx-2"></div>

        <!-- Step 2: Seats & Extras - Completed -->
        <div class="text-center">
            <div class="rounded-circle bg-success text-white
                        d-flex align-items-center justify-content-center
                        mx-auto mb-2"
                 style="width: 40px; height: 40px;">
                &#10003;
            </div>
            <small class="fw-bold">Seats & Extras</small>
        </div>

        <!-- Connector -->
        <div class="flex-grow-1 border-top border-success mt-3 mx-2"></div>

        <!-- Step 3: Checkout - Current -->
        <div class="text-center">
            <div class="rounded-circle bg-primary text-white
                        d-flex align-items-center justify-content-center
                        mx-auto mb-2"
                 style="width: 40px; height: 40px;">
                3
            </div>
            <small class="fw-bold text-primary">Checkout</small>
        </div>

        <!-- Connector -->
        <div class="flex-grow-1 border-top mt-3 mx-2"></div>

        <!-- Step 4: Confirmation -->
        <div class="text-center">
            <div class="rounded-circle border bg-body text-body
                        d-flex align-items-center justify-content-center
                        mx-auto mb-2"
                 style="width: 40px; height: 40px;">
                4
            </div>
            <small>Confirmation</small>
        </div>

    </div>
</section>

<!-- Movie Details -->
    <section class="mb-5">
        <div class="row align-items-start g-4">

            <!-- Movie Poster -->
            <div class="col-5 col-md-3">
                <div class="bg-body-secondary rounded d-flex
                            align-items-center justify-content-center"
                     style="min-height: 220px;">
                    <span class="text-secondary text-center p-2">
                        Movie Poster
                    </span>
                </div>
            </div>

            <!-- Movie Description -->
            <div class="col-7 col-md-9">
                <h1 class="h2">Movie Title</h1>

                <p class="text-muted">
                    2026 | Sci-Fi | 12A | 2h 15m
                </p>

                <p>
                    A short description of the movie goes here.
                    Introduce the story, the main characters,
                    and what makes the film interesting.
                </p>

                <!-- Booking Information -->
                <div class="border-top border-bottom py-3 mb-3">

                    <div class="mb-3">
                        <h2 class="h6 mb-1">Cinema</h2>
                        <p class="mb-0">
                            iCinema — Central London
                        </p>
                        <p class="text-muted small mb-0">
                            123 Example Street, London
                        </p>
                    </div>

                    <div>
                        <h2 class="h6 mb-1">Screening Details</h2>
                        <p class="mb-0">
                            Saturday, 17 October 2026
                        </p>
                        <p class="text-muted small mb-0">
                            7:30 PM | 2D | Screen 3
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


<!-- Booking Summary -->
<section class="border rounded p-3 p-md-4 mb-5" id="booking">

    <h2 class="h4 mb-4">Booking Summary</h2>

    <!-- Movie Details -->
    <div class="mb-4">
        <h3 class="h6 mb-1">Movie Title</h3>
        <p class="text-muted small mb-0">
            Saturday, 17 October 2026 | 7:30 PM
        </p>
        <p class="text-muted small mb-0">
            iCinema — Central London | Screen 3 | 2D
        </p>
    </div>

    <hr>

    <!-- Ticket Details -->
    <h3 class="h6 mb-3">Tickets</h3>

    <div class="d-flex justify-content-between mb-2">
        <span>Adult Ticket — Seat B2</span>
        <span>£12.00</span>
    </div>

    <div class="d-flex justify-content-between mb-2">
        <span>Adult Ticket — Seat B3</span>
        <span>£12.00</span>
    </div>

    <div class="d-flex justify-content-between mb-2">
        <span>Adult Ticket — Seat B4</span>
        <span>£12.00</span>
    </div>

    <hr>

    <!-- Extras -->
    <h3 class="h6 mb-3">Food & Drinks</h3>

    <div class="d-flex justify-content-between mb-2">
        <span>Large Popcorn</span>
        <span>£5.00</span>
    </div>

    <div class="d-flex justify-content-between mb-2">
        <span>Large Drink</span>
        <span>£3.50</span>
    </div>

    <hr>

    <!-- Total -->
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="h5 mb-0">Total</h3>
        <span class="h4 mb-0 fw-bold">£44.50</span>
    </div>

    <p class="text-muted small mt-2 mb-0">
        Example prices for mockup purposes.
    </p>

</section>

<!-- Your Details -->
<section class="border rounded p-3 p-md-4 mb-5">
    <h2 class="h4 mb-3">Your Details</h2>

    <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control"
               id="fullName" placeholder="Enter your full name">
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control"
               id="phone" placeholder="Enter your phone number">
    </div>

    <div>
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control"
               id="email" placeholder="Enter your email address">
    </div>
</section>



<!-- Payment Method -->
<section class="mb-5">
    <h2 class="h4 mb-3">Payment Method</h2>

    <div class="row g-3">

        <!-- Card Payment -->
        <div class="col-12">
            <label class="card p-3 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="fs-2">💳</div>

                    <div class="flex-grow-1">
                        <h3 class="h6 mb-1">Card Payment</h3>
                        <p class="text-muted small mb-0">
                            Credit or debit card
                        </p>
                    </div>

                    <input type="radio" name="payment"
                           value="card" required>
                </div>
            </label>
        </div>

        <!-- PayPal -->
        <div class="col-12">
            <label class="card p-3 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="fs-2">🅿️</div>

                    <div class="flex-grow-1">
                        <h3 class="h6 mb-1">PayPal</h3>
                        <p class="text-muted small mb-0">
                            Pay using your PayPal account
                        </p>
                    </div>

                    <input type="radio" name="payment"
                           value="paypal">
                </div>
            </label>
        </div>

        <!-- Apple Pay -->
        <div class="col-12">
            <label class="card p-3 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="fs-2">📱</div>

                    <div class="flex-grow-1">
                        <h3 class="h6 mb-1">Apple Pay</h3>
                        <p class="text-muted small mb-0">
                            Pay using Apple Pay
                        </p>
                    </div>

                    <input type="radio" name="payment"
                           value="applepay">
                </div>
            </label>
        </div>

    </div>
</section>

<div class="text-center mt-4 mb-5">
    <a href="BookingConfirmation.php" class="btn btn-primary btn-lg">
        Confirm Booking <span class="ms-2">→</span>
    </a>
</div>

</main>

<!-- Shared Footer -->
<?php include_once "footer.php"; ?>

<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous">
</script>

</body>
</html>
