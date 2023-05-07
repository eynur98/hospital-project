@extends('front.layouts.master')
@section('content')

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{ asset('template') }}/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>{{ __('lang.About Us') }}</h1>
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
                            <li class="active">{{ __('lang.About Us') }}</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start welcome area-->
<section class="welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-holder">
                    <img src="{{ asset($about->image) }}" alt="Awesome Image">    
                </div>
              
            </div>
            <div class="col-md-6">
                <div class="text-holder">
                    <div class="title">
                        <h1>{{ $about->translate(App::getLocale())->title }}</h1>
                        <p>{!! $about->translate(App::getLocale())->text !!}</p>    
                    </div>
                    
                    {{-- <div class="button">
                        <a class="thm-btn bgclr-1" href="#">Our Departments</a>
                    </div>     --}}
                </div>
            </div>
        </div>
    </div>    
</section>
<!--End welcome area-->
 
<!--Start special features area-->
{{-- <section class="special-features-area">
    <div class="container">
        <div class="row">
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-transport"></span>    
                    </div>
                    <div class="text-box">
                        <h3>24 Hrs Ambulance</h3>
                        <p>How all this mistaken idea denoucing pleasure and praisings pain was born complete account expound.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-drink"></span>    
                    </div>
                    <div class="text-box">
                        <h3>Food & Dietry</h3>
                        <p>There anyone who loves or pursues or to obtain pain of itself, because it is but because occasionally.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-avatar"></span>    
                    </div>
                    <div class="text-box">
                        <h3>Special Nurses</h3>
                        <p>Pursues or desires to obtain pain itself, because is pain, because occasionally circumstances occur procure.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
        <div class="row">   
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-church"></span>    
                    </div>
                    <div class="text-box">
                        <h3>Places of Worship</h3>
                        <p>Undertakes laborious physical exercise, except to obtain some advantage from it but who has any right.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-phone"></span>    
                    </div>
                    <div class="text-box">
                        <h3>Customer Support</h3>
                        <p>Undertakes laborious physical exercise, except to obtain some advantage from it but who has any right.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-medical-2"></span>    
                    </div>
                    <div class="text-box">
                        <h3>Very Fast Aid</h3>
                        <p>Pursues or desires to obtain pain itself, because is pain, because occasionally circumstances occur procure.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>    
    </div>
</section>  --}}
<!--End special features area-->

<!--Start slogan area-->
<section class="slogan-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title pull-left">
                    <h2>{{ __('lang.If you are a patient seeking quality healthcare at affordable prices!.') }}</h2>
                </div>
                <div class="button pull-right">
                    <a class="thm-btn bgclr-1" href="#">{{ __('lang.Make an Appointment') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>  
<!--End slogan area-->

<!--Start project faq area-->
{{-- <section class="project-faq-area sec-padding">
    <div class="container">
        <div class="sec-title mar0auto text-center">
            <h1>Photo Gallery & FAQ’s</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="latest-project">
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="{{ asset('template') }}/images/projects/latest-project-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="{{ asset('template') }}/images/projects/latest-project-2.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="{{ asset('template') }}/images/projects/latest-project-3.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="{{ asset('template') }}/images/projects/latest-project-4.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="{{ asset('template') }}/images/projects/latest-project-5.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="{{ asset('template') }}/images/projects/latest-project-6.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                </div>    
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="faq-content">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is the hospital located?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box--> 
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active">
                                <h4>What is the deposit amount for admission?</h4>
                            </div>
                            <div class="accord-content collapsed">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block last">
                            <div class="accord-btn last">
                                <h4>What are the visiting hours?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How many visitors are allowed at a time?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--End project faq area--> 

<!--Start fact counter area-->
<section class="fact-counter-area black-bg" style="background-image:url({{ asset('template') }}/images/resources/fact-counter-bg-v2.jpg);">
    <div class="container">
        <div class="sec-title text-center">
            <h1>{{ __('lang.Keep your headup & be patient') }}</h1>
            <p>{{ __('lang.about text') }}</p>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul>

                    @foreach ($statics as $item)
                    <li>
                        <div class="single-item text-center">
                            <div class="icon-holder">
                                <span class="flaticon-medical"></span> 
                            </div>
                            <h1><span class="timer" data-from="1" data-to="{{$item->statistica}}" data-speed="5000" data-refresh-interval="50">{{$item->statistica}}</span></h1>
                            <h3>{{$item->translate(App::getLocale())->title}}</h3>
                        </div>
                    </li>
                    @endforeach
                   
                   
                </ul>
            </div>
            <!--End single item-->
     
        </div>
    </div>
</section>
<!--End fact counter area-->

<!--Start team area-->
<section class="team-area doctor">
    <div class="container">
        <div class="sec-title mar0auto text-center">
            <h1>{{ __('lang.Doctors') }}</h1>
            <span class="border"></span>
        </div>
        <div class="row">


@foreach ($doctors as $item)
    
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="{{asset($item->image) }}" alt="Awesome Image">
                        <div class="overlay-style">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <h3>{{$item->translate()->title}}</h3>
                                             <span>{{$item->doctor_pos->title}}</span>
                                    </div>
                                    <span class="border"></span>
                                    <div class="bottom">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i> {{$item->phone}}</li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> {{$item->email}}</li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3>{{$item->translate()->title}}</h3> 
                                 <span>{{$item->doctor_pos->title}}</span>   
                        </div>    
                    </div>
                </div>
            </div>
            <!--End single item-->

            @endforeach

          
        </div>
    </div>
</section> 
<!--End team area--> 

<!--Start certificates area-->  
{{-- <section class="certificates-area">
    <div class="container">
        <div class="sec-title">
            <h1>Awards & Recognition</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="certificates">
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/1.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/2.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/3.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/4.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/1.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/2.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/3.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/4.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/1.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/2.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/3.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('template') }}/images/certificates/4.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--End certificates area-->  

@endsection