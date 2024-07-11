<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Testimoni;
use App\Models\JenisProduk;
use App\Models\KategoriTokoh;

class DashboardMemberController extends Controller
{
    public function index()
    {
         // Jumlah Produk
         $total_product = Produk::count();

         // Jumlah Testimoni
         $total_testimoni = Testimoni::count();
 
         // Jumlah Jenis Produk -> jenisProduk Tabel
         $total_jenis_produk = JenisProduk::count();
 
         // Kategori Tokoh
         $total_kategori_tokoh= KategoriTokoh::count();

        //  View
        return view('dashboard', compact('total_product', 'total_testimoni', 'total_jenis_produk', 'total_kategori_tokoh'));
    }   
}
