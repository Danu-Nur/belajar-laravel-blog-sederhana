<?php

use App\Http\Controllers\PostsController;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'judul' => 'HOME',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'judul' => 'ABOUT',
    ]);
});

Route::get('/blog', [PostsController::class, 'index']);


// halaman single posts

Route::get('blog/{posts:slug}', [PostsController::class, 'show']);
