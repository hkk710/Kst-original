<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>കേശവപുരം ശ്രീകൃഷ്ണ സ്വാമി ക്ഷേത്രം</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <style>
        .pre-loader {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .pre-loader .pre-loader-image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: white;
            width: 100vw;
            height: 100vh;
        }
        .pre-loader .pre-loader-image img {
            width: 200px;
        }
        main {
            display: none;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .fadeIn {
            animation: fadeIn .8s ease-in-out;
            display: block;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.onload = function (event) {
            document.querySelector('.pre-loader').style.display = 'none';
            document.querySelector('main').classList.add('fadeIn');
        };
    </script>
</head>
<body>
    <div class="pre-loader">
        <div class="pre-loader-image">
            <img src="/public/images/loader.svg">
            <img src="/public/images/loading.svg" style="transform: scale(.8);">
        </div>
    </div>

    <main id="app">
        @yield('content')
    </main>

    <div id="audio">
        <audio-option></audio-option>
    </div>

    <script src="{{ asset('public/js/app.js') }}"></script>
    @yield('js')
</body>
</html>
