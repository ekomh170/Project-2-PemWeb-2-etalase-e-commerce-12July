@extends('admin.layouts.master')

@section('title', 'Edit Profile')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3" style="margin-bottom: 20px;">Edit Profile</h3>
                <ul class="breadcrumbs mb-3" style="margin-bottom: 20px;">
                    <li class="nav-home" style="display: inline; margin-right: 5px;">
                        <a href="#" style="text-decoration: none;">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator" style="display: inline; margin-right: 5px;">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item" style="display: inline; margin-right: 5px;">
                        <a href="#" style="text-decoration: none;">Master Data</a>
                    </li>
                    <li class="separator" style="display: inline; margin-right: 5px;">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item" style="display: inline; margin-right: 5px;">
                        <a href="#" style="text-decoration: none;">Profile</a>
                    </li>
                    <li class="separator" style="display: inline; margin-right: 5px;">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item" style="display: inline; margin-right: 5px;">
                        <a href="#" style="text-decoration: none;">Edit Profile</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);">
                        <div class="card-body" style="padding: 20px;">
                            <form action="{{ route('profileAdmin.update', ['profileAdmin' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $user->name) }}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $user->email) }}">
                                </div>

                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select name="role" class="form-control" id="role">
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="foto">Foto Profil</label>
                                    <input type="file" name="foto" class="form-control-file" id="foto">
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{ old('alamat', $user->profile->alamat) }}">
                                </div>

                                <div class="form-group">
                                    <label for="nomer_hp">Nomer HP</label>
                                    <input type="text" name="nomer_hp" class="form-control" id="nomer_hp" value="{{ old('nomer_hp', $user->profile->nomer_hp) }}">
                                </div>

                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ old('tanggal_lahir', $user->profile->tanggal_lahir) }}">
                                </div>

                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                        <option value="laki-laki" {{ $user->profile->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="perempuan" {{ $user->profile->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <textarea name="bio" class="form-control" id="bio">{{ old('bio', $user->profile->bio) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" name="website" class="form-control" id="website" value="{{ old('website', $user->profile->website) }}">
                                </div>

                                <div class="form-group">
                                    <label for="hobi">Hobi</label>
                                    <input type="text" name="hobi" class="form-control" id="hobi" value="{{ old('hobi', $user->profile->hobi) }}">
                                </div>

                                <div class="form-group">
                                    <label for="linkedin">LinkedIn</label>
                                    <input type="url" name="linkedin" class="form-control" id="linkedin" value="{{ old('linkedin', $user->profile->linkedin) }}">
                                </div>

                                <button type="submit" class="btn btn-primary mt-3" style="display: inline-block; margin-top: 20px;">Simpan Perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
