<?php
$websiteName = "iCinema Admin";
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Header.php";
?>

<main class="container-fluid container-lg py-4">
    <!-- Admin page notice -->
    <section class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <p class="text-primary fw-semibold mb-1">iCinema Administration</p>
            <h1 class="h2 mb-1">Admin Dashboard</h1>
            <p class="text-body-secondary mb-0">
                Example overview of cinema activity for the website mock-up.
            </p>
        </div>
        <span class="badge text-bg-warning align-self-start align-self-md-center">
            Demo data — not connected to a database
        </span>
    </section>

    <!-- Summary cards -->
    <section class="row g-3 mb-4" aria-label="Dashboard summary">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card h-100">
                <div class="card-body">
                    <p class="text-body-secondary mb-1">Bookings Today</p>
                    <p class="display-6 fw-semibold mb-0">128</p>
                    <p class="small text-body-secondary mb-0">Illustrative figure</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card h-100">
                <div class="card-body">
                    <p class="text-body-secondary mb-1">Tickets Sold</p>
                    <p class="display-6 fw-semibold mb-0">346</p>
                    <p class="small text-body-secondary mb-0">Illustrative figure</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card h-100">
                <div class="card-body">
                    <p class="text-body-secondary mb-1">Listed Movies</p>
                    <p class="display-6 fw-semibold mb-0">18</p>
                    <p class="small text-body-secondary mb-0">Example catalogue count</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card h-100">
                <div class="card-body">
                    <p class="text-body-secondary mb-1">Cinema Locations</p>
                    <p class="display-6 fw-semibold mb-0">4</p>
                    <p class="small text-body-secondary mb-0">Example location count</p>
                </div>
            </div>
        </div>
    </section>

    <div class="row g-4">
        <!-- Quick actions -->
        <div class="col-12 col-lg-4">
            <section class="card h-100">
                <div class="card-header bg-body">
                    <h2 class="h5 mb-0">Quick Actions</h2>
                </div>
                <div class="card-body d-grid gap-2">
                    <button type="button" class="btn btn-outline-primary text-start"
                            onclick="alert('Demo only: movie management is not connected.');">
                        🎬 &nbsp; Manage Movies
                    </button>
                    <button type="button" class="btn btn-outline-primary text-start"
                            onclick="alert('Demo only: screening management is not connected.');">
                        🕒 &nbsp; Manage Showtimes
                    </button>
                    <button type="button" class="btn btn-outline-primary text-start"
                            onclick="alert('Demo only: booking management is not connected.');">
                        🎟️ &nbsp; View Bookings
                    </button>
                    <button type="button" class="btn btn-outline-primary text-start"
                            onclick="alert('Demo only: cinema management is not connected.');">
                        📍 &nbsp; Manage Cinemas
                    </button>
                    <p class="small text-body-secondary mt-2 mb-0">
                        These controls are placeholders. No records are created, edited or deleted.
                    </p>
                </div>
            </section>
        </div>

        <!-- Recent bookings -->
        <div class="col-12 col-lg-8">
            <section class="card h-100">
                <div class="card-header bg-body d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">Recent Bookings</h2>
                    <span class="small text-body-secondary">Sample records</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Booking ID</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Movie</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#IC1001</td>
                                <td>Alex Morgan</td>
                                <td>Pitch Perfect</td>
                                <td><span class="badge text-bg-success">Confirmed</span></td>
                            </tr>
                            <tr>
                                <td>#IC1002</td>
                                <td>Jamie Taylor</td>
                                <td>Example Film</td>
                                <td><span class="badge text-bg-success">Confirmed</span></td>
                            </tr>
                            <tr>
                                <td>#IC1003</td>
                                <td>Sam Jordan</td>
                                <td>Future Release</td>
                                <td><span class="badge text-bg-warning">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-body small text-body-secondary">
                    Names and booking details are fictional sample data.
                </div>
            </section>
        </div>

        <!-- Management overview -->
        <div class="col-12">
            <section class="card">
                <div class="card-header bg-body">
                    <h2 class="h5 mb-0">Website Management Overview</h2>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12 col-md-4">
                            <h3 class="h6">Movie Catalogue</h3>
                            <p class="text-body-secondary mb-0">
                                A future admin feature could allow staff to add movies, update descriptions
                                and manage poster images.
                            </p>
                        </div>
                        <div class="col-12 col-md-4">
                            <h3 class="h6">Screenings & Cinemas</h3>
                            <p class="text-body-secondary mb-0">
                                A future feature could maintain cinema locations, screens, screening times
                                and available formats.
                            </p>
                        </div>
                        <div class="col-12 col-md-4">
                            <h3 class="h6">Bookings & Customers</h3>
                            <p class="text-body-secondary mb-0">
                                A future feature could let authorised staff review bookings and handle
                                customer enquiries securely.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <p class="small text-body-secondary mt-4 mb-0">
        Coursework prototype only. This page has no authentication, database connection or real admin actions.
        Do not use it to manage real customer information.
    </p>
</main>

<?php include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
</html>