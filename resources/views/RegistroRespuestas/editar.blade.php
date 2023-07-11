@extends('plantillasLocales.sideBar')

@section('content')

    <section class="mt-10">
        <div class="">
            <a href="{{ route('rrespuestas.view') }}" class="boton-amarillo">Regresar </a>
            <i class="fa fa-arrow-circle-left"></i>
        </div>

        <div class="mt-10">
            <div
                class="mx-auto max-w-7xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            <i class="fas fa-exclamation-triangle"></i>
                            <strong>Por favor!! </strong>{{ $error }}
                        </div>
                    @endforeach
                @endif
                <form action="{{ route('rrespuesta.update', $rrespuesta->consulta->_id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="respuesta"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Consulta</label>
                        <textarea name="respuesta"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            rows="3" placeholder="Ingrese su respuesta">{{ old('respuesta', $rrespuesta->consulta->respuesta) }}</textarea>
                    </div>
                    <button type="submit" class="boton-verde mt-5">Guardar cambios</button>
                </form>

            </div>
        </div>
    </section>

@endsection
