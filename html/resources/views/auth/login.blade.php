@extends('layouts.app')


@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="w-50 max-w-sm">
        <div class="text-center text-black display-4 font-weight-bold mt-5">
            Iniciar sesión
        </div>

        <form class="bg-white rounded p-4 mt-4" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- si no está autenticado -> mensaje de error -->
            @if(session('mensaje'))
                <div class="alert alert-danger text-center my-2">
                    {{ session('mensaje') }}
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
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
                <!-- Campos de entrada -->
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