<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-sm navbar-light color_primary">
        <div class="container-fluid ps-3 pe-5 align-items-center justify-content-between">

            {{-- LOGO --}}

            {{-- NAVBAR BAGIAN KIRI --}}
            <a class="navbar-brand" href="#">
                <img src="assets/logoCemilku.png" alt="Logo" width="130" height="75"
                    class="d-inline-block align-text-top" />
            </a>

            {{-- NAVBAR BAGIAN TENGAH --}}
            <div class="collapse navbar-collapse justify-content-center align-items-center d-flex nav-tengah"
                id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0 fs-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}" href="homepage"
                            aria-current="page">Home
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('custom') ? 'active' : '' }}">
                        <a class="nav-link" href="custom"> Custom</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('collections') ? 'active' : '' }}">
                        <a class="nav-link" href="collections">Collections</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('order') ? 'active' : '' }}">
                        <a class="nav-link" href="order">Order</a>
                    </li>

                </ul>
            </div>

            {{-- NAVBAR BAGIAN KANAN --}}
            <div class="container justify-content-end align-items-center d-flex gap-2">
                <a class="navbar-brand" href="#">
                    <i class="bi bi-cart3 fs-1" style="color: #341c02;"></i>
                </a>


                <div class="dropdown_languange  dropdown d-inline-block">
                    <a href="#" class="dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img id="flag-icon" src="https://flagcdn.com/w20/id.png" alt="Indonesia" class="rounded-circle"
                            width="40" height="40" style="object-fit: fill">
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li> <a class="dropdown-item" href="#" onclick="setLanguage('id')">Indonesia</a> </li>
                        <li><a class="dropdown-item" href="#" onclick="setLanguage('eng')">English</a></li>
                    </ul>

                </div>


                <div class="dropdown d-inline-block">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false"
                        style="font-size: 2.5rem; color: #341c02; padding-left:10px">
                        <i class="bi bi-person-circle"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    CemilKu
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>
