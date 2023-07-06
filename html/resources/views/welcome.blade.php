<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InGenero</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>

<body>

    <header>

        <x-register/>

    </header>

    {{-- CONTENIDO --}}

    <section class="flex-col w-full flex items-center justify-center">


        <div class="relative max-w-screen-xl">
            <video class="p-4 rounded-3xl opacity-50" src="video/631382089.mp4" autoplay="true" muted="true"
                loop="true"></video>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <h1 class="text-black z-10 text-3xl font-bold">Vivir es puro teatro</h1>
                <a class="w-32 flex items-center justify-center mt-8 text-black font-semibold bg-transparent border-solid border-2 border-black p-1 rounded-full transition-all hover:bg-black hover:text-white hover:border-transparent"
                    href="#">
                    Perfiles
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a class="w-32 flex items-center justify-center mt-4 text-black font-semibold bg-transparent border-solid border-2 border-black p-1 rounded-full transition-all hover:bg-black hover:text-white hover:border-transparent"
                    href="#">
                    Más info
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="p-4 flex flex-wrap justify-between max-w-screen-xl">
            <div class="w-full md:w-1/2">
                <a href="#">
                    <img class="mb-4 rounded-xl max-w-md w-full md:max-w-none" src="/img/imagenhero.jpg"
                        alt="imagen de gente actuando" />
                </a>
            </div>
            <div class="w-full md:w-1/2">
                <div class="pl-4">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class=" rounded-3xl inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
                        Leer más
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        </div>

        {{-- carrusel perfiles --}}

        <div class="bg-red-500 w-full">

            <h2 class="text-3xl font-semibold text-center">Nuestras estrellas</h2>

            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-96">
                    <!-- Perfil 1 -->
                    <div class="duration-700 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs bg-white p-6 rounded-xl flex-col items-center justify-center">
                            <p class="">Patricia Nogal</p>
                            <a href="#">
                                <img class="rounded-t-lg" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                            <a href="#"
                                class=" rounded-3xl inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
                                Perfil
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Perfil 2 -->
                    <div class="duration-700 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs bg-transparent">
                            <p>Patricia Nogal</p>
                            <a href="#">
                                <img class="rounded-t-lg" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                        </div>
                    </div>
                    <!-- Perfil 3 -->
                    <div class="duration-700 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs bg-transparent">
                            <p>Patricia Nogal</p>
                            <a href="#">
                                <img class="rounded-t-lg" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                        </div>
                    </div>
                    <!-- Perfil 4 -->
                    <div class="duration-700 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs bg-transparent">
                            <p>Patricia Nogal</p>
                            <a href="#">
                                <img class="rounded-t-lg" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                        </div>
                    </div>
                    <!-- Perfil 5 -->
                    <div class="duration-700 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs bg-transparent">
                            <p>Patricia Nogal</p>
                            <a href="#">
                                <img class="rounded-t-lg" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>



{{-- SCRIPTS --}}

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('index.js') }}">

< /body>

</html>
