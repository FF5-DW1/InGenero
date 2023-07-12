@extends('layouts.app')

@section('content')

<div>
    <div class="bg-rose-600 p-4 mt-28">
        <div class="max-w-2xl mx-auto bg-rose-600 overflow-hidden">
            <section>
                <div class="text-3xl text-white font-bold mb-2 justify-center mt-10 ">
                    <h1>Patricia Nogal</h1>
                </div>
                <div class="flex justify-center mt-10">
                    <img src="{{ asset('img/actress.svg') }}" alt="Foto de Patricia Nogal" class="h-90 w-90
                    object-cover rounded m-2 sm:h-128 sm:w-128 md:h-160 md:w-160 lg:h-240 lg:w-240 xl:h-320 xl:w-320 2xl:h-400 2xl:w-400">
                </div>
                <!-- Characteristics list -->
                <div class="px-2 py-4">
                    <ul class="text-white">
                        <li class="mb-1">
                            <span class="font-bold text-black">Nacionalidad: </span> México
                        </li>
                        <li class="mb-1">
                            <span class="font-bold text-black">Fecha Nacimiento: </span> 15/03/1993
                        </li>
                        <li class="mb-1">
                            <span class="font-bold text-black">Altura: </span> 167 cms
                        </li>
                    
                        <li class="mb-1">
                            <span class="font-bold text-black">Peso: </span> 67 kg
                        </li>
                
                        <li class="mb-1">
                            <span class="font-bold text-black">Color de ojos: </span> Marrón
                        </li>
        
                        <li class="mb-1">
                            <span class="font-bold text-black">Color de pelo: </span> Castaño oscuro
                        </li>
                        <li class="mb-1">
                            <span class="font-bold text-black">Info. Adicional: </span>Tattoos
                        </li>
                        <li class="mb-1">
                            <span class="font-bold text-black">Habilidades artísticas: </span>Canto y baile. Me gustaría poder trabajar en espectáculos de danza.
                        </li>
                    </ul>
                </div>
            </section>
            <section>
                <div id="default-carousel" class="relative w-full" data-carousel>
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        
                        <div class="hidden ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/actress.svg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:w-1/2 md:w-full" alt="foto patricia">
                        </div>
                    
                        <!-- Item 2 -->
                        
                        <div class="hidden ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/actress.svg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:w-1/2 md:w-full" alt="foto patricia">
                        </div>
                        
                        <!-- Item 3 -->
                        
                        <div class="hidden ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/actress.svg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:w-1/2 md:w-full" alt="foto patricia">
                        </div>
                        
                        <!-- Item 4 -->
                        
                        <div class="hidden ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/actress.svg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:w-1/2 md:w-full" alt="foto patricia">
                        </div>
                        
                        <!-- Item 5 -->
                        
                        <div class="hidden ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/actress.svg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:w-1/2 md:w-full" alt="foto patricia">
                        </div>
                        
                    </div>
                    {{-- -- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div> --}}
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                    {{-- Video Perfil--}}
                <div>
                    <video class="w-full rounded-lg mt-10 mb-10" autoplay muted controls>
                    <source src="video/video_patricia.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                    </video>
                </div>

                    {{-- Audio Perfil--}}
                <div class="audio-player">
                    <audio controls>
                        <source src="audio/happyrock.mp3" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </section>
        </div> 
        {{-- Apoyar --}}         
    </div>
</div>

@endsection
