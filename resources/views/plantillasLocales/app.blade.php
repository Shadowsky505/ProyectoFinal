<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @extends('plantillasLocales.estilos')
</head>

<body class=" @yield('estilo-fondo')">
    <div class="flex flex-col">
        <nav class="navBar">
            <div class="navDiv">
                <a href="https://proyectop.test/" class="flex items-center">
                    <img src="/img/LOGO.png" class="h-8 mr-3" alt="Logo">
                    <div class="flex flex-col">
                        <span class="texto-logo">RESERVAS</span>
                        <span class="texto-logo">AL MOMENTO</span>
                    </div>
                </a>
                <div class="flex md:order-2">
                    @guest

                        @if (Route::has('login'))
                            <button type="button" class="logButtom" data-modal-target="log-modal"
                                data-modal-toggle="log-modal"><a href="{{ route('login') }}">Iniciar
                                    Sesion</a></button>
                        @endif
                        @if (Route::has('register'))
                            <button type="button" class="logButtom" data-modal-target="register-modal"
                                data-modal-toggle="register-modal"><a
                                    href="{{ route('register') }}">Registrarse</a></button>
                        @endif
                    @else
                        <button type="button" class="logButtom">

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>

                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest

                    <button data-collapse-toggle="navbar-sticky" type="button" class="bottom-toggle"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Botom Toggle</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-400 rounded-lg bg-gray-100 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{ route('home') }}" class="otro-item" aria-current="page">Restaurantes</a>
                        </li>
                        <li>
                            <a href="#integrantes" class="otro-item" aria-current="page">Integrantes</a>
                        </li>
                        <li>
                            <a href="#" class="otro-item" aria-current="page">Redes</a>
                        </li>

                    </ul>
                </div>
            </div>

        </nav>
        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
