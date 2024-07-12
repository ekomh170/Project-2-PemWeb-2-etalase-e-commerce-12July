<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-header">Total Produk</div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('produkmember.index') }}" class="text-white" style="text-decoration: none;">{{ $total_product }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-header">Total Testimoni</div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('testimonimember.index') }}" class="text-white" style="text-decoration: none;">{{ $total_testimoni }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-info mb-3">
                                <div class="card-header">Total Jenis Produk</div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('jenisprodukmember.index') }}" class="text-white" style="text-decoration: none;">{{ $total_jenis_produk }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-warning mb-3">
                                <div class="card-header">Total Kategori Tokoh</div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('kategoritokohmember.index') }}" class="text-white" style="text-decoration: none;">{{ $total_kategori_tokoh }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- jQuery -->
<script src="{{ asset('assets/admin/js/core/jquery-3.7.1.min.js') }}"></script>
<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
