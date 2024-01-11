<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GRADES</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <!-- Scripts -->
    <link href="{{ URL::asset('bootstrap-5.3.0-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('grades/style.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="font-sans antialiased">


    @yield('content')


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="{{ URL::asset('grades/main.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="{{ URL::asset('bootstrap-5.3.0-dist/js/bootstrap.js') }}" rel="stylesheet">

    @livewireScripts
    @yield('script')
</body>

</html>
