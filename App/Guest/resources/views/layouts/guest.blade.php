<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('shared.meta')
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="/vendor/fontawesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="/guest/css/style.css?v=1.0.0" rel="stylesheet">
        <link href="/guest/css/app.css?v=1.0.0" rel="stylesheet">
        @yield('head')
    </head>
    <body>
        @yield('content')
        <script type="text/javascript" src="/vendor/jquery/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="/vendor/materialize/0.97.7/js/materialize.min.js"></script>
        @yield('footer')
    </body>
</html>
