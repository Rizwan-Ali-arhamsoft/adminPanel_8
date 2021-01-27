<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="{{ env('SITE_AUTHOR') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin | Login</title>
    <link rel="shortcut icon" href="{{ asset('admin\images\favicon.ico').env('ASSET_VERSION')}}">
    <link href="{{ asset('admin\css\bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\css\icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\css\flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\css\style.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="vertical-layout">
    <div id="containerbar" class="containerbar authenticate-bg">
        <div class="container">
            <div class="auth-box login-box">
                <div class="row no-gutters align-items-center justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin.login.submit') }}" method="post">
                                        @csrf
                                        <div class="form-head">
                                            <a href="{{ route('admin.login') }}" class="logo">
                                                <img src="{{ asset('admin/images/logo.svg') }}" class="img-fluid" alt="logo">
                                            </a>
                                        </div>
                                        <h4 class="text-primary my-4">Log in !</h4>
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required="">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox text-left">
                                                    <input type="checkbox" class="custom-control-input" id="rememberme" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                @if (Route::has('admin.password.request'))
                                                    <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg btn-block font-18 mb-3">Log in</button>
                                        <div class="form-row">
                                            <div class="col-sm-12">
                                                @if (Route::has('admin.register'))
                                                    <a class="btn btn-link" href="{{ route('admin.register') }}">
                                                       {{ __('Register') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin\js\jquery.min.js') }}"></script>
    <script src="{{ asset('admin\js\popper.min.js') }}"></script>
    <script src="{{ asset('admin\js\bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin\js\modernizr.min.js') }}"></script>
    <script src="{{ asset('admin\js\detect.js') }}"></script>
    <script src="{{ asset('admin\js\jquery.slimscroll.js') }}"></script>
</body>
</html>

