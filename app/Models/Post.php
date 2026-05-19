<?php
namespace App\Models;

class Post
{
    private static array $data = [
        1 => ['id' => 1, 'title' => 'Первый пост', 'content' => 'Текст 1'],
        2 => ['id' => 2, 'title' => 'Второй пост', 'content' => 'Текст 2'],
        3 => ['id' => 3, 'title' => 'Третий пост', 'content' => 'Текст 3'],
    ];

    public static function all(): array
    {
        return self::$data;
    }

    public static function find(int $id): ?array
    {
        return self::$data[$id] ?? null;
    }
}