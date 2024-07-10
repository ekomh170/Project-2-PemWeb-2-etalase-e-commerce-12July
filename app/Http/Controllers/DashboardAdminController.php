<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\KategoriTokoh;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Testimoni;

class DashboardAdminController extends Controller
{
    // Dashboard Admin
    public function index()
    {
        // Jumlah Total User
        $total_user = User::count();
        // Jumlah User Baru - Minimal 48 Jam
        $new_user = User::where('created_at', '>=', now()->subHours(48))->count();

        // Jumlah Produk
        $total_product = Produk::count();

        // Jumlah Testimoni
        $total_testimoni = Testimoni::count();

        // Jumlah Jenis Produk -> jenisProduk Tabel
        $total_jenis_produk = JenisProduk::count();

        // Kategori Tokoh
        $total_kategori_tokoh= KategoriTokoh::count();

        // Looping Testimoni Produk & Komentar Minimal 5 Data, Produk Hanya Berelasi Dengan Testimoni Sama Ketegori Tokoh
        $testimoni = Testimoni::with('produk', 'kategoriTokoh')->whereHas('produk', function ($query) {
            $query->where('kategori_tokoh_id', '!=', null);
        })->whereHas('kategoriTokoh', function ($query) {
            $query->where('id', '!=', null);
        })->orderBy('tanggal', 'desc')->take(5)->get();

        // dd($testimoni);

        
        return view('admin.pages.dashboard', compact('total_user', 'new_user', 'total_product', 'total_testimoni', 'total_jenis_produk', 'total_kategori_tokoh', 'testimoni'));
    }
}
