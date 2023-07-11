@extends('plantillasLocales.sideBar')

@section('content')

    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar reserva en {{ $reserva->restaurantes->nombre }}</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('reservas.view') }}" class="btn btn-sm btn-success">Regresar </a>
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
            <form action="{{ route('reserva.update', $reserva->_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="fecha_reserva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de
                        reserva</label>
                    <input type="date" name="fecha_reserva"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ old('fecha_reserva', $reserva->fecha_reserva) }}">
                </div>
                <div class="form-group">
                    <label for="cantidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad de
                        personas</label>
                    <input type="text" name="cantidad"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Ingrese el e-mail del reserva" value="{{ old('cantidad', $reserva->cantidad) }}">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Guardar cambios</button>
            </form>
        </div>

    </div>

@endsection
