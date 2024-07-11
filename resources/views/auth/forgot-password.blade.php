@extends('auth.layouts.master')

@section('title', 'Lupa Kata Sandi - Auth')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('assets/logo/testi_mart.jpg') }}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <span class="login100-form-title">
                        Lupa Kata Sandi
                    </span>

                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Lupa kata sandi Anda? Tidak masalah. Beri tahu kami alamat email Anda dan kami akan mengirimkan tautan reset kata sandi yang akan memungkinkan Anda memilih yang baru.') }}
                    </div>

                    <!-- Status Sesi -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Alamat Email -->
                    <div class="wrap-input100 validate-input" data-validate="Email yang valid diperlukan: ex@abc.xyz">
                        <div style="position: relative;">
                            <input class="input100" id="email" type="email" name="email" placeholder="Email"
                                value="{{ old('email') }}" required autofocus>
                            <span class="focus-input100"></span>
                            <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('email')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            {{ __('Kirim Tautan Reset Kata Sandi') }}
                        </button>
                    </div>

                    <!-- Tombol Kembali ke Halaman Login -->
                    <div class="text-center mt-3">
                        <a class="txt2" href="{{ route('login') }}">
                            {{ __('Kembali ke Halaman Login') }}
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
