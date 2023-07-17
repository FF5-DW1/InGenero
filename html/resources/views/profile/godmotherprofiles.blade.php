@extends('layouts.app')

@section('content')
    <div>
        {{-- banner --}}
        <div class="py-10 mt-10 sticky top-0 w-full h-full bg-cover bg-center bg-no-repeat"
            style="background-image: url('img/madrina_banner.jpg')">
            <div class="text-center m-5 lg:my-12 relative lg:w-3/4 lg:text-left max-w-full">
                <h1 class="m-4 text-2xl font-extrabold leading-none text-white lg:text-4xl py-4 sm:px-8 lg:px-20">Nuestras
                    madrinas</h1>
                <p class="mb-8 text-white lg:text-xl sm:px-8 lg:px-20">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Fusce in sagittis risusrue nisl,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in
                    sagittis risusrue nisl,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in sagittis
                    risusrue nisl.</p>
            </div>
        </div>

        {{-- todos los cards + boton más --}}
        <div class="relative bg-white justify-center items-center pt-5 pb-10 lg:pt-20">
            <div class="grid grid-flow-row gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mx-w-lg">

                @foreach ($godmothers as $item)
                    <div class=" max-w-sm bg-gray-100 border border-gray-700 rounded-xl shadow m-5 mx-auto">
                        <div class="text-center m-5">
                            <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">{{ $item->name }}</h4>
                        </div>
                        <div class="content-center">
                            <img class="rounded-xl w-10/12 m-5 mb-2 mx-auto" src="{{ asset('img/' . $item->profile_media) }}"
                                alt="imagen madrinas" />
                        </div>
                        <div class="p-4 text-center">
                            <p class="mb-3 font-semibold text-lg">{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

