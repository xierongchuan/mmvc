<?php
namespace App\Core;

use RuntimeException;

// Роутер
class Router
{
    private array $routes = [];

    public function dispatch(string $uri, string $method): string
    {
        $uri = parse_url($uri, PHP_URL_PATH) ?: '/';
        $routes = $this->routes[$method] ?? [];

        // Ищем совпадение с шаблоном маршрута
        foreach ($routes as $pattern => $action) {
            $regex = preg_replace('/\{(\w+)\}/', '(?P<$1>[^\/]+)', $pattern);
            $regex = '#^' . $regex . '$#';

            if (preg_match($regex, $uri, $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                return call_user_func($action, ...array_values($params));
            }
        }

        throw new RuntimeException('Not Found', 404);
    }

    public function get(string $path, callable $action): void
    {
        $this->routes['GET'][$path] = $action;
    }


}