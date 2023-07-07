@extends('layouts.app') 

@section('content')
<div class="md:flex md:justify-center md:w-6-12 md:items-center">
    <!-- <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios" >
    </div> -->
        <div class="md:w-6/12 md:flex md:justify-center md:items-center bg-white p-6">
        <h1>Crear un perfil Estrella</h1>
        <form action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <div class="md:w-6/12 bg-white"">
            <label for="name" class="mb-2 block text-gray-500">
                Nombre
                </label>
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

            <div class="md:w-6/12 md:flex md:justify-center md:items-center bg-white p-6">
                <label for="last_name" class="mb-2 block text-gray-500 font-bold ">
                    Apellidos
                </label>
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
            <div class="md:w-6/12 md:flex md:justify-center md:items-center bg-white p-6">
                <label for="nationality" class="mb-2 block text-gray-500 font-bold">
                    Nacionalidad
                </label>
                <input 
                    id="nationality"
                    name="nationality"
                    type="text"
                    class="border-green-300 p-2 w-full rounded-lg @error('email') border-red-500 @enderror bg-green-100"
                    value="{{ old('nationality') }}"
                />
                @error('nacionalidad')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div class="md:w-6/12 md:flex md:justify-center md:items-center bg-white p-6">
                <label for="date" class="mb-2 block text-gray-500 font-bold">
                    Fecha de Nacimiento
                </label>
                <input 
                    id="date"
                    name="date"
                    type="text"
                    class="border-green-300 p-2 w-full rounded-lg @error('date') border-red-500 @enderror bg-green-100"
                />
                @error('date')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div class="md:w-6/12 md:flex md:justify-center md:items-center bg-white p-6">
                <label for="height" class="mb-2 block text-gray-500 font-bold">
                    Altura
                </label>
                <input 
                    id="height"
                    name="height"
                    type="text"
                    class="border-green-300 p-2 w-full rounded-lg @error('height') border-red-500 @enderror bg-green-100"
                />
                @error('height')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>      
            <div class="md:w-6/12 md:flex md:justify-center md:items-center bg-white p-6">
                <label for="weight" class="mb-2 block text-gray-500 font-bold">
                    Peso
                </label>
                <input 
                    id="weight"
                    name="weight"
                    type="text"
                    class="border-green-300 p-2 w-full rounded-lg @error('weight') border-red-500 @enderror bg-green-100"
                />
                @error('weight')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>  
            <div class="md:w-6/12 md:flex md:justify-center md:items-center bg-white p-6">
                <label for="eyes_color" class="mb-2 block text-gray-500 font-bold">
                    Color de ojos
                </label>
                <input 
                    id="eyes_color"
                    name="eyes_color"
                    type="text"
                    class="border-green-300 p-2 w-full rounded-lg @error('eyes_color') border-red-500 @enderror bg-green-100"
                />
                @error('eyes_color')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>  
            
            <div class="md:w-6/12 md:flex md:justify-center md:items-center bg-white p-6">
                <label for="hair_color" class="mb-2 block text-gray-500 font-bold">
                    Color de pelo
                </label>
                <input 
                    id="hair_color"
                    name="hair_color"
                    type="text"
                    class="border-green-300 p-2 w-full rounded-lg @error('hair_color') border-red-500 @enderror bg-green-100"
                />
                @error('hair_color')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>  
            <div class="md:w-6/12 md:flex md:justify-center md:items-center bg-white p-6">
                <label for="aditional_info" class="mb-2 block text-gray-500 font-bold">
                    Info. Adicional
                </label>
                <input 
                    id="aditional_info"
                    name="aditional_info"
                    type="text"
                    class="border-green-300 p-2 w-full rounded-lg @error('aditional_info') border-red-500 @enderror bg-green-100"
                />
                @error('aditional_info')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>  
            <div class="md:w-6/12 md:flex md:justify-center md:items-center bg-white p-6">
                <label for="artistic_skills" class="mb-2 block text-gray-500 font-bold">
                    Habilidades Artísticas
                </label>
                <input 
                    id="artistic_skills"
                    name="artistic_skills"
                    type="text"
                    class="border-green-300 p-6 w-full rounded-lg @error('artistic_skills') border-red-500 @enderror bg-green-100"
                />
                @error('artistic_skills')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div> 
<!-- APARTADO FOTO / VIDEO / VIDEO BOOK - BUSCAR PARA SUBIR AL PERFIL -->


                <p>Foto / Video / VideoBook de Perfil</p>

            <input
            type="submit"
            value="Publicar"
            class="md:w-6/12 bg-black hover:bg-gray-900 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg"
            />


</form>
</div>
</div>
@endsection 