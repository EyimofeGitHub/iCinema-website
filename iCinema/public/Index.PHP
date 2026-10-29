<?php
session_start();

// absolute path to the root of the project
$basePath = dirname(__DIR__);
$publicPath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');

//load the routes configureation
$routes = require $basePath . "/routes/web.php";

// get the current request URI
$page = $_GET['page'] ?? $_POST['page'] ?? 'home';
$supportSubmitted = $_SERVER['REQUEST_METHOD'] === 'POST'
    && $page === 'support'
    && filter_var($_POST['supportEmail'] ?? '', FILTER_VALIDATE_EMAIL)
    && trim((string) ($_POST['supportName'] ?? '')) !== ''
    && trim((string) ($_POST['supportMessage'] ?? '')) !== '';

// check if the requested page exists in the routes configuration
$route = $routes[$page] ?? null;

// check if route is null, if so return a 404 error page
if ($route === null) {
    http_response_code(404);
    echo"<h1>404 Not Found</h1>";
    exit;
}

// Require the layout file and pass the route data to it.
require $basePath . "/reasources/views/layouts/layout.php";
