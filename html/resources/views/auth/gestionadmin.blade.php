@extends('layouts.app')

@section('content')
    <div id="contenedorTablaGestion">
        <div class="table-responsive mt-4 mb-4" id="tablaGestion">
            <table class="table text-sm text-center text-gray-500">
                <thead class="text-xs text-white bg-green-100">
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
                            Acciones
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
                                <a href="{{ route('editarperfil', ['id' => $profile->id]) }}" class="btn btn-primary">
                                    Editar
                                </a>

                                <a href="{{ route('starprofile', ['id' => $profile->id]) }}" class="btn btn-primary">
                                    perfil
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
