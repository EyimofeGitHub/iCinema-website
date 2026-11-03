<footer class="bg-body-tertiary border-top mt-5 py-4">
    <div class="container">

        <div class="row align-items-center gy-3">

            <!-- Website Name -->
            <div class="col-12 col-md-4 text-center text-md-start">
                <h5 class="mb-1">iCinema</h5>
                <p class="text-secondary small mb-0">
                    Your next movie experience starts here.
                </p>
            </div>

            <!-- Footer Links -->
            <div class="col-12 col-md-4 text-center">
                <a href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=home', ENT_QUOTES, 'UTF-8'); ?>" class="text-decoration-none text-secondary me-3">
                    Home
                </a>

                <a href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=movies', ENT_QUOTES, 'UTF-8'); ?>" class="text-decoration-none text-secondary me-3">
                    Movies
                </a>

                <a href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=cinemas', ENT_QUOTES, 'UTF-8'); ?>" class="text-decoration-none text-secondary me-3">
                    Cinemas
                </a>

                <a href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=membership', ENT_QUOTES, 'UTF-8'); ?>" class="text-decoration-none text-secondary me-3">
                    Membership
                </a>

                <a href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=support', ENT_QUOTES, 'UTF-8'); ?>" class="text-decoration-none text-secondary">
                    Support
                </a>
            </div>

            <!-- Copyright -->
            <div class="col-12 col-md-4 text-center text-md-end">
                <p class="text-secondary small mb-0">
                    &copy; <?php echo date("Y"); ?> iCinema
                </p>
            </div>

        </div>

    </div>
</footer>