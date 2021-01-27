<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="{{ env('SITE_AUTHOR') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel | @yield('title')</title>
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('admin\images\favicon.ico').env('ASSET_VERSION')}}">
    <link href="{{ asset('admin\plugins\slick\slick.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\plugins\slick\slick-theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\plugins\switchery\switchery.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\css\bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\css\icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\css\flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\css\style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\plugins\sweet-alert2\sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin\plugins\pnotify\css\pnotify.custom.min.css') }}" rel="stylesheet" type="text/css">
    @yield('styles')
</head>
<body class="vertical-layout">
    <div id="containerbar">
        @include('admin.sections.sidebar')
        @include('admin.sections.header')
        @yield('content')
        @include('admin.sections.footer')
    </div>
    <!-- Js -->
    <script type="text/javascript" src="{{ asset('admin\js\jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\js\popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\js\bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\js\modernizr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\js\detect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\js\jquery.slimscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\js\vertical-menu.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('admin\plugins\switchery\switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\plugins\slick\slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\plugins\sweet-alert2\sweetalert2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\plugins\pnotify\js\pnotify.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\plugins\validatejs\validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\js\core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin\js\custom.js') }}"></script>
    <!-- Core JS -->
    <script type="text/javascript">
        @if (session('status'))
        new PNotify( {
            text: '{{ session('status') }}', type: 'success'
        });
        @endif
        @if (session('error'))
        new PNotify( {
            text: '{{ session('error') }}', type: 'danger'
        });
        @endif
    </script>
    @yield('scripts')
</body>
</html>
