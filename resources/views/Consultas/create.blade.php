<?php
use Illuminate\Support\Str;
?>
@extends('plantillasLocales.sideBar')

@section('content')

    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nuevo Cliente</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('consultas.view') }}" class="btn btn-sm btn-success">Regresar </a>
                <i class="fa fa-arrow-circle-left"></i>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div
            class="max-w-3xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            {{-- LISTAR ERRORES --}}
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <i class="fas fa-exclamation-triangle"></i>
                        <strong>Por favor!! </strong>{{ $error }}
                    </div>
                @endforeach
            @endif
            {{-- FORMULARIO --}}
            <form action="{{ route('consulta.sendData') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="consulta"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Consulta</label>
                    <textarea name="consulta"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        rows="3" placeholder="Ingrese su consulta">{{ old('consulta') }}</textarea>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Crear nuevo consulta</button>
            </form>

        </div>
    </div>

@endsection
