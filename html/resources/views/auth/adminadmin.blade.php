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
            <li class="active">Tabla Admin</li>
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
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Editar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-green-100">
                            <td scope="row" class="px-6 py-4 font-weight-medium text-dark whitespace-nowrap">
                                {{ $user->id }}

                            </td>

                            <td class="px-6 py-4">
                                {{ $user->name }} {{ $user->last_name }}
                            </td>

                            <td scope="col" class="px-6 py-3">
                                <form action="{{ route('adminadmin.destroy', ['id' => $user->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-responsive">
                                    <img src="{{ asset('img/delete.svg') }}" alt="Eliminar" class="btn-icon"
                                        style="width: 30px; height: 26px;">
                                </button>
                            </td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection