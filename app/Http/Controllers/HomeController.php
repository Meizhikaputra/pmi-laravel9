<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('landing', [
            'active' => 'home',
            'title' => 'home',
            'posts' => Post::latest()->get()
        ]);
    }
}
