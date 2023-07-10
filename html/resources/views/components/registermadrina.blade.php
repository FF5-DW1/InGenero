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
                <input 
                    id="name"
                    name="name"
                    type="text"
                    class="border-green-300 p-2 w-full rounded-lg @error('name') border-red-500 @enderror bg-green-100"
                    value="{{ old('name') }}"
                />
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Apellidos</label>
                <input 
                    id="last_name"
                    name="last_name"
                    type="text"
                    class="border-green-300 p-2 w-full rounded-lg @error('apellidos') border-red-500 @enderror bg-green-100"
                    value="{{ old('lastname') }}"
            />
                @error('last_name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div class="mb-4">

            <div class="mb-6">
                <label for="name" class="block mb-2 text-gray-500">Descripción/label>
                <input 
                    id="description"
                    name="description"
                    type="text"
                    class="border-green-300 p-12 w-full rounded-lg @error('artistic_skills') border-red-500 @enderror bg-green-100"
                />
                @error('description')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div> 
<!-- APARTADO FOTO / VIDEO / VIDEO BOOK - BUSCAR PARA SUBIR AL PERFIL -->
            <p>Foto / Video / VideoBook de Perfil</p>

            <button type="submit" class="bg-gray-400 hover:bg-gray-500 text-black font-bold py-2 px-4 rounded">
                    Buscar
            </button>

            <input
            type="submit"
            value="Publicar"
            class="md:w-6/12 bg-black hover:bg-gray-900 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg"
            />
<!-- FOOTER -->

            <footer class="mb-6" bg-green-200>
                <p>In Género-Todos los derechos reservados @2023</p>
            <img src="html/app/public/img/logo1.png">
            </footer>
</form>
</div>
</div>
@endsection 