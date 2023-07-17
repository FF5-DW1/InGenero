@extends('layouts.app')

@section('content')
    @php
        $images = [];
        if ($formprofile->profile_media) {
            $images = explode('*', $formprofile->profile_media);
        }
    @endphp
    <section class="bg-gray-7">
        <div id="encabezadoPerfil" class="breadcrumbs-custom box-transform-wrap context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Perfil {{ $formprofile->name }}</h3>
                <div class="breadcrumbs-custom-decor"></div>
            </div>
        </div>
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Inicio</a></li>
                <li class="active">Perfil {{ $formprofile->name }}</li>
            </ul>
        </div>
    </section>
    <div>
        <div class="bg-rose-600 p-4 mt-28">
            <div class="max-w-2xl mx-auto bg-rose-600 overflow-hidden">
                <section>
                    <div class="text-3xl text-white font-bold mb-2 justify-center mt-10">
                        <h1>{{ $formprofile->name }}</h1>
                    </div>
                    @if (count($images) > 1)
                        <div id="default-carousel" class="relative w-full" data-carousel>
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                <!-- Item 1 -->
                                @foreach ($images as $item)
                                    @if ($item)
                                        <div class="hidden ease-in-out" data-carousel-item>
                                            <img src="{{ asset('img/' . $item) }}"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:w-1/2 md:w-full"
                                                alt="foto patricia">
                                        </div>
                                    @endif
                                @endforeach
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
                            <button type="button"
                                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                    @endif

                    @if (count($images) == 1)
                        <div class="flex justify-center mt-10">
                            <img src="{{ asset('img/' . $images[0]) }}" alt="Foto de {{ $formprofile->name }}"
                                class="h-90 w-90
                    object-cover rounded m-2 sm:h-128 sm:w-128 md:h-160 md:w-160 lg:h-240 lg:w-240 xl:h-320 xl:w-320 2xl:h-400 2xl:w-400">
                        </div>
                    @endif



                    <!-- Characteristics list -->
                    <div class="px-2 py-4">
                        <ul class="text-white">
                            <li class="mb-1">
                                <span class="font-bold text-black">Nacionalidad: {{ $formprofile->nationality }} </span>
                            </li>
                            <li class="mb-1">
                                <span class="font-bold text-black">Fecha Nacimiento: {{ $formprofile->date_of_birth }}
                                </span>
                            </li>
                            <li class="mb-1">
                                <span class="font-bold text-black">Altura: {{ $formprofile->height }} cms </span>
                            </li>

                            <li class="mb-1">
                                <span class="font-bold text-black">Peso: {{ $formprofile->weight }} kg </span>
                            </li>

                            <li class="mb-1">
                                <span class="font-bold text-black">Color de ojos: {{ $formprofile->eyes_color }} </span>
                            </li>

                            <li class="mb-1">
                                <span class="font-bold text-black">Color de pelo: {{ $formprofile->hair_color }} </span>
                            </li>
                            <li class="mb-1">
                                <span class="font-bold text-black">Info. Adicional: {{ $formprofile->additional_info }}
                                </span>
                            </li>
                            <li class="mb-1">
                                <span class="font-bold text-black">Habilidades artísticas:
                                    {{ $formprofile->artistic_skills }} </span>
                            </li>
                        </ul>
                    </div>
                </section>
                <section>

                    {{-- Video Perfil --}}
                    <div>
                        <video class="w-full rounded-lg mt-10 mb-10" autoplay muted controls>
                            <source src="video/video_patricia.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </section>
            </div>

            {{-- Apoyar --}}
        </div>
    </div>

@endsection
