@extends('layouts.app')

@section('content')
    <div>
        <h5>tabla de madrinas</h5>
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
                    @foreach ($godmothers as $godmother)
                        <tr class="bg-green-100">
                            <td scope="row" class="px-6 py-4 font-weight-medium text-dark whitespace-nowrap">
                                {{ $godmother->id }}
                                <!-- Imprimir ID del perfil -->
                            </td>

                            <td class="px-6 py-4">
                                {{ $godmother->is_active ? 'activo' : 'inactivo' }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $godmother->name }} {{ $godmother->last_name }}
                                <!-- Imprimir nombre del perfil -->
                            </td>

                            <td scope="col" class="px-6 py-3 d-flex">
                                <a href="{{ route('editarmadrina', ['id' => $godmother->id]) }}" class="btn btn-primary">
                                    <img src="{{ asset('img/edit-2.svg') }}" alt="Editar" class="mr-2"
                                        style="width: 30px; height: 26px;">
                                </a>

                                {{-- quitado el boton de visualizar para madrinas
                                    
                                <a href="{{ route('godmotherprofiles', ['id' => $godmother->id]) }}"
                                    class="btn btn-primary">
                                    <img src="{{ asset('img/user-square.svg') }}" alt="Usuario" class="mr-2"
                                        style="width: 30px; height: 26px;">
                                </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $godmothers->links() }}
        </div>
    </div>
@endsection
