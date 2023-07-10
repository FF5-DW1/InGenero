@extends('layouts.app')

@section('content')

<!-- ENCABEZADO IMAGEN ADMIN -->
<div class="relative">
    <div class="py-10 mt-10 bg-cover bg-center h-80">
        <img src="{{ asset('img/banner_profiles.webp') }}" alt="" class="w-full h-full object-cover">
        <div class="absolute bottom-0 right-0 m-5 text-right">
            <h1 class="text-4xl font-extrabold leading-none text-white lg:text-2xl">Administrador@</h1>
        </div>

        <div class="flex justify-center">
            <div class="md:w-6/12 lg:w-4/12 mt-10">
                <h1 class="text-2xl mb-4 text-left">Crear un perfil Madrina</h1>
                <form action="{{ route('register') }}" method="POST" novalidate>
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-gray-500">Nombre</label>
                        <input id="name" name="name" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    </div>

                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-gray-500">Apellidos</label>
                        <input id="last_name" name="last_name" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    </div>

                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-gray-500">Descripción</label>
                        <input id="description" name="description" type="text" class="border-green-300 p-14 w-full rounded-lg bg-green-100" />
                    </div>
                    <!-- APARTADO FOTO / VIDEO / VIDEO BOOK - BUSCAR PARA SUBIR AL PERFIL -->
                    <div>
                        <p>Foto / Vídeo / Vídeobook de Perfil</p>
                        <button type="submit" class="bg-gray-300 hover:bg-gray-400 text-gray font-bold py-2 px-4 rounded mb-8 mt-4">
                            Buscar...
                        </button>
                    </div>

                    <input type="submit" value="Publicar" class="md:w-6/12 bg-black hover:bg-gray-400 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg" />

                </form>
            </div>
        </div>
        <footer class="py-10 mt-10 fixed top-0 bg-cover bg-center lg:h-800 w-full relative bg-green-100 flex flex-col items-center justify-center">
            <img src="img/logo 1.png" class="logo w-36 h-auto">
            <img src="img/firma_distrito_centro_madrid_pantoneazul 1.png" class="logo w-36 h-auto">
            <p class="text-center">In Género-Todos los derechos reservados @2023</p>
        </footer>
    </div>
    @endsection