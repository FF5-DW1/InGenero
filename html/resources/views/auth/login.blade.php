@extends('layouts.app')


@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="w-50 max-w-sm">
        <div class="text-center text-black display-4 font-weight-bold mt-5">
            Iniciar sesión
        </div>

        <form class="bg-white rounded p-4 mt-4" method="POST" action="{{ route('login') }}">
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

            <div class="form-group">
                <label for="email" class="text-gray-700 font-weight-bold">Correo electrónico</label>
                <input class="form-control" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                <!-- Campos de entrada -->
                @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="text-gray-700 font-weight-bold">Contraseña</label>
                <input class="form-control" id="password" type="password" placeholder="Contraseña" name="password" required>
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
            

            <div class="d-flex flex-column align-items-center mt-4">
                <button class="button button-md button-secondary-2 button-winona wow fadeInUp" type="submit">
                    Acceder
                </button>
            </div>
        </form>
    </div>
</div>

@endsection