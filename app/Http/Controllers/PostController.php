<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return "Страница постов";
    }

    public function show() {
        return "Отдельный пост";
    }
}
