@extends('front.layouts.master')
@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{ asset('template') }}/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>{{ __('lang.Contact Us') }}</h1>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="breadcrumb-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left pull-left">
                        <ul>
                            <li><a href="{{ route('home') }}">{{ __('lang.Home') }}</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">{{ __('lang.Contact Us') }}</li>
                        </ul>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start contact form area-->
<section class="contact-form-area">
    <div class="container">
        <div class="sec-title">
            <h1>{{ __('lang.Get Touch With Us') }}</h1>
            <span class="border"></span>
            
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="contact-form">
                    <form id="contact-form" name="contact_form" class="default-form" action="http://st.ourhtmldemo.com/new/Hospitals/inc/sendmail.php" method="post">
                        <h2>{{ __('lang.Make an Appointment') }}</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_name" value="" placeholder="{{ __('lang.Your Full Name') }}*" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="form_email" value="" placeholder="{{ __('lang.Email') }}*" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_phone" value="" placeholder="{{ __('lang.Your Phone') }}">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="form_subject" value="" placeholder="{{ __('lang.Subject') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="form_message" placeholder="{{__('lang.Your Message')}}" required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="thm-btn bgclr-1" type="submit" data-loading-text="Please wait...">{{ __('lang.submit') }}</button>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="quick-contact">
                    <div class="title">
                        <h2>{{ __('lang.Quick Contact') }}</h2>
                        <p>{{ __('lang.contact text') }}</p>
                    </div>
                    <ul class="contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-pin"></span>
                            </div>
                            <div class="text-holder">
                                <h5><span>{{ __('lang.Address') }}:</span> {!! $contact->getTranslatedAttribute('address', App::getLocale(), 'en') !!}</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <h5><span>{{ __('lang.Phone') }}:</span>{{ $contact->phone }}</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-interface"></span>
                            </div>
                            <div class="text-holder">
                                <h5><span>{{ __('lang.Email') }}:</span> {{ $contact->email }}</h5>
                            </div>
                        </li>
                    </ul>
                    <ul class="social-links">
                        <li><a href="{{ $contact->facebbok ?? ''}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $contact->instagram ?? ''}}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{ $contact->linkedin ?? ''}}"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="{{ $contact->youtube ?? ''}}"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End contact form area-->  

<!--Start contact map area-->
<section class="contact-map-area">
    <div class="container-fluid">
     {!! $contact->map !!}
    </div>
</section>
<!--End contact map area-->
@endsection