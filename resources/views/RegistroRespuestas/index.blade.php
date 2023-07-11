@extends('plantillasLocales.sideBar')

@section('content')
    <section>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID DE CONSULTA</th>
                        <th scope="col" class="px-6 py-3">Consulta</th>
                        <th scope="col" class="px-6 py-3">Estado</th>
                        <th scope="col" class="px-6 py-3">Empleado</th>
                        <th scope="col" class="px-6 py-3">Respuesta</th>
                        <th scope="col" class="px-6 py-3">Responder</th>
                        <th scope="col" class="px-6 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        @foreach ($consultas as $consulta)
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $consulta->_id }}</th>
                            <td class="px-6 py-4">{{ $consulta->consulta }}</td>
                            <td class="px-6 py-4">{{ $consulta->estado }}</td>
                            <td class="px-6 py-4">{{ $consulta->id_empleado }}</td>
                            <td class="px-6 py-4">{{ $consulta->respuesta }}</td>


                            <td class="">
                                <form action="{{ route('rrespuesta.create', $consulta->_id) }}" method="GET">
                                    @csrf
                                    <button type="submit"
                                        class="bg-gradient-to-r from-green-800 to-green-400 py-2 px-4 rounded-lg text-white Fuente-2 shadow-xl shadow-green-300/50 hover:from-prim-800 hover:to-prim-500 hover:shadow-sec-300">Responder</button>
                                </form>

                            </td>
                            <td class="">
                                <form action="{{ route('rrespuesta.editar', $consulta->_id) }}" method="GET">
                                    @csrf
                                    <button type="submit"
                                        class="bg-gradient-to-r from-sec-800 to-sec-400 py-2 px-4 rounded-lg text-black Fuente-2 shadow-xl shadow-sec-300/50 hover:from-prim-800 hover:to-prim-500 hover:shadow-sec-300">Modificar
                                    </button>
                                </form>
                            </td>
                        @endforeach
                    </tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
