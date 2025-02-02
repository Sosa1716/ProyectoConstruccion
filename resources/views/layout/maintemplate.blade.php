<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Construccion</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

    <body style="background-color:rgb(44, 62, 80)">

        @include('fragments.navbar')
        
        @if(session('status'))
        {{session('status')}}
        @endif

        @yield('content')
        
    </body>
</html>