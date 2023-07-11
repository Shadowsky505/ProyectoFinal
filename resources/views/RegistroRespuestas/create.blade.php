<?php
use Illuminate\Support\Str;
?>
@extends('plantillasLocales.sideBar')

@section('content')

    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Respondiendo consulta</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('rrespuestas.view') }}" class="btn btn-sm btn-success">Regresar </a>
                <i class="fa fa-arrow-circle-left"></i>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div
            class="max-w-2xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <i class="fas fa-exclamation-triangle"></i>
                        <strong>Por favor!! </strong>{{ $error }}
                    </div>
                @endforeach
            @endif
            <form action="{{ route('rrespuesta.sendData', $id_consulta) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="respuesta"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respuesta:</label>
                    <textarea name="respuesta"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        rows="3" placeholder="Ingrese su respuesta">{{ old('respuesta') }}</textarea>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Responder</button>
            </form>

        </div>
    </div>

@endsection
