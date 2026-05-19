<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\View;
use App\Models\Post;
use RuntimeException;

class PostController
{
    public function index(): string
    {
        return View::render('posts/index', ['posts' => Post::all()]);
    }

    public function show(string $id): string
    {
        $post = Post::find((int)$id);
        if (!$post) throw new RuntimeException('Post not found', 404);
        return View::render('posts/show', ['post' => $post]);
    }
}