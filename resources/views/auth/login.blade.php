@extends('plantillasLocales.app')
@extends('plantillasLocales.estilos')

@section('estilo-fondo')
    bg-gradient-to-b from-prim-500 to-prim-700
@endsection

@section('content')
    <section class="py-5 my-5">
        <div class="flex flex-col justify-center">
            <h1 class="Fuente-3 text-5xl text-white mt-10 font-black mx-auto">
                INICIAR SESION</h1>
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
                        <small>Ingresa tus credenciales para ingresar al sistema</small>
                    </div>
                @endif
                <form role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                            correo:</label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="tucorreo@otracosa.com" type="email" name="email" value="{{ old('email') }}"
                            required autocomplete="email" autofocus>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                            contraseña:</label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Contraseña" type="password" name="password" required
                            autocomplete="current-password">
                    </div>
                    <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                required>
                        </div>
                        <label name="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                            id="remember" type="checkbox">Remember
                            me</label>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
                <div class="flex mt-3">
                    <div class="w-1/2">
                        <a href="{{ route('password.request') }}" class="text-light"><small>¿Olvidaste tu
                                contraseña?</small></a>
                    </div>
                    <div class="w-1/2 text-right">
                        <a href="{{ route('register') }}" class="text-light"><small>Crear cuenta nueva</small></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
