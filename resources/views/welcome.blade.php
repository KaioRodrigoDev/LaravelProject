<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Style -->
        <link rel="stylesheet" href="/css/styles.css">

        <!-- Script -->
        <script src="/js/scripts.js"></script>

    </head>
    <body>
        <h1>Titulo h1 {{$nome}}</h1>

        <img src="/img/banner.jpg" alt="Banner">

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{$i + 1}}</p>
        @endfor
    </body>
</html>
