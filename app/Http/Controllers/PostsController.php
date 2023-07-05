<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index() {
        return view('posts', [
            'judul' => 'BLOG',
            'ulasanProduk' => Posts::all(),
        ]);
    }

    public function show(Posts $posts){
        return view('ulasan', [
            "judul" => $posts->judul,
            "post" => $posts
        ]);
    }
}
