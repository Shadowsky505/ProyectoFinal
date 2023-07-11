@extends('plantillasLocales.sideBar')

@section('content')
    <section class="mt-10">
        <div class="col text-right">
            <a href="{{ route('empleado.contrato.create', $id_empleado) }}" class="boton-verde">Nuevo
                contrato</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3"">Id</th>
                        <th scope="col" class="px-6 py-3"">Contratador</th>
                        <th scope="col" class="px-6 py-3"" width="50px">Inicio de contrato</th>
                        <th scope="col" class="px-6 py-3"">Fin de contrato</th>
                        <th scope="col" class="px-6 py-3"">Terminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contratos as $contrato)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $contrato->_id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $contrato->admin->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contrato->inicio_contrato }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contrato->fin_contrato }}
                            </td>
                            <td>
                                <form action="{{ route('empleado.contrato.destroy', $contrato->_id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="boton-rojo">eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
