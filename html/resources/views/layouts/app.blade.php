<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>InGenero</title>
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

</head>

<body>
    <div class="preloader">
        <div class="wrapper-triangle">
            <div class="pen">
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
    </div>

    <header>
        
        <x-navigation-bar/>

    </header>

    {{-- CONTENIDO --}}

    @yield('content')


    <footer>

        <x-footer-form />

    </footer>

    {{-- SCRIPTS --}}

    <script src="{{ asset('js\core.min.js') }}"></script>
    <script src="{{ asset('js\script.js') }}"></script>

</body>

</html>
