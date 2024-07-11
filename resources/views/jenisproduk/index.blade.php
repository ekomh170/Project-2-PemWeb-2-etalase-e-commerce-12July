<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jenis Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="table-responsive">
                        <table id="jenis-produk-datatables" class="table table-striped table-bordered">
                            <thead class="thead-light">
                                <tr class="text-left">
                                    <th scope="col" class="border-bottom-0">No</th>
                                    <th scope="col" class="border-bottom-0">Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be loaded by DataTables -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="border-bottom-0">No</th>
                                    <th class="border-bottom-0">Nama</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="mt-4 text-center">
                        <div id="jenis-produk-datatables_paginate"></div>
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
        $('#jenis-produk-datatables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('jenisProduk.data') }}', // Adjust to your route for fetching jenis_produk data
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'nama', name: 'nama' }
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
                    // Add custom filter functionality if needed
                });
            }
        });
    });
</script>
