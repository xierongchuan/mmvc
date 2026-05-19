<?php
namespace App\Core;

// Автолоадер с PSR-4
class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function (string $class): void {
            $prefix = 'App\\';
            if (str_starts_with($class, $prefix) === false) return;

            $relativeClass = substr($class, strlen($prefix));
            $file = __DIR__ . '/../' . str_replace('\\', '/', $relativeClass) . '.php';
            
            if (is_file($file)) require $file;
        });
    }
}