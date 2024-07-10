@extends('admin.layouts.master')

@section('title', 'Master Data - Testimoni')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Master Data - Testimoni</h3>
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
                        <a href="#">Testimoni</a>
                    </li>
                </ul>
            </div>
            <div class="row mb-3">
                <div class="col-md-12 text-end">
                    <a href="{{ route('testimoni.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="testimoni-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Tokoh</th>
                                            <th>Rating</th>
                                            <th>Produk</th>
                                            <th>Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Tokoh</th>
                                            <th>Rating</th>
                                            <th>Produk</th>
                                            <th>Kategori</th>
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
    $('#testimoni-datatables').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('testimoni.data') }}',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },

            { data: 'tanggal', name: 'tanggal' },
            { data: 'nama_tokoh', name: 'nama_tokoh' },
            { data: 'rating', name: 'rating' },
            { data: 'produk.nama', name: 'produk.nama' },
            { data: 'kategori_tokoh.nama', name: 'kategori_tokoh.nama' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        pageLength: 5,
        initComplete: function() {
            this.api().columns().every(function() {
                var column = this;
                if (column.index() === 6) { // Index dari kolom "Kategori Tokoh"
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
