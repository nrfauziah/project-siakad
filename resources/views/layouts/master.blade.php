<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">

    <title>Apk Sistem Akademik</title>

    <link rel="stylesheet" href="{{ asset('dist/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/modules/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/modules/summernote/summernote-lite.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/modules/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                @include('layouts.nav')
            </nav>
            <div class="main-sidebar">
                @include('layouts.sidebar')
            </div>
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021
                </div>
                <div class="footer-right"></div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('dist/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/modules/popper.js') }}"></script>
    <script src="{{ asset('dist/modules/tooltip.js') }}"></script>
    <script src="{{ asset('dist/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
    <script src="{{ asset('dist/js/sa-functions.js') }}"></script>
    
    <script src="{{ asset('dist/modules/chart.min.js') }}"></script>
    <script src="{{ asset('dist/modules/summernote/summernote-lite.js') }}"></script>

    <script src="{{ asset('dist/js/scripts.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>