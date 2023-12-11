<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body class="sidebar-mini sidebar-collapse">
<div class="wrapper">
    @auth
        @include('layouts.nav-top')
        @include('layouts.nav-left')
    @endauth
    <div class="content-wrapper">
        @yield('content')
    </div>
    <footer class="main-footer p-2 text-center border-0 shadow-sm">
        <small>{{ __('Developed By STI') }}</small>
    </footer>
</div>
@vite('resources/js/app.js')
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
@stack('scripts')
</body>

</html>
