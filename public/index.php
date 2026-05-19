<?php

// Autoloading
require __DIR__ . '/../app/Core/Autoloader.php';
\App\Core\Autoloader::register();

use App\Core\Router;
use App\Core\View;

$router = new Router();
(require __DIR__ . '/../routes/web.php')($router);

define('ENV', parse_ini_file(__DIR__ . '/../.env'));

try {
    $response = $router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
    echo View::render('layouts/main', ['content' => $response, 'title' => ENV['APP_NAME'] ?? 'Mini-MVC']);
} catch (\RuntimeException $e) {
    if ($e->getCode() === 404) {
        http_response_code(404);
        echo View::render('layouts/main', ['content' => '<h1>404 Not Found</h1>', 'title' => 'Error']);
    } else {
        http_response_code(500);
        echo View::render('layouts/main', ['content' => '<h1>Server Error</h1>', 'title' => 'Error']);
    }
}