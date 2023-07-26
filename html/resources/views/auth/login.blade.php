@extends('layouts.app')


@section('content')
<div class="flex justify-center w-full items-center min-h-screen">
    <div class="w-96 max-w-sm">
        <div class="text-black text-3xl font-bold -mt-8 my-8 mx-8 ms-8 me-8 text-center "><br> Iniciar sesión</div>

        <form class="bg-white  rounded px-8 pt-6 pb-9 mb-4" method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- si no está autenticado, mensaje de error-->
            @if ($errors->has('default'))
                <div class="alert alert-danger">
                    {{ $errors->first('default') }}
                </div>
            @endif

            <!--mensaje estas logueado -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Resto del formulario -->

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Correo electrónico
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                <!-- Campos de entrada -->
                @error('email')
                <span class="text-red-500">
                    {{ $message }}
                </span>
                @enderror

            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Contraseña
                </label>
                @error('password')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Contraseña" name="password" required>
                @if ($errors->has('email'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
                @endif
                
            </div>
            

            <div class="flex flex-col items-center justify-between mt-4">
                <button class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
                    Acceder
                </button>
            </div>

        </form>
    </div>
</div>
@endsection