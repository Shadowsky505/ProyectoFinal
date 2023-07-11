@extends('plantillasLocales.sidebar')

@section('estilo-fondo')
    sm:bg-sec-700 md:bg-sec-600 lg:bg-sec-500 xl:bg-sec-400 2xl:bg-sec-300
@endsection

@section('content')
    <div class="flex justify-center mt-11">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-7/8 md:6/8">
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
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
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
@endsection
