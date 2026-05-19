<?php

use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\PostController;

return function (Router $router) {
    $router->get('/', [HomeController::class, 'index']);
    $router->get('/posts', [PostController::class, 'index']);
    $router->get('/posts/{id}', [PostController::class, 'show']); 
}; 