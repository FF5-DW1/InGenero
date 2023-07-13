@extends('layouts.app')

@section('content')

<div class="m-5">
    <div class="flex flex-col lg:flex-row mt-10 mx-auto justify-center px-6 my-12">
        <div class="w-full lg:w-1/2 flex justify-center items-center mb-10 lg:mb-0">
            <img src="{{ asset('img/nosotras2.jpg') }}" alt="Imagem" class="w-full h-auto rounded-lg md:object-cover lg:object-cover lg:scale-75 md:scale-90">
        </div>
        <div class="lg:w-1/2 flex flex-col justify-center lg:pr-24 w-full">
            <p class="text-xl font-semibold leading-relaxed text-justify md:text-left lg:text-left">Somos un grupo de teatro compuesto por artistas valientes. Uno de  nuestros grandes sueños es crecer profesionalmente en el ámbito de la interpretación. 
            <br>
            <br>
            Nuestra misión es utilizar el poder del arte para compartir historias auténticas y emocionantes que inspiran, crean conciencia y promueven la transformación social. A través de actuaciones cautivadoras, exploramos temas universales de superación, resiliencia y empoderamiento. 
        </div>
    </div>

    <div class="flex flex-col lg:flex-row md:mt-11 mx-auto justify-center px-6 my-12">
        <div class="lg:w-1/2 flex flex-col justify-center lg:pl-24 w-full order-last md:order-first lg:order-first">
            <p class="text-xl font-semibold leading-relaxed text-justify md-text-left lg:text-left">
            Con cada representación, buscamos desafiar estereotipos, fomentar la empatía y promover la igualdad, invitando a la reflexión y al cambio positivo en nuestra sociedad. 
            <br>
            <br>
            Somos un grupo de actores y actrices comprometidos con la construcción de un mundo más inclusivo, donde el respeto, la dignidad y la justicia sean los pilares fundamentales. 
            <br>
            <br>
            Junt@s, creamos un espacio de expresión creativa, donde nuestras voces se unen para transmitir mensajes de esperanza.</p>
        </div>
        <div class="w-full lg:w-1/2 flex justify-center items-center mb-10 lg:mb-0">
            <img src="{{ asset('img/nosotras1.jpg') }}" alt="Imagem" class="w-full h-auto rounded-lg md:object-cover lg:object-cover lg:scale-75 md:scale-90">
        </div>
    </div>
</div>



@endsection

