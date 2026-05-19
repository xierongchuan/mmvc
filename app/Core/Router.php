<?php
declare(strict_types=1);

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
                $values = array_values($params);

                // Если передан массив [ClassName, methodName]
                if (is_array($action) && count($action) === 2) {
                    $controller = new $action[0]();
                    return $controller->{$action[1]}(...$values);
                }

                // Fallback для Closure
                return $action(...$values);
            }
        }

        throw new RuntimeException('Not Found', 404);
    }

    public function get(string $path, callable|array $action): void
    {
        $this->routes['GET'][$path] = $action;
    }


}