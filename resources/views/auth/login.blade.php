@extends('auth.layouts.master')

@section('title', 'Masuk - Auth')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('assets/logo/testi_mart.jpg') }}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <span class="login100-form-title">
                        Masuk
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Email yang valid diperlukan: ex@abc.xyz">
                        <div style="position: relative;">
                            <input class="input100" id="email" type="email" name="email" placeholder="Email"
                                value="{{ old('email') }}" required autofocus autocomplete="username">
                            <span class="focus-input100"></span>
                            <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('email')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password diperlukan">
                        <div style="position: relative;">
                            <input class="input100" id="password" type="password" name="password" placeholder="Password"
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

                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            {{ __('Masuk') }}
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        @if (Route::has('password.request'))
                            <span class="txt1">
                                {{ __('Lupa') }}
                            </span>
                            <a class="txt2" href="{{ route('password.request') }}">
                                {{ __('Username / Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{ route('register') }}">
                            {{ __('Buat Akun Anda') }}
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
