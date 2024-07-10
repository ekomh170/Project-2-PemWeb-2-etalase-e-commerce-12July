<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\JenisProduk;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

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
            ->addColumn('action', function ($item) {
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
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'stok' => 'nullable|integer',
            'rating' => 'nullable|numeric',
            'min_stok' => 'nullable|integer',
            'deskripsi' => 'nullable|string',
            'jenis_produk_id' => 'required|exists:jenis_produk,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/produk', $fileName); // Menyimpan di direktori 'public/produk'
            $data['gambar_produk'] = $fileName;
        }

        Produk::create($data);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
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
        'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        'stok' => 'nullable|integer',
        'rating' => 'nullable|integer',
        'min_stok' => 'nullable|integer',
        'deskripsi' => 'nullable|string',
        'jenis_produk_id' => 'required|exists:jenis_produk,id',
    ]);

    $data = $request->all();

    // dd($data);

    if ($request->hasFile('gambar_produk')) {
        // Cek apakah ada gambar lama dan apakah file tersebut ada di penyimpanan
        if ($produk->gambar_produk) {
            $oldFilePath = 'public/produk/' . $produk->gambar_produk;
            if (Storage::exists($oldFilePath)) {
                // Hapus gambar lama jika file fisiknya ada
                Storage::delete($oldFilePath);
            }
        }

        // Simpan gambar baru
        $file = $request->file('gambar_produk');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('public/produk', $fileName);
        $data['gambar_produk'] = $fileName;
    } else {
        // Jika tidak ada gambar baru, pastikan untuk tidak menghapus gambar yang ada
        unset($data['gambar_produk']);
    }

    $produk->update($data);

    return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui');
}

    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
{
    // Periksa apakah produk memiliki gambar
    if ($produk->gambar_produk && Storage::exists('public/produk/' . $produk->gambar_produk)) {
        // Hapus gambar dari penyimpanan
        Storage::delete('public/produk/' . $produk->gambar_produk);
    }

    // Hapus produk dari database
    $produk->delete();

    return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
}

}
