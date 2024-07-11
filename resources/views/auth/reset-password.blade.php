@extends('auth.layouts.master')

@section('title', 'Reset Password - Auth')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('assets/logo/testi_mart.jpg') }}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <span class="login100-form-title">
                        Reset Password
                    </span>

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Alamat Email -->
                    <div class="wrap-input100 validate-input" data-validate="Email yang valid diperlukan: ex@abc.xyz">
                        <input class="input100" id="email" type="email" name="email" placeholder="Email"
                            value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        @error('email')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Kata Sandi -->
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" id="password" type="password" name="password" placeholder="Kata Sandi"
                            required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        @error('password')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Konfirmasi Kata Sandi -->
                    <div class="wrap-input100 validate-input" data-validate="Password confirmation is required">
                        <input class="input100" id="password_confirmation" type="password" name="password_confirmation"
                            placeholder="Konfirmasi Kata Sandi" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        @error('password_confirmation')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                            {{ __('Reset Kata Sandi') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
