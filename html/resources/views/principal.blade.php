@extends('layouts.app')

@section('content')
    <div class="fixed z-40 w-full h-16 bg-white"></div>
    <section class="flex-col w-full flex items-center justify-center mt-14">
        <div class="relative">
            <video class="w-full pb-4 h-screen object-cover opacity-50" src="video/631382089.mp4" autoplay="true" muted="true" loop="true"></video>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <h1 class="text-black z-10 text-3xl font-bold">Vivir es puro teatro</h1>
                <a class="w-32 flex items-center justify-center mt-8 text-black font-semibold bg-transparent border-solid border-2 border-black p-1 rounded-full transition-all hover:bg-black hover:text-white hover:border-transparent" href="#">
                    Perfiles
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a class="w-32 flex items-center justify-center mt-4 text-black font-semibold bg-transparent border-solid border-2 border-black p-1 rounded-full transition-all hover:bg-black hover:text-white hover:border-transparent" href="#">
                    Más info
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="p-4 flex flex-wrap justify-between max-w-screen-xl mb-6">
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
                        technology acquisitions of 2021 so far, in reverse chronological order Here are the biggest
                        enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order in reverse chronological
                        order in reverse chronological order in reverse chronological order.</p>
                    <a href="#"
                        class=" rounded-3xl inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
                        Leer más
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 10">
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
            <h2 class="mt-8 mb-2 text-3xl font-semibold text-center text-white">Nuestras estrellas</h2>
        </div>

        <div class="bg-red-500 w-full">


            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-96 overflow-hidden md:h-96">
                    <!-- Perfil 1 -->
                    <div class="duration-700 h-96 mt-4 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs  bg-white  p-4 rounded-xl flex-col items-center justify-center">
                            <p class="text-center font-semibold text-2xl mb-6">Patricia Nogal</p>
                            <a href="#">
                                <img class="mb-4" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                            <div class="flex justify-center items-center mt-6">
                                <a href="#"
                                    class="justify self auto text-center rounded-3xl inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
                                    Perfil
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Perfil 2 -->
                    <div class="duration-700 h-96 mt-4 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs  bg-white  p-4 rounded-xl flex-col items-center justify-center">
                            <p class="text-center font-semibold text-2xl mb-6">Patricia Nogal</p>
                            <a href="#">
                                <img class="mb-4" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                            <div class="flex justify-center items-center mt-6">
                                <a href="#"
                                    class="justify self auto text-center rounded-3xl inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
                                    Perfil
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Perfil 3 -->
                    <div class="duration-700 h-96 mt-4 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs  bg-white  p-4 rounded-xl flex-col items-center justify-center">
                            <p class="text-center font-semibold text-2xl mb-6">Patricia Nogal</p>
                            <a href="#">
                                <img class="mb-4" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                            <div class="flex justify-center items-center mt-6">
                                <a href="#"
                                    class="justify self auto text-center rounded-3xl inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
                                    Perfil
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Perfil 4 -->
                    <div class="duration-700 h-96 mt-4 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs  bg-white  p-4 rounded-xl flex-col items-center justify-center">
                            <p class="text-center font-semibold text-2xl mb-6">Patricia Nogal</p>
                            <a href="#">
                                <img class="mb-4" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                            <div class="flex justify-center items-center mt-6">
                                <a href="#"
                                    class="justify self auto text-center rounded-3xl inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
                                    Perfil
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Perfil 5 -->
                    <div class="duration-700 h-96 mt-4 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs  bg-white  p-4 rounded-xl flex-col items-center justify-center">
                            <p class="text-center font-semibold text-2xl mb-6">Patricia Nogal</p>
                            <a href="#">
                                <img class="mb-4" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                            <div class="flex justify-center items-center mt-6">
                                <a href="#"
                                    class="justify self auto text-center rounded-3xl inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
                                    Perfil
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <div class="bg-red-500 flex items-center justify-center mb-6">
        <a href="#"
            class="rounded-3xl inline-flex items-center px-3 py-2 m-10 text-sm font-medium text-center text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
            Ver todas
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>


    {{-- Apoyar --}}

    <section class="flex-col w-full flex items-center justify-center mt-14">

        <div class="text-center">
            <a href="#">
                <h5 class="mb-4 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">¡Apoya nuestra carrera!
                </h5>
            </a>
        </div>
        <div class="mb-8 p-4 flex flex-wrap justify-between max-w-screen-xl">
            <div class="w-full md:w-1/2">
                <a href="#">
                    <img class="mb-8 rounded-xl max-w-md w-full md:max-w-none" src="/img/imagenhero.jpg"
                        alt="imagen de gente actuando" />
                </a>
            </div>
            <div class="w-full md:w-1/2">
                <div class="pl-4 text-center">
                    <p class="text-center  font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology lolololo acquisitions of 2021 so far, in reverse chronological order Here are the
                        technology acquisitions of 2021 so far, in reverse chronological </p>
                    <a href="#"
                        class="mt-8 rounded-3xl inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
                        Más info
                    </a>
                </div>
            </div>
        </div>



        {{-- CARUSEL MADRINAS --}}


        <div class="bg-red-500 w-full p-4">
            <h2 class="mt-8 mb-2 text-3xl font-semibold text-center text-white">Nuestras madrinas</h2>
        </div>
        <div class="bg-red-500 w-full">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-96 overflow-hidden md:h-96">
                    <!-- Perfil 1 -->
                    <div class="duration-700 h-96 mt-4 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs  bg-white  p-4 rounded-xl flex-col items-center justify-center">
                            <div>
                                <a href="#">
                                    <img class="mb-4" src="/img/imagenhero.jpg" alt="imagen perfil" />
                                </a>
                            </div>
                            <div class="flex-col justify-center items-center mt-4">
                                <a href="#" class=text-center rounded-3xl inline-flex items-center px-3 py-2 text-xl
                                    font-medium">
                                    <p class="text-center font-semibold text-2xl mb-4">Inma Cuesta 1</p>
                                    <p>Actriz de renombre se une al programa InGenero</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Perfil 2 -->
                    <div class="duration-700 h-96 mt-4 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs  bg-white  p-4 rounded-xl flex-col items-center justify-center">
                            <a href="#">
                                <img class="mb-4" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                            <div class="flex-col justify-center items-center mt-4">
                                <a href="#" class=text-center rounded-3xl inline-flex items-center px-3 py-2 text-xl
                                    font-medium">
                                    <p class="text-center font-semibold text-2xl mb-4">Inma Cuesta</p>
                                    <p>Actriz de renombre se une al programa InGenero</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Perfil 3 -->
                    <div class="duration-700 h-96 mt-4 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs  bg-white  p-4 rounded-xl flex-col items-center justify-center">
                            <a href="#">
                                <img class="mb-4" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                            <div class="flex-col justify-center items-center mt-4">
                                <a href="#" class=text-center rounded-3xl inline-flex items-center px-3 py-2 text-xl
                                    font-medium">
                                    <p class="text-center font-semibold text-2xl mb-4">Inma Cuesta</p>
                                    <p>Actriz de renombre se une al programa InGenero</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Perfil 4 -->
                    <div class="duration-700 h-96 mt-4 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs  bg-white  p-4 rounded-xl flex-col items-center justify-center">
                            <a href="#">
                                <img class="mb-4" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                            <div class="flex-col justify-center items-center mt-4">
                                <a href="#" class=text-center rounded-3xl inline-flex items-center px-3 py-2 text-xl
                                    font-medium">
                                    <p class="text-center font-semibold text-2xl mb-4">Inma Cuesta</p>
                                    <p>Actriz de renombre se une al programa InGenero</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Perfil 5 -->
                    <div class="duration-700 h-96 mt-4 ease-in-out flex items-center justify-center" data-carousel-item>
                        <div class="max-w-xs  bg-white  p-4 rounded-xl flex-col items-center justify-center">
                            <a href="#">
                                <img class="mb-4" src="/img/imagenhero.jpg" alt="imagen perfil" />
                            </a>
                            <div class="flex-col justify-center items-center mt-4">
                                <a href="#" class=text-center rounded-3xl inline-flex items-center px-3 py-2 text-xl
                                    font-medium">
                                    <p class="text-center font-semibold text-2xl mb-4">Inma Cuesta</p>
                                    <p>Actriz de renombre se une al programa InGenero</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <div class="bg-red-500 flex items-center justify-center mb-0">
        <a href="#"
            class="rounded-3xl inline-flex items-center px-3 py-2 m-10 text-sm font-medium text-center text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring--800">
            Ver todas
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
    
    
@endsection
