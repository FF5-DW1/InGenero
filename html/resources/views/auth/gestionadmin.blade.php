@extends('layouts.app')

@section('content')

<div>
    <div class="relative py-8 mt-10 bg-cover bg-center h-80">
        <img src="{{ asset('img/banner_profiles.webp') }}" alt="" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold leading-none text-black lg:text-2xl">Administrador@</h1>
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div class="w-10/12 md:w-6/12 lg:w-4/12 mb-2">
            <h1 class="text-2xl mb-4">Editar un perfil</h1>
            <form>
                <label for="búsqueda" class="mb-1 mt-1 text-sm font-medium text-gray-900 sr-only">A quién buscas...</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="búsqueda" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="A quién buscas..." required>
                </div>
            </form>
        </div>


        <div class="relative overflow-x-auto mt-4 mb-4">
            <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400 bg-green-100">
                <thead class="text-xs text-gray-700 uppercase bg-green-100 dark:text-gray-400">
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
                    <tr class="bg-green-100 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            <label class="relative inline-flex cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-red-500 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                            </label>
                        </td>
                        <td class="px-6 py-4">
                            Madrid, Ivón
                        </td>
                        <td class="px-6 py-4">
                            Estrella
                        </td>
                        <th scope="col" class="px-6 py-3 flex">
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/edit-2.svg') }}" alt="Editar" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/user-square.svg') }}" alt="Usuario" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                        </th>
                    </tr>
                    <tr class="bg-green-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="px-6 py-4">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-red-500 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                            </label>
                        </td>
                        <td class="px-6 py-4">
                            Pérez, Sabina
                        </td>
                        <td class="px-6 py-4">
                            Madrina
                        </td>
                        <th scope="col" class="px-6 py-3 flex">
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/edit-2.svg') }}" alt="Editar" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/user-square.svg') }}" alt="Usuario" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                        </th>
                    </tr>
                    <tr class="bg-green-100 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3
                        </th>
                        <td class="px-6 py-4">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-red-500 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                            </label>
                        </td>
                        <td class="px-6 py-4">
                            Garcia, Patricia
                        </td>
                        <td class="px-6 py-4">
                            Estrella
                        </td>
                        <th scope="col" class="px-6 py-3 flex">
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/edit-2.svg') }}" alt="Editar" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/user-square.svg') }}" alt="Usuario" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                        </th>
                    </tr>
                    <tr class="bg-green-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            4
                        </th>
                        <td class="px-6 py-4">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-red-500 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                            </label>
                        </td>
                        <td class="px-6 py-4">
                            Caballero, Pablo
                        </td>
                        <td class="px-6 py-4">
                            Padrino
                        </td>
                        <th scope="col" class="px-6 py-3 flex">
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/edit-2.svg') }}" alt="Editar" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/user-square.svg') }}" alt="Usuario" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                        </th>
                    </tr>
                    <tr class="bg-green-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            5
                        </th>
                        <td class="px-6 py-4">
                            <label class="relative inline-flex cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-red-500 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                            </label>
                        </td>
                        <td class="px-6 py-4">
                            Carrasco, Eduardo
                        </td>
                        <td class="px-6 py-4">
                            Estrella
                        </td>
                        <th scope="col" class="px-6 py-3 flex">
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/edit-2.svg') }}" alt="Editar" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/user-square.svg') }}" alt="Usuario" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                        </th>
                    </tr>

                    <!---------------------- MÁS PERFILES QUE AÑADIR ------------------------------------>
                    <tr class="bg-green-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            6
                        </th>
                        <td class="px-6 py-4">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-red-500 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                            </label>
                        </td>
                        <td class="px-6 py-4">
                            Apellidos, Nombre
                        </td>
                        <td class="px-6 py-4">
                            Estrella
                        </td>
                        <th scope="col" class="px-6 py-3 flex items-center">
                            <a href="#" class="ml-4">
                                <img src="{{ asset('img/edit-2.svg') }}" alt="Editar" class="mr-2" style="width: 30px; height: 26px;">
                            </a>
                            <a href="#" class="ml-4">
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