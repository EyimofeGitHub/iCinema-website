<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo htmlspecialchars(($publicPath ?: '.') . '/', ENT_QUOTES, 'UTF-8'); ?>">

    <title><?php echo htmlspecialchars($pageTitle ?? $websiteName ?? "iCinema", ENT_QUOTES, 'UTF-8'); ?></title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
</head>

<body>
<?php $activePage = $route['active'] ?? null; ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <a class="navbar-brand" href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=home', ENT_QUOTES, 'UTF-8'); ?>">iCinema</a>

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
                    <a class="nav-link<?php echo $activePage === 'movies' ? ' active' : ''; ?>" href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=movies', ENT_QUOTES, 'UTF-8'); ?>">Movies</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?php echo $activePage === 'cinemas' ? ' active' : ''; ?>" href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=cinemas', ENT_QUOTES, 'UTF-8'); ?>">Cinemas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?php echo $activePage === 'membership' ? ' active' : ''; ?>" href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=membership', ENT_QUOTES, 'UTF-8'); ?>"<?php echo $activePage === 'membership' ? ' aria-current="page"' : ''; ?>>Membership</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?php echo $activePage === 'support' ? ' active' : ''; ?>" href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=support', ENT_QUOTES, 'UTF-8'); ?>"<?php echo $activePage === 'support' ? ' aria-current="page"' : ''; ?>>Support</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?php echo $activePage === 'admin-dashboard' ? ' active' : ''; ?>" href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=admin-dashboard', ENT_QUOTES, 'UTF-8'); ?>"<?php echo $activePage === 'admin-dashboard' ? ' aria-current="page"' : ''; ?>>Admin Dashboard</a>
                </li>

            </ul>

            <form class="d-flex" role="search" action="<?php echo htmlspecialchars($publicPath . '/Index.PHP', ENT_QUOTES, 'UTF-8'); ?>" method="get">
                <input type="hidden" name="page" value="movies">
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
