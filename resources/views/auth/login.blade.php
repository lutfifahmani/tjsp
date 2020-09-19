<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TJSL Bappeda Samarinda') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="theme-blue">
<div class="container">
     

 <div class="login-wrapper">
        <div class="d-flex justify-content-center mt-5">
            <div class="card" id="login-card">
                <div class="card-body text-center">
                    <h3><span class="text-carolina bold">TJSP    </span>Samarinda</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center pb-3">
                            <h5 class="text-center bold">Sign-In</h5>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-user"></i></span>
                            </div>  
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-lock"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-checkbox">
                            <label>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="checkmark"><i class="ti-check"></i></span>
                                Remember
                            </label>
                            <div class="float-right"> @if (Route::has('password.request'))
                                    <a class="card-link" href="{{ route('password.request') }}" id="forget-password">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif</div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-carolina">Login</button>
                        </div>
                    </form>
                </div>
                
                
            </div>
</div>



</body>
</html>