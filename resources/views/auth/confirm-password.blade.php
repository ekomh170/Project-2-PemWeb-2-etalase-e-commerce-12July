@extends('auth.layouts.master')

@section('title', 'Konfirmasi Kata Sandi - Auth')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('assets/logo/testi_mart.jpg') }}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <span class="login100-form-title">
                        Konfirmasi Kata Sandi
                    </span>

                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Ini adalah area aman dari aplikasi. Harap konfirmasi kata sandi Anda sebelum melanjutkan.') }}
                    </div>

                    <!-- Kata Sandi -->
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <div style="position: relative;">
                            <input class="input100" id="password" type="password" name="password" placeholder="Kata Sandi"
                                required autocomplete="current-password">
                            <span class="focus-input100"></span>
                            <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('password')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            {{ __('Konfirmasi') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
