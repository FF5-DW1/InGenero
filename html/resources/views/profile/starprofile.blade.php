@extends('layouts.app')

@section('content')
    {{-- @php
        $images = [];
        if ($formprofile->profile_media) {
            $images = explode('*', $formprofile->profile_media);
        }
    @endphp --}}
    <div class="falseoNavbarAdmin"></div>
    <section class="bg-gray-7">
        <div id="encabezadoPerfil" class="breadcrumbs-custom box-transform-wrap context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Perfil {{ $formprofile->name }} {{ $formprofile->last_name }}</h3>
                <div class="breadcrumbs-custom-decor"></div>
            </div>
            <br>
            @if (!$formprofile->is_active)
                        <p class="text-white">Este perfil esta inactivo</p>
            @endif
        </div>
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Inicio</a></li>
                <li class="active">Perfil {{ $formprofile->name }} {{ $formprofile->last_name }}</li>
            </ul>
        </div>
    </section>
    <section id="contenedorPerfilIndividual">
        <div class="contenedorPerfilIndividualInterno">
            <section class="section section-last bg-default">
                <div class="container-fluid container-inset-0 isotope-wrap contenedorImagenesDePerfil">
                    <div class="row row-10 gutters-10 isotope contenedorDeContenedoresDeImagenes" data-isotope-layout="masonry" data-isotope-group="gallery"
                        data-lightgallery="group">
                        @foreach ($imagenes as $imagen)
                            <div class="col-xs-1 col-sm-3 col-xl-4 isotope-item oh-desktop contenedorDeContenedoresDeImagenes-item">
                                <article
                                    class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft contenedorImagenesEstrellas">
                                    <a class="thumbnail-mary-figure" href="{{ asset($imagen->ruta_imagen) }}"
                                        data-lightgallery="item">
                                        <img src="{{ asset($imagen->ruta_imagen) }}" alt="" width="310"
                                            height="585" />
                                    </a>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- Información -->
            <div class="mt-3">
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
                    if (strpos($url, 'vimeo.com/') !== false) {
                        $videoId = substr($url, strrpos($url, '/') + 1);
                    }
                @endphp
        
                @if ($videoId)
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item rounded-lg shadow"
                            src="https://player.vimeo.com/video/{{ $videoId }}" allowfullscreen></iframe>
                    </div>
                @else
                    <p>No se encontró el enlace del video.</p>
                @endif
            </div>
            <div class="falseoNavbarAdmin"></div>
        </div>
    </section>
@endsection
