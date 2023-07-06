@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-sm">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Contraseña
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Contraseña" name="password" required>
                    @if ($errors->has('email'))
                        <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Iniciar sesión
                    </button>
                    {{-- <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                       href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a> --}}
                </div>
            </form>
        </div>
    </div>
@endsection

