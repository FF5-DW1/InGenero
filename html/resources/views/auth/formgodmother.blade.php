@extends('layouts.app')

@section('content')
    <!-- ENCABEZADO IMAGEN ADMIN -->
    <div class="falseoNavbarAdmin"></div>
    <div class="text-center">
        <div class="relative py-8 bg-cover bg-center h-80">
            <img src="{{ asset('img/banner_profiles.webp') }}" alt="" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <h3 class="font-bold leading-none text-black">Administrador@</h3>
                <h2 class="text-xl mb-4">Crear un perfil madrina</h2>
            </div>
        </div>

        <div class="containerFormProfile mx-auto px-4 md:px-12">
            <div class="max-w-xl mx-auto mt-8">

                <form class="text-left" method="POST"
                    action="{{ isset($formgodmother->id) ? route('updatemadrina', ['id' => $formgodmother->id]) : route('storeformmadrinas') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @if (isset($formgodmother->id))
                        @method('PUT')
                    @endif

                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-gray-500">
                            Nombre
                        </label>
                        <input id="name" name="name" type="text"
                            class="form-control @error('name') error-borderred @enderror"
                            value="{{ old('name', $formgodmother->name) }}" />
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
                            value="{{ old('last_name', $formgodmother->last_name) }}" />
                        @error('last_name')
                            <span class="error-textred">
                                El campo apellido es requerido.
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block mb-2 text-gray-500">
                            Descripción
                        </label>
                        <input id="description" name="description" type="text"
                            class="form-control @error('description') error-borderred @enderror"
                            value="{{ old('description', $formgodmother->description) }}" />
                        @error('description')
                            <span class="error-textred">
                                El campo de descripción es requerido.
                            </span>
                        @enderror
                    </div>

                    <!-- APARTADO FOTO -->
                    <div class="mb-4">
                        <p>Foto</p>
                        <input id="madrina_photo" name="madrina_photo" type="file"
                            class="border-green-300 my-4 px-2 w-full rounded-lg bg-green-100 @error('description') error-borderred @enderror" 
                            value="{{ old('madrina_photo', $formgodmother->madrina_photo) }}" />
                            @error('madrina_photo')
                                <span class="error-textred">
                                    Es requerido que suba 1 foto.
                                </span>
                            @enderror
                        </div>
                    
                    @if (isset($formgodmother->id))
                        <div class="mb-4">
                            <label for="is_active">Perfil activo</label>
                            <input name="is_active" id="is_active" type="checkbox"
                                {{ $formgodmother->is_active ? 'checked' : '' }}>
                        </div>
                    @endif


                    <div class="text-center mb-4">
                        <input type="submit" value="{{ isset($formgodmother->id) ? 'Actualizar Perfil' : 'Publicar' }}"
                            class="button button-md button-secondary-2 button-winona wow fadeInUp" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection