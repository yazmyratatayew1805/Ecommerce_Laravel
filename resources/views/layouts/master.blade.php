<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico-cart.png')}}" />

    <title>@lang('main.online_shop'): @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">





    <link href="{{ asset('fontawesome5/css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/themify-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">







</head>
<body>
{{--

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">@lang('main.online_shop')</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li @routeactive('index')><a href="{{ route('index') }}">@lang('main.all_products')</a></li>
                <li @routeactive('categor*')><a href="{{ route('categories') }}">@lang('main.categories')</a>
                </li>
                <li @routeactive('basket*')><a href="{{ route('basket') }}">@lang('main.cart')</a></li>
<li><a href="{{ route('reset') }}">@lang('main.reset_project')</a></li>

                <li><a href="{{ route('locale', __('main.set_lang')) }}">
@lang('main.set_lang')</a></li>

<li class="dropdown">

<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $currencySymbol }}<span class="caret"></span></a>

<ul class="dropdown-menu">

@foreach ($currencies as $currency)

<li><a href="{{ route('currency', $currency->code) }}">{{ $currency->symbol }}</a></li>

@endforeach

</ul>

</li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">@lang('main.login')</a></li>
                @endguest

                @auth
                    @admin
                    <li><a href="{{ route('home') }}">@lang('main.admin_panel')</a></li>
                    @else
                    <li><a href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a></li>
                    @endadmin
                    <li><a href="{{ route('get-logout') }}">@lang('main.logout')</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
--}}


