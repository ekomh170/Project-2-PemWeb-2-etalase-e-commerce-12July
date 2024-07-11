<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produk.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Produk $produkmember)
    {
        return view('produk.show', compact('produkmember'));
    }
}
