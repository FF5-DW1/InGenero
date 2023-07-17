@extends('layouts.app')

@section('content')
    {{-- ENCABEZADO IMAGEN ADMIN --}}
    <div>
        <div class="relative py-8 mt-10 bg-cover bg-center h-80">
            <img src="{{ asset('img/banner_profiles.webp') }}" alt="" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <h1 class="text-4xl font-bold leading-none text-black lg:text-2xl">Administrador@</h1>
            </div>
        </div>

        <div class="flex justify-center">
            <div class=" w-10/12 md:w-6/12 lg:w-4/12 ">
                <h1 class="text-2xl mb-4 text-left">Crear un perfil Estrella</h1>
                <form method="POST"
                    action="{{ isset($formprofile->id) ? route('updateForm', ['id' => $formprofile->id]) : route('storeForm') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @if (isset($formprofile->id))
                        @method('PUT')
                    @endif

                    {{-- NOMBRE OBLIGATORIO --}}
                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-gray-500">
                            Nombre
                        </label>
                        <input id="name" name="name" type="text"
                            class="border-green-300 p-2 w-full rounded-lg bg-green-100 @error('name') border-red @enderror"
                            value="{{ $formprofile->name }}" />
                        @error('name')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="last_name" class="block mb-2 text-gray-500">
                            Apellidos
                        </label>
                        <input id="last_name" name="last_name" type="text"
                            class="border-green-300 p-2 w-full rounded-lg bg-green-100 @error('last_name') border-red @enderror"
                            value="{{ $formprofile->last_name }}" />
                        @error('last_name')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="nationality" class="block mb-2 text-gray-500">
                            Nacionalidad
                        </label>
                        <input id="nationality" name="nationality" type="text"
                            class="border-green-300 p-2 w-full rounded-lg bg-green-100"
                            value="{{ $formprofile->nationality }}" />

                        @error('nationality')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror


                    </div>

                    <div class="mb-4">
                        <label for="date_of_birth" class="block mb-2 text-gray-500">
                            Fecha de Nacimiento
                        </label>
                        <input id="date_of_birth" name="date_of_birth" type="date"
                            class="border-green-300 p-2 w-full rounded-lg bg-green-100"
                            value="{{ $formprofile->date_of_birth }}" />

                        @error('date_of_birth')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                    <div class="mb-4">
                        <label for="height" class="block mb-2 text-gray-500">
                            Altura
                        </label>
                        <input id="height" name="height" type="text"
                            class="border-green-300 p-2 w-full rounded-lg bg-green-100"
                            value="{{ $formprofile->height }}" />

                        @error('heigth')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                    <div class="mb-4">
                        <label for="weight" class="block mb-2 text-gray-500">
                            Peso
                        </label>
                        <input id="weight" name="weight" type="text"
                            class="border-green-300 p-2 w-full rounded-lg bg-green-100"
                            value="{{ $formprofile->weight }}" />

                        @error('weight')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                    <div class="mb-4">
                        <label for="eyes_color" class="block mb-2 text-gray-500">
                            Color de ojos
                        </label>
                        <input id="eyes_color" name="eyes_color" type="text"
                            class="border-green-300 p-2 w-full rounded-lg bg-green-100"
                            value="{{ $formprofile->eyes_color }}" />

                        @error('eyes_color')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                    <div class="mb-4">
                        <label for="hair_color" class="block mb-2 text-gray-500">
                            Color de pelo
                        </label>
                        <input id="hair_color" name="hair_color" type="text"
                            class="border-green-300 p-2 w-full rounded-lg bg-green-100"
                            value="{{ $formprofile->hair_color }}" />

                        @error('hair_color')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                    <div class="mb-4">
                        <label for="additional_info" class="block mb-2 text-gray-500">
                            Info. Adicional
                        </label>
                        <input id="additional_info" name="additional_info" type="text"
                            class="border-green-300 p-2 w-full rounded-lg bg-green-100"
                            value="{{ $formprofile->additional_info }}" />
                    </div>

                    <div class="mb-6">
                        <label for="artistic_skills" class="block mb-2 text-gray-500">
                            Habilidades artísticas
                        </label>
                        <input id="artistic_skills" name="artistic_skills" type="text"
                            class="border-green-300 p-6 w-full rounded-lg bg-green-100"
                            value="{{ $formprofile->artistic_skills }}" />

                        @error('artistic_skills')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                    <!-- APARTADO FOTO / VIDEO / VIDEO BOOK - BUSCAR PARA SUBIR AL PERFIL -->
                    <div class="mb-4">
                        <p>Foto / Video / VideoBook de Perfil</p>
                        {{-- <label for="profile_photo" class="bg-gray-300 hover:bg-gray-400 text-black font-bold py-2 px-4 rounded mb-8 mt-4">
                        Buscar
                    </label> --}}
                        <input id="profile_photo" name="profile_photo[]" type="file"
                            class="border-green-300 my-4 px-2 w-full rounded-lg bg-green-100" multiple />
                    </div>

                    <input type="submit" value="{{ isset($formprofile->id) ? 'Actualizar Perfil' : 'Publicar' }}"
                        class="md:w-6/12 bg-black hover:bg-gray-400 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg" />
                </form>
            </div>
        </div>
    </div>
@endsection
