<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduk;

class JenisProdukMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jenisproduk.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisProduk  $jenisProduk
     * @return \Illuminate\Http\Response
     */

    public function show(JenisProduk $jenisprodukmember)
    {
        $produkList = $jenisprodukmember->produk; // Mendapatkan daftar produk yang terkait dengan jenis produk ini
        // dd($produkList, $jenisProduk);
        return view('jenisproduk.show', compact('jenisprodukmember', 'produkList'));
    }
}
