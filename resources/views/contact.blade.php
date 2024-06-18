@extends('layouts.app')

@section('title')
@if (App::getLocale() == 'en')
{{'Contact Us'}}
@else
{{'اتصل بنا'}}
@endif
@endsection

@section('content')

 <!-- Banner Title Area Start -->
 <div class="banner-title-area bg-4 text-center ptb-100 dark-overlay-7" style="background: url({{ asset('images/' . $settings->contact_image) }}) no-repeat center center;background-size:cover;">
    <div class="container">
        <h1>{{trans('contact.title')}}</h1>
    </div>
</div>
<!-- Banner Title Area End -->

 <!-- Contact Area Start -->
 <div class="contact-area pb-105 " style="background-color: #fefbea;">
    <div class="container">
        <div class="row pt-100">
            <div class="col-xl-5 col-lg-6">
                <div class="contact-info">               
                    <img src="{{asset('images/' . $settings->form_image)}}" alt="">                
                </div>
                <div class="social-icons" style="margin-top:20px">
                    <a href="{{$settings->fb_link}}" target="_blank"><span class="zmdi zmdi-facebook"></span></a>
                    <a href="{{$settings->tw_link}}" target="_blank"><span class="zmdi zmdi-twitter"></span></a>
                    <a href="{{$settings->insta_link}}" target="_blank"><span class="zmdi zmdi-instagram"></span></a>
                    <a href="https://api.whatsapp.com/send?phone=2{{$settings->whatsapp}}" target="_blank"><span class="zmdi zmdi-whatsapp"></span></a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="contact-form-wrapper">
                    <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                        {{ trans('contact.success') }}
                     </div>
                    <form action="{{ route('contacts.store') }}" method="post" id="contact">
                        @csrf
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
                        <button type="submit" class="default-btn submit-btn"><span>{{trans('contact.send')}}</span></button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

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
