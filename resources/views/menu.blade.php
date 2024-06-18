@extends('layouts.app')

@section('title')
@if (App::getLocale() == 'en')
{{'Our Menu'}}
@else
{{'قائمتنا'}}
@endif
@endsection

@section('content')

 <!-- Banner Title Area Start -->
 <div class="banner-title-area text-center ptb-100 dark-overlay-7" style="background: url('{{ asset('images/' . $settings->menu_image) }}') no-repeat center center;background-size:cover;">
    <div class="container">
        <h1>{{trans('menu.title')}}</h1>
    </div>
</div>
<!-- Banner Title Area End -->

 <!-- Menu Area Start -->
 <div class="menu-area bg-light-1 pt-120 pb-120" style="padding-top:50px">
    <div class="container">
        <div class="section-title text-center">
            <!-- <h2>{{ trans('menu.title') }}</h2> -->
            <p>
                @if (App::getLocale() == 'en')
                {!! $settings->menu_text_en !!}
                @else
                {!! $settings->menu_text_ar !!}
                @endif
            </p>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-3">
                <div class="menu-list">
                    <button class="active" data-filter="*">{{ trans('menu.all') }}<i class="zmdi zmdi-caret-right"></i></button>
                    @inject('categories', 'App\Models\Category' )
                    @foreach ( $categories->all() as $category )
                    <button data-filter=".{{$category->id}}">
                        @if (App::getLocale() == 'en')
                        {{$category->name_en}}
                        @else
                        {{$category->name_ar}}
                        @endif
                    </button>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-10 col-md-9">
                <div class="custom-row ">
                    <div class="grid">
                        @inject('wmeals', 'App\Models\Wmeal')
                        @inject('meals', 'App\Models\Meal')
                        @foreach ($wmeals->all() as $wmeal)
                        <div class="col-lg-6 mt-4 grid-item">
                            <div class="menu-item">
                                <div class="menu-image" style="background-image: url('{{asset('images/'.$wmeal->thumbnail)}}')">
                                    <p><span class="text-white rounded" style="background-color: rgb(237, 28, 36, 0.6);
                                        padding: 2px;
                                        margin-top: 4px;
                                        font-size: 18px;">
                                    {{ trans('menu.week') }}
                                    </span>
                                    </p>
                                            </div>
                                            <div class="menu-text">
                                                <h4>

                                                    @if (App::getLocale() == 'en')
                                                    <a href="{{ route('meals.wshow.client', $wmeal->id)}}">{{$wmeal->name_en}}</a>
                                                    @else
                                                    <a href="{{ route('meals.wshow.client', $wmeal->id)}}">{{$wmeal->name_ar}}</a>
                                                    @endif

                                                    <span>{{number_format($wmeal->price)}} {{trans('menu.EGP')}}</span>
                                                </h4>

                                                @if (App::getLocale() == 'en')
                                                    <span>{{ \Illuminate\Support\Str::limit($wmeal->description_en, 100)}}</span><br>
                                                    @else
                                                    <span>{{ \Illuminate\Support\Str::limit($wmeal->description_ar, 100)}}</span><br>
                                                @endif

                                                @if ($wmeal->quantity > 0)
                                                <p class="mt-2"><span class="text-white rounded" style="background-color: #642e33;">{{ trans('menu.InStock') }} <strong>{{$wmeal->quantity}}</strong></span></p>
                                                <a href="{{ route('meals.wshow.client', $wmeal->id)}}" class="default-btn buyMeal mb-2 {{ ((App::getLocale() == 'en')) ? 'float-right' : 'float-left' }}">
                                                    <span>{{ trans('menu.order') }}</span>
                                                     @if (App::getLocale() == 'en')
                                                    <i class="fa fa-arrow-right" style="color:white"></i>
                                                    @else
                                                    <i class="fa fa-arrow-left" style="color:white"></i>
                                                    @endif

                                                </a>
                                                @else
                                                <p class="mt-2"><span class="bg-danger text-white rounded">{{trans('menu.outOfStock')}}</span></p>
                                                @endif

                                            </div>
                                        </div>
                                    </div>


                        @endforeach
                        @foreach ($meals->all() as $meal)
                        <div class="col-lg-6 mt-4 grid-item {{$meal->category_id}}">
                            <div class="menu-item">
                                <div class="menu-image" style="background-image: url('{{asset('images/'.$meal->thumbnail)}}')">
                                    @if (($meal->day) != date('l', strtotime(Carbon::now())))
                                    <p><span class="text-white rounded" style="background-color: rgb(237, 28, 36, 0.6);
                                        padding: 2px;
                                        margin-top: 4px;
                                        font-size: 18px;">
                                        @if (App::getLocale() == 'en')
                                        {{$meal->day}} Meal
                                        @else
                                            @switch($meal->day)
                                                @case('Saturday')
                                                وجبة يوم السبت
                                                @break
                                                @case('Sunday')
                                               وجبة يوم الاحد
                                                @break
                                                @case('Monday')
                                                وجبة يوم الاثنين
                                                @break
                                                @case('Tuesday')
                                                وجبة يوم الثلاثاء
                                                @break
                                                @case('Wednesday')
                                                وجبة يوم الاربعاء
                                                @break
                                                @case('Thursday')
                                                وجبة يوم الخميس
                                                @break
                                                @case('Friday')
                                                وجبة يوم الجمعة
                                                @break

                                            @endswitch
                                            @endif
                                    </span>
                                    </p>
                                            </div>
                                            <div class="menu-text">
                                                <h4>

                                                    @if (App::getLocale() == 'en')
                                                    <a href="{{ route('meals.show.client', $meal->id)}}">{{$meal->name_en}}</a>
                                                    @else
                                                    <a href="{{ route('meals.show.client', $meal->id)}}">{{$meal->name_ar}}</a>
                                                    @endif

                                                    <span>{{number_format($meal->price)}} {{trans('menu.EGP')}}</span>
                                                </h4>

                                                @if($meal->category_id)
                                                @if (App::getLocale() == 'en')
                                                <span class="badge badge-warning">
                                                    {{$meal->category->name_en}}
                                                </span><br>
                                                @else
                                                <span class="badge badge-warning">
                                                    {{$meal->category->name_ar}}
                                                </span><br>
                                                @endif
                                                @endif

                                                @if (App::getLocale() == 'en')
                                                    <span>{{ \Illuminate\Support\Str::limit($meal->description_en, 100)}}</span><br>
                                                    @else
                                                    <span>{{ \Illuminate\Support\Str::limit($meal->description_ar, 100)}}</span><br>
                                                @endif

                                                @if ($meal->quantity > 0)
                                                <p class="mt-2"><span class="text-white rounded" style="background-color: #642e33;padding:5px;font-size:16px">{{ trans('menu.InStock') }} <strong>{{$meal->quantity}}</strong></span></p>
                                                <a href="{{ route('meals.show.client', $meal->id)}}" class="default-btn buyMeal mb-2 {{ ((App::getLocale() == 'en')) ? 'float-right' : 'float-left' }}">                                                    
                                                    <span>{{ trans('menu.order') }}</span>
                                                    @if (App::getLocale() == 'en')
                                                    <i class="fa fa-arrow-right" style="color:white"></i>
                                                    @else
                                                    <i class="fa fa-arrow-left" style="color:white"></i>
                                                    @endif
                                                </a>
                                                @else
                                                <p class="mt-2"><span class="bg-danger text-white rounded" style="padding:5px;font-size:16px">{{trans('menu.outOfStock')}}</span></p>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    @else
                                    <p><span class="text-white rounded" style="background-color: rgb(237, 28, 36, 0.6);
                                        padding: 2px;
                                        margin-top: 4px;
                                        font-size: 18px;">
                                        @if (App::getLocale() == 'en')
                                        {{$meal->day}} Meal
                                        @else
                                            @switch($meal->day)
                                                @case('Saturday')
                                                  وجبة يوم السبت
                                                @break
                                                @case('Sunday')
                                               وجبة يوم الاحد
                                                @break
                                                @case('Monday')
                                                وجبة يوم الاثنين
                                                @break
                                                @case('Tuesday')
                                                وجبة يوم الثلاثاء
                                                @break
                                                @case('Wednesday')
                                                وجبة يوم الاربعاء
                                                @break
                                                @case('Thursday')
                                                وجبة يوم الخميس
                                                @break
                                                @case('Friday')
                                                وجبة يوم الجمعة
                                                @break

                                            @endswitch
                                            @endif
                                </div>
                                <div class="menu-text">
                                    <h4>

                                        @if (App::getLocale() == 'en')
                                        <a href="{{ route('meals.show.client', $meal->id)}}">{{$meal->name_en}}</a>
                                        @else
                                        <a href="{{ route('meals.show.client', $meal->id)}}">{{$meal->name_ar}}</a>
                                        @endif

                                        <span>{{number_format($meal->price)}} {{trans('menu.EGP')}}</span>
                                    </h4>

                                    @if($meal->category_id)
                                    @if (App::getLocale() == 'en')
                                    <span class="badge badge-warning">
                                        {{$meal->category->name_en}}
                                    </span><br>
                                    @else
                                    <span class="badge badge-warning">
                                        {{$meal->category->name_ar}}
                                    </span><br>
                                    @endif
                                    @endif

                                    @if (App::getLocale() == 'en')
                                        <span>{{ \Illuminate\Support\Str::limit($meal->description_en, 100)}}</span><br>
                                        @else
                                        <span>{{ \Illuminate\Support\Str::limit($meal->description_ar, 100)}}</span><br>
                                    @endif
                                    <p class="mt-2"><span class="bg-danger text-white rounded">{{trans('menu.time')}}</span></p>


                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                 </div>
            <!-- Register Form End -->

                </div>
            </div>
        </div>

    </div>
</div>
<!-- Menu Area End -->

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
