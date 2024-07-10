@extends('admin.layouts.master')

@section('title', 'Lihat Profile')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3" style="margin-bottom: 20px;">Lihat Profile</h3>
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
                        <a href="#" style="text-decoration: none;">Lihat Profile</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);">
                        <div class="card-body" style="padding: 20px;">
                            <div class="d-flex align-items-center mb-5" style="flex-wrap: wrap; align-items: center; margin-bottom: 20px;">
                                <div class="avatar avatar-xxl" style="flex: 0 0 auto; margin-right: 20px;">
                                    @if($user->profile && $user->profile->foto)
                                        <img src="{{ asset('storage/' . $user->profile->foto) }}" alt="{{ $user->name }}" class="avatar-img rounded-circle" style="width: 120px; height: 120px;">
                                    @else
                                        <img src="{{ asset('images/default-avatar.png') }}" alt="{{ $user->name }}" class="avatar-img rounded-circle" style="width: 120px; height: 120px;">
                                    @endif
                                </div>
                                <div class="ml-4" style="flex: 1 1 auto; margin-left: 20px;">
                                    <h4 class="mb-2" style="margin-bottom: 10px;">{{ $user->name }}</h4>
                                    <p class="text-muted mb-2" style="margin-bottom: 10px;">{{ $user->email }}</p>
                                    <p class="text-muted">{{ ucfirst($user->role) }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" style="width: 100%;">
                                    <table class="table table-borderless" style="width: 100%;">
                                        <tr>
                                            <th style="padding: 10px 20px;">Tanggal Dibuat</th>
                                            <td style="padding: 10px 20px;">{{ $user->created_at->format('d M Y, H:i') }}</td>
                                        </tr>
                                        @if($user->profile)
                                        <tr>
                                            <th style="padding: 10px 20px;">Alamat</th>
                                            <td style="padding: 10px 20px;">{{ $user->profile->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th style="padding: 10px 20px;">Nomer HP</th>
                                            <td style="padding: 10px 20px;">{{ $user->profile->nomer_hp }}</td>
                                        </tr>
                                        <tr>
                                            <th style="padding: 10px 20px;">Tanggal Lahir</th>
                                            <td style="padding: 10px 20px;">{{ $user->profile->tanggal_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <th style="padding: 10px 20px;">Jenis Kelamin</th>
                                            <td style="padding: 10px 20px;">{{ $user->profile->jenis_kelamin }}</td>
                                        </tr>
                                        <tr>
                                            <th style="padding: 10px 20px;">Bio</th>
                                            <td style="padding: 10px 20px;">{{ $user->profile->bio }}</td>
                                        </tr>
                                        <tr>
                                            <th style="padding: 10px 20px;">Website</th>
                                            <td style="padding: 10px 20px;">
                                                @if($user->profile->website)
                                                    <a href="{{ $user->profile->website }}" target="_blank">{{ $user->profile->website }}</a>
                                                @else
                                                    Tidak ada website
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="padding: 10px 20px;">Hobi</th>
                                            <td style="padding: 10px 20px;">{{ $user->profile->hobi }}</td>
                                        </tr>
                                        <tr>
                                            <th style="padding: 10px 20px;">LinkedIn</th>
                                            <td style="padding: 10px 20px;">
                                                @if($user->profile->linkedin)
                                                    <a href="{{ $user->profile->linkedin }}" target="_blank">{{ $user->profile->linkedin }}</a>
                                                @else
                                                    Tidak ada LinkedIn
                                                @endif
                                            </td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td colspan="2" style="padding: 10px 20px;">Profil tidak tersedia.</td>
                                        </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                            <a href="{{ route('profileAdmin.edit', ['profileAdmin' => Auth::user()->id]) }}" class="btn btn-secondary" style="display: inline-block; margin-top: 20px;">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
