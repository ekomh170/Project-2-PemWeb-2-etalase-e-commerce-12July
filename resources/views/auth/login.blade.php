<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('assets/auth/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('assets/auth/images/img-01.png') }}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <span class="login100-form-title">
                        Member Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        @error('email')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        @error('password')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            {{ __('Log in') }}
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        @if (Route::has('password.request'))
                            <span class="txt1">
                                {{ __('Forgot') }}
                            </span>
                            <a class="txt2" href="{{ route('password.request') }}">
                                {{ __('Username / Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{ route('register') }}">
                            {{ __('Create your Account') }}
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('assets/auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/auth/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/auth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/auth/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/auth/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/auth/js/main.js') }}"></script>

</body>

</html>
