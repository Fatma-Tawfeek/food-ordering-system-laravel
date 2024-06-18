@extends('layouts.app')

@section('title')
@if (App::getLocale() == 'en')
{{'Home'}}
@else
{{'الرئيسية'}}
@endif
@endsection

@section('content')

<!-- Background Area Start -->
<div class="background-area height-100vh-160">
    
    <div class="Background cooking-bg dark-overlay-4">
        <canvas class="Background-canvas"></canvas>
        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
            <div class="single-slide fixed" >
              <div class=" carousel-item active">
                <div class="container text-center">
                    <div class="slider-banner text-white">
                        <h1>
                            @if (App::getLocale() == 'en')
                            {{$settings->headline_en_1}}
                            @else
                            {{$settings->headline_ar_1}}
                            @endif
                        ​</h1>
                        <h6>
                            @if (App::getLocale() == 'en')
                            {{$settings->desc_en_1}}
                            @else
                            {{$settings->desc_ar_1}}
                            @endif
                        </h6>
                        <div class="banner-btn">
                            <a href="{{ route('menu') }}" class="default-btn"><span>{{trans('header.OrderNow')}}</span></a>
                        </div>
                    </div>
                </div>         
             </div>
    
             <div class=" carousel-item" data-interval="60000">
                <div class="container text-center">
                    <div class="slider-banner text-white">
                        <h1>
                            @if (App::getLocale() == 'en')
                            {{$settings->headline_en_2}}
                            @else
                            {{$settings->headline_ar_2}}
                            @endif
                        ​</h1>
                        <h6>
                            @if (App::getLocale() == 'en')
                            {{$settings->desc_en_2}}
                            @else
                            {{$settings->desc_ar_2}}
                            @endif
                        </h6>
                        <div class="banner-btn">
                            <a href="{{ route('menu') }}" class="default-btn"><span>{{trans('header.OrderNow')}}</span></a>
                        </div>
                    </div>
                </div>         
             </div>
    
             <div class=" carousel-item" data-interval="60000"> 
                <div class="container text-center">
                    <div class="slider-banner text-white">
                        <h1>
                            @if (App::getLocale() == 'en')
                            {{$settings->headline_en_3}}
                            @else
                            {{$settings->headline_ar_3}}
                            @endif
                        ​</h3>
                        <h6>
                            @if (App::getLocale() == 'en')
                            {{$settings->desc_en_3}}
                            @else
                            {{$settings->desc_ar_3}}
                            @endif
                        </h6>
                        <div class="banner-btn">
                            <a href="{{ route('menu') }}" class="default-btn"><span>{{trans('header.OrderNow')}}</span></a>
                        </div>
                    </div>
                </div>         
             </div>
            </div>
            
            <a class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev" style="z-index: 99;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
              <a class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next" style="z-index: 99;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>   
         
     </div>   -->

     <div id="carouselExampleIndicators">
            <div class="single-slide fixed">
              <div class=" carousel-item active">
                <div class="container text-center">
                    <div class="slider-banner text-white">
                        <h1>
                            @if (App::getLocale() == 'en')
                            {{$settings->headline_en_1}}
                            @else
                            {{$settings->headline_ar_1}}
                            @endif
                        ​</h1>
                        <p>
                            @if (App::getLocale() == 'en')
                            {!!$settings->desc_en_1!!}
                            @else
                            {!!$settings->desc_ar_1!!}
                            @endif
                        </p>
                        <p>
                            @if (App::getLocale() == 'en')
                            {!!$settings->desc_en_2!!}
                            @else
                            {!!$settings->desc_ar_2!!}
                            @endif
                        </p>
                        <p>
                            @if (App::getLocale() == 'en')
                            {!!$settings->desc_en_3!!}
                            @else
                            {!!$settings->desc_ar_3!!}
                            @endif
                        </p>
                        <div class="banner-btn" style="position:relative;bottom:0px">
                            <a href="{{ route('menu') }}" class="default-btn"><span>{{trans('header.OrderNow')}}</span></a>
                        </div>
                    </div>
                </div>         
             </div>
            </div>
          </div>   
     </div>  
    </div>

    

