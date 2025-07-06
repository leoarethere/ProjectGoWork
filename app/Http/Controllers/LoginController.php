<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Masuk',
        ]);
    }

    public function authenticate(Request $request) // PERBAIKAN: Gunakan 'Request'
    {
        // PERBAIKAN: Tangkap hasil validasi ke dalam variabel $credentials
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // PERBAIKAN: Tambahkan titik koma (;) di akhir
        return back()->with('loginError', 'Login gagal! Email atau password salah.');
    }
}