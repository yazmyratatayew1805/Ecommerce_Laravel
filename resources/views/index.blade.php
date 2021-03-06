@extends('layouts.master')

@section('title', __('main.title'))

@section('content')


   <section class="upcoming_games_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2 style="color: darkblue;">@lang('main.all_products')</h2>
                        <h1 style="color: #2b11ff">@lang('main.all_products')</h1>
                    </div>
                </div>
            </div>
            <form style="margin-top: -5%;" method="GET" action="{{route("index")}}">
                <div class="filters row">
                    <div class="col-sm-6 col-md-3">
                        <label style="color: #2b11ff; font-size: medium; font-weight: bold;" for="price_from">@lang('main.price_from')
                            <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from}}" style="border-radius: 10px;">
                        </label>
                        <label style="color: #2b11ff; font-size: medium; font-weight: bold;" for="price_to">@lang('main.to')
                            <input type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}" style="border-radius: 10px;">
                        </label>
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <label style="color: #2b11ff; font-size: medium; font-weight: bold;" for="hit">
                            <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif> @lang('main.properties.hit')
                        </label>
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <label style="color: #2b11ff; font-size: medium; font-weight: bold;" for="new">
                            <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif> @lang('main.properties.new')
                        </label>
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <label style="color: #2b11ff; font-size: medium; font-weight: bold;" for="recommend">
                            <input type="checkbox" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif> @lang('main.properties.recommend')
                        </label>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <button type="submit" class="btn btn-primary">@lang('main.filter')</button>
                        <a href="{{ route("index") }}" class="btn btn-warning">@lang('main.reset')</a>
                    </div>
                </div>
            </form>
            <div class="row">
                @foreach($skus as $sku)
                    @include('layouts.card', compact('sku'))
                @endforeach
            </div>
            {{ $skus->links() }}

            </div>
    </section>


     {{--   <h1>@lang('main.all_products')</h1>
        <form method="GET" action="{{route("index")}}">
            <div class="filters row">
                <div class="col-sm-6 col-md-3">
                    <label for="price_from">@lang('main.price_from')
                        <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from}}">
                    </label>
                    <label for="price_to">@lang('main.to')
                        <input type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">
                    </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="hit">
                        <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif> @lang('main.properties.hit')
                    </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="new">
                        <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif> @lang('main.properties.new')
                    </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="recommend">
                        <input type="checkbox" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif> @lang('main.properties.recommend')
                    </label>
                </div>
                <div class="col-sm-6 col-md-3">
                    <button type="submit" class="btn btn-primary">@lang('main.filter')</button>
                    <a href="{{ route("index") }}" class="btn btn-warning">@lang('main.reset')</a>
                </div>
            </div>
        </form>
        <div class="row">
            @foreach($skus as $sku)
                @include('layouts.card', compact('sku'))
            @endforeach
        </div>
        {{ $skus->links() }}

--}}
   <div style="margin-top: -3%;" class="col-md-12">
       <div class="container">
           <div class="row">
               <div class="col-xl-10 offset-4">
                   <label style="display: inline; float: left;margin-left: -70%;">
<h2  style="color: #2c2172; font-weight: bold; font-size: xx-large; margin-top: 20%; font-family:Verdana;">M????deriler ????in alnyp barylmaly
    <br>
    hyzmatlardan pe??dalany??!</h2>
                       <p style="color: #2c2172; font-family: 'Arial Black'; text-transform: none; font-size: medium;">H??zirki wagtda ??urdumyzda ??e??le-de <br>
                       Teleke??ilerimiz ????in ygtybarly s??wda ulgamyny
                           <br>
                           sanly sistemasy, d??n???? toruna, b??tin halka
                           <br>
                           a??dy?? derejede <b>Online Marketing</b>
                           <br> ugur bilen agrar parti??any?? g??ndelik alyp
                           <br> i??lerini internet tory bilen dowam etdirmek<br> m??mkin??iligi bar!


                       </p>

                   </label>
               <img style="display: inline; float: right; " src="{{asset('images/kitap.jpg')}}">
               </div>
           </div>
       </div>
   </div>

