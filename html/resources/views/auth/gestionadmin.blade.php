@extends('layouts.app_forms')

@section('content')

<div>
    <div class="relative py-8 mt-10 bg-cover bg-center h-80">
        <img src="{{ asset('img/banner_profiles.webp') }}" alt="" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold leading-none text-black lg:text-2xl">Administrador@</h1>
        </div>
    </div>
    <div class="flex justify-center">
        <div class=" w-10/12 md:w-6/12 lg:w-4/12 ">
            <h1 class="text-2xl mb-4 text-left">Editar un perfil</h1>
        </div>


        @csrf
        <footer class="py-10 mt-10 top-0 bg-cover bg-center lg:h-800 w-full relative bg-green-100 flex flex-col items-center justify-center">
            <img src="img/logo 1.png" class="logo w-36 h-auto">
            <img src="img/firma_distrito_centro_madrid_pantoneazul 1.png" class="logo w-36 h-auto">
            <p class="text-center">In Género-Todos los derechos reservados @2023</p>
        </footer>
        @endsection
    </div>