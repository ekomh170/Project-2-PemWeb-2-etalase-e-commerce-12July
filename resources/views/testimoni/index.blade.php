<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Testimoni') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="table-responsive">
                        <table id="testimoni-datatables" class="table table-striped table-bordered">
                            <thead class="thead-light">
                                <tr class="text-left">
                                    <th scope="col" class="border-bottom-0">No</th>
                                    <th scope="col" class="border-bottom-0">Tanggal</th>
                                    <th scope="col" class="border-bottom-0">Nama Tokoh</th>
                                    <th scope="col" class="border-bottom-0">Komentar</th>
                                    <th scope="col" class="border-bottom-0">Rating</th>
                                    <th scope="col" class="border-bottom-0">Produk</th>
                                    <th scope="col" class="border-bottom-0">Kategori Tokoh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data akan dimuat oleh DataTables -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="border-bottom-0">No</th>
                                    <th class="border-bottom-0">Tanggal</th>
                                    <th class="border-bottom-0">Nama Tokoh</th>
                                    <th class="border-bottom-0">Komentar</th>
                                    <th class="border-bottom-0">Rating</th>
                                    <th class="border-bottom-0">Produk</th>
                                    <th class="border-bottom-0">Kategori Tokoh</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="mt-4 text-center">
                        <div id="testimoni-datatables_paginate"></div>
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

<script>
    $(document).ready(function() {
        $('#testimoni-datatables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('testimoni.data') }}', // Sesuaikan dengan route data testimoni Anda
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'tanggal', name: 'tanggal' },
                { data: 'nama_tokoh', name: 'nama_tokoh' },
                { data: 'komentar', name: 'komentar' },
                { data: 'rating', name: 'rating' },
                { data: 'produk.nama', name: 'produk.nama' }, // Sesuaikan dengan relasi Anda
                { data: 'kategori_tokoh.nama', name: 'kategori_tokoh.nama' } // Sesuaikan dengan relasi Anda
            ],
            pageLength: 5,
            language: {
                paginate: {
                    next: '<button class="btn btn-primary btn-sm">&rarr;</button>',
                    previous: '<button class="btn btn-primary btn-sm">&larr;</button>'
                }
            },
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    // Sesuaikan dengan kebutuhan Anda untuk filter
                });
            }
        });
    });
</script>
