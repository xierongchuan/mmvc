<?php
namespace App\Core;

use RuntimeException;

// Роутер
class Router
{
    private array $routes = [];

    public function dispatch(string $uri, string $method): string
    {
        // Логика диспетчера
        return 'Hiii';
    }

    public function get(string $path, string $controller): void
    {
        $this->routes['GET'][$path] = $controller;
    }


}