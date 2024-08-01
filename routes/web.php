<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;

// Mengarahkan ke halaman login jika belum masuk, dan ke halaman utama jika sudah masuk
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return redirect()->route('login');
});

// Rute untuk halaman utama (home) dengan middleware auth
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/music', [HomeController::class, 'music'])->middleware('auth');
Route::get('/video', [HomeController::class, 'video'])->middleware('auth');
Route::get('/about', [HomeController::class, 'about'])->middleware('auth');
Route::get('/shop', [HomeController::class, 'shop'])->middleware('auth');

// Rute untuk registrasi (hanya untuk tamu)
Route::middleware(['guest'])->group(function () {
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

// Rute untuk logout (harus sudah masuk)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Rute untuk halaman profil (harus sudah masuk)
Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth')->name('profile');
