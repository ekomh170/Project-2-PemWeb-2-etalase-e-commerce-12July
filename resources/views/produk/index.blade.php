<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="table-responsive">
                        <table id="produk-datatables" class="table table-striped table-bordered">
                            <thead class="thead-light">
                                <tr class="text-left">
                                    <th scope="col" class="border-bottom-0">No</th>
                                    <th scope="col" class="border-bottom-0">Kode</th>
                                    <th scope="col" class="border-bottom-0">Nama</th>
                                    <th scope="col" class="border-bottom-0">Harga</th>
                                    <th scope="col" class="border-bottom-0">Stok</th>
                                    <th scope="col" class="border-bottom-0">Gambar Produk</th>
                                    <th scope="col" class="border-bottom-0">Jenis Produk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be loaded by DataTables -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="border-bottom-0">No</th>
                                    <th class="border-bottom-0">Kode</th>
                                    <th class="border-bottom-0">Nama</th>
                                    <th class="border-bottom-0">Harga</th>
                                    <th class="border-bottom-0">Stok</th>
                                    <th class="border-bottom-0">Gambar Produk</th>
                                    <th class="border-bottom-0">Jenis Produk</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="mt-4 text-center">
                        <div id="produk-datatables_paginate"></div>
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
        $('#produk-datatables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('produk.data') }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'kode', name: 'kode' },
                { data: 'nama', name: 'nama' },
                { data: 'harga', name: 'harga' },
                { data: 'stok', name: 'stok' },
                { data: 'gambar_produk', name: 'gambar_produk', render: function(data, type, full, meta) {
                    return `<img src="{{ asset('storage/produk') }}/${data}" alt="${full.nama}" class="img-thumbnail" style="width: 50px; height: 50px;">`;
                }},
                { data: 'jenis_produk.nama', name: 'jenis_produk.nama' }
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
                    if (column.index() === 6) {
                        var select = $('<select class="form-select form-select-sm"><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                    }
                });
            }
        });
    });
</script>
