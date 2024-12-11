<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan form login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        // Menampilkan file resources/views/login.blade.php
        return view('login');
    }

    /**
     * Memproses login user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email', // Email harus valid
            'password' => 'required',   // Password tidak boleh kosong
        ]);

        // Cek kredensial login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Login berhasil, redirect ke dashboard
            return redirect()->intended('/dashboard');
        }

        // Login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Invalid credentials.', // Pesan error jika email/password salah
        ])->withInput(); // Menyimpan input sebelumnya kecuali password
    }

    /**
     * Logout user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout(); // Proses logout
        return redirect('/login'); // Redirect ke halaman login
    }
}
