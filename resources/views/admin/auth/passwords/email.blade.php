<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="{{ env('SITE_AUTHOR') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin | Forget</title>
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
                    <div class="col-md-8 col-lg-7">
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <?php echo session('status'); ?>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('admin.password.email') }}">
                                        @csrf
                                        <div class="form-head">
                                            <a href="{{ route('admin.login') }}" class="logo">
                                                <img src="{{ asset('admin/images/logo.svg') }}" class="img-fluid" alt="logo">
                                            </a>
                                        </div>
                                        <h4 class="text-primary my-4 ml-5">Reset Password</h4>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Send Password Reset Link') }}
                                                </button>
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
