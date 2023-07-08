@extends('layouts.app')

@section('content')
<div >
    {{-- banner --}}
    <div class="mb-20 sticky top-0 w-full md:mb-30 lg:mb-50">
        <div class="bg-gradient-to-t absolute w-full">
            <img src="{{ asset('img/banner_profiles.webp') }}" alt="" class="w-full">
        </div>
        <div class="text-center m-5 relative lg:w-3/4 lg:text-left max-w-full">
            <h1 class="text-white font-extrabold p-8 text-xl">Nuestras estrellas</h1>
            <p class="text-white px-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl,</p>
        </div>
    </div>

    {{-- todos los cards + boton más --}}
    <div class="relative bg-white justify-center items-center pt-10
                grid grid-flow-row gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mx-w-lg">
        <div class="max-w-xs bg-rose-400 border border-rose-700 rounded-xl shadow m-5 mx-auto scale-100">
            <div class="text-center m-5">
                <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Patricia Nogal</h4>
            </div>
            <div class="content-center">
                <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_patricia2.jpg') }}" alt="imagen madrinas" />
            </div>
            <div class="p-4 text-center">
                <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
            </div>
        </div>

        <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto">
            <div class="text-center m-5">
                <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Ana Garcia</h4>
            </div>
            <div class="content-center">
                <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_ana.jpg') }}" alt="imagen madrinas" />
            </div>
            <div class="p-4 text-center">
                <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
            </div>
        </div>

        <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto">
            <div class="text-center m-5">
                <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Juan Jimenez</h4>
            </div>
            <div class="content-center">
                <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_juan.jpg') }}" alt="imagen madrinas" />
            </div>
            <div class="p-4 text-center">
                <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
            </div>
        </div>

        <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto">
            <div class="text-center m-5">
                <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Maria Rodriguez</h4>
            </div>
            <div class="content-center">
                <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_maria.jpg') }}" alt="imagen madrinas" />
            </div>
            <div class="p-4 text-center">
                <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
            </div>
        </div>

        <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto">
            <div class="text-center m-5">
                <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Pedro Diaz</h4>
            </div>
            <div class="content-center">
                <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_pedro.jpg') }}" alt="imagen madrinas" />
            </div>
            <div class="p-4 text-center">
                <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
            </div>
        </div>

        <div class="max-w-xs bg-rose-400 border rounded-xl shadow m-5 mx-auto">
            <div class="text-center m-5">
                <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Judith Romero</h4>
            </div>
            <div class="content-center">
                <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/foto_judith.jpg') }}" alt="imagen madrinas" />
            </div>
            <div class="p-4 text-center">
                <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
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
@endsection



