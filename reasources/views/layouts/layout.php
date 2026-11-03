<?php
$viewPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . $route['view'];

if (!is_file($viewPath)) {
    http_response_code(500);
    echo '<h1>500 Internal Server Error</h1>';
    exit;
}

$pageTitle = $route['title'] ?? 'iCinema';
require $viewPath;
