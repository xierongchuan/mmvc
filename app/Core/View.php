<?php
namespace App\Core;

// Класс для рендера
class View
{
    public static function render(string $view, array $data = []): string
    {
        extract($data);
        ob_start();
        require __DIR__ . "/../../views/{$view}.phtml";
        return ob_get_clean();
    }
}