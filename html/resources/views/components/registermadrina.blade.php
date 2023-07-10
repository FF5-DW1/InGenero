@extends('layouts.app')

@section('content')

<!-- ENCABEZADO IMAGEN ADMIN -->
<img src="app/public/img/imagenhero.jpg" alt="Administrador">


<div class="md:flex md:justify-center md:items-center">

    <div class="md:w-6/12 lg:w-4/12 bg-white p-6">
        <h1 class="text-2xl mb-4">Crear un perfil Madrina</h1>
        <form action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Nombre</label>
                <input id="name" name="name" type="text" class="border-green-300 p-2 w-full rounded-lg @error('name') border-red-500 @enderror bg-green-100" value="{{ old('name') }}" />
            </div>

            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Apellidos</label>
                <input id="last_name" name="last_name" type="text" class="border-green-300 p-2 w-full rounded-lg @error('apellidos') border-red-500 @enderror bg-green-100" value="{{ old('lastname') }}" />
            </div>
            <div class="mb-4">

                <div class="mb-6">
                    <label for="name" class="block mb-2 text-gray-500">Descripción/label>
                        <input id="description" name="description" type="text" class="border-green-300 p-12 w-full rounded-lg @error('artistic_skills') border-red-500 @enderror bg-green-100" />
                </div>
                <!-- APARTADO FOTO / VIDEO / VIDEO BOOK - BUSCAR PARA SUBIR AL PERFIL -->
                <div>
                    <p>Foto / Video / VideoBook de Perfil</p>
                </div>

                <button type="submit" class="bg-gray-400 hover:bg-gray-500 text-black font-bold py-2 px-4 rounded">
                    Buscar
                </button>

                <input type="submit" value="Publicar" class="md:w-6/12 bg-black hover:bg-gray-900 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg" />
        </form>
    </div>
</div>

<footer class="py-10 mt-10 fixed top-0 bg-cover bg-center lg:h-800 w-full relative bg-green-100 flex flex-col items-center justify-center">
    <img src="img/logo 1.png" class="logo w-36 h-auto">
    <img src="img/firma_distrito_centro_madrid_pantoneazul 1.png" class="logo w-36 h-auto">
    <p class="text-center">In Género-Todos los derechos reservados @2023</p>
</footer>
@endsection