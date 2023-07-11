@extends('plantillasLocales.sideBar')

@section('content')
    <section class="mt-10">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Por favor!! </strong>{{ $error }}
                </div>
            @endforeach
        @endif
        <div
            class="max-w-2xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <form action="{{ route('restaurante.update', $restaurante->_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del
                        Restaurante:</label>
                    <input type="text" name="nombre"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ old('nombre', $restaurante->nombre) }}">
                </div>

                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                        Descripción</label>
                    <textarea
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        name="descripcion" rows="3" placeholder="Ingrese la descripcion">{{ old('descripcion', $restaurante->descripcion) }}</textarea>
                </div>

                <div class="mb-6">
                    <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad
                        de mesas:</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        type="number" name="mesas" placeholder="Ingrese el numero de mesas"
                        value="{{ old('mesas', $restaurante->mesas) }}">
                </div>

                <div class="mb-6">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección:</label>
                    <input type="text" name="direccion"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Ingrese la direccion del local"
                        value="{{ old('direccion', $restaurante->direccion) }}">
                </div>

                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Url
                        de
                        Referencia:</label>
                    <input type="text" name="imagen_portada"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Ingrese la url de la imagen"
                        value="{{ old('imagen_portada', $restaurante->imagen_portada) }}">
                </div>
                <button type="submit" class="boton-verde">Enviar</button>
            </form>
        </div>
    </section>
@endsection
