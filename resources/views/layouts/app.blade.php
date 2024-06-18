<!doctype html>
@if (App::getLocale() == 'en')
<html class="no-js" lang="en" dir="ltr">
@else
<html class="no-js" lang="ar" dir="rtl">
@endif
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ZEEM - @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">

        @if (App::getLocale() == 'en')
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/colors/default.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">

        @else
        <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style-rtl.css')}}">
        <link rel="stylesheet" href="{{asset('css/meanmenu-rtl.css')}}">
        <link rel="stylesheet" href="{{asset('css/reset-rtl.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive-rtl.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel-rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/colors/default-rtl.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick-rtl.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;500&display=swap" rel="stylesheet">
        @endif

		<!-- all css here -->

        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <style>
            body{
                overflow-x:hidden;
            }
        </style>
    </head>
    <body>

        <!-- Header Area Start -->
        <header class="header-area" style="background-color: #fefbea;">

            <!-- Mainmenu Area Start -->
            <div class="mainmenu-area header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-7 col-md-2 col-lg-3 col-6">
                            <div class="logo" style="width:max-content">
                                <a href="{{ route('welcome') }}"><img src="{{asset('img/logo/SVG/logo2.svg')}}" alt="ZEEM" width="200px"></a>
                            </div>
                        </div>
                        <div class="mobile-none col-xs-5 col-md-10 col-lg-9 col-6">
                            <div class="menu-wrapper">
                                <div class="main-menu mean-menu">
                                    <nav>
                                        <ul>
                                            <li class="{{ (request()->is('en')) ? 'active' : '' }}"><a href="{{ route('welcome') }}">{{trans('header.Home')}}</a></li>
                                            <li class="{{ (request()->segment(2) == 'about-us') ? 'active' : '' }}"><a href="{{ route('about') }}">{{trans('header.About')}}</a></li>
                                            <li class="{{ (request()->segment(2) == 'menu') ? 'active' : '' }}"><a href="{{ route('menu') }}">{{trans('header.Menu')}}</a></li>
                                            <li class="{{ (request()->segment(2) == 'contact-us') ? 'active' : '' }}"><a href="{{ route('contact') }}">{{trans('header.Contact')}}</a></li>

                                            @auth
                                            <li><a href="{{ route('home') }}">{{trans('header.Dashboard')}}</a></li>
                                            @endauth


                                            <!-- <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ Config::get('languages')[App::getLocale()] }}
                                                </a>
                                                <ul>
                                                    <li>
                                                @foreach (Config::get('languages') as $lang => $language)
                                                    @if ($lang != App::getLocale())
                                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                                                    @endif
                                                @endforeach
                                            </li> -->
                                            <li>
                                                @foreach (Config::get('languages') as $lang => $language)
                                                    @if ($lang != App::getLocale())
                                                    <a href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                                                    @endif
                                                @endforeach
                                            </li>
                                            </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-lg hidden-md"></div>
                </div>
            </div>
            <!-- Mainmenu Area End -->
        </header>
        <!-- Header Area End -->

@yield('content')



		<!-- all js here -->
        <script src="{{asset('js/vendor/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.auderoSmokeEffect.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('js/ajax-mail.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
	    <script src="{{asset('js/cooking.js')}}"></script>

        @stack('scripts')

        @if (App::getLocale() == 'ar')
        <script src="{{asset('js/rtl.js')}}"></script>
        @else
        <script src="{{asset('js/main.js')}}"></script>
        @endif

    </body>
</html>
