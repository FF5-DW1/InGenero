@extends('layouts.app') 

@section('content')
<div class="md:flex md:justify-center md:items-center">
    <div class="md:w-6/12 lg:w-4/12 bg-white p-6">
        <h1 class="text-2xl mb-4">Crear un perfil Estrella</h1>
        <form action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Nombre:</label>
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
                <label for="name" class="block mb-2 text-gray-500">Apellidos:</label>
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
                <label for="name" class="block mb-2 text-gray-500">Nacionalidad:</label>
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
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Fecha de Nacimiento:</label>
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
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Altura:</label>
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
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Peso:</label>
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
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Color de ojos:</label>
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
            
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Color de pelo:</label>
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
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-500">Info. Adicional:</label>
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
            <div class="mb-6">
                <label for="name" class="block mb-2 text-gray-500">Habilidades artísticas:</label>
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