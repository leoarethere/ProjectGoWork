<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    // Untuk URL: /berita
    public function index()
    {
        // Pastikan nama variabelnya 'posts' (jamak)
        // Pastikan view yang dipanggil adalah 'posts' (jamak)
        return view('frontend.berita.posts', [
            'title' => 'Kumpulan Berita Terkini',
            // 'posts' => Post::all()
            'posts' => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    // Untuk URL: /berita/{slug}
    public function show(Post $post)
    {
        return view('frontend.berita.post', [
            "title" => "Detail Berita Terkini",
            "post" => $post
        ]);
    }
};
