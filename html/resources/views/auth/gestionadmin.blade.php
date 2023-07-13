@extends('layouts.app_forms')

@section('content')

<div>
    <div class="relative py-8 mt-10 bg-cover bg-center h-80">
        <img src="{{ asset('img/banner_profiles.webp') }}" alt="" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold leading-none text-black lg:text-2xl">Administrador@</h1>
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div class="w-10/12 md:w-6/12 lg:w-4/12 mb-4">
            <h1 class="text-2xl text-left">Editar un perfil</h1>
        </div>

        <form>
            <label for="búsqueda" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">A quién buscas...</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="A quién buscas..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-green-100 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"></button>
            </div>
        </form>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 bg-green-100">
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
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-green-100 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Botón
                        </td>
                        <td class="px-6 py-4">
                            Madrid, Ivón
                        </td>
                        <td class="px-6 py-4">
                            Estrella
                        </td>
                        <td class="px-6 py-4 text-right">
                            <!-- BOTONES DE EDICCIÓN -->
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="bg-green-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Botón
                        </td>
                        <td class="px-6 py-4">
                            Pérez, Sabina
                        </td>
                        <td class="px-6 py-4">
                            Madrina
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="bg-green-100 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3
                        </th>
                        <td class="px-6 py-4">
                            Botón
                        </td>
                        <td class="px-6 py-4">
                            Garcia, Patricia
                        </td>
                        <td class="px-6 py-4">
                            Estrella
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="bg-green-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            4
                        </th>
                        <td class="px-6 py-4">
                            Botón
                        </td>
                        <td class="px-6 py-4">
                            Caballero, Pablo
                        </td>
                        <td class="px-6 py-4">
                            Padrino
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="bg-green-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            5
                        </th>
                        <td class="px-6 py-4">
                            Botón
                        </td>
                        <td class="px-6 py-4">
                            Carrasco, Eduardo
                        </td>
                        <td class="px-6 py-4">
                            Estrella
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <footer class="py-10 mt-10 top-0 bg-cover bg-center lg:h-800 w-full relative bg-green-100 flex flex-col items-center justify-center">
            <img src="img/logo 1.png" class="logo w-36 h-auto">
            <img src="img/firma_distrito_centro_madrid_pantoneazul 1.png" class="logo w-36 h-auto">
            <p class="text-center">In Género-Todos los derechos reservados @2023</p>
        </footer>
    </div>
    @endsection