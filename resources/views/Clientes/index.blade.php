@extends('plantillasLocales.sideBar')

@section('content')
    <section class="mt-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha de Ingreso
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($clientes as $cliente)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $cliente->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $cliente->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $cliente->created_at }}
                            </td>
                            <td>
                                <form action="{{ route('cliente.delete', $cliente->_id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="bg-gradient-to-r from-red-800 to-red-400 py-2 px-4 rounded-lg text-white Fuente-2 shadow-xl shadow-red-300/50 hover:from-red-800 hover:to-red-500 hover:shadow-red-300">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </section>
@endsection
