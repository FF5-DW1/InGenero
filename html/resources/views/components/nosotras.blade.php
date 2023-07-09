@extends('layouts.app')

@section('content')

<div class="flex flex-col md:flex-row lg:flex-row my-32 mx-auto justify-center lg:w-4/5 px-6">
    <div class="w-full md:w-1/2 lg:w-1/2 flex justify-center items-center mb-10 md:mb-0 lg:mb-0">
    <img src="{{ asset('img/teatro2.png') }}" alt="Imagem" class="w-full h-auto rounded-lg md:w-4/5 lg:w-4/5 md:object-cover lg:object-cover lg:scale-75">
    </div>
    <div class="w-full md:w-2/3 lg:w-1/2 flex flex-col justify-center items-left">
    <p class="text-lg md:text-lg lg:text-xl md:w-4/5 lg:w-4/5 font-semibold leading-relaxed text-justify lg:text-left">Somos un grupo de teatro compuesto por artistas valientes. Uno de  nuestros grandes sueños es crecer profesionalmente en el ámbito de la interpretación.
        Nuestra misión es utilizar el poder del arte para compartir historias auténticas y emocionantes que inspiran, crean conciencia y promueven la transformación social. A través de actuaciones cautivadoras, exploramos temas universales de superación, resiliencia y empoderamiento. 
        
        Con cada representación, buscamos desafiar estereotipos, fomentar la empatía y promover la igualdad, invitando a la reflexión y al cambio positivo en nuestra sociedad. Somos un grupo de actores y actrices comprometidos con la construcción de un mundo más inclusivo, donde el respeto, la dignidad y la justicia sean los pilares fundamentales. Junt@s, creamos un espacio de expresión creativa, donde nuestras voces se unen para transmitir mensajes de esperanza.</p>
    </div>
</div>



@endsection

