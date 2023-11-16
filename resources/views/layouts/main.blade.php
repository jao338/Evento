<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        <title>@yield('title')</title>

    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" width="64" height="64">
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar evento</a>
                        </li>

                        {{-- Caso esteja autenticado, o exibe --}}
                        @auth
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link">Meu eventos</a>
                            </li>

                            <li class="nav-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                                </form>
                            </li>
                        @endauth

                        {{-- Caso esteja autenticado, não exibe --}}
                        @guest
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Entrar</a>
                            </li>

                            <li class="nav-item">
                                <a href="/register" class="nav-link">Cadastrar</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <div class="msg">{{ session('msg') }}</div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>

        <footer>
            <p>Página de Evento &copy; 2023</p>
        </footer>

    </body>
</html>
