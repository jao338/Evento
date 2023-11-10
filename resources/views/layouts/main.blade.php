<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        <title>@yield('title')</title>

    </head>
    <body>

        @yield('content')

        <footer>
            <p>Evento &copy; 2023</p>
        </footer>

    </body>
</html>
