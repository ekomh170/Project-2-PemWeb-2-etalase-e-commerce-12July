<?php

namespace App\Http\Controllers;

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
        return view('landing.pages.product');
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
