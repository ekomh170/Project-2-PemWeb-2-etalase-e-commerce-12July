@extends('admin.layouts.master')

@section('title', 'Detail Pengguna')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Detail Pengguna</h3>
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
                        <a href="#">Pengguna</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Detail Pengguna</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{ $user->role }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Dibuat</th>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                                @if($profile)
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $profile->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>Nomer HP</th>
                                    <td>{{ $profile->nomer_hp }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $profile->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Foto</th>
                                    <td>
                                        @if($profile->foto)
                                            <img src="{{ asset('storage/' . $profile->foto) }}" alt="{{ $user->name }}" style="width: 100px;">
                                        @else
                                            Tidak ada foto
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $profile->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Bio</th>
                                    <td>{{ $profile->bio }}</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td>
                                        @if($profile->website)
                                            <a href="{{ $profile->website }}">{{ $profile->website }}</a>
                                        @else
                                            Tidak ada website
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Hobi</th>
                                    <td>{{ $profile->hobi }}</td>
                                </tr>
                                <tr>
                                    <th>LinkedIn</th>
                                    <td>
                                        @if($profile->linkedin)
                                            <a href="{{ $profile->linkedin }}">{{ $profile->linkedin }}</a>
                                        @else
                                            Tidak ada LinkedIn
                                        @endif
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="2">Profil tidak tersedia.</td>
                                </tr>
                                @endif
                            </table>
                            <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
