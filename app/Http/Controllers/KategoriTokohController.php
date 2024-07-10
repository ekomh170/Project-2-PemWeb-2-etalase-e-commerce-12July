<?php

namespace App\Http\Controllers;

use App\Models\KategoriTokoh;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KategoriTokohController extends Controller
{
    public function index()
    {
        return view('admin.pages.kategoriTokoh.index');
    }

    public function getData()
    {
        $kategoriTokoh = KategoriTokoh::select('*');

        return DataTables::of($kategoriTokoh)
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                return view('admin.pages.kategoriTokoh.actions', compact('item'))->render();
            })
            ->make(true);
    }

    public function create()
    {
        return view('admin.pages.kategoriTokoh.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        KategoriTokoh::create($request->all());

        return redirect()->route('kategoriTokoh.index')->with('success', 'Kategori tokoh berhasil ditambahkan.');
    }

    public function show(KategoriTokoh $kategoriTokoh)
    {
        $testimoniList = $kategoriTokoh->testimoni; // Mendapatkan daftar testimoni yang terkait dengan kategori tokoh ini
        return view('admin.pages.kategoriTokoh.show', compact('kategoriTokoh', 'testimoniList'));
    }

    public function edit(KategoriTokoh $kategoriTokoh)
    {
        return view('admin.pages.kategoriTokoh.edit', compact('kategoriTokoh'));
    }

    public function update(Request $request, KategoriTokoh $kategoriTokoh)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        $kategoriTokoh->update($request->all());

        return redirect()->route('kategoriTokoh.index')->with('success', 'Kategori tokoh berhasil diperbarui.');
    }

    public function destroy(KategoriTokoh $kategoriTokoh)
    {
        try {
            $kategoriTokoh->delete();
            return redirect()->route('kategoriTokoh.index')->with('success', 'Kategori tokoh berhasil dihapus.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('kategoriTokoh.index')->with('error', 'Kategori tokoh tidak dapat dihapus karena masih digunakan oleh testimoni lain.');
        }
    }
}
