<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">

    <b-navbar toggleable="sm" type="dark" variant="primary">
        <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>

        <b-navbar-brand href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>

        <b-collapse id="nav-text-collapse" is-nav>
            <b-navbar-nav class="ml-auto">
                @guest
                    <b-nav-form>
                      <b-nav-item href="{{ route('login') }}">Ingresar</b-nav-item>
                      <b-nav-item href="{{ route('register') }}">Registrarse</b-nav-item>
                    </b-nav-form>
                @else
                    <b-nav-item-dropdown text="Lang" right>
                      <b-dropdown-item href="#">Cerrar sesión</b-dropdown-item>
                    </b-nav-item-dropdown>
                @endguest
            </b-navbar-nav>
        </b-collapse>
    </b-navbar>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>
</html>
