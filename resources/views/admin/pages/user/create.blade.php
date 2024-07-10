@extends('admin.layouts.master')

@section('title', 'Tambah Pengguna')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Tambah Data - Pengguna</h3>
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
                        <a href="{{ route('user.index') }}">Pengguna</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tambah Pengguna</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name"><strong>Nama</strong></label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email"><strong>Email</strong></label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password"><strong>Password</strong></label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="role"><strong>Role</strong></label>
                                    <select name="role" id="role" class="form-select" required>
                                        <option value="admin">Admin</option>
                                        <option value="member">Member</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat"><strong>Alamat</strong></label>
                                    <input type="text" name="alamat" id="alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nomer_hp"><strong>Nomer HP</strong></label>
                                    <input type="text" name="nomer_hp" id="nomer_hp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir"><strong>Tanggal Lahir</strong></label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="foto"><strong>Foto</strong></label>
                                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin"><strong>Jenis Kelamin</strong></label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bio"><strong>Bio</strong></label>
                                    <textarea name="bio" id="bio" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="website"><strong>Website</strong></label>
                                    <input type="url" name="website" id="website" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="hobi"><strong>Hobi</strong></label>
                                    <textarea name="hobi" id="hobi" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="linkedin"><strong>LinkedIn</strong></label>
                                    <input type="url" name="linkedin" id="linkedin" class="form-control">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali ke Pengguna</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
