@extends('layouts.app')

@section('content')
    <div>
        <div class="table-responsive mt-4 mb-4">
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
                                <!-- Imprimir ID del perfil -->
                            </td>

                            <td class="px-6 py-4">
                                {{ $profile->is_active ? 'activo' : 'inactivo' }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $profile->name }} {{ $profile->last_name }}
                                <!-- Imprimir nombre del perfil -->
                            </td>

                            <td scope="col" class="px-6 py-3 d-flex">
                                <a href="{{ route('editarperfil', ['id' => $profile->id]) }}" class="btn btn-primary">
                                    <img src="{{ asset('img/edit-2.svg') }}" alt="Editar" class="mr-2"
                                        style="width: 30px; height: 26px;">
                                </a>

                                <a href="{{ route('starprofile', ['id' => $profile->id]) }}" class="btn btn-primary">
                                    <img src="{{ asset('img/user-square.svg') }}" alt="Usuario" class="mr-2"
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
