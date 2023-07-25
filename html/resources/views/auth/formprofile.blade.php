@extends('layouts.app')

@section('content')
    {{-- ENCABEZADO IMAGEN ADMIN --}}
    <div class="falseoNavbarAdmin"></div>
    <div class="text-center">
        <div class="relative py-8 bg-cover bg-center h-80">
            <img src="{{ asset('img/banner_profiles.webp') }}" alt="" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <h3 class="font-bold leading-none text-black">Administrador@</h3>
                <h2 class="text-xl mb-4">Crear un perfil Estrella</h2>
            </div>
        </div>

        <div class="containerFormProfile mx-auto px-4 md:px-12">
            <div class="max-w-xl mx-auto mt-8">
                <form class="text-left" method="POST"
                    action="{{ isset($formprofile->id) ? route('updateform', ['id' => $formprofile->id]) : route('storeform') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @if (isset($formprofile->id))
                        @method('PUT')
                    @endif

                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-gray-500">
                            Nombre
                        </label>
                        <input id="name" name="name" type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ $formprofile->name }}" />
                        @error('name')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="last_name" class="block mb-2 text-gray-500">
                            Apellidos
                        </label>
                        <input id="last_name" name="last_name" type="text"
                            class="form-control @error('last_name') is-invalid @enderror"
                            value="{{ $formprofile->last_name }}" />
                        @error('last_name')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="idiomas" class="block mb-2 text-gray-500">
                            Idiomas
                        </label>
                        <input id="idiomas" name="idiomas" type="text" class="form-control"
                            value="{{ $formprofile->idiomas }}" />

                        @error('idiomas')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="date_of_birth" class="block mb-2 text-gray-500">
                            Fecha de Nacimiento
                        </label>
                        <input id="date_of_birth" name="date_of_birth" type="date" class="form-control"
                            value="{{ $formprofile->date_of_birth }}" />

                        @error('date_of_birth')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="height" class="block mb-2 text-gray-500">
                            Altura
                        </label>
                        <input id="height" name="height" type="text" class="form-control"
                            value="{{ $formprofile->height }}" />

                        @error('height')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="weight" class="block mb-2 text-gray-500">
                            Peso
                        </label>
                        <input id="weight" name="weight" type="text" class="form-control"
                            value="{{ $formprofile->weight }}" />

                        @error('weight')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="eyes_color" class="block mb-2 text-gray-500">
                            Color de ojos
                        </label>
                        <input id="eyes_color" name="eyes_color" type="text" class="form-control"
                            value="{{ $formprofile->eyes_color }}" />

                        @error('eyes_color')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="hair_color" class="block mb-2 text-gray-500">
                            Color de pelo
                        </label>
                        <input id="hair_color" name="hair_color" type="text" class="form-control"
                            value="{{ $formprofile->hair_color }}" />

                        @error('hair_color')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="additional_info" class="block mb-2 text-gray-500">
                            Info. Adicional
                        </label>
                        <input id="additional_info" name="additional_info" type="text" class="form-control"
                            value="{{ $formprofile->additional_info }}" />
                    </div>

                    <div class="mb-6">
                        <label for="artistic_skills" class="block mb-2 text-gray-500">
                            Habilidades artísticas
                        </label>
                        <input id="artistic_skills" name="artistic_skills" type="text" class="form-control"
                            value="{{ $formprofile->artistic_skills }}" /> <br>

                        @error('artistic_skills')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- APARTADO FOTO / VIDEO / VIDEO BOOK - BUSCAR PARA SUBIR AL PERFIL -->
                    <div class="mb-4">
                        <p>Foto / Video / VideoBook de Perfil</p>
                        <input id="profile_photo" name="profile_photo[]" type="file" class="form-control-file"
                            multiple />
                    </div>

                    @if (isset($formprofile->id))
                        <div class="mb-4">
                            <label for="is_active">Estado</label>
                            <input name="is_active" id="is_active" type="checkbox"
                                {{ $formprofile->is_active ? 'checked' : '' }}>
                        </div>
                    @endif

                    <div class="text-center mb-4">
                        <input type="submit" value="{{ isset($formprofile->id) ? 'Actualizar Perfil' : 'Publicar' }}"
                            class="button button-md button-secondary-2 button-winona wow fadeInUp" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
