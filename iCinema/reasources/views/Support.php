<?php
$websiteName = "iCinema";
include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Header.php";
?>
<main class="container py-4">
                    <?php if (!empty($supportSubmitted)): ?>
                        <div class="alert alert-success" role="status">
                            Your enquiry passed validation. This demo does not send or store messages.
                        </div>
                    <?php endif; ?>
                    <section class="text-center py-4 mb-4">
                        <span class="badge text-bg-primary mb-3">iCinema Support</span>
                        <h1 class="display-5 fw-bold">How Can We Help?</h1>
                        <p class="lead text-body-secondary mx-auto" style="max-width: 700px;">
                            Find answers to common questions or send us an enquiry.
                        </p>
                    </section>

                    <section class="mb-5">
                        <h2 class="h3 mb-4">Frequently Asked Questions</h2>
                        <div class="accordion" id="supportFaq">
            <div class="accordion-item" id="faq-booking">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqBookingOne" aria-expanded="true" aria-controls="faqBookingOne">
                        Where can I find my booking details?
                    </button>
                </h3>
                <div id="faqBookingOne" class="accordion-collapse collapse show" data-bs-parent="#supportFaq">
                    <div class="accordion-body">
                        In a fully implemented service, booking details would be shown on the confirmation page
                        and sent to the email address provided. This coursework page is a visual mock-up and does
                        not send real confirmation emails.
                    </div>
                </div>
            </div>

            <div class="accordion-item" id="faq-payments">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqPaymentOne" aria-expanded="false" aria-controls="faqPaymentOne">
                        Which payment methods can I use?
                    </button>
                </h3>
                <div id="faqPaymentOne" class="accordion-collapse collapse" data-bs-parent="#supportFaq">
                    <div class="accordion-body">
                        The checkout mock-up displays example card, PayPal and Apple Pay options. No real payment
                        is processed by this coursework website.
                    </div>
                </div>
            </div>

            <div class="accordion-item" id="faq-cinemas">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCinemaOne" aria-expanded="false" aria-controls="faqCinemaOne">
                        How do I check screening times?
                    </button>
                </h3>
                <div id="faqCinemaOne" class="accordion-collapse collapse" data-bs-parent="#supportFaq">
                    <div class="accordion-body">
                        Open the Showtimes & Tickets page to view the example screening information included in the mock-up.
                    </div>
                </div>
            </div>

            <div class="accordion-item" id="faq-membership">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqMemberOne" aria-expanded="false" aria-controls="faqMemberOne">
                        Can I join iCinema membership online?
                    </button>
                </h3>
                <div id="faqMemberOne" class="accordion-collapse collapse" data-bs-parent="#supportFaq">
                    <div class="accordion-body">
                        The Membership page presents example plans. Online registration and membership management
                        have not been implemented.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact form: visual mock-up only -->
    <section class="row g-4 mb-5">
        <div class="col-12 col-lg-5">
            <h2 class="h3">Contact Support</h2>
            <p class="text-body-secondary">
                Use the example form layout below as a starting point for a future contact feature.
                It does not currently send messages.
            </p>
            <div class="card">
                <div class="card-body">
                    <h3 class="h5">Support Information</h3>
                    <p class="mb-2"><strong>Email:</strong> support@example.com</p>
                    <p class="mb-2"><strong>Opening hours:</strong> Monday–Friday, 9:00–17:00</p>
                    <p class="small text-body-secondary mb-0">
                        Example contact details only. Replace these with approved project details if required.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-7">
            <div class="card">
                <div class="card-body p-4">
                    <h3 class="h5 mb-3">Send an Enquiry</h3>
                    <form action="Index.PHP" method="post">
                        <input type="hidden" name="page" value="support">
                        <div class="mb-3">
                            <label for="supportName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="supportName" name="supportName"
                                   placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="supportEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="supportEmail" name="supportEmail"
                                   placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="supportTopic" class="form-label">Enquiry Topic</label>
                            <select class="form-select" id="supportTopic" name="supportTopic" required>
                                <option selected disabled value="">Choose a topic</option>
                                <option>Booking or tickets</option>
                                <option>Payment</option>
                                <option>Cinema information</option>
                                <option>Membership</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="supportMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="supportMessage" name="supportMessage"
                                      rows="4" placeholder="How can we help?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Submit Enquiry
                        </button>
                        <p class="small text-body-secondary mt-2 mb-0">
                            Demo only: this form validates the enquiry but does not store or send it.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once __DIR__ . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "Footer.php"; ?>

<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous">
</script>

</body>
</html>
