@extends('plantillasLocales.app')
@extends('plantillasLocales.estilos')

@section('estilo-fondo')
    bg-gradient-to-b from-prim-500 to-prim-700
@endsection

@section('content')
    <section class="py-5 my-5">
        <div class="flex flex-col justify-center">
            <h1 class="Fuente-3 text-5xl text-white mt-10 font-black mx-auto">
                REGÍSTRATE</h1>
            <div class="container bg-white rounded-xl p-4 mx-auto my-10">
                @if ($errors->any())
                    <div class="text-center text-muted mb-2">
                        <h4>Se encontró el siguiente error</h4>
                    </div>
                    <div class="alert alert-danger mb-4" role="alert">
                        {{ $errors->first() }}
                    </div>
                @else
                    <div class="text-center mb-4 text-3xl">
                        <small>Ingrese sus datos: </small>
                    </div>
                @endif
                <form role="form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nombre" type="text" name="name" value="{{ old('name') }}" required
                            autocomplete="name" autofocus>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                            correo:</label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Correo electronico" type="email" name="email" value="{{ old('email') }}"
                            required autocomplete="email">
                    </div>
                    <div class="mb-6">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña:</label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Contraseña" type="password" name="password" required autocomplete="new-password">
                    </div>
                    <div class="mb-6">
                        <label for="repassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repite
                            tu
                            contraseña:</label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder=" Repetir contraseña" type="password" name="password_confirmation" required
                            autocomplete="new-password">
                    </div>





                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar</button>
                </form>

            </div>
        </div>
    </section>
@endsection
