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
                            class="form-control @error('name') error-borderred @enderror"
                            value="{{ old('name', $formprofile->name) }}" />
                        @error('name')
                            <span class="error-textred">
                                El campo nombre es requerido.
                            </span>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="last_name" class="block mb-2 text-gray-500">
                            Apellidos
                        </label>
                        <input id="last_name" name="last_name" type="text"
                            class="form-control @error('last_name') error-borderred @enderror"
                            value="{{ old('last_name', $formprofile->last_name) }}" />
                        @error('last_name')
                            <span class="error-textred">
                                El campo apellido es requerido.
                            </span>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="idiomas" class="block mb-2 text-gray-500">
                            Idiomas
                        </label>
                        <input id="idiomas" name="idiomas" type="text" class="form-control @error('idiomas') error-borderred @enderror"
                            value="{{ old('idiomas', $formprofile->idiomas) }}" />
                        @error('idiomas')
                            <span class="error-textred">
                                El campo idiomas es requerido.
                            </span>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="date_of_birth" class="block mb-2 text-gray-500">
                            Fecha de Nacimiento
                        </label>
                        <input id="date_of_birth" name="date_of_birth" type="date" class="form-control @error('date_of_birth') error-borderred @enderror"
                            value="{{ old('date_of_birth', $formprofile->date_of_birth) }}" />
                        @error('date_of_birth')
                            <span class="error-textred">
                                El campo fecha de nacimiento es requerido.
                            </span>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="height" class="block mb-2 text-gray-500">
                            Altura
                        </label>
                        <input id="height" name="height" type="text" class="form-control @error('height') error-borderred @enderror"
                            value="{{ old('height', $formprofile->height) }}" />
                        @error('height')
                            <span class="error-textred">
                                El campo altura es requerido.
                            </span>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="weight" class="block mb-2 text-gray-500">
                            Peso
                        </label>
                        <input id="weight" name="weight" type="text" class="form-control @error('weight') error-borderred @enderror"
                            value="{{ old('weight', $formprofile->weight) }}" />
                        @error('weight')
                            <span class="error-textred">
                                El campo peso es requerido.
                            </span>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="eyes_color" class="block mb-2 text-gray-500">
                            Color de ojos
                        </label>
                        <input id="eyes_color" name="eyes_color" type="text" class="form-control @error('eyes_color') error-borderred @enderror"
                            value="{{ old('eyes_color', $formprofile->eyes_color) }}" />
                        @error('eyes_color')
                            <span class="error-textred">
                                El campo color de ojos es requerido.
                            </span>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="hair_color" class="block mb-2 text-gray-500">
                            Color de pelo
                        </label>
                        <input id="hair_color" name="hair_color" type="text" class="form-control @error('hair_color') error-borderred @enderror"
                            value="{{ old('hair_color', $formprofile->hair_color) }}" />
                        @error('hair_color')
                            <span class="error-textred">
                                El campo color de pelo es requerido.
                            </span>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="additional_info" class="block mb-2 text-gray-500">
                            Info. Adicional
                        </label>
                        <input id="additional_info" name="additional_info" type="text" class="form-control @error('additional_info') error-borderred @enderror"
                            value="{{ old('additional_info', $formprofile->additional_info) }}" />
                        @error('additional_info')
                            <span class="error-textred">
                                El campo de informacion adicional es requerido.
                            </span>
                        @enderror
                    </div>

                        
                    <div class="mb-6">
                        <label for="artistic_skills" class="block mb-2 text-gray-500">
                            Habilidades artísticas
                        </label>
                        <input id="artistic_skills" name="artistic_skills" type="text" class="form-control @error('artistic_skills') error-borderred @enderror"
                            value="{{ old('artistic_skills', $formprofile->artistic_skills) }}" /> <br>

                        @error('artistic_skills')
                            <span class="error-textred">
                                El campo de habilidades artísticas es requerido.
                            </span>
                        @enderror
                    </div>

                    
                    <!-- APARTADO FOTO / VIDEO / VIDEO BOOK - BUSCAR PARA SUBIR AL PERFIL -->
                    <div class="mb-4">
                        <p>Foto / Video / VideoBook de Perfil</p>
                        <input id="profile_photo" name="profile_photo[]" type="file" class="form-control-file @error('profile_photo') error-borderred @enderror" 
                        value="{{ old('profile_photo', $formprofile->profile_photo) }}" multiple />
                        @error('profile_photo')
                            <span class="error-textred">
                                Es requerido que suba al menos 1 foto.
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="video_url">URL del Video de YouTube</label>
                        <input id="video_url" name="video_url" type="text" class="form-control" value="{{ $formprofile->video_url }}" />
                    </div>

                    @if (isset($formprofile->id))
                        <div class="mb-4">
                            <label for="is_active">Perfil activo</label>
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