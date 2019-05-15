<?php

require_once '../config/app.php';

use App\Libraries\Route;

//require_once APP_PATH . '/views/pages/index.view.php';
//require_once APP_PATH . '/views/articles/index.view.php';
//require_once APP_PATH . '/views/articles/show.view.php';

$url = $_GET['url'] ?? '';
$route = ROUTES[$url] ?? false;

if ($route) {
    $controller = $route['controller'];
    $action = $route['action'];

    Route::any($controller, $action);

} else {
    header('HTTP/1.0 404 Not Found');
    die('Página no encontrada');
}

