<!doctype html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">

</head>
<body class="hold-transition register-page">
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 logo-box">
            <div class="col-12 text-center">
                <img src="../images/punchline_small.png" alt="logo-punchline">
            </div>
            <div class="col-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto commodi culpa, cumque deserunt
                    dolorum eligendi eos exercitationem
                    inventore ipsum libero maxime molestiae officiis quia quidem quos reiciendis vel vero.
                </p>
            </div>

        </div>

        <div class="col-sm-12 col-md-6 register-box-body">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
