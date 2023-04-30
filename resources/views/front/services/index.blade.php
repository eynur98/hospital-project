@extends('front.layouts.master')
@section('content')
<!--Start breadcrumb area-->     

<section class="breadcrumb-area" style="background-image: url({{ asset('template') }}/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>{{ $service->translate(App::getLocale())->title }}</h1>
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
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href="departments.html">Department</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">{{ $service->translate(App::getLocale())->title }}</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start departments single area-->
<section id="departments-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">  
                <div class="tab-box">
                    <div class="img-holder">
                        <img src="{{ asset($service->image) }}" alt="Awesome Image">    
                    </div>
                  
                </div>
                <hr>
                <div class="text-box">
                    <p>{!! $service->translate(App::getLocale())->description !!}</p>
                                  </div> 
                
            
                
                {{-- <div class="service-plan">
                    <div class="sec-title">
                        <h1>Our Services</h1>
                        <span class="border"></span>
                    </div>
                    <div class="row">
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-transport"></span>
                                </div>
                                <div class="text-box">
                                    <h3>24 Hrs Ambulance</h3>
                                    <p>How all this mistaken idea denoucing pleasure and praisings pain was born complete account expound.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-drink"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Food & Dietry</h3>
                                    <p>There anyone who loves or pursues or to obtain pain of itself, because it is but because occasionally.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-avatar"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Special Nurses</h3>
                                    <p>Pursues or desires to obtain pain itself, because is pain, because occasionally circumstances occur procure.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-church"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Places of Worship</h3>
                                    <p>Undertakes laborious physical exercise, except to obtain some advantage from it but who has any right.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                    </div>
                </div> --}}
                
                <div class="team-area doctor">
                    <div class="sec-title">
                        <h1>Meet Our Doctors</h1>
                        <span class="border"></span>
                    </div>
                    <div class="row">
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/team/1.jpg" alt="Awesome Image">
                                    <div class="overlay-style">
                                        <div class="box">
                                            <div class="content">
                                                <div class="top">
                                                    <h3>Marc Parcival</h3>
                                                    <span>Newyork</span>
                                                </div>
                                                <span class="border"></span>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Marc Parcival</h3> 
                                        <span>Newyork</span>   
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/team/2.jpg" alt="Awesome Image">
                                    <div class="overlay-style">
                                        <div class="box">
                                            <div class="content">
                                                <div class="top">
                                                    <h3>Alen Bailey</h3>
                                                    <span>Newyork</span>
                                                </div>
                                                <span class="border"></span>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Marc Parcival</h3> 
                                        <span>Newyork</span>   
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/team/3.jpg" alt="Awesome Image">
                                    <div class="overlay-style">
                                        <div class="box">
                                            <div class="content">
                                                <div class="top">
                                                    <h3>Basil Andrew</h3>
                                                    <span>Newyork</span>
                                                </div>
                                                <span class="border"></span>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Marc Parcival</h3> 
                                        <span>Newyork</span>   
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>   
            </div> 
            
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                <div class="departments-sidebar">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Departments</h3>    
                        </div>
                        <ul class="all-departments">
                            @foreach ($services as $item)
                                
                           
                            <li>
                                <a href="{{ route('service.detail',$item->slug) }}">{{ $item->translate(App::getLocale())->title }}</a>
                            </li>
                            @endforeach
                          
                          
                        </ul>
                    </div> 
                    <!--Ens single sidebar--> 
                    <!--Start single sidebar-->
                    {{-- <div class="single-sidebar">
                        <div class="title">
                            <h3>Opening Hours</h3>    
                        </div>
                        <ul class="opening-time">
                            <li>Mon to Friday: <span>09.00 to 18.00</span></li>
                            <li>Saturday: <span>10.00 to 16.00</span></li>
                            <li>Sunday: <span>10.00 to 14.00</span></li>
                        </ul>
                    </div>  --}}
                    <!--Ens single sidebar--> 
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Quick Contact</h3>    
                        </div>
                        <div class="contact-us">
                            <ul class="contact-info">
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-pin"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Park Drive, Varick 2nd Str<br>NY 10012, USA</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-technology"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Getwell@Hospitals.com</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-technology-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>(123) 0200 12345 & 7890</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <!--Ens single sidebar-->       
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End Medical Departments area--> 

<!--Start slogan area-->
<section class="slogan-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title pull-left">
                    <h2>If you are a patient seeking quality healthcare at affordable prices!.</h2>
                </div>
                <div class="button pull-right">
                    <a class="thm-btn bgclr-1" href="#">Make an Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>  
<!--End slogan area-->
@endsection