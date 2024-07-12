<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriTokoh;

class KategoriTokohMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kategoritokoh.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriTokoh  $kategoriTokoh
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriTokoh $kategoritokohmember)
    {
        $testimoniList = $kategoritokohmember->testimoni; // Mendapatkan daftar testimoni yang terkait dengan kategori tokoh ini
        return view('kategoritokoh.show', compact('kategoritokohmember', 'testimoniList'));
    }
}
