<!-- resources/views/testimoni/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Testimoni
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold">{{ $testimonimember->nama_tokoh }}</h3>
                        <p><strong>Tanggal:</strong> {{ $testimonimember->tanggal }}</p>
                        <p><strong>Komentar:</strong> {{ $testimonimember->komentar }}</p>
                        <p><strong>Rating:</strong> {{ $testimonimember->rating }}</p>
                        <p><strong>Produk:</strong> {{ $testimonimember->produk->nama }}</p>
                        <p><strong>Kategori Tokoh:</strong> {{ $testimonimember->kategoriTokoh->nama }}</p>
                    </div>
                    <div>
                        <a href="{{ route('testimoni.index') }}" class="btn btn-primary">Kembali ke Daftar Testimoni</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
