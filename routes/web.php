<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//tampilan halaman
Route::get('Home', [HomeController::class, 'home'])->name('home');
// Route::get('Book', [HomeController::class, 'book'])->name('book');
Route::get('About', [HomeController::class, 'about'])->name('about');
Route::get('Contact', [HomeController::class, 'contact'])->name('kontak');
Route::get('Profile', [HomeController::class, 'profile'])->name('profil');
Route::get('Login', [HomeController::class, 'login'])->name('loginn');

Route::get('Book', [BookController::class, 'index'])->name('book');

//autentikasi akun/user
Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('custom-dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
