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
    
        {{-- banner --}}
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Madrinas</h3>
                <div class="breadcrumbs-custom-decor"></div>
            </div>
            <div class="box-transform" style="background-image: url(img4k/pexels-photo-6896196.jpeg);"></div>
        </div>
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Inicio</a></li>
                <li class="active">Perfiles Madrinas</li>
            </ul>
        </div>

        
        <section id="contenedorDivPerfiles">
            <div id="contenedorPerfiles">
    
                @if (count($godmothers) > 0)
                    @foreach ($godmothers as $item)
                        <div id="card" class="wow slideInRight" data-wow-delay="0.3s">
                            <img class="wow fadeIn" data-wow-delay="0.3s"
                                src="{{ asset('img/' . getImage($item->profile_media)) }}" alt="imagen madrinas" />
                            <div>
                                <h5 class="">{{ $item->name }} {{ $item->last_name }}</h5>
                               
                                <div class="p-4 text-center">
                                    <p class="mb-3 font-semibold text-lg">{{ $item->description }}</p>
                                </div>
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
