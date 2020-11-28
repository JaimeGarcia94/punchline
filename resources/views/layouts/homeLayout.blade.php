<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Punchline') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/configuration.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">



</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Punchline') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            @include('includes.avatar')
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('perfil') }}">
                                    {{ __('Ver perfil') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('configuration') }}">
                                    {{ __('Configuración') }}

                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="card-footer font-small mdb-color pt-4 bg-white shadow-sm">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left mt-3 pb-3">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <a href="#" class="text-uppercase mb-4 font-weight-bold modal-cookies" data-toggle="modal" data-target="#condition">
                        Términos y condiciones
                    </a>
                    <div class="modal fade" id="condition" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content modal-box">
                                @include('includes.condition')
                            </div>
                        </div>
                    </div>

                </div>

                <hr class="w-100 clearfix d-md-none">

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <a href="#" class="text-uppercase mb-4 font-weight-bold modal-legal" data-toggle="modal" data-target="#legal">
                        Bases legales
                    </a>
                    <div class="modal fade" id="legal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content modal-box">
                                @include('includes.legal')
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="w-100 clearfix d-md-none">

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <a href="#" class="text-uppercase mb-4 font-weight-bold modal-legal" data-toggle="modal" data-target="#contact">
                        Contacto
                    </a>
                    @include('includes.contact')
                </div>
            </div>

            <hr>
            <!-- Grid row -->
            <div class="row d-flex align-items-center">
                <div class="col-md-12 col-lg-12">
                    <p class="text-center py-3">© 2020 Copyright:
                        <a href="#">
                            <strong> Punchline.com</strong>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
<script>
    (function(){
        $('.modal').on('show.bs.modal', function (event) {
            if (!$(this).data('template')) {
                $(this).data('template', $(this).html())
            } else {
                $(this).html($(this).data('template'))
            }
        })
    })()
</script>
