<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <@extends('plantillasLocales.estilos') </head>

<body class=" @yield('estilo-fondo')">

    <section>
        <nav class="fixed top-0 z-50 w-full bg-prim-700 border-b border-gray-200">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start">


                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar" type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                </path>
                            </svg>
                        </button>

                        <a href="{{ route('paginaInicio') }}" class="flex ml-2 md:mr-24">
                            <img src="/img/LOGO.png" class="h-8 mr-3" alt="Logo" />
                            <p class="texto-logo">RESERVAS AL MOMENTO</p>
                        </a>
                    </div>

                </div>
            </div>
        </nav>

        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Sidebar">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
                <ul class="space-y-2 font-medium">
                    @switch(auth()->user()->role)
                        @case('cliente')
                            <li>
                                <a href="{{ route('home') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                                        <path
                                            d="M7.31034 16.2303C7.32206 16.2303 7.33382 16.2303 7.34563 16.2303L20 16.2303V7.97673C20 6.34262 19.9982 5.20292 19.8862 4.34301C19.7773 3.50767 19.5782 3.06531 19.2728 2.75023C18.9674 2.43516 18.5387 2.22974 17.729 2.11743C16.8955 2.00181 15.7908 2 14.2069 2H9.7931C8.79138 2 7.98133 2.00073 7.31034 2.0305V16.2303Z"
                                            fill="#1C274D" />
                                        <path
                                            d="M5.65517 2.23958C5.2225 2.35863 4.9438 2.52695 4.72718 2.75044C4.42179 3.06551 4.22268 3.50787 4.11382 4.34322C4.00176 5.20313 4 6.34282 4 7.97693V17C4.38867 16.7198 4.82674 16.5065 5.29899 16.376C5.41296 16.3445 5.53103 16.3198 5.65517 16.3004V2.23958Z"
                                            fill="#1C274D" />
                                        <path opacity="0.5"
                                            d="M6.27103 2.11478C5.46135 2.22456 5.03258 2.42535 4.72718 2.73332C4.42179 3.0413 4.22268 3.47368 4.11382 4.2902C4.00176 5.13073 4 6.24474 4 7.84202V19.7003C4 19.5687 4.02435 19.4367 4.09696 19.2397C4.22351 18.8964 4.27837 18.8425 4.38811 18.7347C4.71351 18.4151 5.15982 18.1785 5.67321 18.0681C5.96352 18.0057 6.34236 18 7.42598 18H8V20.0283C8 20.3054 8 20.444 8.09485 20.5C8.18971 20.556 8.31943 20.494 8.57888 20.3701L9.82112 19.7766C9.9089 19.7347 9.95279 19.7138 10 19.7138C10.0472 19.7138 10.0911 19.7347 10.1789 19.7766L11.4211 20.3701C11.6806 20.494 11.8103 20.556 11.9051 20.5C12 20.444 12 20.3054 12 20.0283V18H20L20 7.84202C20 6.24474 19.9982 5.13073 19.8862 4.2902C19.7773 3.47368 19.5782 3.0413 19.2728 2.73332C18.9674 2.42535 18.5387 2.22456 17.729 2.11478C16.8955 2.00177 15.7908 2 14.2069 2H9.7931C8.2092 2 7.10452 2.00177 6.27103 2.11478Z"
                                            fill="#1C274D" />
                                        <path
                                            d="M8 18H7.42598C6.34236 18 5.96352 18.0057 5.67321 18.0681C5.15982 18.1785 4.71351 18.4151 4.38811 18.7347C4.27837 18.8425 4.22351 18.8964 4.09696 19.2397C3.97041 19.5831 3.99045 19.7288 4.03053 20.02C4.03761 20.0714 4.04522 20.1216 4.05343 20.1706C4.16271 20.8228 4.36259 21.1682 4.66916 21.4142C4.97573 21.6602 5.40616 21.8206 6.21896 21.9083C7.05566 21.9986 8.1646 22 9.75461 22H14.1854C15.7754 22 16.8844 21.9986 17.7211 21.9083C18.5339 21.8206 18.9643 21.6602 19.2709 21.4142C19.5774 21.1682 19.7773 20.8228 19.8866 20.1706C19.9784 19.6228 19.9965 18.9296 20 18H12V20.0283C12 20.3054 12 20.444 11.9051 20.5C11.8103 20.556 11.6806 20.494 11.4211 20.3701L10.1789 19.7767C10.0911 19.7347 10.0472 19.7138 10 19.7138C9.95279 19.7138 9.9089 19.7347 9.82112 19.7766L8.57888 20.3701C8.31943 20.494 8.18971 20.556 8.09485 20.5C8 20.444 8 20.3054 8 20.0283V18Z"
                                            fill="#1C274D" />
                                    </svg>

                                    <span class="ml-3">Restaurantes</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('reservas.view') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                                        <path
                                            d="M7.31034 16.2303C7.32206 16.2303 7.33382 16.2303 7.34563 16.2303L20 16.2303V7.97673C20 6.34262 19.9982 5.20292 19.8862 4.34301C19.7773 3.50767 19.5782 3.06531 19.2728 2.75023C18.9674 2.43516 18.5387 2.22974 17.729 2.11743C16.8955 2.00181 15.7908 2 14.2069 2H9.7931C8.79138 2 7.98133 2.00073 7.31034 2.0305V16.2303Z"
                                            fill="#1C274D" />
                                        <path
                                            d="M5.65517 2.23958C5.2225 2.35863 4.9438 2.52695 4.72718 2.75044C4.42179 3.06551 4.22268 3.50787 4.11382 4.34322C4.00176 5.20313 4 6.34282 4 7.97693V17C4.38867 16.7198 4.82674 16.5065 5.29899 16.376C5.41296 16.3445 5.53103 16.3198 5.65517 16.3004V2.23958Z"
                                            fill="#1C274D" />
                                        <path opacity="0.5"
                                            d="M6.27103 2.11478C5.46135 2.22456 5.03258 2.42535 4.72718 2.73332C4.42179 3.0413 4.22268 3.47368 4.11382 4.2902C4.00176 5.13073 4 6.24474 4 7.84202V19.7003C4 19.5687 4.02435 19.4367 4.09696 19.2397C4.22351 18.8964 4.27837 18.8425 4.38811 18.7347C4.71351 18.4151 5.15982 18.1785 5.67321 18.0681C5.96352 18.0057 6.34236 18 7.42598 18H8V20.0283C8 20.3054 8 20.444 8.09485 20.5C8.18971 20.556 8.31943 20.494 8.57888 20.3701L9.82112 19.7766C9.9089 19.7347 9.95279 19.7138 10 19.7138C10.0472 19.7138 10.0911 19.7347 10.1789 19.7766L11.4211 20.3701C11.6806 20.494 11.8103 20.556 11.9051 20.5C12 20.444 12 20.3054 12 20.0283V18H20L20 7.84202C20 6.24474 19.9982 5.13073 19.8862 4.2902C19.7773 3.47368 19.5782 3.0413 19.2728 2.73332C18.9674 2.42535 18.5387 2.22456 17.729 2.11478C16.8955 2.00177 15.7908 2 14.2069 2H9.7931C8.2092 2 7.10452 2.00177 6.27103 2.11478Z"
                                            fill="#1C274D" />
                                        <path
                                            d="M8 18H7.42598C6.34236 18 5.96352 18.0057 5.67321 18.0681C5.15982 18.1785 4.71351 18.4151 4.38811 18.7347C4.27837 18.8425 4.22351 18.8964 4.09696 19.2397C3.97041 19.5831 3.99045 19.7288 4.03053 20.02C4.03761 20.0714 4.04522 20.1216 4.05343 20.1706C4.16271 20.8228 4.36259 21.1682 4.66916 21.4142C4.97573 21.6602 5.40616 21.8206 6.21896 21.9083C7.05566 21.9986 8.1646 22 9.75461 22H14.1854C15.7754 22 16.8844 21.9986 17.7211 21.9083C18.5339 21.8206 18.9643 21.6602 19.2709 21.4142C19.5774 21.1682 19.7773 20.8228 19.8866 20.1706C19.9784 19.6228 19.9965 18.9296 20 18H12V20.0283C12 20.3054 12 20.444 11.9051 20.5C11.8103 20.556 11.6806 20.494 11.4211 20.3701L10.1789 19.7767C10.0911 19.7347 10.0472 19.7138 10 19.7138C9.95279 19.7138 9.9089 19.7347 9.82112 19.7766L8.57888 20.3701C8.31943 20.494 8.18971 20.556 8.09485 20.5C8 20.444 8 20.3054 8 20.0283V18Z"
                                            fill="#1C274D" />
                                    </svg>

                                    <span class="ml-3">Tus Reservas</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('consultas.view') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path opacity="0.5"
                                                d="M18.7491 9V9.7041C18.7491 10.5491 18.9903 11.3752 19.4422 12.0782L20.5496 13.8012C21.5612 15.3749 20.789 17.5139 19.0296 18.0116C14.4273 19.3134 9.57274 19.3134 4.97036 18.0116C3.21105 17.5139 2.43882 15.3749 3.45036 13.8012L4.5578 12.0782C5.00972 11.3752 5.25087 10.5491 5.25087 9.7041V9C5.25087 5.13401 8.27256 2 12 2C15.7274 2 18.7491 5.13401 18.7491 9Z"
                                                fill="#1C274C"></path>
                                            <path
                                                d="M12.75 6C12.75 5.58579 12.4142 5.25 12 5.25C11.5858 5.25 11.25 5.58579 11.25 6V10C11.25 10.4142 11.5858 10.75 12 10.75C12.4142 10.75 12.75 10.4142 12.75 10V6Z"
                                                fill="#1C274C"></path>
                                            <path
                                                d="M7.24316 18.5449C7.8941 20.5501 9.77767 21.9997 11.9998 21.9997C14.222 21.9997 16.1055 20.5501 16.7565 18.5449C13.611 19.1352 10.3886 19.1352 7.24316 18.5449Z"
                                                fill="#1C274C"></path>
                                        </g>
                                    </svg>

                                    <span class="ml-3">Tus Consultas</span>
                                </a>
                            </li>
                        @break

                        @case('empleado')
                            <li>
                                <a href="{{ route('reservas.view') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="ml-3">Verificar Reservas</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('rrespuestas.view') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="ml-3">Responder Consultas</span>
                                </a>
                            </li>
                        @break

                        @case('admin')
                            <li>
                                <a href="{{ route('restaurantes.view') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="ml-3">Restaurantes Afiliados</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('empleados.view') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="ml-3">Empleados Activos</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('clientes.view') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="ml-3">Clientes Actuales</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('reservas.view') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="ml-3">Reservas Registradas</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('rrespuestas.view') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="ml-3">Consultas Registrados</span>
                                </a>
                            </li>
                        @break

                        @default
                    @endswitch
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
                </ul>
            </div>
        </aside>

        <div class="p-4 sm:ml-64">
            <main class="">
                @yield('content')
            </main>
        </div>
    </section>
</body>

</html>
