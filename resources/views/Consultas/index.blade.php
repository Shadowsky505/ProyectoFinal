@extends('plantillasLocales.sideBar')

@section('content')
    <section>
        <div class="col text-right">
            <a href="{{ route('consulta.create') }}" class="btn btn-sm btn-primary">Nuevo consulta</a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Consulta</th>
                        <th scope="col" class="px-6 py-3">Estado</th>
                        <th scope="col" class="px-6 py-3">Respondido por:</th>
                        <th scope="col" class="px-6 py-3">Fecha publicada</th>
                        <th scope="col" class="px-6 py-3">Fecha respondida</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consultas as $consulta)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $consulta->consulta }}</th>
                            <td class="px-6 py-4">{{ $consulta->estado }}</td>
                            <td class="px-6 py-4">{{ $consulta->id_empleado }}</td>
                            <td class="px-6 py-4">{{ $consulta->created_at }}</td>
                            <td class="px-6 py-4">{{ $consulta->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
