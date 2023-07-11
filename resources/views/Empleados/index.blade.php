@extends('plantillasLocales.sideBar')

@section('content')
    <section class="mt-10">
        <div>
            <a href="{{ route('empleado.create') }}"
                class="bg-gradient-to-r from-sec-800 to-sec-400 py-2 px-4 rounded-lg text-white Fuente-2 shadow-xl shadow-sec-300/50 hover:from-prim-800 hover:to-prim-500 hover:shadow-sec-300">Nuevo
                empleado</a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                        <th scope="col" class="px-6 py-3">Correo</th>
                        <th scope="col" class="px-6 py-3">Modificar</th>
                        <th scope="col" class="px-6 py-3">Eliminar</th>
                        <th scope="col" class="px-6 py-3">Contrato</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $empleado->name }}</th>
                            <td class="px-6 py-4">{{ $empleado->email }}</td>
                            <td>
                                <form action="{{ route('empleado.editar', $empleado->_id) }}" method="GET">
                                    @csrf
                                    <button type="submit"
                                        class="bg-gradient-to-r from-sec-600 to-sec-400 py-2 px-4 rounded-lg text-black Fuente-2 shadow-xl shadow-sec-300/50 hover:from-sec-800 hover:to-sec-500 hover:shadow-sec-300">Modificar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('empleado.delete', $empleado->_id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="bg-gradient-to-r from-red-800 to-red-400 py-2 px-4 rounded-lg text-white Fuente-2 shadow-xl shadow-red-300/50 hover:from-red-800 hover:to-red-500 hover:shadow-red-300">Eliminar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('empleados.contrato.view', $empleado->_id) }}" method="GET">
                                    @csrf
                                    <button type="submit"
                                        class="bg-gradient-to-r from-green-800 to-green-400 py-2 px-4 rounded-lg text-white Fuente-2 shadow-xl shadow-green-300/50 hover:from-green-800 hover:to-green-500 hover:shadow-green-300">Ver<br>Contratos
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </section>
@endsection
