@extends('plantillasLocales.sideBar')

@section('estilo-fondo')
@endsection

@section('content')
    <section class="mt-10">
        <div>
            <button
                class="bg-gradient-to-r from-sec-800 to-sec-400 py-2 px-4 rounded-lg text-white Fuente-2 shadow-xl shadow-sec-300/50 hover:from-prim-800 hover:to-prim-500 hover:shadow-sec-300"><a
                    href="{{ route('restaurante.create') }}">Agregar
                    restaurante</a></button>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nombre:</th>
                        <th scope="col" class="px-6 py-3">Mesas:</th>
                        <th scope="col" class="px-6 py-3">Dirección:</th>
                        <th scope="col" class="px-6 py-3">Descripción:</th>
                        <th scope="col" class="px-6 py-3">Editar:</th>
                        <th scope="col" class="px-6 py-3">Eliminar:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($restaurantes as $restaurante)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $restaurante->nombre }}</th>
                            </th>
                            <td class="px-6 py-4">
                                {{ $restaurante->mesas }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $restaurante->direccion }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $restaurante->descripcion }}
                            </td>
                            <td>
                                <form action="{{ route('restaurante.editar', $restaurante->_id) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="boton-amarillo">Modificar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('restaurante.delete', $restaurante->_id) }}" method="post">
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
