{{-- @extends('layouts.app')

@section('content') --}}
<div >
    {{-- banner --}}
    <div class="mb-20 sticky top-0">
        <div class="bg-gradient-to-t absolute">
            <img src="{{ asset('img/madrina_banner.jpg') }}" alt="" class="scale-125">
        </div>
        <div class="text-center m-5 relative">
            <h1 class="text-white font-extrabold p-8">Nuestras madrinas</h1>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl,</p>
        </div>
    </div>

    {{-- todos los cards + boton más --}}
    <div class="content-center relative bg-white">
        <div class="max-w-xs bg-gray-100 border border-gray-700 rounded-xl shadow m-5">
            <div class="text-center m-5">
                <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Inma Cuesta</h4>
            </div>
            <div class="content-center">
                <img class="rounded-xl w-10/12 m-5 mb-2 scale-100" src="{{ asset('img/madrina.png') }}" alt="imagen madrinas" />
            </div>
            <div class="p-4 text-center">
                <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
            </div>
        </div>

        <div class="max-w-xs bg-gray-100 border border-gray-700 rounded-xl shadow m-5">
            <div class="text-center m-5">
                <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Inma Cuesta</h4>
            </div>
            <div class="content-center">
                <img class="rounded-xl w-10/12 m-5 mb-2" src="{{ asset('img/madrina.png') }}" alt="imagen madrinas" />
            </div>
            <div class="p-4 text-center">
                <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
            </div>
        </div>

        <div class="max-w-xs bg-gray-100 border border-gray-700 rounded-xl shadow m-5">
            <div class="text-center m-5">
                <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Inma Cuesta</h4>
            </div>
            <div class="content-center">
                <img class="rounded-xl w-10/12 m-5 mb-2" src="{{ asset('img/madrina.png') }}" alt="imagen madrinas" />
            </div>
            <div class="p-4 text-center">
                <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
            </div>
        </div>
    </div>
    {{-- boton más  --}}
    <div class="text-center">
        <a href="#" class="center mt-5 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
            Ver más
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
{{-- @endsection --}}



