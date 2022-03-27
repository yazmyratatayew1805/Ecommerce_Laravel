<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico-cart.png')}}" />

    <title>Administrator: @yield('title')</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">

    <link href="{{ asset('fontawesome5/css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/themify-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
  {{--  <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
           --}}{{-- <a style=" font-size: large; font-weight: bold; color: #2c2172; font-size: x-large; font-family: 'Lucida Console'; text-transform: capitalize;" href="{{ route('index') }}">
                Saýta dolanyp gelmek
            </a>--}}{{--

            <div id="navbar" class="collapse navbar-collapse">
                <ul style="width: 55%;" class="nav navbar-nav">
                    @admin
                    <li style=" margin-left: 5%;" class="nav-item"><a style="font-size: large; font-weight: bold; color: #2c2172;" href="{{ route('categories.index') }}">Kategoriýa</a></li>
                    <li style=" margin-left: 5%;" ><a style="font-size: large; font-weight: bold; color: #2c2172;" href="{{ route('products.index') }}">Harytlar</a>
                    <li style=" margin-left: 5%;" ><a style="font-size: large; font-weight: bold; color: #2c2172;" href="{{ route('properties.index') }}">Mazmuny</a>
                    </li>
                    <li  style="margin-left: 5%;"><a style="font-size: large; font-weight: bold; color: #2c2172;" href="{{ route('home') }}">Sargytlar</a></li>
                    @endadmin
                </ul>

                @guest
                    <ul style="margin-left: 20%;" class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a style="font-size: large; font-weight: bold; color: #2c2172;" href="{{ route('login') }}">Ulgama girmek</a>
                        </li>
                       --}}{{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Зарегистрироваться</a>
                        </li>--}}{{--
                    </ul>
                @endguest

                @auth
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            <a style="margin-left: 200%;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" v-pre>
                                @admin Administrator  {{ Auth::user()->name }} @endadmin

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout')}}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Çykmak
                                </a>

                                <form id="logout-form" action="{{ route('logout')}}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>--}}

    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="#"><img src="{{asset('images/fav.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-center">
                          {{--  <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">@lang('main.online_shop')</a></li>--}}
                            <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Kategoriýa</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Harytlar</a>
                            <li class="nav-item"><a class="nav-link" href="{{ route('properties.index') }}">Mazmuny</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Sargytlar</a></li>
                            {{--<li class="nav-item"><a class="nav-link" href="{{ route('locale', __('main.set_lang')) }}">@lang('main.set_lang')</a></li>--}}
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @guest
                                <li class="nav-item"><a style="width: 170px;" href="{{ route('login') }}" class="primary_btn">@lang('main.login')</a></li>
                            @endguest
                            @auth

                                <li class="nav-item"><a class="nav-link" href="{{ route('get-logout') }}">@lang('main.logout')</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
    </div>





</div>
</body>
</html>
