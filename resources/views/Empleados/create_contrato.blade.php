<?php
use Illuminate\Support\Str;
?>
@extends('plantillasLocales.sideBar')

@section('content')

    <section class="mt-10">
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
            <form action="{{ route('empleado.contrato.sendData', $id_empleado) }}" method="POST">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="inicio_contrato" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Inicio
                        del contrato</label>
                    <input type="date" name="inicio_contrato"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ old('inicio_contrato') }}">
                </div>
                <div class="form-group ">
                    <label for="fin_contrato" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fin
                        del contrato</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        type="date" name="fin_contrato" value="{{ old('fin_contrato') }}">
                </div>
                <button type="submit" class="boton-verde mt-5">Registrar
                    contrato</button>
            </form>

        </div>
    </section>



@endsection
