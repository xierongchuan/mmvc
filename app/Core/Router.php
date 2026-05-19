<?php
namespace App\Core;

// Роутер
class Router
{
    private array $routes = [];

    public function get(string $path, string $controller): void
    {
        $this->routes['GET'][$path] = $controller;
    }

}