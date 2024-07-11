<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Testimoni') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('testimonimember.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="tanggal" class="block text-gray-700">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-input mt-1 block w-full border border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_tokoh" class="block text-gray-700">Nama Tokoh</label>
                            <input type="text" id="nama_tokoh" name="nama_tokoh" class="form-input mt-1 block w-full border border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="komentar" class="block text-gray-700">Komentar</label>
                            <textarea id="komentar" name="komentar" class="form-textarea mt-1 block w-full border border-gray-300 rounded-md" rows="3" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="rating" class="block text-gray-700">Rating</label>
                            <input type="number" id="rating" name="rating" class="form-input mt-1 block w-full border border-gray-300 rounded-md" min="1" max="5" required>
                        </div>
                        <div class="mb-4">
                            <label for="produk_id" class="block text-gray-700">Produk</label>
                            <select id="produk_id" name="produk_id" class="form-select mt-1 block w-full border border-gray-300 rounded-md" required>
                                @foreach($produk as $produkall)
                                    <option value="{{ $produkall->id }}">{{ $produkall->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="kategori_tokoh_id" class="block text-gray-700">Kategori Tokoh</label>
                            <select id="kategori_tokoh_id" name="kategori_tokoh_id" class="form-select mt-1 block w-full border border-gray-300 rounded-md" required>
                                @foreach($kategoriTokoh as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
