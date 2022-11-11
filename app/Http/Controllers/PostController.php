<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('berita', [
            'title' => 'Semua Berita',
            "active" => 'posts',
            'posts' => Post::latest()->Filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
