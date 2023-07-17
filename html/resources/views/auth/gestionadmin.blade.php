@extends('layouts.app')

@section('content')

@extends('layouts.app')

@section('content')

<div>
    <!-- ... Contenido anterior ... -->

    <div class="table-responsive mt-4 mb-4">
        <table class="table text-sm text-center text-gray-500">
            <thead class="text-xs text-white bg-green-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Activo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                    <tr class="bg-green-100">
                        <th scope="row" class="px-6 py-4 font-weight-medium text-dark whitespace-nowrap">
                            {{ $profile->id }} <!-- Imprimir ID del perfil -->
                        </th>
                        <td class="px-6 py-4">
                            <label class="form-check-label d-flex align-items-center cursor-pointer">
                                <input type="checkbox" value="" class="form-check-input sr-only">
                                <!-- Mostrar estado de activo/inactivo, por ejemplo con un icono -->
                                <span class="w-11 h-6 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600"></span>
                            </label>
                        </td>
                        <td class="px-6 py-4">
                            {{ $profile->name }} <!-- Imprimir nombre del perfil -->
                        </td>
                        <td class="px-6 py-4">
                           {{ $profile->type }}
                        </td>
                        <th scope="col" class="px-6 py-3 d-flex">
                            <a href="{{ route('editarperfil', ['id' => $profile->id]) }}" class="btn btn-primary">
                                <img src="{{ asset('img/edit-2.svg') }}" alt="Editar" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                        
                            <a href="{{ route('starprofile', ['id' => $profile->id]) }}"  class="btn btn-primary">
                                <img src="{{ asset('img/user-square.svg') }}" alt="Usuario" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>

        <footer class="bg-green-200 text-zinc w-full flex flex-col justify-center py-10">
            <div class="container mx-auto flex flex-wrap content-center justify-between">
                <div class="w-full md:w-1/4 mb-6">
                    <img src="img\logoencabezado.png" alt="Logo" class="logo w-38 h-12">
                </div>
                <div class="w-full md:w-1/5 mb-10">
                    <h4 class="text-lg font-bold">Redes Sociales</h4>
                    <div class="w-full md:w-1/2 flex mb-5">
                        <img src="img\TwitterLogo.png" alt="icono" class="icono w-10 h-10">
                        <img src="img\FacebookLogo.png" alt="icono" class="icono mx-1 w-10 h-10">
                        <img src="img\InstagramLogo.png" alt="icono" class="icono mx-1 w-10 h-10">
                        <img src="img\YoutubeLogo.png" alt="icono" class="icono mx-1 w-10 h-10">
                    </div>
                </div>
                <div class="w-full md:w-1/4 mb-6">
                    <img src="img\firmamadrid.png" alt="Logo2" class="logo2 w-78 h-20 w-full">
                </div>
            </div>
            <div class="container mx-auto mt-auto">
                <div class="w-full text-center">
                    <div class="IngeneroTodosLosDerechosReservados2023 text-black text-[18px] font-normal">
                        InGenero - todos los derechos reservados @2023
                    </div>
                </div>
            </div>

        </footer>
    </div>
    @endsection