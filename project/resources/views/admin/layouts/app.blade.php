<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ mix('css/vendor.css', 'admin') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css', 'admin') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="sb-nav-fixed">
@yield('body')
<script src="{{ mix('js/manifest.js', 'admin') }}"></script>
<script src="{{ mix('js/vendor.js', 'admin') }}"></script>
<script src="{{ mix('js/app.js', 'admin') }}"></script>
@stack('scripts')
</body>
</html>
