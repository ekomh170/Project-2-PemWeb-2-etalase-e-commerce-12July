@extends('auth.layouts.master')

@section('title', 'Confirm Password - Auth')

@section('content')
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{ asset('assets/auth/images/img-01.png') }}" alt="IMG">
                    </div>

                    <form class="login100-form validate-form" method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <span class="login100-form-title">
                            Confirm Password
                        </span>

                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                        </div>

                        <!-- Password -->
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" id="password" type="password" name="password" placeholder="Password"
                                required autocomplete="current-password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            @error('password')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                {{ __('Confirm') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
