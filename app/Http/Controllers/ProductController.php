<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function eduGames()
    {
        return view('product', ['data1' => 'edu games']);
    }

    public function kidsGames()
    {
        return view ('product', ['data1' => 'Kids Games']);
    }

    public function storyBooks()
    {
        return view ('product', ['data1' => 'storyBooks']);
    }

    public function kidsSongs()
    {
        return view ('product', ['data1' => 'kidsSongs']);
    }
}

