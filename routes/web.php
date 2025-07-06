<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend/beranda/beranda', [
        'title' => 'Beranda',
    ]);
});

Route::get('/perusahaan', function () {
    return view('frontend/perusahaan/index', [
        'title' => 'Jelajahi Perusahaan',
    ]);
});

Route::get('/tips-&-trik', function () {
    return view('frontend/tips/index', [
        'title' => 'Tips & Trik',
    ]);
});

Route::get('/tentang', function () {
    return view('frontend/tentang/index', [
        'title' => 'Tentang',
    ]);
});

Route::get('/lowongan', function (){
    return view('frontend/lowongan/index', [
        'title' => 'Daftar Lowongan',
    ]);
});

// Route::get('/login', function (){
//     return view('auth/login', [
//         'title' => 'Masuk',
//     ]);
// });

// Route::get('/register', function (){
//     return view('auth/register', [
//         'title' => 'Daftar',
//     ]);
// });

// Route untuk halaman utama berita
Route::get('/berita', [PostController::class, 'index']);

// Route untuk menampilkan halaman daftar semua kategori
Route::get('/berita/categories', function () {
    return view('frontend.berita.category', [
        'title' => 'Kategori Berita',
        'categories' => Category::all()
    ]);
});

// Route untuk menampilkan semua berita dalam satu kategori
Route::get('/berita/category/{category:slug}', function (Category $category) {
    return view('frontend.berita.posts', [
        'title' => 'Kategori: ' . $category->name, // Judul dinamis sesuai nama kategori
        'posts' => $category->posts->load('author', 'category')
    ]);
});

// Route untuk menampilkan detail satu berita
Route::get('/berita/{post:slug}', [PostController::class, 'show'])->name('berita.show');

// Route untuk menampilkan semua berita dari satu penulis
Route::get('/berita/authors/{author:username}', function (User $author) {
    return view('frontend.berita.posts', [
        'title' => "Berita oleh: " . $author->name,
        'posts' => $author->posts->load('category', 'author')
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);

Route::post('/login', [LoginController::class, 'authenticate']);