<!-- Background Area End -->


 <!-- About Two Area Start -->
        {{-- <div class="about-two-area ptb-120" style="background-color: #fefbea;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-video-wrapper">
                            <img src="{{asset('img/banner/6.jpg')}}" alt="">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=lcU3pruVyUw&ab_channel=RafeeRahman">
                                <i class="zmdi zmdi-play-circle-outline"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>{{trans('about.title')}}</h2>
                            <p>
                            @if (App::getLocale() == 'en')
                            {{$settings->about_en}}
                            @else
                            {{$settings->about_ar}}
                            @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Two Area End -->
         <!-- Menu Area Start -->
         <div class="menu-area bg-light-1 pt-120 pb-120">
            <div class="container">
                <div class="section-title text-center">
                    <h2>{{ trans('menu.title') }}</h2>
                    <p>{{trans('menu.description')}}</p>
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
                                                        <p class="mt-2" style="font-size:16px"><span class="text-white rounded" style="background-color: #642e33;">{{ trans('menu.InStock') }} <strong>{{$wmeal->quantity}}</strong></span></p>
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
                                                        <p class="mt-2"><span class="text-white rounded" style="background-color: #642e33;">{{ trans('menu.InStock') }} <strong>{{$meal->quantity}}</strong></span></p>
                                                        <a href="{{ route('meals.show.client', $meal->id)}}" class="default-btn buyMeal mb-2 {{ ((App::getLocale() == 'en')) ? 'float-right' : 'float-left' }}">
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
                <div class="row">
                    <div class="col-lg-12 pt-60 menu-link text-center">
                        <a href="{{ route('menu') }}" class="default-btn"><span>{{trans('menu.full')}}</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Area End -->
        <!-- Reservation Area Start -->
         <div class="reservation-area bg-1 ptb-120">
            <div class="container">
                <div class="section-title text-center text-white">
                    <h2>{{ trans('contact.title') }}</h2>
                    <p>{{trans('contact.description')}}</p>
                </div>
                <div class="reservation-container">
                    <div class="reservation-img">
                        <img src="img/banner/5.jpg" alt="">
                    </div>
                    <div class="reservation-content">
                      <h3>{{ trans('contact.title') }}</h3>
                        <div class="contact-form-wrapper">
                        <form id="contact" action="{{ route('contacts.store') }}" method="post">
                            @csrf
                            <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                                {{ trans('contact.success') }}
                             </div>
                            <div class="form-box required">
                                <input type="text" name="name" id="name" placeholder="{{trans('contact.name')}}">
                                <span class="text-danger" id="nameErrorMsg"></span>
                            </div>
                            <div class="form-box required">
                                <input type="text" name="email" id="email" placeholder="{{trans('contact.email')}}">
                                <span class="text-danger" id="emailErrorMsg"></span>
                            </div>
                            <div class="form-box required">
                                <input type="text" name="subject" id="subject" placeholder="{{trans('contact.subject')}}">
                                <span class="text-danger" id="subjectErrorMsg"></span>
                            </div>
                            <div class="form-box required textarea">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="{{trans('contact.Message')}}"></textarea>
                                <span class="text-danger" id="messageErrorMsg"></span>
                            </div>
                            <button type="submit" class="default-btn submit-btn"><span>{{ trans('contact.send') }}</span></button>

                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div> --}}


<!-- Reservation Area End -->

      <!-- Footer Area Start -->
      <footer class="footer-area">
       
        <div class="footer-bottom bg-color text-center">
            <div class="container">
                <span class="footer-text">&copy; <a href="#" target="_blank">ZEEMFOOD</a> {{trans('footer.copyRights')}}</span>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
@endsection

    @push('scripts')
        <script>
        $('#contact').on('submit',function(e){
            e.preventDefault();

            var formData = new FormData(this);
            let name = $('#name').val();
            let email = $('#email').val();
            let subject = $('#subject').val();
            let message = $('#message').val();


            $.ajax({
            url: "{{route('contacts.store')}}",
            type:"POST",
            data: formData,
            success:function(response){
                $('#successMsg').show();
                console.log(response);
            },
            error: function(response) {
                $('#nameErrorMsg').text(response.responseJSON.errors.name);
                $('#emailErrorMsg').text(response.responseJSON.errors.email);
                $('#subjectErrorMsg').text(response.responseJSON.errors.subject);
                $('#messageErrorMsg').text(response.responseJSON.errors.message);
            },
            contentType: false,
            processData: false,
            });
            });

        </script>

    @endpush
