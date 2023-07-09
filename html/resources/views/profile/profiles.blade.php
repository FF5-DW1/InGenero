@extends('layouts.app')

@section('content')
<div >
    {{-- banner --}}
    <div class="mb-10 py-10 sticky top-0 md:mb-30 lg:mb-50">
        <div class="absolute w-full bg-no-repeat">
            <img src="{{ asset('img/banner_profiles.webp') }}" alt="" class="w-full">
        </div>
        <div class="text-center m-5 relative lg:w-3/4 lg:text-left max-w-full">
            <h1 class="mb-4 text-2xl font-extrabold leading-none text-white lg:text-4xl py-4 sm:px-8 lg:px-20">Nuestras estrellas</h1>
            <p class="mb-8 text-white lg:text-xl sm:px-8 lg:px-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl.</p>
        </div>
    </div>

    {{-- todos los cards + boton más --}}
    <div class="relative bg-white justify-center items-center pt-10 pb-10">
        <form>   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Buscar</label>
            <div class="relative m-4 lg:mx-32 lg:my-14">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="border-none block w-full p-4 pl-10 text-sm text-gray-600 rounded-2xl bg-rose-50 focus:ring-rose-300 focus:border-rose-300" placeholder="Busqueda de perfiles..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-rose-400 hover:bg-rose-500 focus:ring-4 focus:outline-none focus:ring-rose-200 font-medium rounded-lg text-sm px-4 py-2 dark:bg-rose-200 dark:hover:bg-rose-500 dark:focus:ring-rose-500">Buscar</button>
            </div>
        </form>

        <div class="grid grid-flow-row gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mx-w-lg">

            <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto scale-100">
                <div class="text-center m-5">
                    <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Patricia Nogal</h4>
                </div>
                <div class="content-center">
                    <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_patricia2.jpg') }}" alt="imagen madrinas" />
                </div>
                <div class="text-center m-10">
                    <a href="#" class="center inline-flex items-center px-7 py-1.5 text-sm font-medium text-center text-black bg-white rounded-2xl border-solid border-2 border-black hover:bg-black hover:text-white">
                        Perfil
                    </a>
                </div>
            </div>

            <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto">
                <div class="text-center m-5">
                    <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Ana Garcia</h4>
                </div>
                <div class="content-center">
                    <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_ana2.jpg') }}" alt="imagen madrinas" />
                </div>
                <div class="text-center m-10">
                    <a href="#" class="center inline-flex items-center px-7 py-1.5 text-sm font-medium text-center text-black bg-white rounded-2xl border-solid border-2 border-black hover:bg-black hover:text-white">
                        Perfil
                    </a>
                </div>
            </div>

            <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto">
                <div class="text-center m-5">
                    <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Juan Jimenez</h4>
                </div>
                <div class="content-center">
                    <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_juan.jpg') }}" alt="imagen madrinas" />
                </div>
                <div class="text-center m-10">
                    <a href="#" class="center inline-flex items-center px-7 py-1.5 text-sm font-medium text-center text-black bg-white rounded-2xl border-solid border-2 border-black hover:bg-black hover:text-white">
                        Perfil
                    </a>
                </div>
            </div>

            <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto">
                <div class="text-center m-5">
                    <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Maria Rodriguez</h4>
                </div>
                <div class="content-center">
                    <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_maria.jpg') }}" alt="imagen madrinas" />
                </div>
                <div class="text-center m-10">
                    <a href="#" class="center inline-flex items-center px-7 py-1.5 text-sm font-medium text-center text-black bg-white rounded-2xl border-solid border-2 border-black hover:bg-black hover:text-white">
                        Perfil
                    </a>
                </div>
            </div>

            <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto">
                <div class="text-center m-5">
                    <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Pedro Diaz</h4>
                </div>
                <div class="content-center">
                    <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_pedro.jpg') }}" alt="imagen madrinas" />
                </div>
                <div class="text-center m-10">
                    <a href="#" class="center inline-flex items-center px-7 py-1.5 text-sm font-medium text-center text-black bg-white rounded-2xl border-solid border-2 border-black hover:bg-black hover:text-white">
                        Perfil
                    </a>
                </div>
            </div>

            <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto">
                <div class="text-center m-5">
                    <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Judith Romero</h4>
                </div>
                <div class="content-center">
                    <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_judith.jpg') }}" alt="imagen madrinas" />
                </div>
                <div class="text-center m-10">
                    <a href="#" class="center inline-flex items-center px-7 py-1.5 text-sm font-medium text-center text-black bg-white rounded-2xl border-solid border-2 border-black hover:bg-black hover:text-white">
                        Perfil
                    </a>
                </div>
            </div>
        </div>
        {{-- boton más  --}}
        <div class="text-center m-10">
            <a href="#" class="center mt-5 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-rose-400 hover:text-black">
                Ver más
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection



