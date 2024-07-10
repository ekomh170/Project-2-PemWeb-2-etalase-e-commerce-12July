@extends('admin.layouts.master')

@section('title', 'Edit Account Users')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Edit Data - Account Users</h3>
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
                        <a href="{{ route('user.index') }}">Account Users</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Account Users</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name"><strong>Nama</strong></label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email"><strong>Email</strong></label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="role"><strong>Role</strong></label>
                                    <select name="role" id="role" class="form-select" required>
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="member" {{ $user->role == 'member' ? 'selected' : '' }}>Member</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat"><strong>Alamat</strong></label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $profile->alamat }}">
                                </div>
                                <div class="form-group">
                                    <label for="nomer_hp"><strong>Nomer HP</strong></label>
                                    <input type="text" name="nomer_hp" id="nomer_hp" class="form-control" value="{{ $profile->nomer_hp }}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir"><strong>Tanggal Lahir</strong></label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $profile->tanggal_lahir }}">
                                </div>
                                <div class="form-group">
                                    <label for="foto"><strong>Foto</strong></label>
                                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
                                    @if($profile->foto)
                                        <img src="{{ asset('storage/' . $profile->foto) }}" alt="{{ $user->name }}" style="width: 100px;">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin"><strong>Jenis Kelamin</strong></label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                        <option value="Laki-Laki" {{ $profile->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                        <option value="Perempuan" {{ $profile->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bio"><strong>Bio</strong></label>
                                    <textarea name="bio" id="bio" class="form-control">{{ $profile->bio }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="website"><strong>Website</strong></label>
                                    <input type="url" name="website" id="website" class="form-control" value="{{ $profile->website }}">
                                </div>
                                <div class="form-group">
                                    <label for="hobi"><strong>Hobi</strong></label>
                                    <textarea name="hobi" id="hobi" class="form-control">{{ $profile->hobi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="linkedin"><strong>LinkedIn</strong></label>
                                    <input type="url" name="linkedin" id="linkedin" class="form-control" value="{{ $profile->linkedin }}">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali ke Account Users</a>
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