<header class="header_area" >
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('index') }}"><img src="{{asset('images/fav.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item "><a class="nav-link" href="{{ route('index') }}">@lang('main.online_shop')</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">@lang('main.all_products')</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('categories')}}">@lang('main.categories')</a>
  {{-- <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="price.html">Pricing</a>
                                <li class="nav-item"><a class="nav-link" href="games.html">Games</a>
                                <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                            </ul>
                        </li>--}}

                        <li class="nav-item"><a class="nav-link" href="{{route('basket')}}">@lang('main.cart')</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('locale', __('main.set_lang')) }}">@lang('main.set_lang')</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                        <li class="nav-item"><a style="width: 170px;" href="{{ route('login') }}" class="primary_btn">@lang('main.login')</a></li>
                        @endguest
{{--                            @auth--}}
{{--                                @admin--}}
{{--                                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">@lang('main.admin_panel')</a></li>--}}
{{--                            @else--}}
{{--                                <li class="nav-item"><a class="nav-link" href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a></li>--}}
{{--                                @endadmin--}}
{{--                                <li class="nav-item"><a class="nav-link" href="{{ route('get-logout') }}">@lang('main.logout')</a></li>--}}
{{--                            @endauth--}}
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

{{--

<nav style="margin-top: -2.3%;" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

<div class="container">

<a class="navbar-brand" href="{{ route('index') }}"> <span class="flaticon-pizza-1 mr-1"></span>Watan<br><small>Söwda Merkezi</small></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">

<span class="oi oi-menu"></span> Menu

</button>

<div class="collapse navbar-collapse" id="ftco-nav">

<ul class="navbar-nav ml-auto">

<li class="nav-item active">  <a href="{{ route('index') }}" class="nav-link"><i class="fa fa-shopping-basket" style="margin-top: 2.5%;  color: darkgoldenrod"></i> @lang('main.online_shop')</a></li>

<li class="nav-item"><a href="{{ route('index') }}" class="nav-link"><i class="fa fa-hamburger" style="margin-top: 2.5%;  color: darkgoldenrod"></i>@lang('main.all_products')</a></li>

<li class="nav-item"><a href="{{route('categories')}}" class="nav-link"> <i class="fa fa-shopping-bag" style="margin-top: 2.5%;  color: darkgoldenrod"></i>@lang('main.categories')</a></li>

<li class="nav-item"><a href="{{route('basket')}}" class="nav-link"><i class="fa fa-shopping-cart" style="margin-top: 2.5%;  color: darkgoldenrod"></i>@lang('main.cart')</a></li>

<li class="nav-item"><a href="{{ route('locale', __('main.set_lang')) }}" class="nav-link">@lang('main.set_lang')</a></li>

@guest

<li class="nav-item"><a href="{{ route('login') }}" class="nav-link"> <i class="fa fa-user-alt" style="margin-top: 2.5%;  color: darkgoldenrod;"></i>@lang('main.login')</a></li>

@endguest

@auth

@admin

<li class="nav-item"><a href="{{ route('home') }}" class="nav-link"> <i class="fa fa-server" style="margin-top: 2.5%;  color: darkgoldenrod; margin-right: -2%;"></i>@lang('main.admin_panel')</a></li>

@else

<li class="nav-item"><a href="{{ route('person.orders.index') }}" class="nav-link">@lang('main.my_orders')</a></li>

@endadmin

<li class="nav-item"><a href="{{ route('get-logout') }}" class="nav-link"> <i class="fa fa-door-closed" style="margin-top: 2.5%;  color: darkgoldenrod; margin-right: -2%;"></i>@lang('main.logout')</a></li>

@endauth

</ul>

</div>

</div>

</nav>
--}}


<div style="margin-top: 3%;" class="text-xl-center">
<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p  class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif
        @yield('content')
    </div>
</div>
</div>
{{--
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6"><p>Kategoriýalar</p>
                <ul>
                    @foreach($categories as $category)
                        <li><a href="{{ route('category', $category->code) }}">{{ $category->__('name') }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6"><p>Köp satylýan harytlar</p>
                <ul>
                    @foreach ($bestSkus as $bestSku)
                        <li><a href="{{ route('sku',
                [$bestSku->product->category->code, $bestSku->product->code, $bestSku]) }}">
                                {{ $bestSku->product->__('name') }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>--}}

<footer class=" section_gap_top" style="color: white; background: #3b0c87">
    <div class="container" >
        <div class="row footer_inner">
            <div class="col-lg-3 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h4>@lang('main.categories')</h4>
                    </div>
                    <ul>
                        @foreach($categories as $category)
                            <li ><a style="color: white;" href="{{ route('category', $category->code) }}">{{ $category->__('name') }}</a></li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h4>Hyzmatlarmyz</h4>
                    </div>
                    <ul>

                        <li><a style="color: white; font-family:Arial;" href="#">Söwda meýdançamyz</a></li>
                        <li><a style="color: white; font-family:Arial;" href="#">Online erkin söwda</a></li>
                        <li><a style="color: white; font-family:Arial;" href="#">Islendik wagty peýdalanyp bilersiňiz!</a></li>

                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h4>Habarlaşmak üçin</h4>
                    </div>
                    <ul>
                        <li><a style="color: white; font-family:Arial;" href="#">Ýokary okuw jaýy: </a></li>
                        <li><a style="color: white; font-family:Arial;" href="#">+99361919089</a></li>
                        <li><a style="color: white; font-family:Arial;" href="#">mekanisankulyyew@gmail.com</a></li>


                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-6">
                <aside class="f_widget ab_widget">
                   <img src="{{asset('images/home-left.png')}}">
                </aside>
            </div>
        </div>
        <div class="row single-footer-widget">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="copy_right_text">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <script>document.write(new Date().getFullYear());</script> Ähli hukuklar goralan | Produced <i class="fa fa-laptop-code"></i> by <a style="color: gold" href="{{route('index')}}" target="_blank">Işangulyýew Mekan</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
{{-- <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="social_widget">
                    <a href="#"><i class="fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>--}}

        </div>
    </div>
</footer>
</body>
</html>


{{--

        <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('main.online_shop'): @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">@lang('main.online_shop')</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li @routeactive('index')><a href="{{ route('index') }}">@lang('main.all_products')</a></li>
                <li @routeactive('categor*')><a href="{{ route('categories') }}">@lang('main.categories')</a>
                </li>
                <li @routeactive('basket*')><a href="{{ route('basket') }}">@lang('main.cart')</a></li>
                --}}
{{--<li><a href="{{ route('reset') }}">@lang('main.reset_project')</a></li>--}}{{--

                <li><a href="{{ route('locale', __('main.set_lang')) }}"> --}}
{{--<img src="{{asset('favicon.ico')}}" value="@lang('main.set_lang')">--}}{{--
@lang('main.set_lang')</a></li>

                --}}
{{--<li class="dropdown">--}}{{--

                --}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $currencySymbol }}<span class="caret"></span></a>--}}{{--

                --}}
{{--<ul class="dropdown-menu">--}}{{--

                --}}
{{--@foreach ($currencies as $currency)--}}{{--

                --}}
{{--<li><a href="{{ route('currency', $currency->code) }}">{{ $currency->symbol }}</a></li>--}}{{--

                --}}
{{--@endforeach--}}{{--

                --}}
{{--</ul>--}}{{--

                --}}
{{--</li>--}}{{--

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">@lang('main.login')</a></li>
                @endguest

                @auth
                    @admin
                    <li><a href="{{ route('home') }}">@lang('main.admin_panel')</a></li>
                @else
                    <li><a href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a></li>
                    @endadmin
                    <li><a href="{{ route('get-logout') }}">@lang('main.logout')</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif
        @yield('content')
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6"><p>Kategoriýalar</p>
                <ul>
                    @foreach($categories as $category)
                        <li><a href="{{ route('category', $category->code) }}">{{ $category->__('name') }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6"><p>Köp satylýan harytlar</p>
                <ul>
                    @foreach ($bestSkus as $bestSku)
                        <li><a href="{{ route('sku',
                [$bestSku->product->category->code, $bestSku->product->code, $bestSku]) }}">
                                {{ $bestSku->product->__('name') }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
--}}
