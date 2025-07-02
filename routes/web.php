<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Perusahaan\LowonganController;

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
    return view('frontend.v_beranda.beranda', [
        'title' => 'Beranda',
    ]);
});

Route::get('/perusahaan', function () {
    return view('frontend.v_perusahaan.index', [
        'title' => 'Jelajahi Perusahaan',
    ]);
});

Route::get('/tips-&-trik', function () {
    return view('frontend.v_tips.index', [
        'title' => 'Tips & Trik',
    ]);
});

Route::get('/tentang', function () {
    return view('frontend.v_tentang.index', [
        'title' => 'Tentang',
    ]);
});

Route::get('/lowongan', function (){
    return view('frontend.v_lowongan.index', [
        'title' => 'Daftar Lowongan',
    ]);
});

Route::get('/login', function (){
    return view('frontend.v_login.login', [
        'title' => 'Masuk',
    ]);
});

Route::get('/blog', function (){
    
    $blog_posts = [
    [
        "title" => "Postingan 1",
        "slug" => "postingan-1",
        "image" => "https://picsum.photos/800/400",
        "created_at" => "2023-10-01 12:00:00",
        "updated_at" => "2023-10-01 12:00:00",
        "category" => "Teknologi",
        "author" => "Admin",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et obcaecati consectetur odio, praesentium illo id esse ipsam corrupti temporibus cum porro iste vitae possimus earum quia non cupiditate, exercitationem, officiis expedita hic nobis ipsum? Dicta eveniet, hic qui natus nisi voluptas dolor molestias velit asperiores animi obcaecati libero quidem ullam ab aperiam eius ipsa! Alias, inventore ad! Dolorem aliquid natus temporibus enim reprehenderit aperiam quisquam, deleniti error qui consectetur nisi facilis dignissimos quidem dolorum quia eos? Obcaecati, ducimus? Exercitationem vitae numquam maxime ab eos blanditiis voluptatum eligendi facere, veritatis itaque, eaque obcaecati accusamus? Commodi pariatur perspiciatis ipsum voluptatem rem ratione?"
    ],
    [
        "title" => "Postingan 2",
        "slug" => "postingan-2",
        "image" => "https://picsum.photos/800/400",
        "created_at" => "2023-10-02 12:00:00",
        "updated_at" => "2023-10-02 12:00:00",
        "category" => "Kesehatan",
        "author" => "Pengrajin",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta qui nostrum voluptatum porro optio ratione cumque libero quasi? Voluptates cum at odit? Dolorem magni delectus, natus reprehenderit laborum dignissimos neque consequuntur dolore tempore molestias nostrum, consequatur vel maiores id nemo fuga impedit? Dolorum, doloremque. Eos ipsa quisquam esse nemo nihil commodi adipisci possimus, ex quos magni, voluptates voluptatibus quaerat, aliquam odio id? Pariatur numquam cupiditate quas expedita fugit repudiandae velit voluptate minus dolorem voluptates. Modi, dolorum porro soluta ex hic itaque, sunt neque, perferendis velit iusto quidem aliquid."
    ]
];
    // You can later replace this with actual posts data from the database
    return view('frontend.v_blog.posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

// Halaman untuk menampilkan detail postingan blog
Route::get('/blog/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Postingan 1",
            "slug" => "postingan-1",
            "image" => "https://picsum.photos/800/400",
            "created_at" => "2023-10-01 12:00:00",
            "updated_at" => "2023-10-01 12:00:00",
            "category" => "Teknologi",
            "author" => "Admin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et obcaecati consectetur odio, praesentium illo id esse ipsam corrupti temporibus cum porro iste vitae possimus earum quia non cupiditate, exercitationem, officiis expedita hic nobis ipsum? Dicta eveniet, hic qui natus nisi voluptas dolor molestias velit asperiores animi obcaecati libero quidem ullam ab aperiam eius ipsa! Alias, inventore ad! Dolorem aliquid natus temporibus enim reprehenderit aperiam quisquam, deleniti error qui consectetur nisi facilis dignissimos quidem dolorum quia eos? Obcaecati, ducimus? Exercitationem vitae numquam maxime ab eos blanditiis voluptatum eligendi facere, veritatis itaque, eaque obcaecati accusamus? Commodi pariatur perspiciatis ipsum voluptatem rem ratione?"
        ],
        [
            "title" => "Postingan 2",
            "slug" => "postingan-2",
            "image" => "https://picsum.photos/800/400",
            "created_at" => "2023-10-02 12:00:00",
            "updated_at" => "2023-10-02 12:00:00",
            "category" => "Kesehatan",
            "author" => "Pengrajin",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta qui nostrum voluptatum porro optio ratione cumque libero quasi? Voluptates cum at odit? Dolorem magni delectus, natus reprehenderit laborum dignissimos neque consequuntur dolore tempore molestias nostrum, consequatur vel maiores id nemo fuga impedit? Dolorum, doloremque. Eos ipsa quisquam esse nemo nihil commodi adipisci possimus, ex quos magni, voluptates voluptatibus quaerat, aliquam odio id? Pariatur numquam cupiditate quas expedita fugit repudiandae velit voluptate minus dolorem voluptates. Modi, dolorum porro soluta ex hic itaque, sunt neque, perferendis velit iusto quidem sesuatu."
        ]
    ];
    // Cari postingan berdasarkan slug
    $found_post = null;
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $found_post = $post;
            break;
        }
    }

    if ($found_post) {
        return view('frontend.v_blog.post', [
            'title' => 'Detail Artikel',
            "post" => $found_post
        ]);
    } else {
        abort(404);
    }
});