<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo htmlspecialchars($websiteName ?? "iCinema"); ?></title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <a class="navbar-brand" href="Index.php">iCinema</a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="Movies.php">Movies</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Cinemas.php">Cinemas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Membership.php">Membership</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Support.php">Support</a>
                </li>

            </ul>

            <form class="d-flex" role="search" action="Movies.php" method="get">
                <input
                    class="form-control me-2"
                    type="search"
                    name="search"
                    placeholder="Search movies"
                    aria-label="Search movies">

                <button class="btn btn-outline-secondary" type="submit">
                    Search
                </button>
            </form>

        </div>
    </div>
</nav>
