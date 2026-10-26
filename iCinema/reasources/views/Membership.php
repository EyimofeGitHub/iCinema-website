<?php
$websiteName = "iCinema";
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Header.php";
?>
<main class="container py-4">
    <!-- Page introduction -->
    <section class="text-center py-4 mb-4">
        <span class="badge text-bg-primary mb-3">iCinema Membership</span>
        <h1 class="display-5 fw-bold">Make Every Movie Trip Better</h1>
        <p class="lead text-body-secondary mx-auto" style="max-width: 700px;">
            Enjoy more from your cinema visits with an iCinema membership.
            Explore the example plans below and choose the one that suits you.
        </p>
        <a href="#membership-plans" class="btn btn-primary btn-lg mt-2">Explore Memberships</a>
    </section>

    <!-- Membership benefits -->
    <section class="mb-5">
        <h2 class="h3 text-center mb-4">Member Benefits</h2>
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body p-4">
                        <div class="fs-1 mb-3" aria-hidden="true">🎟️</div>
                        <h3 class="h5 card-title">Member Offers</h3>
                        <p class="card-text text-body-secondary mb-0">
                            Discover special offers on selected tickets and screenings.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body p-4">
                        <div class="fs-1 mb-3" aria-hidden="true">🍿</div>
                        <h3 class="h5 card-title">Refreshment Deals</h3>
                        <p class="card-text text-body-secondary mb-0">
                            Look out for example deals on cinema snacks and drinks.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body p-4">
                        <div class="fs-1 mb-3" aria-hidden="true">⭐</div>
                        <h3 class="h5 card-title">Member Updates</h3>
                        <p class="card-text text-body-secondary mb-0">
                            Keep up with upcoming releases, news and member promotions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Example membership plans: placeholder prices and benefits -->
    <section id="membership-plans" class="mb-5">
        <div class="text-center mb-4">
            <h2 class="h3">Choose Your Membership</h2>
            <p class="text-body-secondary">Example plans for this website mock-up.</p>
        </div>

        <div class="row g-4 align-items-stretch">
            <div class="col-12 col-md-4">
                <div class="card h-100">
                    <div class="card-body p-4 d-flex flex-column">
                        <h3 class="h4">Classic</h3>
                        <p class="text-body-secondary">For occasional cinema visits.</p>
                        <p class="display-6 fw-bold">Free</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">✓ Member news and updates</li>
                            <li class="mb-2">✓ Access to selected offers</li>
                            <li class="mb-2">✓ Personal account concept</li>
                        </ul>
                        <a href="Index.PHP?page=support" class="btn btn-outline-primary mt-auto">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card h-100 border-primary shadow-sm">
                    <div class="card-header text-bg-primary text-center">Popular Choice</div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h3 class="h4">Plus</h3>
                        <p class="text-body-secondary">For regular movie fans.</p>
                        <p class="display-6 fw-bold">£9.99 <span class="fs-6 fw-normal text-body-secondary">/ month*</span></p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">✓ Example ticket discounts</li>
                            <li class="mb-2">✓ Selected refreshment offers</li>
                            <li class="mb-2">✓ Early offer announcements</li>
                        </ul>
                        <a href="Index.PHP?page=support" class="btn btn-primary mt-auto">Membership Enquiries</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card h-100">
                    <div class="card-body p-4 d-flex flex-column">
                        <h3 class="h4">Family</h3>
                        <p class="text-body-secondary">For shared cinema trips.</p>
                        <p class="display-6 fw-bold">£14.99 <span class="fs-6 fw-normal text-body-secondary">/ month*</span></p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">✓ Example family ticket offers</li>
                            <li class="mb-2">✓ Selected snack deals</li>
                            <li class="mb-2">✓ Updates for family releases</li>
                        </ul>
                        <a href="Index.PHP?page=support" class="btn btn-outline-primary mt-auto">Membership Enquiries</a>
                    </div>
                </div>
            </div>
        </div>
        <p class="small text-body-secondary mt-3">
            *All plan names, prices and benefits are illustrative placeholders for the coursework mock-up.
            Membership sign-up and payments are not connected.
        </p>
    </section>

    <!-- Call to action -->
    <section class="bg-body-tertiary rounded p-4 p-md-5 text-center">
        <h2 class="h4">Have a question about membership?</h2>
        <p class="text-body-secondary">Visit our support page for help and example contact information.</p>
        <a href="Index.PHP?page=support" class="btn btn-primary">Visit Support</a>
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