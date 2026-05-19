<?php
declare(strict_types=1);

namespace App\Core;

// Класс для рендера
class View
{
    public static function render(string $view, array $data = []): string
    {
        extract($data);
        ob_start();
        require __DIR__ . "/../../views/{$view}.mmtml.php";
        return ob_get_clean();
    }
}