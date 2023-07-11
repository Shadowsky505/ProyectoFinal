@extends('plantillasLocales.sideBar')

@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col class="px-6 py-3"">Nombre</th>
                    <th scope="col class="px-6 py-3"">DNI</th>
                    <th scope="col class="px-6 py-3"" width="50px">Correo</th>
                    <th scope="col class="px-6 py-3"">Celular</th>
                    <th scope="col class="px-6 py-3"">Direccion</th>
                    <th scope="col class="px-6 py-3"">Modificar</th>
                    <th scope="col class="px-6 py-3"">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $cliente->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $cliente->dni }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $cliente->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $cliente->celular }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $cliente->direccion }}
                        </td>
                        <td>
                            <form action="{{ route('cliente.editar', $cliente->_id) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-warning">Modificar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('cliente.delete', $cliente->_id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
