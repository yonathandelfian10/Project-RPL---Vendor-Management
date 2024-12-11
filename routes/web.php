<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman landing page
Route::get('/', function () {
    return view('landing'); // resources/views/landing.blade.php
});

// Route untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk memproses login
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/buatakunbank', function () {
    return view('buatakunbank');
});

Route::get('/datavendor', function () {
    return view('datavendor');
});

Route::get('/dashboardsuperadmin', function () {
    return view('dashboardsuperadmin');
});

Route::get('/buatakunvendor', function () {
    return view('buatakunvendor');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/dashboardvendor', function () {
    return view('dashboardvendor');
});

Route::get('/dashboardtimit', function () {
    return view('dashboardtimit');
});

Route::get('/tambahproject', function () {
    return view('tambahproject');
});

Route::get('/tambahadminit', function () {
    return view('tambahadminit');
});
