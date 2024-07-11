@extends('auth.layouts.master')

@section('title', 'Registrasi Akun - Auth')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('assets/logo/testi_mart.jpg') }}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <span class="login100-form-title">
                        Registrasi Member
                    </span>

                    <!-- Nama -->
                    <div class="wrap-input100 validate-input" data-validate="Nama diperlukan">
                        <div style="position: relative;">
                            <input class="input100" id="name" type="text" name="name" placeholder="Nama"
                                value="{{ old('name') }}" required autofocus autocomplete="name">
                            <span class="focus-input100"></span>
                            <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('name')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Alamat Email -->
                    <div class="wrap-input100 validate-input" data-validate="Email yang valid diperlukan: ex@abc.xyz">
                        <div style="position: relative;">
                            <input class="input100" id="email" type="email" name="email" placeholder="Email"
                                value="{{ old('email') }}" required autocomplete="username">
                            <span class="focus-input100"></span>
                            <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('email')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Kata Sandi -->
                    <div class="wrap-input100 validate-input" data-validate="Kata sandi diperlukan">
                        <div style="position: relative;">
                            <input class="input100" id="password" type="password" name="password" placeholder="Kata Sandi"
                                required autocomplete="new-password">
                            <span class="focus-input100"></span>
                            <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('password')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Konfirmasi Kata Sandi -->
                    <div class="wrap-input100 validate-input" data-validate="Konfirmasi kata sandi diperlukan">
                        <div style="position: relative;">
                            <input class="input100" id="password_confirmation" type="password" name="password_confirmation"
                                placeholder="Konfirmasi Kata Sandi" required autocomplete="new-password">
                            <span class="focus-input100"></span>
                            <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('password_confirmation')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            {{ __('Daftar') }}
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="{{ route('login') }}">
                            {{ __('Sudah punya akun?') }}
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
