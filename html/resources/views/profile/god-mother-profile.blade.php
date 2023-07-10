@extends('layouts.app')

@section('content')
<div >
    {{-- banner --}}
    <div class="py-10 mt-10 sticky top-0 bg-cover bg-center lg:h-800 w-1920">
        <div class="absolute w-full bg-no-repeat overflow-hidden">
            <img src="{{ asset('img/madrina_banner.jpg') }}" alt="" class="w-full">
        </div>
        <div class="text-center m-5 lg:my-12 relative lg:w-3/4 lg:text-left max-w-full">
            <h1 class="m-4 text-2xl font-extrabold leading-none text-white lg:text-4xl py-4 sm:px-8 lg:px-20">Nuestras madrinas</h1>
            <p class="mb-8 text-white lg:text-xl sm:px-8 lg:px-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis risusrue nisl.</p>
        </div>
    </div>

    {{-- todos los cards + boton más --}}
    <div class="relative bg-white justify-center items-center pt-5 pb-10 lg:pt-20">
        <div class="grid grid-flow-row gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mx-w-lg">
            
            <div class="max-w-xs bg-gray-100 border border-gray-700 rounded-xl shadow m-5 mx-auto">
                <div class="text-center m-5">
                    <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Inma Cuesta</h4>
                </div>
                <div class="content-center">
                    <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/madrina.png') }}" alt="imagen madrinas" />
                </div>
                <div class="p-4 text-center">
                    <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
                </div>
            </div>

            <div class="max-w-xs bg-gray-100 border border-gray-700 rounded-xl shadow m-5 mx-auto">
                <div class="text-center m-5">
                    <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Inma Cuesta</h4>
                </div>
                <div class="content-center">
                    <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/madrina.png') }}" alt="imagen madrinas" />
                </div>
                <div class="p-4 text-center">
                    <p class="mb-3 font-semibold text-lg">Actriz de renombre se une al programa InGenero.</p>
                </div>
            </div>

            <div class="max-w-xs bg-gray-100 border border-gray-700 rounded-xl shadow m-5 mx-auto">
                <div class="text-center m-5">
                    <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Inma Cuesta</h4>
                </div>
                <div class="content-center">
                    <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/madrina.png') }}" alt="imagen madrinas" />
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
</div>
@endsection



