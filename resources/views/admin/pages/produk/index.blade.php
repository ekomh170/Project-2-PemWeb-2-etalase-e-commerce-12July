@extends('admin.layouts.master')

@section('title', 'Master Data - Produk')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Master Data - Produk</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Master Data</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Produk</a>
                    </li>
                </ul>
            </div>
            <div class="row mb-3">
                <div class="col-md-12 text-end">
                    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Produk</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="produk-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Gambar Produk</th>
                                            <th>Jenis Produk</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Gambar Produk</th>
                                            <th>Jenis Produk</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('datatable-js')
    <script>
        $(document).ready(function() {
            $('#produk-datatables').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('produk.data') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'nama', name: 'nama' },
                    { data: 'harga', name: 'harga' },
                    { data: 'stok', name: 'stok' },
                    { data: 'gambar_produk', name: 'gambar_produk', render: function(data, type, full, meta) {
                        return `<img src="${data}" alt="${full.nama}" style="width: 50px;">`;
                    }},
                    { data: 'jenis_produk.nama', name: 'jenis_produk.nama' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ],
                pageLength: 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        if (column.index() === 5) { // Index dari kolom "Jenis Produk"
                            var select = $('<select class="form-select"><option value=""></option></select>')
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
@endsection
