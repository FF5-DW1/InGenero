<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InGenero</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body>

    <header>
        
        <x-navigation-bar/>

    </header>

{{-- CONTENIDO --}}

    @yield('content')


    <footer>

        <x-footer-form/>

    </footer>

{{-- SCRIPTS --}}

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('index.js') }}">

< /body>

</html>
