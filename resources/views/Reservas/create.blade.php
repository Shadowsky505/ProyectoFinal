<?php
use Illuminate\Support\Str;
?>
@extends('plantillasLocales.sideBar')

@section('content')

    <section class="mt-10">
        <div class="col text-right">
            <a href="/home" class="boton-amarillo">Regresar </a>
            <i class="fa fa-arrow-circle-left"></i>
        </div>


        </div class="mt-10">
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
            <form action="{{ route('reserva.sendData', $restaurante->_id) }}" method="POST">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="fecha_reserva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de
                        reserva</label>
                    <input type="datetime-local" name="fecha_reserva"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ old('fecha_reserva') }}">
                </div>
                <div class="form-group">
                    <label for="cantidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad de
                        personas</label>
                    <input type="number" name="cantidad"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Ingrese la cantidad de personas" value="{{ old('cantidad') }}">
                </div>
                <button type="submit" class="boton-verde mt-5">Crear reserva</button>
            </form>
        </div>
        </div>

    </section>
@endsection
