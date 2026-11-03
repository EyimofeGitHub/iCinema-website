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

<?php
$navLinks = [
    ['key' => 'home',              'label' => 'Home',            'page' => 'home'],
    ['key' => 'movies',            'label' => 'Movies',          'page' => 'movies'],
    ['key' => 'cinemas',           'label' => 'Cinemas',         'page' => 'cinemas'],
    ['key' => 'membership',        'label' => 'Membership',      'page' => 'membership'],
    ['key' => 'support',           'label' => 'Support',         'page' => 'support'],
    ['key' => 'admin-dashboard',   'label' => 'Admin Dashboard', 'page' => 'admin-dashboard'],
];
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom py-2">
    <div class="container-fluid px-3 px-lg-4">
        <a class="navbar-brand fw-semibold me-4" href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=home', ENT_QUOTES, 'UTF-8'); ?>">iCinema</a>

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

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-lg-1">
                <?php foreach ($navLinks as $link): ?>
                    <?php $isActive = $activePage === $link['key']; ?>
                    <li class="nav-item">
                        <a class="nav-link px-2<?php echo $isActive ? ' active fw-semibold' : ''; ?>"
                           href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=' . rawurlencode($link['page']), ENT_QUOTES, 'UTF-8'); ?>"
                           <?php echo $isActive ? 'aria-current="page"' : ''; ?>>
                            <?php echo htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <form class="d-flex mt-2 mt-lg-0" role="search" action="<?php echo htmlspecialchars($publicPath . '/Index.PHP', ENT_QUOTES, 'UTF-8'); ?>" method="get">
                <input type="hidden" name="page" value="movies">
                <input
                    class="form-control form-control-sm me-2"
                    type="search"
                    name="search"
                    placeholder="Search movies"
                    aria-label="Search movies">

                <button class="btn btn-sm btn-outline-secondary" type="submit">
                    Search
                </button>
            </form>

        </div>
    </div>
</nav>
