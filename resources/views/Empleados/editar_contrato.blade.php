@extends('plantillasLocales.sideBar')

@section('content')

    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar contrato de {{ $contrato->empleado->name }}</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('empleados.contrato.view', $contrato->id_empleado) }}"
                    class="btn btn-sm btn-success">Regresar </a>
                <i class="fa fa-arrow-circle-left"></i>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div
            class="max-w-3xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <i class="fas fa-exclamation-triangle"></i>
                        <strong>Por favor!! </strong>{{ $error }}
                    </div>
                @endforeach
            @endif
            <form action="{{ route('empleado.contrato.update', $contrato->_id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="inicio_contrato" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Inicio
                        del contrato</label>
                    <input type="date" name="inicio_contrato"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ old('inicio_contrato', $contrato->inicio_contrato) }}">
                </div>
                <div class="form-group " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    <label for="fin_contrato">Fin del contrato</label>
                    <input type="date" name="fin_contrato"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ old('fin_contrato', $contrato->fin_contrato) }}">
                </div>
                <button type="submit" class="bg-green-600 rounded-xl py-2 px-4 text-white font-bold">Guardar
                    cambios</button>
            </form>
        </div>
    </div>
@endsection
