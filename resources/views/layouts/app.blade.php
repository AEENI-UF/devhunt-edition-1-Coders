<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('log/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('log/js/popper.min.js')}}"></script>
    <script src="{{ asset('log/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('log/js/main.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('log/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('log/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('log/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('log/css/style.css') }}">
</head>
<body>
    <div id="app">
    
 
         <main class="py-4">
            @yield('content')
        </main> 
    </div>
</body>
</html>
