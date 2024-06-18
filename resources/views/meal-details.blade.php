@extends('layouts.app')

@section('title')
@if (App::getLocale() == 'en')
{{$meal->name_en}}
@else
{{$meal->name_ar}}
@endif
@endsection

@section('content')

 <!-- Banner Title Area Start -->
 <div class="banner-title-area bg-4 text-center ptb-100 dark-overlay-7"
 style="background-image: url({{asset('images/'.$meal->thumbnail)}});">
    <div class="container">
        <h1>
            @if (App::getLocale() == 'en')
            {{$meal->name_en}}
            @else
            {{$meal->name_ar}}
           @endif
        </h1>
    </div>
</div>
<!-- Banner Title Area End -->

<!-- About Service Area Start -->
<div class="about-service-area" style="background-color: #fefbea;">
    <div class="container ptb-120">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-image-slider">
                    @foreach ($meal->images as $image )
                    <div class="p-image"><img src="{{asset('images/'.$image->url)}}" alt=""></div>
                    @endforeach

                </div>
                <div class="service-thumbnail-slider row">
                    @foreach ($meal->images as $image )
                    <div class="col"><img src="{{asset('images/'.$image->url)}}" alt=""></div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="about-service-text align-self-center">
                    <div class="section-title">
                        @if (App::getLocale() == 'en')
                          <h2>{{$meal->name_en}}</h2>
                        @else
                          <h2>{{$meal->name_ar}}</h2>
                        @endif
                    </div>

                    @if($meal->category_id)
                    @if (App::getLocale() == 'en')
                    <span class="badge badge-warning mb-2">
                        {{$meal->category->name_en}}
                    </span><br>
                    @else
                    <span class="badge badge-warning mb-2">
                        {{$meal->category->name_ar}}
                    </span><br>
                    @endif
                    @endif


                  @if (($meal->day) != date('l', strtotime(Carbon::now())))
                    @if ($meal->quantity > 0)
                    <p><span class="p-1 text-white rounded" style="background-color: #642e33;">{{ trans('menu.InStock') }} <strong>{{$meal->quantity}}</strong></span></p>
                    @else
                    <p><span class="p-1 bg-danger text-white rounded">{{trans('menu.outOfStock')}}</span></p>
                    @endif
                    <h5 class="mb-10" style="color:#ed1c24">{{number_format($meal->price)}} {{trans('menu.EGP')}}</h5>
                    @if (App::getLocale() == 'en')
                        <p>{{ $meal->description_en}}</p>
                    @else
                        <p>{{ $meal->description_ar}}</p>
                    @endif
                    <div class="about-text-list">
                    @if ($meal->quantity > 0)
                        <a href="#order{{ $meal->id }}" class="modal-view default-btn buyMeal" data-toggle="modal"><i class="fa fa-clock-o" style="color:white"></i>
                            <span>{{ trans('menu.order') }}</span>
                        </a>
                    @endif

                    @else

                    <p><span class="p-1 bg-danger text-white rounded">{{trans('menu.time')}}</span></p>

                    <h5 class="mb-10" style="color:#ed1c24">{{number_format($meal->price)}} {{trans('menu.EGP')}}</h5>
                    @if (App::getLocale() == 'en')
                        <p>{{ $meal->description_en}}</p>
                        @else
                        <p>{{ $meal->description_ar}}</p>
                        @endif
                    <div class="about-text-list">
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Service Area End -->

 <!-- Order Form Start -->

   <div class="modal fade" id="order{{ $meal->id }}" tabindex="-1" role="dialog">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
               </div>
               <div class="modal-body">
                <div class="area-title text-center success">
                    <img src="{{ asset('/img/success.png') }}" width="100" alt="">
                    <h2>@if (App::getLocale() == 'en')
                    Order has been sent Successfuly!
                   @else
                   تم ارسال طلبك بنجاح
                   @endif
                   </h2>
                </div>
                   <div class="form-pop-up-content">
                       <div class="area-title text-center">
                           <h2>@if (App::getLocale() == 'en')
                            {{$meal->name_en}} Order
                          @else
                           طلب {{$meal->name_ar}}
                          @endif
                          </h2>
                       </div>

                        <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                           {{ trans('order_form.success') }}
                        </div>

                       <form method="post" action="{{ route('orders.store', $meal->id) }}" id="order">
                           @csrf

                           <input type="hidden" name="id" id="id" value="{{$meal->id}}">

                           <div class="form-box">
                               <label for="name">{{trans('order_form.name')}}<span class="text-danger">*</span></label>
                               <input type="text" name="name" id="name" required>
                               <span class="text-danger" id="nameErrorMsg"></span>
                           </div>
                           <div class="form-box">
                               <label for="phone">{{trans('order_form.phone')}}<span class="text-danger">*</span></label>
                               <input type="text" name="phone" id="phone" required>
                               <span class="text-danger" id="phoneErrorMsg"></span>
                           </div>
                           <div class="form-box">
                               <label for="address">{{trans('order_form.address')}}<span class="text-danger">*</span></label>
                               <input type="text" name="address" id="address" required>
                               <span class="text-danger" id="addressErrorMsg"></span>
                           </div>
                           <div class="form-box">
                               <label for="quantity">{{trans('order_form.quantity')}}<span class="text-danger">*</span></label>
                               <input type="number" name="quantity" id="quantity" max="{{$meal->quantity}}" min="1" required>
                               <span class="text-danger" id="quantityErrorMsg"></span>
                           </div>
                           <div class="form-box">
                               <label for="preferred_delivery_time">{{trans('order_form.time')}}<span class="text-danger">*</span></label>
                               <select name="preferred_delivery_time" required>
                                <option value=" ">--</option>
                                <option value="2:00 PM">2:00 PM</option>
                                <option value="3:00 PM">3:00 PM</option>
                                <option value="4:00 PM">4:00 PM</option>
                                <option value="5:00 PM">5:00 PM</option>
                                <option value="6:00 PM">6:00 PM</option>
                                <option value="7:00 PM">7:00 PM</option>
                                <option value="8:00 PM">8:00 PM</option>
                                <option value="9:00 PM">9:00 PM</option>
                                <option value="10:00 PM">10:00 PM</option>
                               </select>
                               <span class="text-danger" id="timeErrorMsg"></span>
                           </div>
                           <div class="form-box">
                               <label for="notes">{{trans('order_form.notes')}}</label>
                               <input type="text" name="notes" id="notes"></textarea>
                               <span class="text-danger" id="notesErrorMsg"></span>
                           </div>
                           <div class="notes">
                            <p>- {{trans('order_form.note_1')}}</p>
                            <p>- {{trans('order_form.note_2')}}​</p>
                           </div>
                          
                           <div class="text-center">
                               <button type="submit" class="default-btn"><span>{{trans('order_form.order')}}</span></button>
                           </div>
                       </form>
                    </div>
                   </div>
               </div>
           </div>
       </div>

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

@push('scripts')
<script>
    $('#order').on('submit',function(e){   
        e.preventDefault();   

        var formData = new FormData(this);
        let id = $('#id').val();
        let url = "{{ route('orders.store', ":id") }}";
        url = url.replace(':id', id);
        let name = $('#name').val();
        let phone = $('#phone').val();
        let address = $('#address').val();
        let quantity = $('#quantity').val();
        let time = $('#preferred_delivery_time').val();
        let notes = $('#notes').val();


        $.ajax({
        url: url,
        type:"POST",
        data: formData,
        success: function() {
            $(".form-pop-up-content").hide();
            $('.success').show();

    },
        error: function(response) {
            $('#nameErrorMsg').text(response.responseJSON.errors.name);
            $('#phoneErrorMsg').text(response.responseJSON.errors.phone);
            $('#addressErrorMsg').text(response.responseJSON.errors.address);
            $('#quantityErrorMsg').text(response.responseJSON.errors.quantity);
            $('#timeErrorMsg').text(response.responseJSON.errors.time);
            $('#notesErrorMsg').text(response.responseJSON.errors.notes);
        },
        contentType: false,
        processData: false,
        });
        });

    </script>

 @endpush
