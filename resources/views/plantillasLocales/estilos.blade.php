<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/estilosLocales.css'])
<title>SISTEMA DE RESERVAS+</title>
<title>{{ config('app.name', 'Laravel') }}</title>