{{--        <div  style="width: 2300px; margin-left: -55%;" class="home">--}}
{{--            <div  class="home_slider_container">--}}
{{--                <!-- Home Slider -->--}}
{{--                <div  class="owl-carousel owl-theme home_slider">--}}

{{--                    <!-- Slider Item -->--}}


{{--                    <!-- Slider Item -->--}}
{{--                    <div class="owl-item">--}}
{{--                        <div class="home_slider_background" style="background-image:url('images/kitap.jpg')"></div>--}}
{{--                        <div class="home_content">--}}
{{--                            <div class="container">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col">--}}
{{--                                        <div class="home_content_inner">--}}
{{--                                            <div class="home_title"><h1></h1></div>--}}
{{--                                            <div class="home_text">--}}
{{--                                                <h3 style="color: #2c2172;">Geljege <b>Ynamly ??ollar </b>  Bilen Bar??arys</h3>--}}
{{--                                            </div>--}}
{{--                                            <div class="button home_button">--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- Slider Item -->--}}
{{--                    <div class="owl-item">--}}
{{--                        <div class="home_slider_background" style="background-image:url('images/trans.jpg')"></div>--}}
{{--                        <div class="home_content">--}}
{{--                            <div class="container">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col">--}}
{{--                                        <div class="home_content_inner">--}}
{{--                                            <div class="home_title"><h1></h1></div>--}}
{{--                                            <div class="home_text">--}}
{{--                                                <p> </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="button home_button">--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <!-- Slider Progress -->--}}
{{--                <div class="home_slider_progress"></div>--}}
{{--            </div>--}}
{{--        </div>--}}


        {{--<section class="contact_area section_gap">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="fa fa-home"></i>
                                <h6 style="color: #2b11ff; font-size: medium; font-weight: bold;">A??gabat ????heri</h6>
                                <p style="color: #2b11ff; font-size: medium; font-weight: bold;">Mir 7, "Salam" market</p>
                            </div>
                            <div class="info_item">
                                <i class="fa fa-phone"></i>
                                <h6><a style="color: #2b11ff; font-size: medium; font-weight: bold;" href="#">+99365124536</a></h6>
                                <p style="color: #2b11ff; font-size: medium; font-weight: bold;">7-24 sizi?? hyzmaty??yzda</p>
                            </div>
                            <div class="info_item">
                                <i class="fa fa-mail-bulk"></i>
                                <h6><a style="color: #2b11ff; font-size: medium; font-weight: bold;" href="#">E-mail addressimiz</a></h6>
                                <p style="color: #2b11ff; font-size: medium; font-weight: bold;">salam@mail.ru</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="#" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input style="border-color:#2b11ff; " type="text" class="form-control" id="name" name="name" placeholder="Ady??yz">
                                </div>
                                <div class="form-group">
                                    <input style="border-color:#2b11ff; " type="text" class="form-control" id="surname" name="email" placeholder="Famili??a??yz">
                                </div>
                                <div class="form-group">
                                    <input style="border-color:#2b11ff; " type="number" class="form-control" id="phone" name="subject" placeholder="Telefon ykjam belgi??iz">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea style="border-color:#2b11ff; " class="form-control" name="message" id="message" rows="1" placeholder="Teklip hem-de arz ??ika??atlary??yz. . ."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="primary_btn">Ugrat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>--}}

@endsection


{{--

@extends('layouts.master')

@section('title', __('main.title'))

@section('content')
    <h1>@lang('main.all_products')</h1>
    <form method="GET" action="{{route("index")}}">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">@lang('main.price_from')
                    <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from}}">
                </label>
                <label for="price_to">@lang('main.to')
                    <input type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="hit">
                    <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif> @lang('main.properties.hit')
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="new">
                    <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif> @lang('main.properties.new')
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="recommend">
                    <input type="checkbox" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif> @lang('main.properties.recommend')
                </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">@lang('main.filter')</button>
                <a href="{{ route("index") }}" class="btn btn-warning">@lang('main.reset')</a>
            </div>
        </div>
    </form>
    <div class="row">
        @foreach($skus as $sku)
            @include('layouts.card', compact('sku'))
        @endforeach
    </div>
    {{ $skus->links() }}
@endsection--}}
