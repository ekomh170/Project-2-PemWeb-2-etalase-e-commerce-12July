<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\Produk;
use App\Models\KategoriTokoh;

class TestimoniMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('testimoni.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        $kategoriTokoh = KategoriTokoh::all();
        return view('testimoni.create', compact('produk', 'kategoriTokoh'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'nama_tokoh' => 'required|string|max:45',
            'komentar' => 'required|string|max:200',
            'rating' => 'required|integer',
            'produk_id' => 'required|exists:produk,id',
            'kategori_tokoh_id' => 'required|exists:kategori_tokoh,id',
        ]);

        Testimoni::create($validated);

        return redirect()->route('testimonimember.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function show(Testimoni $testimonimember)
    {
        return view('testimoni.show', compact('testimonimember'));
    }
}
