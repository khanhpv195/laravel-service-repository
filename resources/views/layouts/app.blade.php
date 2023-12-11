<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    @stack('myCss')
</head>

<body class="sidebar-mini sidebar-collapse" style="height: 100vh">
<div class="wrapper">
    @include('layouts.nav-top')
    @include('layouts.nav-left')
    <div class="content-wrapper">
        @yield('content')
    </div>
    <footer class="main-footer p-2 text-center border-0 shadow-sm">
        <small>{{ __('Developed By STI') }}</small>
    </footer>
</div>
@vite('resources/js/app.js')

@stack('scripts')
</body>

</html>
