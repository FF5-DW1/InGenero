@extends('layouts.app')

@section('content')
    <div>
        <div class="table-responsive mt-4 mb-4">
            <!-- mensaje ya estás logueado -->
            @if ($errors->has('default'))
                <div class="alert alert-info">
                    {{ $errors->first('default') }}
                </div>
            @endif
    <div class="falseoNavbarAdmin"></div>
    <div class="falseoNavbarAdmin"></div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="/">Inicio</a></li>
            <li class="active">Tabla Estrellas</li>
        </ul>
    </div>
    <div id="contenedorTablaGestion">
        <div class="table-responsive mt-4 mb-4" id="tablaGestion">
            <table class="table text-sm text-center text-gray-500">
                <thead class="text-xs text-dark bg-green-100">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Editar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ver Perfil
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $profile)
                        <tr class="bg-green-100">
                            <td scope="row" class="px-6 py-4 font-weight-medium text-dark whitespace-nowrap">
                                {{ $profile->id }}

                            </td>

                            <td class="px-6 py-4">
                                {{ $profile->is_active ? 'activo' : 'inactivo' }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $profile->name }} {{ $profile->last_name }}

                            </td>

                            <td scope="col" class="px-6 py-3">
                                <a href="{{ route('editarperfil', ['id' => $profile->id]) }}" class="  btn-responsive">
                                    <img src="{{ asset('img/edit-2.svg') }}" alt="Editar" class="btn-icon"
                                        style="width: 30px; height: 26px;">
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('starprofile', ['id' => $profile->id]) }}" class="  btn-responsive">
                                    <img src="{{ asset('img/usuario.png') }}" alt="Editar" class="btn-icon"
                                        style="width: 30px; height: 26px;">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $profiles->links() }}
        </div>
    </div>
@endsection
