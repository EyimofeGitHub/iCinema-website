<?php
$websiteName = "iCinema";
include_once "header.php";

$takenSeats = ['A3', 'C7', 'E5', 'G2'];
$accessibleSeats = ['B1', 'D9', 'F1', 'H9'];
?>

<main class="container py-4">


    <!-- Breadcrumb Navigation -->
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
            <li class="breadcrumb-item active" aria-current="page">
                Seats & Extras
            </li>
        </ol>
    </nav>

<!-- Booking Progress Bar -->
<section class="mb-5">

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

        <!-- Step 2: Seats & Extras - Current -->
        <div class="text-center">
            <div class="rounded-circle bg-primary text-white
                        d-flex align-items-center justify-content-center
                        mx-auto mb-2"
                 style="width: 40px; height: 40px;">
                2
            </div>
            <small class="fw-bold text-primary">Seats & Extras</small>
        </div>

        <!-- Connector -->
        <div class="flex-grow-1 border-top mt-3 mx-2"></div>

        <!-- Step 3: Checkout -->
        <div class="text-center">
            <div class="rounded-circle border bg-body text-body
                        d-flex align-items-center justify-content-center
                        mx-auto mb-2"
                 style="width: 40px; height: 40px;">
                3
            </div>
            <small>Checkout</small>
        </div>

        <!-- Connector -->
        <div class="flex-grow-1 border-top mt-3 mx-2"></div>

        <!-- Step 4: Confirmation -->
        <div class="text-center">
            <div class="rounded-circle border bg-body text-body
                        d-flex align-items-center justify-content-center
                        mx-auto mb-2"
                 style="width: 40px; height: 40px;">
                
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

                <a href="Showtimes.php" class="btn btn-outline-primary">
                    Change Showtimes
                </a>
            </div>
        </div>
    </section>

    <!-- Seat Selection -->
    <section class="mb-5">
        <h2 class="h3 text-center mb-3">Choose Your Seats</h2>

        <!-- Seat Legend -->
        <div class="d-flex justify-content-center flex-wrap gap-3 mb-4">

            <span>
                <span class="badge bg-white border border-success">
                    &nbsp;
                </span>
                Available
            </span>

            <span>
                <span class="badge bg-secondary">&nbsp;</span>
                Taken
            </span>

            <span>
                <span class="badge bg-info text-dark">♿</span>
                Accessible
            </span>

            <span>
                <span class="badge bg-primary">&nbsp;</span>
                Selected
            </span>

        </div>

        <!-- Cinema Screen -->
        <div class="text-center bg-body-secondary border rounded
                    p-2 mb-4 mx-auto"
             style="max-width: 500px;">
            <strong>SCREEN</strong>
        </div>

        <!-- Seating Plan -->
        <div class="container-fluid overflow-auto">
            <div class="d-flex flex-column align-items-center gap-3">

                <?php foreach (range('A', 'H') as $row): ?>

                    <div class="d-flex align-items-center gap-2 gap-md-3">

                        <!-- Row Letter -->
                        <strong style="width: 18px;">
                            <?php echo $row; ?>
                        </strong>

                        <?php for ($section = 0; $section < 3; $section++): ?>

                            <!-- Seat Section -->
                            <div class="d-flex gap-1 gap-md-2
                                <?php echo $section < 2 ? 'me-1 me-md-2' : ''; ?>">

                                <?php for ($seat = 1; $seat <= 3; $seat++):

                                    $number = ($section * 3) + $seat;
                                    $seatId = $row . $number;

                                    $isTaken = in_array($seatId, $takenSeats);
                                    $isAccessible = in_array($seatId, $accessibleSeats);

                                    if ($isTaken) {
                                        $class = 'btn-secondary';
                                        $symbol = $number;
                                        $status = 'taken';
                                    } elseif ($isAccessible) {
                                        $class = 'btn-info';
                                        $symbol = '♿';
                                        $status = 'accessible';
                                    } else {
                                        $class = 'btn-outline-success';
                                        $symbol = $number;
                                        $status = 'available';
                                    }
                                ?>

                                    <button
                                        type="button"
                                        class="btn <?php echo $class; ?> seat-button p-0"
                                        style="width: 36px; height: 36px; flex-shrink: 0;"
                                        data-seat="<?php echo $seatId; ?>"
                                        data-status="<?php echo $status; ?>"
                                        aria-label="<?php echo $isAccessible
                                            ? 'Accessible seat ' . $seatId
                                            : 'Seat ' . $seatId; ?>"
                                        <?php echo $isTaken ? 'disabled' : ''; ?>>

                                        <?php echo $symbol; ?>

                                    </button>

                                <?php endfor; ?>

                            </div>

                        <?php endfor; ?>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>

        <!-- Selected Seats Summary -->
        <div class="card mt-4 mx-auto" style="max-width: 500px;">
            <div class="card-body text-center">

                <h3 class="h5">Your Seats</h3>

                <p id="selectedSeats" class="mb-2">
                    No seats selected
                </p>

                <p class="mb-3">
                    Seats selected:
                    <strong id="seatCount">0</strong>
                </p>

                <button type="button" id="clearSeats"
                        class="btn btn-outline-secondary btn-sm">
                    Clear Selection
                </button>

            </div>
        </div>
    </section>

    <!-- Food and Drinks -->
    <section class="mb-5">
        <h2 class="h3 mb-3">Food & Drinks</h2>

        <p class="text-muted">
            Treat yourself to a snack during the film. (only bought in cinema confectionary till)
        </p>

        <div class="row row-cols-1 row-cols-sm-3 g-3">

            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="fs-1">🍿</div>
                        <h3 class="h6">Large Popcorn</h3>
                        <p class="mb-0 text-muted">£5.00</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="fs-1">🥤</div>
                        <h3 class="h6">Large Drink</h3>
                        <p class="mb-0 text-muted">£3.50</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="fs-1">🍬</div>
                        <h3 class="h6">Candy</h3>
                        <p class="mb-0 text-muted">£2.50</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Continue to Checkout -->
    <div class="text-center mt-4 mb-3">
        <a href="Checkout.php" class="btn btn-primary btn-lg">
            Continue to Checkout
        </a>
    </div>

