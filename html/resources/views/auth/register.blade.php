@extends('layouts.app')

@section('content')
<div class="falseoNavbarAdmin"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="font-bold text-3xl mt-8 mb-4">Registrar Admin</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- mensaje error registro no permitido -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- mensaje registro exitoso -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Resto del formulario -->
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="lastname">Apellidos</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Apellidos" name="lastname" value="{{ old('lastname') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                            <!-- Campos de entrada -->
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <label for="is_admin">¿Registrar como administrador?</label>
                            <input type="checkbox" id="is_admin" name="is_admin" value="1">
                        </div>

                        <div class="text-center mb-4">
                            <input type="submit" value="{{ isset($formgodmother->id) ? 'Actualizar Perfil' : 'Registrar' }}"
                                class="button button-md button-secondary-2 button-winona wow fadeInUp" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="falseoNavbarAdmin"></div>
@endsection
