<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Daftar',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input sesuai dengan skema dan kebutuhan
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // --- PENYESUAIAN DENGAN SEEDER ---

        // 1. Generate slug dari username
        $validatedData['slug'] = Str::slug($validatedData['username']);

        // 2. Enkripsi password sebelum disimpan
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        // 3. Menetapkan peran default untuk pengguna baru (Pencari Kerja)
        $validatedData['role_pengguna'] = '3';

        // 4. Menetapkan status akun default menjadi aktif
        $validatedData['status_akun'] = true;

        // 5. Menetapkan foto default (bisa dikosongkan atau diberi placeholder)
        $validatedData['foto'] = null; // atau 'https://i.pravatar.cc/150?u=' . $validatedData['email'];

        // --- AKHIR PENYESUAIAN ---

        // Simpan data pengguna baru ke database
        User::create($validatedData);

        // Redirect ke halaman login sambil "membawa" pesan sukses
        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan masuk.');
    }
}