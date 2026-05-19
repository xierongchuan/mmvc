<?php

use App\Core\Router;
use App\Controllers\HomeController;

return function (Router $router) {
    $router->get('/', HomeController::class . 'index');
}; 