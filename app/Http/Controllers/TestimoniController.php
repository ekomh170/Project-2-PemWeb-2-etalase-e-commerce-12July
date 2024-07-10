<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\Produk;
use App\Models\KategoriTokoh;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class TestimoniController extends Controller
{
    public function index()
    {
        return view('admin.pages.testimoni.index');
    }

    public function getData()
    {
        $testimoni = Testimoni::with(['produk', 'kategoriTokoh'])->select('testimoni.*');

        return DataTables::of($testimoni)
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                return view('admin.pages.testimoni.actions', compact('item'))->render();
            })
            ->make(true);
    }

    public function create()
    {
        return view('admin.pages.testimoni.create');
    }

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

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function show(Testimoni $testimoni)
    {
        return view('admin.pages.testimoni.show', compact('testimoni'));
    }

    public function edit(Testimoni $testimoni)
    {
        $produk = Produk::all();
        $kategoriTokoh = KategoriTokoh::all();
        return view('admin.pages.testimoni.edit', compact('testimoni', 'produk', 'kategoriTokoh'));
    }

    public function update(Request $request, Testimoni $testimoni)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'nama_tokoh' => 'required|string|max:45',
            'komentar' => 'required|string|max:200',
            'rating' => 'required|integer',
            'produk_id' => 'required|exists:produk,id',
            'kategori_tokoh_id' => 'required|exists:kategori_tokoh,id',
        ]);

        $testimoni->update($validated);

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil diperbarui.');
    }

    public function destroy(Testimoni $testimoni)
    {
        $testimoni->delete();

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus.');
    }
}
