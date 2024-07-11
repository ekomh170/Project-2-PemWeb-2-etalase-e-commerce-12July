<?php

namespace App\Http\Controllers;

use App\Models\Produk;
// Testimoni
use App\Models\Testimoni;
use Illuminate\Http\Request;


class LandingController extends Controller
{
    // Halaman Utama -> /
    public function index()
    {
        return view('landing.pages.index');
    }
    // Tentang Kami -> /about
    public function about()
    {
        return view('landing.pages.about');
    }
    // Produk Kami -> /product
    public function product()
    {
        $produk = Produk::with('jenisProduk')->select('produk.*')->take(8)->get();
        $testimoni = Testimoni::with(['produk', 'kategoriTokoh'])->select('testimoni.*')->get();
        // dd($produk, $testimoni);
        return view('landing.pages.product', compact('produk', 'testimoni'));
    }
    // Blog -> /blog
    public function blog()
    {
        return view('landing.pages.blog');
    }
    // Kontak Kami -> /contact
    public function contact()
    {
        return view('landing.pages.contact');
    }

}
