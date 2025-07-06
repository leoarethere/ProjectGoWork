<?php

namespace App\Models;

use App\Models\Post;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Kolom yang boleh diisi mass-assignment
    protected $table = 'users'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key
    public $incrementing = true; // Primary key auto-increment
    public $timestamps = true; // Gunakan timestamps
    // protected $fillable = [
    //     'nama',
    //     'username',
    //     'usia',
    //     'alamat',
    //     'no_telepon',
    //     'email',
    //     'password',
    //     'role_pengguna',
    //     'status_akun',
    //     'foto',
    // ];

    // app/Models/User.php
    protected $fillable = [
        'name',
        'username',
        'slug',
        'email',
        'password',
        'role_pengguna',
        'status_akun', // <-- Tambahkan ini
        'foto',        // <-- Tambahkan ini
    ];

    protected $guarded = ['id'];

    // Kolom yang disembunyikan saat serialisasi
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Kolom yang dikonversi ke tipe data tertentu
    protected $casts = [
        'email_verified_at' => 'datetime',
        'status_akun' => 'boolean',
    ];

    // Relasi dengan model post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}