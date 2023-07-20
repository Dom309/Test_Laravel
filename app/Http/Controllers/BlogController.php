<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, id?',
        ];

        $posts = array_fill(0, 5, $post);
        // dd($posts);

        return view('blog.index', compact('posts'));
    }


    public function show($post) {

        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, id?',
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post) {
        return "Поставить лайк";
    }
}
