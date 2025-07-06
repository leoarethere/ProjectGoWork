<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    // Jika ingin mengisi kolom tertentu, bisa gunakan $fillable
    // protected $fillable = [
    //     'name',
    //     'slug',
    // ];
    // Jika ingin mengisi kolom tertentu, bisa gunakan $guarded
    // protected $guarded = [
    //     'id',
    //     'created_at',
    //     'updated_at',
    // ];
    // Jika ingin mengisi kolom tertentu, bisa gunakan $casts
    // protected $casts = [
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
    // Jika ingin mengisi kolom tertentu, bisa gunakan $hidden
    // protected $hidden = [
    //     'created_at',
    //     'updated_at',
    // ];
    // Jika ingin mengisi kolom tertentu, bisa gunakan $appends
    // protected $appends = [
    //     'custom_attribute',
    // ];
    // public function getCustomAttribute()
    // {
    //     return 'Custom Value';
    // }
    // Jika ingin mengisi kolom tertentu, bisa gunakan $attributes
    // protected $attributes = [
    //     'status' => 'active',
    // ];

    public function posts()
    {
        // Define the relationship with the Post model
        // A category has many posts
        return $this->hasMany(Post::class);
        // Penjelasan:
        // Baris ini mendefinisikan relasi "one-to-many" antara model Category dan model Post di Laravel.
        // Artinya, satu kategori bisa memiliki banyak post (artikel), tetapi setiap post hanya memiliki satu kategori.
        // Dengan relasi ini, Anda bisa mengakses semua post yang terkait dengan sebuah kategori.
    }
}
