<!-- resources/views/jenisproduk/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Jenis Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bold">Nama Jenis Produk: {{ $jenisprodukmember->nama }}</h4>
                    <hr>
                    <h5 class="fw-bold mb-3">Daftar Produk:</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Kode</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produkList as $index => $produk)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $produk->nama }}</td>
                                    <td>{{ $produk->kode }}</td>
                                    <td>{{ $produk->harga }}</td>
                                    <td>{{ $produk->stok }}</td>
                                </tr>
                            @endforeach
                            @if($produkList->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada produk yang terkait dengan jenis produk ini.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ route('jenisProduk.index') }}" class="btn btn-secondary">Kembali ke Jenis Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
