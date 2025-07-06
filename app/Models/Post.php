<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['author', 'category'];
    // Penjelasan:
    // Dengan menggunakan $with, kita dapat mengoptimalkan query yang dihasilkan oleh Eloquent
    // dengan memuat relasi yang sering diakses (author dan category) secara otomatis
    // saat mengambil data post. Ini membantu mengurangi jumlah query yang dijalankan
    // dan meningkatkan performa aplikasi.
    
    
    public function category()
    {
        // Define the relationship with the Category model
        // A post belongs to a category
        return $this->belongsTo(Category::class);
        // Penjelasan:
        // Baris ini mendefinisikan relasi "many-to-one" antara model Post dan model Category di Laravel.
        // Artinya, setiap post (artikel) hanya memiliki satu kategori, tetapi satu kategori bisa memiliki banyak post.
        // Dengan relasi ini, Anda bisa mengakses data kategori dari sebuah post, misal:
        // Laravel akan otomatis mencari kolom category_id di tabel posts sebagai foreign key yang menghubungkan ke tabel categories.
        // Kesimpulan:
        // Baris ini digunakan agar model Post bisa mengambil data kategori yang terkait dengannya.
    }

    public function author()
    {
        // Define the relationship with the User model
        // A post belongs to a user (author)
        return $this->belongsTo(User::class, 'user_id');
        // Penjelasan:
        // Baris ini mendefinisikan relasi "many-to-one" antara model Post dan model User di Laravel.
        // Artinya, setiap post (artikel) hanya memiliki satu pengguna (penulis), tetapi satu pengguna bisa memiliki banyak post.
        // Dengan relasi ini, Anda bisa mengakses data pengguna yang membuat sebuah post.
    }
}