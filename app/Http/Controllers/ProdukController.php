<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\JenisProduk;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.produk.index');
    }

    public function getData()
    {
        $produk = Produk::with('jenisProduk')->select('produk.*')->get();
        
        return DataTables::of($produk)
            ->addIndexColumn() // Menambahkan kolom DT_RowIndex
            ->addColumn('action', function($item) {
                return view('admin.pages.produk.actions', compact('item'))->render();
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenisProduk = JenisProduk::all();
        return view('admin.pages.produk.create', compact('jenisProduk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'nullable|string|max:10',
            'nama' => 'required|string|max:45',
            'harga' => 'required|numeric',
            'gambar_produk' => 'nullable|string',
            'stok' => 'nullable|integer',
            'rating' => 'nullable|integer',
            'min_stok' => 'nullable|integer',
            'deskripsi' => 'nullable|string',
            'jenis_produk_id' => 'required|exists:jenis_produk,id',
        ]);

        Produk::create($request->all());
        
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        return view('admin.pages.produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $jenisProduk = JenisProduk::all();
        return view('admin.pages.produk.edit', compact('produk', 'jenisProduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'kode' => 'nullable|string|max:10',
            'nama' => 'required|string|max:45',
            'harga' => 'required|numeric',
            'gambar_produk' => 'nullable|string',
            'stok' => 'nullable|integer',
            'rating' => 'nullable|integer',
            'min_stok' => 'nullable|integer',
            'deskripsi' => 'nullable|string',
            'jenis_produk_id' => 'required|exists:jenis_produk,id',
        ]);

        $produk->update($request->all());
        
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
    }
}
