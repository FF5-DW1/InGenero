@extends('layouts.app')

@section('content')
    @php
        function getImage($stringImage)
        {
            if ($stringImage) {
                $image = explode('*', $stringImage);
                return $image[0];
            }
            return 'avatar.jpg';
        }
    @endphp
    {{-- barra de busqueda --}}
    <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Perfiles</h3>
                <div class="breadcrumbs-custom-decor"></div>
            </div>
            <div class="box-transform" style="background-image: url(img4k/pexels-photo-6896196.jpeg);"></div>
        </div>
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Inicio</a></li>
                <li class="active">Perfiles</li>
            </ul>
            <div id="barraBusquedaPerfiles">
                <form class="formularioBusqueda" action="{{ route('getprofiles') }}" method="GET" novalidate>
                    <label for="search" class="sr-only">Buscar</label>
                    <input type="search" placeholder="Busqueda por nombre..." required name="search" id="search" />

                    <!--altura -->

                    <select name="height" id="height">
                        <option value="">Seleccione altura</option>
                        <option value="150">150</option>
                        <option value="180">180</option>
                    </select>


                    <!--habilidades -->

                    <select name="artistic_skills" id="artistic_skills">
                        <option value="">Seleccione habilidad</option>
                        <option value="Pintura">Pintura</option>
                        <option value="Cantar">Cantar</option>
                    </select>


                    <!--nacionalidad -->

                    {{-- <select name="idiomas" id="idiomas">
                        <option value="">Seleccione idioma</option>
                        <option value="Castellano">Castellano</option>
                        <option value="Portugues">Portugues</option>
                        <option value="Inglés">Inglés</option>
                        <option value="Italiano">Italiano</option>
                        <option value="Frances">Francés</option>
                    </select> --}}


                    <button type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </section>


    {{-- todos los cards --}}
    <section id="contenedorDivPerfiles">
        <div id="contenedorPerfiles">

            @if (count($profiles) > 0)
                @foreach ($profiles as $item)
                    <div id="card" class="wow slideInRight" data-wow-delay="0.3s">
                        <img class="wow fadeIn" data-wow-delay="0.3s"
                            src="{{ asset('img/' . getImage($item->profile_media)) }}" alt="imagen madrinas" />
                        <div>
                            <h4 class="">{{ $item->name }} {{ $item->last_name }}</h4>
                            {{-- <p>Lorem ipsum dolor sit amet</p> --}}
                            <a href="{{ route('starprofile', ['id' => $item->id]) }}" id="botonPerfiles"
                                class="button button-md button-secondary-2 button-winona wow fadeInUp">
                                Perfil
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div>
                    <p>No encontrado ningun perfil</p>
                </div>
            @endif



        </div>
    </section>
@endsection
