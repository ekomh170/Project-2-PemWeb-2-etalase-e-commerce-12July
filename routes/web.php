<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Landing Page ==============================================
// Halaman Utama
Route::get('/', function () {
    return view('landing.pages.index');
});

// Tentang Kami
Route::get('/about', function () {
    return view('landing.pages.about');
});
// Tentang Kami

// Produk Kami
Route::get('/product', function () {
    return view('landing.pages.product');
});
// Produk Kami

// Blog
Route::get('/blog', function () {
    return view('landing.pages.blog');
});
// Blog

// Kontak Kami
Route::get('/contact', function () {
    return view('landing.pages.contact');
});
// Kontak Kami
// Landing Page ==============================================



// Set Auth ==============================================
require __DIR__.'/auth.php';
// Set Auth ==============================================

// Administrator

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Administrator




// Testing Development ==============================================
Route::get('/landing', function () {
    return view('landing.pages.index');
});


Route::get('/admin', function () {
    return view('admin.pages.index');
});

Route::get('/auth_test', function () {
    return view('auth_modify.index');
});
// Testing Development ==============================================
