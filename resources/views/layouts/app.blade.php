<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>.::Buon Giorno::.</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow&amp;subset=cyrillic-ext,latin">
    <style>
        body {
            font-family: 'PT Sans Narrow', sans-serif;
            font-size: 17px;
            background-image: url("http://i.imgur.com/XDGv40T.png");
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span>. : : Buon <img style="max-width: 30px; max-height: 30px" src="http://i.imgur.com/CRX6Cky.png"> Giorno : : .</span>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="\pizza"><img src="http://i.imgur.com/2b75tYX.png" style="max-height: 23px; max-width: 23px">Пицца</a></li>
                        <li><a href="\snacks"><img src="http://i.imgur.com/XUFdRiW.png" style="max-height: 23px; max-width: 23px">Зууш</a></li>
                        <li><a href="\beverages"><img src="http://i.imgur.com/8N0iJpn.png" style="max-height: 23px; max-width: 23px">Ундаа</a></li>
                        <li><a href="/mybasket"><img src="http://i.imgur.com/yOdSCZo.png" style="max-height: 23px; max-width: 23px">Миний сагс</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Нэвтрэх</a></li>
                            <li><a href="{{ route('register') }}">Бүртгүүлэх</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Гарах
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
