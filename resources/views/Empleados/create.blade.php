<?php
use Illuminate\Support\Str;
?>
@extends('plantillasLocales.sideBar')

@section('content')

    <section class="mt-10">
        <div class="col text-right">
            <a href="{{ route('empleados.view') }}" class="boton-amarillo">Regresar </a>
            <i class="fa fa-arrow-circle-left"></i>
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
                <form action="{{ route('empleado.sendData') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre y
                            apellidos del empleado</label>
                        <input type="text" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Ingrese los nombres y apellidos del empleado" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email del
                            empleado</label>
                        <input type="text" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Ingrese el e-mail del empleado" value="{{ old('email') }}">
                    </div>
                    <div class="form-group ">
                        <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DNI del
                            empleado</label>
                        <input type="text" name="dni"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Ingrese el DNI del empleado" value="{{ old('dni') }}">
                    </div>
                    <div class="form-group">
                        <label for="celular" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Celular
                            del empleado</label>
                        <input type="text" name="celular"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Ingrese el numero de celular del empleado" value="{{ old('celular') }}">
                    </div>
                    <div class="form-group">
                        <label for="direccion"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion del
                            empleado</label>
                        <input type="text" name="direccion"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Ingrese la direccion del empleado" value="{{ old('direccion') }}">
                    </div>
                    <div class="form-group">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                        <input type="text" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Ingrese la direccion del empleado" value="{{ old('contraseña', Str::random(8)) }}">
                    </div>
                    <button type="submit" class="boton-verde mt-5">Crear nuevo empleado</button>
                </form>
            </div>
        </div>
    </section>

@endsection
