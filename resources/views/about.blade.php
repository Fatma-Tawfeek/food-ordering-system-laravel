@extends('layouts.app')

@section('title')
@if (App::getLocale() == 'en')
{{'About Us'}}
@else
{{'من نحن'}}
@endif
@endsection

@section('content')

<!-- Banner Title Area Start -->
<div class="banner-title-area text-center ptb-100 dark-overlay-7" style="background: url({{ asset('images/' . $settings->about_image) }}) no-repeat center center;background-size:cover;">
    <div class="container">
        <h1>{{trans('about.title')}}</h1>
    </div>
</div>
<!-- Banner Title Area End -->
<!-- About Service Area Start -->
<div class="about-service-area ptb-120" style="background-color: #fefbea;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-image-slider">
                    @foreach ($settings->images as $image)
                    <div class="p-image"><img src="{{asset('images/'.$image->url)}}" alt=""></div>
                    @endforeach
                </div>
                <!-- <div class="service-thumbnail-slider row">
                    @foreach ($settings->images as $image)
                    <div class="col"><img src="{{asset('images/'.$image->url)}}" alt=""></div>
                    @endforeach
                </div> -->
            </div>
            <div class="col-lg-6">
                <div class="about-service-text align-self-center">
                    <!-- <div class="section-title">
                        <h2>{{trans('about.title')}}</h2>
                    </div> -->
                    <p>
                        @if (App::getLocale() == 'en')
                        {!! $settings->about_en !!}
                        @else
                        {!! $settings->about_ar !!}
                        @endif    
                    </p>
                    <a href="{{ route('menu') }}" class="default-btn"><span>{{trans('header.OrderNow')}}</span></a>
                </div>               
            </div>
        </div>
    </div>
</div>
<!-- About Service Area End -->

 <!-- Team Area Start -->
 <div class="team-area pb-120" style="background-color: #fefbea;">
    <div class="container">
        <div class="section-title text-center">
            <h2>{{trans('about.chefs')}}</h2>
        </div>
        <div class="row" style="align-items: center;justify-content: center;">
            @inject('chefs', 'App\Models\Chef')
            @foreach ($chefs->all() as $chef )
            <div class="col-md-4">
                <div class="single-team">
                    <img src="{{asset('images/'.$chef->image)}}" alt="" class="p-img">
                    <img src="{{asset('images/'.$chef->image)}}" alt="" class="s-img">
                    <div class="team-hover">
                        <h4>
                            @if (App::getLocale() == 'en')
                            {{$chef->name_en}}
                            @else
                            {{$chef->name_ar}}
                            @endif
                        </h4>
                        <span>
                            @if (App::getLocale() == 'en')
                            {{ $chef->description_en }}
                            @else
                            {{ $chef->description_ar }}
                            @endif
                        </span>
                        <div class="team-link">
                            <a href="{{ $chef->fb_link }}"><i class="zmdi zmdi-facebook"></i></a>                            
                            <a href="{{ $chef->tw_link }}"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="{{ $chef->insta_link }}"><i class="zmdi zmdi-instagram"></i></a>                
                        </div>
                    </div>
                </div>
            </div>                
            @endforeach      
        </div>
    </div>
</div>
<!-- Team Area End -->

<!-- Footer Area Start -->
<footer class="footer-area">
    <div class="footer-top footer-text-white bg-2 ptb-120 dark-overlay-78" style="background: url('{{ asset('images/' . $settings->footer_image) }}') no-repeat center center;background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-footer-widget">
                        <h4>{{trans('footer.opening')}}</h4>
                        <div class="footer-widget-text">
                            <span>
                                @if (App::getLocale() == 'en')
                                {{$settings->start_day}}
                                @else
                                    @switch($settings->start_day)
                                        @case('Saturday')
                                        السبت
                                        @break
                                        @case('Sunday')
                                       الاحد
                                        @break
                                        @case('Monday')
                                        الاثنين
                                        @break
                                        @case('Tuesday')
                                        الثلاثاء
                                        @break
                                        @case('Wednesday')
                                        الاربعاء
                                        @break
                                        @case('Thursday')
                                        الخميس
                                        @break
                                        @case('Friday')
                                        الجمعة
                                        @break

                                    @endswitch
                                    @endif

                                    -

                                    @if (App::getLocale() == 'en')
                                    {{$settings->end_day}}
                                    @else
                                        @switch($settings->end_day)
                                            @case('Saturday')
                                            السبت
                                            @break
                                            @case('Sunday')
                                           الاحد
                                            @break
                                            @case('Monday')
                                            الاثنين
                                            @break
                                            @case('Tuesday')
                                            الثلاثاء
                                            @break
                                            @case('Wednesday')
                                            الاربعاء
                                            @break
                                            @case('Thursday')
                                            الخميس
                                            @break
                                            @case('Friday')
                                            الجمعة
                                            @break
    
                                        @endswitch
                                        @endif
                                 :
                            <span>
                            <span class="dot">. . . . .</span> {{date('H:i', strtotime($settings->start_hour))}} - {{date('H:i', strtotime($settings->end_hour))}}</span></span>                                
                        </div>
                    </div>
                    <div class="single-footer-widget mt-5">
                        <h4>{{trans('footer.tax')}} : <span style="color: #9d9d9d;">{{ $settings->tax }}</span></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-footer-widget">
                        <h4>{{trans('footer.follow')}}</h4>
                        <div class="social-icons">
                            <a href="{{$settings->fb_link}}" target="_blank"><span class="zmdi zmdi-facebook"></span></a>
                            <a href="{{$settings->tw_link}}" target="_blank"><span class="zmdi zmdi-twitter"></span></a>
                            <a href="{{$settings->insta_link}}" target="_blank"><span class="zmdi zmdi-instagram"></span></a>
                        </div>
                    </div>
                    <div class="single-footer-widget mt-5">
                        <h4><a href="{{ route('contact') }}" style="text-decoration: underline;">{{trans('footer.contact')}}</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-color text-center">
        <div class="container">
            <span class="footer-text">&copy; <a href="#" target="_blank">ZEEMFOOD</a> {{trans('footer.copyRights')}}</span>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

@endsection
