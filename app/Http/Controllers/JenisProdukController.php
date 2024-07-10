<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduk;
use Yajra\DataTables\Facades\DataTables;


class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.jenisProduk.index');
    }

    /**
     * Get data for DataTables.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getData()
    {
        $jenisProduk = JenisProduk::select('*');

        return DataTables::of($jenisProduk)
            ->addIndexColumn() // Menambahkan kolom DT_RowIndex
            ->addColumn('action', function ($item) {
                // Tambahkan kode untuk menampilkan aksi sesuai kebutuhan
                return view('admin.pages.jenisProduk.actions', compact('item'))->render();
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.jenisProduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        JenisProduk::create($request->all());

        return redirect()->route('jenisProduk.index')->with('success', 'Jenis produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisProduk  $jenisProduk
     * @return \Illuminate\Http\Response
     */

    public function show(JenisProduk $jenisProduk)
    {
        $produkList = $jenisProduk->produk; // Mendapatkan daftar produk yang terkait dengan jenis produk ini
        return view('admin.pages.jenisProduk.show', compact('jenisProduk', 'produkList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisProduk  $jenisProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisProduk $jenisProduk)
    {
        return view('admin.pages.jenisProduk.edit', compact('jenisProduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisProduk  $jenisProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisProduk $jenisProduk)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        $jenisProduk->update($request->all());

        return redirect()->route('jenisProduk.index')->with('success', 'Jenis produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisProduk  $jenisProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisProduk $jenisProduk)
    {
        try {
            $jenisProduk->delete();
            return redirect()->route('jenisProduk.index')->with('success', 'Jenis produk berhasil dihapus.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('jenisProduk.index')->with('error', 'Jenis produk tidak dapat dihapus karena masih digunakan oleh produk lain.');
        }
    }
}
