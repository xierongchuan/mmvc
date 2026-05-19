<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\View;

class HomeController
{
    public function index(): string
    {
        return View::render('home', ['times' => 5]);
    }
}