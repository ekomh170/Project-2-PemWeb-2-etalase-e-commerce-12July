<!-- resources/views/produk/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/produk/' . $produkmember->gambar_produk) }}" alt="{{ $produkmember->nama }}" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h3>{{ $produkmember->nama }}</h3>
                            <p><strong>Kode:</strong> {{ $produkmember->kode }}</p>
                            <p><strong>Harga:</strong> Rp{{ number_format($produkmember->harga, 0, ',', '.') }}</p>
                            <p><strong>Stok:</strong> {{ $produkmember->stok }}</p>
                            <p><strong>Jenis Produk:</strong> {{ $produkmember->jenisProduk->nama }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('produkmember.index') }}" class="btn btn-primary">Kembali ke Daftar Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