</main>

<!-- Shared Footer -->
<?php include_once "footer.php"; ?>

<!-- Seat Selection JavaScript -->
<script>
    const seats = document.querySelectorAll('.seat-button');
    const selectedSeatsDisplay = document.getElementById('selectedSeats');
    const seatCountDisplay = document.getElementById('seatCount');
    const clearButton = document.getElementById('clearSeats');

    const selectedSeats = new Set();

    function updateSeatSummary() {
        const seatList = [...selectedSeats].sort();

        selectedSeatsDisplay.textContent = seatList.length
            ? seatList.join(', ')
            : 'No seats selected';

        seatCountDisplay.textContent = seatList.length;
    }

    seats.forEach(seat => {
        seat.addEventListener('click', function () {
            const seatId = this.dataset.seat;
            const status = this.dataset.status;

            if (status === 'taken') {
                return;
            }

            if (selectedSeats.has(seatId)) {
                selectedSeats.delete(seatId);

                this.classList.remove('btn-primary');

                this.classList.add(
                    status === 'accessible'
                        ? 'btn-info'
                        : 'btn-outline-success'
                );
            } else {
                selectedSeats.add(seatId);

                this.classList.remove('btn-outline-success', 'btn-info');
                this.classList.add('btn-primary');
            }

            updateSeatSummary();
        });
    });

    clearButton.addEventListener('click', function () {
        selectedSeats.clear();

        seats.forEach(seat => {
            if (seat.dataset.status === 'taken') {
                return;
            }

            seat.classList.remove('btn-primary');

            seat.classList.add(
                seat.dataset.status === 'accessible'
                    ? 'btn-info'
                    : 'btn-outline-success'
            );
        });

        updateSeatSummary();
    });
</script>

<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous">
</script>

</body>
</html>
