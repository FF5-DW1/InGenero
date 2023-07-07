@extends('layouts.app') 

@section('content')
<div class="md:flex md:justify-center md:gap-10 md:items-center ">
    <!-- <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios" >
    </div> -->
        <h1>Crear perfil</h1>
        <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-xl" style="bg-green-400 bg-opacity-80 p-6; width: 758px; height: 111.5px; font-style: Urbanist">
        <form action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <div class="md:w-6/12 bg-green-400 bg-opacity-80 p-6 rounded-lg shadow-xl" style="width: 758px; height: 111.5px;">
                Nombre
                </label>
                <input 
                    id="name"
                    name="name"
                    type="text"
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}"
                />
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>

            <div class="md:w-6/12 bg-green-400 bg-opacity-80 p-6 rounded-lg shadow-xl" style="width: 758px; height: 111.5px;">
                <label for="last_name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Apellidos
                </label>
                <input 
                    id="last_name"
                    name="last_name"
                    type="text"
                    class="border p-3 w-full rounded-lg @error('apellidos') border-red-500 @enderror"
                    value="{{ old('lastname') }}"
            />
                @error('last_name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div class="md:w-8/16 bg-green-400 bg-opacity-80 p-6 rounded-lg shadow-xl"">
                <label for="nationality" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nacionalidad
                </label>
                <input 
                    id="nationality"
                    name="nationality"
                    type="text"
                    class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    value="{{ old('nationality') }}"
                />
                @error('nacionalidad')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-xl" style="background-color: white; width: 758px; height: 111.5px;">
                <label for="date" class="mb-2 block uppercase text-gray-500 font-bold">
                    Fecha de Nacimiento
                </label>
                <input 
                    id="date"
                    name="date"
                    type="text"
                    class="border p-3 w-full rounded-lg @error('date') border-red-500 @enderror"
                />
                @error('date')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-xl" style="background-color: white; width: 758px; height: 111.5px;">
                <label for="height" class="mb-2 block uppercase text-gray-500 font-bold">
                    Altura
                </label>
                <input 
                    id="height"
                    name="height"
                    type="text"
                    class="border p-3 w-full rounded-lg @error('height') border-red-500 @enderror"
                />
                @error('height')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>      
            <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-xl" style="background-color: white; width: 758px; height: 111.5px;">
                <label for="weight" class="mb-2 block uppercase text-gray-500 font-bold">
                    Peso
                </label>
                <input 
                    id="weight"
                    name="weight"
                    type="text"
                    class="border p-3 w-full rounded-lg @error('weight') border-red-500 @enderror"
                />
                @error('weight')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>  
            <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-xl" style="background-color: white; width: 758px; height: 111.5px;">
                <label for="eyes_color" class="mb-2 block uppercase text-gray-500 font-bold">
                    Color de ojos
                </label>
                <input 
                    id="eyes_color"
                    name="eyes_color"
                    type="text"
                    class="border p-3 w-full rounded-lg @error('eyes_color') border-red-500 @enderror"
                />
                @error('eyes_color')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>  
            
            <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-xl" style="background-color: white; width: 758px; height: 111.5px;">
                <label for="hair_color" class="mb-2 block uppercase text-gray-500 font-bold">
                    Color de pelo
                </label>
                <input 
                    id="hair_color"
                    name="hair_color"
                    type="text"
                    class="border p-3 w-full rounded-lg @error('hair_color') border-red-500 @enderror"
                />
                @error('hair_color')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>  
            <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-xl" style="background-color: white; width: 758px; height: 111.5px;">
                <label for="aditional_info" class="mb-2 block uppercase text-gray-500 font-bold">
                    Info. Adicional
                </label>
                <input 
                    id="aditional_info"
                    name="aditional_info"
                    type="text"
                    class="border p-3 w-full rounded-lg @error('aditional_info') border-red-500 @enderror"
                />
                @error('aditional_info')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>  
            <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-xl" style="background-color: white; width: 758px; height: 111.5px;">
                <label for="artistic_skills" class="mb-2 block uppercase text-gray-500 font-bold">
                    Habilidades Artísticas
                </label>
                <input 
                    id="artistic_skills"
                    name="artistic_skills"
                    type="text"
                    class="border p-3 w-full rounded-lg @error('artistic_skills') border-red-500 @enderror"
                />
                @error('artistic_skills')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div> 
<!-- APARTADO FOTO / VIDEO / VIDEO BOOK - BUSCAR PARA SUBIR AL PERFIL -->
            <input
            type="submit"
            value="Publicar"
            class="bg-black hover:bg-gray-900 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg"
            />


</form>
</div>
</div>
@endsection -->