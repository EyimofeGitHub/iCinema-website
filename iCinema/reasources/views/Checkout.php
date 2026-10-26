
<?php
$websiteName = "iCinema";
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Header.php";

$selectedSeats = array_values(array_filter(
    explode(',', (string) ($_GET['seats'] ?? '')),
    static fn (string $seat): bool => preg_match('/^[A-H](?:[1-9]|1[0-2])$/', $seat) === 1
));
?>

<main class="container py-4">
<form action="Index.PHP" method="get" id="checkoutForm">
    <input type="hidden" name="page" value="booking-confirmation">
    <input type="hidden" name="seats" value="<?php echo htmlspecialchars(implode(',', $selectedSeats), ENT_QUOTES, 'UTF-8'); ?>">

<!-- Booking Progress Bar -->
<section class="mb-5">

    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">

            <li class="breadcrumb-item">
                <a href="Index.PHP?page=home">Home</a>
            </li>

            <li class="breadcrumb-item">
                <a href="Index.PHP?page=movies">Movies</a>
            </li>

            <li class="breadcrumb-item">
                <a href="Index.PHP?page=movie-details">Movie Title</a>
            </li>

            <li class="breadcrumb-item">
                <a href="Index.PHP?page=showtimes">Showtimes & Tickets</a>
            </li>

            <li class="breadcrumb-item">
                <a href="Index.PHP?page=seats">Seats & Extras</a>
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

                <!-- Cinema and screening selection -->
                <div class="cinema-date-panel rounded-4 border p-3 p-md-4 mb-3">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="date-picker-card h-100">
                                <label for="checkoutCinema" class="form-label fw-semibold">Choose a cinema</label>
                                <select class="form-select cinema-picker-input" id="checkoutCinema" name="cinema">
                                    <option value="central-london" data-address="123 Example Street, London" selected>iCinema Central London</option>
                                    <option value="manchester" data-address="45 Market Street, Manchester">iCinema Manchester</option>
                                    <option value="edinburgh" data-address="20 Example Road, Edinburgh">iCinema Edinburgh</option>
                                </select>
                                <p class="form-text mb-0" id="checkoutCinemaAddress">123 Example Street, London</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="date-picker-card h-100">
                                <label for="checkoutDate" class="form-label fw-semibold">
                                    Choose a date
                                </label>
                                <input class="form-control date-picker-input" type="date"
                                       id="checkoutDate" name="date" value="2026-10-26" required>
                                <p class="form-text mb-0">Select a screening date.</p>
                            </div>
                        </div>
                    </div>
                    <div class="selected-screening-summary rounded-3 bg-body-tertiary p-3 mt-3">
                        <h2 class="h6 mb-1">Screening Details</h2>
                        <p class="mb-0"><span id="checkoutScreeningDateSummary">Monday, 26 October 2026</span></p>
                        <p class="text-body-secondary small mb-0">7:30 PM | 2D | Screen 3</p>
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
            <span id="checkoutBookingDateSummary">Monday, 26 October 2026</span> | 7:30 PM
        </p>
        <p class="text-muted small mb-0">
            <span id="checkoutBookingCinemaSummary">iCinema Central London</span> | Screen 3 | 2D
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
                   id="fullName" name="fullName" placeholder="Enter your full name" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control"
               id="phone" name="phone" placeholder="Enter your phone number" required>
    </div>

    <div>
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control"
               id="email" name="email" placeholder="Enter your email address" required>
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
    <button type="submit" class="btn btn-primary btn-lg">
        Confirm Booking <span class="ms-2">→</span>
    </button>
</div>
</form>

</main>

<!-- Shared Footer -->
<?php include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Footer.php"; ?>

<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous">
</script>
<script>
    const checkoutCinema = document.getElementById("checkoutCinema");
    const checkoutDate = document.getElementById("checkoutDate");

    function updateCheckoutSummary() {
        const selectedCinema = checkoutCinema.options[checkoutCinema.selectedIndex];
        const selectedDate = new Date(`${checkoutDate.value}T00:00:00`);

        document.getElementById("checkoutCinemaAddress").textContent = selectedCinema.dataset.address;
        document.getElementById("checkoutBookingCinemaSummary").textContent = selectedCinema.textContent;

        if (checkoutDate.value) {
            const formattedDate = new Intl.DateTimeFormat("en-GB", {
                weekday: "long",
                day: "numeric",
                month: "long",
                year: "numeric"
            }).format(selectedDate);
            document.getElementById("checkoutScreeningDateSummary").textContent = formattedDate;
            document.getElementById("checkoutBookingDateSummary").textContent = formattedDate;
        }
    }

    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    const tomorrowValue = new Date(tomorrow.getTime() - tomorrow.getTimezoneOffset() * 60000)
        .toISOString()
        .slice(0, 10);
    checkoutDate.min = tomorrowValue;
    if (checkoutDate.value < tomorrowValue) {
        checkoutDate.value = tomorrowValue;
    }

    checkoutCinema.addEventListener("change", updateCheckoutSummary);
    checkoutDate.addEventListener("change", updateCheckoutSummary);
    updateCheckoutSummary();
</script>

</body>
</html>
