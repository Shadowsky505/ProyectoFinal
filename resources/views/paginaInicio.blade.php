@extends('plantillasLocales.app')
@section('content')
    <section>
        <div class="carousel-estilos">
            <div class="bg-white rounded-lg shadow-lg">
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        @php
                            $totalRestaurantes = count($restaurantes);
                        @endphp

                        @foreach ($restaurantes as $index => $restaurante)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ $restaurante->imagen_portada }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                                <div class="texto-slider">
                                    {{ $restaurante->nombre }}</div>
                            </div>
                        @endforeach

                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            @for ($i = 0; $i < $totalRestaurantes; $i++)
                                <button type="button"
                                    class="w-3 h-3 rounded-full {{ $i === 0 ? 'bg-white' : 'bg-gray-300' }}"
                                    aria-current="{{ $i === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $i + 1 }}"
                                    data-carousel-slide-to="{{ $i }}"></button>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mx-auto justify-center">
            <div class="flex flex-col text-center">
                <h1 class="texto-restaurante-1">RESTAURANTE</h1>
                <h1 class="texto-restaurante-2">Todos los restaurantes al alcance de las reservas</h1>
            </div>
        </div>
        <div class="flex justify-center mt-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-3/4">
                @foreach ($restaurantes as $restaurante)
                    <div class="bg-white border border-gray-200 rounded-lg shadow mx-8 mb-5">
                        <a href="#">
                            <img class="rounded-t-lg h-40 w-full object-cover" src="{{ $restaurante->imagen_portada }}"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $restaurante->nombre }}</h5>
                            </a>
                            <a href="#">
                                <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $restaurante->direccion }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $restaurante->descripcion }}</p>

                            @guest
                                <a href="{{ route('login') }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    RESERVAR
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            @else
                                <form action="{{ route('reserva.create', $restaurante->_id) }}" method="GET">
                                    <button type="submit" class="btn btn-warning"><a
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            RESERVAR
                                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </button>
                                </form>
                            @endguest
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="integrantes">
        <div class="py-7 flex justify-center">
            @foreach ($users as $user)
                <div class="Fuente-2 mx-7 text-lg ">
                    {{ $user->name }}
                </div>
            @endforeach
        </div>
    </section>
@endsection
