<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\KategoriTokohController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileAdminController;



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
require __DIR__ . '/auth.php';
// Set Auth ==============================================



// Administrator
// Dashboard
Route::get('/dashboard_member', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Dashboard

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile_member', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile_member', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile_member', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Profile


// Master Data Utama
// Produk
Route::middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {

    // Dashboard Admin
    Route::get('/dashboardAdmin', function () {
        return view('admin.pages.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboardAdmin');
    // Dashboard Admin

    // Profile Admin
    Route::get('/panel/profileAdmin', [ProfileAdminController::class, 'index'])->name('profileAdmin.index');
    Route::get('/panel/profileAdmin/{profileAdmin}/edit', [ProfileAdminController::class, 'edit'])->name('profileAdmin.edit');
    // Profile Admin


    Route::get('/panel/produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('/panel/produk/data', [ProdukController::class, 'getData'])->name('produk.data');
    Route::get('/panel/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/panel/produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/panel/produk/{produk}', [ProdukController::class, 'show'])->name('produk.show');
    Route::get('/panel/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/panel/produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/panel/produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
    // Produk

    // Testimoni
    Route::get('/panel/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
    Route::get('/panel/testimoni/data', [TestimoniController::class, 'getData'])->name('testimoni.data');
    Route::get('/panel/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
    Route::post('/panel/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::get('/panel/testimoni/{testimoni}', [TestimoniController::class, 'show'])->name('testimoni.show');
    Route::get('/panel/testimoni/{testimoni}/edit', [TestimoniController::class, 'edit'])->name('testimoni.edit');
    Route::put('/panel/testimoni/{testimoni}', [TestimoniController::class, 'update'])->name('testimoni.update');
    Route::delete('/panel/testimoni/{testimoni}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');
    // Testimoni
    // Master Data Utama



    // Master Pengelompokan
    // Jenis Produk
    Route::get('/panel/jenisProduk', [JenisProdukController::class, 'index'])->name('jenisProduk.index');
    Route::get('/panel/jenisProduk/data', [JenisProdukController::class, 'getData'])->name('jenisProduk.data');
    Route::get('/panel/jenisProduk/create', [JenisProdukController::class, 'create'])->name('jenisProduk.create');
    Route::post('/panel/jenisProduk/store', [JenisProdukController::class, 'store'])->name('jenisProduk.store');
    Route::get('/panel/jenisProduk/{jenisProduk}', [JenisProdukController::class, 'show'])->name('jenisProduk.show');
    Route::get('/panel/jenisProduk/{jenisProduk}/edit', [JenisProdukController::class, 'edit'])->name('jenisProduk.edit');
    Route::put('/panel/jenisProduk/{jenisProduk}', [JenisProdukController::class, 'update'])->name('jenisProduk.update');
    Route::delete('/panel/jenisProduk/{jenisProduk}', [JenisProdukController::class, 'destroy'])->name('jenisProduk.destroy');
    // Jenis Produk

    // Kategori Tokoh
    Route::get('/panel/kategoriTokoh', [KategoriTokohController::class, 'index'])->name('kategoriTokoh.index');
    Route::get('/panel/kategoriTokoh/data', [KategoriTokohController::class, 'getData'])->name('kategoriTokoh.data');
    Route::get('/panel/kategoriTokoh/create', [KategoriTokohController::class, 'create'])->name('kategoriTokoh.create');
    Route::post('/panel/kategoriTokoh/store', [KategoriTokohController::class, 'store'])->name('kategoriTokoh.store');
    Route::get('/panel/kategoriTokoh/{kategoriTokoh}', [KategoriTokohController::class, 'show'])->name('kategoriTokoh.show');
    Route::get('/panel/kategoriTokoh/{kategoriTokoh}/edit', [KategoriTokohController::class, 'edit'])->name('kategoriTokoh.edit');
    Route::put('/panel/kategoriTokoh/{kategoriTokoh}', [KategoriTokohController::class, 'update'])->name('kategoriTokoh.update');
    Route::delete('/panel/kategoriTokoh/{kategoriTokoh}', [KategoriTokohController::class, 'destroy'])->name('kategoriTokoh.destroy');
    // Kategori Tokoh
    // Master Pengelompokan


    // Konfigurasi
    // Account Users
    Route::get('/panel/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/panel/user/data', [UserController::class, 'getData'])->name('user.data');
    Route::get('/panel/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/panel/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/panel/user/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('/panel/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/panel/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/panel/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    // Account Users
    // Konfigurasi
});

// Administrator

// Testing Development ==============================================
Route::get('/landing', function () {
    return view('landing.pages.index');
});

Route::get('/admin', function () {
    return view('admin.pages.dashboard');
});
// Testing Development ==============================================
