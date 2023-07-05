<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InGenero</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .enlace:hover {
            background-color: #000000;
            color: #fff;
            border-color: transparent;
        }
    </style>

</head>

<body>
    <header>

        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center">
                    <img src="/img/logoencabezado.png" class="h-8 mr-3" alt="InGenero" />
                </a>

                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="enlace block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-700 md:p-0 dark:text-white md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                aria-current="page">Inicio</a>
                        </li>
                        <li>
                            <a href="#"
                                class="enlace block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-700 md:p-0 dark:text-white md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                aria-current="page">Perfiles</a>
                        </li>
                        <li>
                            <a href="#"
                                class="enlace block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-700 md:p-0 dark:text-white md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Nosotr@s</a>
                        </li>
                        <li>
                            <a href="#"
                                class="enlace block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-700 md:p-0 dark:text-white md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tu
                                cuenta</a>
                        </li>
                        <li>
                            <a href="#"
                                class="enlace block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-700 md:p-0 dark:text-white md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">¡Contáctanos!</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <div class="relative">
            <video class="p-4 rounded-3xl opacity-50" src="video/631382089.mp4" autoplay="true" muted="true"
                loop="true"></video>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <h1 class="text-black z-10 text-3xl font-bold">Vivir es puro teatro</h1>
                <a class="w-32 flex items-center justify-center mt-8 text-black font-semibold bg-transparent border-solid border-2 border-black p-1 rounded-full transition-all hover:bg-black hover:text-white hover:border-transparent"
                    href="#">
                    Perfiles
                </a>
                <a class="w-32 flex items-center justify-center mt-4 text-black font-semibold bg-transparent border-solid border-2 border-black p-1 rounded-full transition-all hover:bg-black hover:text-white hover:border-transparent"
                    href="#">
                    Más info
                </a>
            </div>
        </div>


    </header>


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('index.js') }}">
        < /body>

        <
        /html>
