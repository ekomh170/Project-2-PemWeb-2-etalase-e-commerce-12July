<!-- resources/views/jenisproduk/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Jenis Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="fw-bold">Nama Kategori Tokoh: {{ $kategoritokohmember->nama }}</h4>
                        <hr>
                        <h5 class="fw-bold mb-3">Daftar Testimoni:</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tokoh</th>
                                    <th>Komentar</th>
                                    <th>Rating</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimoniList as $index => $testimoni)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $testimoni->nama_tokoh }}</td>
                                        <td>{{ $testimoni->komentar }}</td>
                                        <td>{{ $testimoni->rating }}</td>
                                        <td>{{ $testimoni->tanggal }}</td>
                                    </tr>
                                @endforeach
                                @if ($testimoniList->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">Tidak ada testimoni yang terkait dengan
                                            kategori tokoh ini.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('kategoritokohmember.index') }}" class="btn btn-secondary">Kembali ke
                                Kategori Tokoh</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
