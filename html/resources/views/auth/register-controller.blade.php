@extends('layouts.app')

@section('content')

<!-- ENCABEZADO IMAGEN ADMIN -->
<div>
    <div class="py-10 mt-10 sticky top-0 bg-cover bg-center lg:h-800 w-1920">
        <div class="absolute w-full bg-no-repeat overflow-hidden">
            <img src="{{ asset('img/encabezado1.jpg') }}" alt="" class="w-full object-fill h-48 w-">
        </div>
        <div class="text-right m-5 lg:my-12 relative top-20 lg:w-3/4 lg:text-left max-w-full">
            <h1 class="m-4 text-2xl font-extrabold leading-none text-white lg:text-4xl py-4 sm:px-8 lg:px-20">Administrador@</h1>
        </div>
    </div>

    <div class="md:w-6/12 lg:w-4/12 relative bg-white p-6">
        <h1 class="text-2xl mb-4">Crear un perfil Estrella</h1>
        <form action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Nombre</label>
                <input id="name" name="name" type="text" class="border-green-300 p-2 w-full rounded-lg @error('name') border-red-500 @enderror bg-green-100"/>
            </div>

            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Apellidos</label>
                <input id="last_name" name="last_name" type="text" class="border-green-300 p-2 w-full rounded-lg @error('apellidos') border-red-500 @enderror bg-green-100"/>
            </div>
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Nacionalidad</label>
                <input id="nationality" name="nationality" type="text" class="border-green-300 p-2 w-full rounded-lg @error('email') border-red-500 @enderror bg-green-100" />
            </div>
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Fecha de Nacimiento</label>
                <input id="date" name="date" type="text" class="border-green-300 p-2 w-full rounded-lg @error('date') border-red-500 @enderror bg-green-100" />
            </div>
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Altura</label>
                <input id="height" name="height" type="text" class="border-green-300 p-2 w-full rounded-lg @error('height') border-red-500 @enderror bg-green-100" />
            </div>
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Peso</label>
                <input id="weight" name="weight" type="text" class="border-green-300 p-2 w-full rounded-lg @error('weight') border-red-500 @enderror bg-green-100" />
            </div>
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Color de ojos</label>
                <input id="eyes_color" name="eyes_color" type="text" class="border-green-300 p-2 w-full rounded-lg @error('eyes_color') border-red-500 @enderror bg-green-100" />
            </div>

            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Color de pelo</label>
                <input id="hair_color" name="hair_color" type="text" class="border-green-300 p-2 w-full rounded-lg @error('hair_color') border-red-500 @enderror bg-green-100" />
            </div>
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Info. Adicional</label>
                <input id="aditional_info" name="aditional_info" type="text" class="border-green-300 p-2 w-full rounded-lg @error('aditional_info') border-red-500 @enderror bg-green-100" />
            </div>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-gray-500">Habilidades artísticas</label>
                <input id="artistic_skills" name="artistic_skills" type="text" class="border-green-300 p-6 w-full rounded-lg @error('artistic_skills') border-red-500 @enderror bg-green-100" />
            </div>
            <!-- APARTADO FOTO / VIDEO / VIDEO BOOK - BUSCAR PARA SUBIR AL PERFIL -->
            <div>
                <p>Foto / Video / VideoBook de Perfil</p>
                <button type="submit" class="bg-gray-400 hover:bg-gray-500 text-black font-bold py-2 px-4 rounded">
                    Buscar
                </button>
            </div>

            <input type="submit" value="Publicar" class="md:w-6/12 bg-black hover:bg-gray-900 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg" />

        </form>
    </div>

    <footer class="py-10 mt-10 fixed top-0 bg-cover bg-center lg:h-800 w-full relative bg-green-100 flex flex-col items-center justify-center">
        <img src="img/logo 1.png" class="logo w-36 h-auto">
        <img src="img/firma_distrito_centro_madrid_pantoneazul 1.png" class="logo w-36 h-auto">
        <p class="text-center">In Género-Todos los derechos reservados @2023</p>
    </footer>
</div>
@endsection