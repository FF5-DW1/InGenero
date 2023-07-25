@extends('layouts.app')

@section('content')
    @php
        $images = [];
        if ($formprofile->profile_media) {
            $images = explode('*', $formprofile->profile_media);
        }
    @endphp
     <div class="falseoNavbarAdmin"></div>
    <section class="bg-gray-7">
        <div id="encabezadoPerfil" class="breadcrumbs-custom box-transform-wrap context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Perfil {{ $formprofile->name }} {{ $formprofile->last_name }}</h3>
                <div class="breadcrumbs-custom-decor"></div>
            </div>
        </div>
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Inicio</a></li>
                <li class="active">Perfil {{ $formprofile->name }} {{ $formprofile->last_name }}</li>
            </ul>
        </div>
    </section>
    
    <div class="container mt-4" style="max-width: 1200px;">
        <div class="row">
            <div class="col-md-12">
                @if (count($images) > 1)
                    <div id="image-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicadores del carrusel -->
                        <ol class="carousel-indicators">
                            @foreach (array_filter($images) as $index => $item)
                                <li data-target="#image-carousel" data-slide-to="{{ $index }}"
                                    class="{{ $index === 0 ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                        <!-- Imágenes del carrusel -->
                        <div class="carousel-inner">
                            @foreach (array_filter($images) as $index => $item)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img src="{{ asset('img/' . $item) }}" class="d-block w-100 rounded-lg"
                                        alt="Foto {{ $index + 1 }}">
                                </div>
                            @endforeach
                        </div>
                        <!-- Controles del carrusel -->
                        <a class="carousel-control-prev" href="#image-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#image-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                @endif

                @if (count($images) == 1)
                    <div class="text-center mt-4">
                        <img src="{{ asset('img/' . $images[0]) }}" alt="Foto de {{ $formprofile->name }}"
                            class="img-fluid rounded-lg">
                    </div>
                @endif
            </div>
        </div>

        <!-- Información -->
        <div class="row">
            <div class="col-md-6">
                    <ul class="list-unstyled text-black">
                        <li class="mb-3">
                            <span class="font-weight-bold">Idiomas:</span> {{ $formprofile->idiomas }}
                        </li>
                        <li class="mb-3">
                            <span class="font-weight-bold">Fecha de Nacimiento:</span> {{ $formprofile->date_of_birth }}
                        </li>
                        <li class="mb-3">
                            <span class="font-weight-bold">Altura:</span> {{ $formprofile->height }} cms
                        </li>
                        <li class="mb-3">
                            <span class="font-weight-bold">Peso:</span> {{ $formprofile->weight }} kg
                        </li>
                        <li class="mb-3">
                            <span class="font-weight-bold">Color de ojos:</span> {{ $formprofile->eyes_color }}
                        </li>
                        <li class="mb-3">
                            <span class="font-weight-bold">Color de pelo:</span> {{ $formprofile->hair_color }}
                        </li>
                        <li class="mb-3">
                            <span class="font-weight-bold">Info. Adicional:</span> {{ $formprofile->additional_info }}
                        </li>
                        <li class="mb-3">
                            <span class="font-weight-bold">Habilidades artísticas:</span>
                            {{ $formprofile->artistic_skills }}
                        </li>
                    </ul>
                </div>
            </div> <br>
            <div class="col-md-6" style="max-width: 1220px">
                @php
                    $videoId = null;
                    $url = $formprofile->video_url;
                    if (strpos($url, 'youtu.be/') !== false) {
                        $videoId = substr($url, strrpos($url, '/') + 1);
                    } else if (preg_match('/\?v=([a-zA-Z0-9_-]+)/', $url, $matches)) {
                        $videoId = $matches[1];
                    }
                @endphp
            
                @if ($videoId)
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item rounded-lg shadow" src="https://www.youtube.com/embed/{{ $videoId }}"
                            allowfullscreen></iframe>
                    </div>
                @else
                    <p>No se encontró el enlace del video.</p>
                @endif
            </div>
            <div class="falseoNavbarAdmin"></div>
        </div>
    @endsection