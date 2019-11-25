<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"defer></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/styleregister.css') }}" rel="stylesheet" media="screen">
</head>
<body>
    <div class="header">
      <a href="{{ url('/') }}"><h1>T<span class="iso">!</span>CKET</h1></a>
    </div>
    @yield('content')
</body>
</html>