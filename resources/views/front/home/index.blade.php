@extends('front.layouts.master')
@section('content')
<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            
            @foreach ($sliders as $item)
                
           
            <li data-transition="rs-20">
                <img src="{{asset($item->image) }}"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="220" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box mar-lft">
                        <h1>{{$item->title}}</h1>
                        <p>{!!$item->description!!}</p>
                        <div class="button">
                            <a class="#" href="{{$item->link}}">{{$item->link_title}}</a>
                           {{--  <a class="btn-style-two" href="{{}}">Departments</a>   --}}         
                        </div>  
                    </div>
                </div>
               
            </li>
            @endforeach
           
        </ul>
    </div>
</section>
<!--End rev slider wrapper-->

<!--Start call to action area-->
<section class="callto-action-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="title-box text-center">
                        <span class="flaticon-calendar"></span>
                        <h2>{{ __('lang.Make an Appointment	') }}</h2>    
                    </div>
                    <div class="form-holder clearfix">
                        <form id="appointment" class="clearfix" name="appointment-form" action="{{ route('appointment.add') }}" method="post">
                            @csrf
                            <div class="single-box mar-right-30">    
                                <div class="input-box">
                                    <input type="text" name="full_name" value="" placeholder="{{ __('lang.Your Full Name') }}" required="">
                                </div>
                                <div class="input-box">
                                    <input type="text" name="phone" value="" placeholder="{{ __('lang.Your Phone') }}" required="">
                                </div>
                            </div>
                        
                            <button class="thm-btn bgclr-1" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>    
                        </form>      
                    </div> 
                       
                </div>
            </div>
        </div>
    </div>
</section>
<!--End call to action area-->

<!--Start Medical Departments area-->
<section class="medical-departments-area">
    <div class="container">
        <div class="sec-title">
            <h1>{{ __('lang.Plastik cerrahiye') }}</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="medical-departments-carousel">
                   
                
                   
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-cosmetic"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Plastic </h3>
                            <p> Who chooses to enjoy a pleasure that has annoying consquences, or one who avoids a pain.</p>
                        </div>
                        <a class="readmore" href="#">{{ __('lang.Read More') }}</a>
                    </div>
                    <!--End single item-->
                </div>
            </div>    
        </div>
    </div>
</section>
<!--End Medical Departments area--> 
  
<!--Start service area-->
<section class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="img-holder">
                    <img src="{{asset('template') }}/images/services/doctor.jpg" alt="Awesome Image">
                    {{-- <div class="overlay-content">
                        <p>As a tertiary referral ICU to provide state of the art care with the help of very good professionals and infrastructure.</p>  
                    </div>     --}}
                </div>
            </div>
            <div class="col-md-8">
                <div class="text-holder">
                    <!--Start tab box-->
                    <div class="tab-box">
                        <div class="tab-content">
                            <!--Start single tab pane-->
                            <div class="tab-pane" id="opthalmology">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>{{ __('lang.Xidmetler') }}</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>Opthalmology Analysis</h3>
                                                <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="{{asset('template') }}/images/services/service-big-1.jpg" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>  
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                           
                            <!--End single tab pane-->
                            @foreach ($services as $key=>$item)
                                
                         
                            <!--Start single tab pane-->
                            <div class="tab-pane @if ($key==0) active @endif" id="{{$item->slug}}">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>{{$item->translate(App::getLocale())->title}}</h3>
                                                <p>{!!Str::limit($item->translate(App::getLocale())->description,150)!!}</p>
                                                <a class="thm-btn" href="{{route('service.detail',$item->slug)}}">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="{{asset($item->image) }}" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>     
                            </div>
                            <!--End single tab pane-->
                            @endforeach
                          
                        </div>
                        <ul class="nav nav-tabs tab-menu">
                            @foreach ($services as $key=>$item)
                            <li style="width: 22%"@if ($key==0) class="active" @endif>
                                <a href="#{{ $item->slug }}" data-toggle="tab">
                                    <div  class="img-holder">
                                        <img  src="{{asset($item->image) }}" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3>{{$item->translate(App::getLocale())->title}}</h3>
                            </li>
                            @endforeach
                           
                        
                          
                           
                        </ul> 
                        {{-- <ul class="nav nav-tabs tab-menu">
                            @foreach ($services as $key=>$item)
                            <li @if ($key==0) class="active" @endif>
                                <a href="#{{$item->slug}}" data-toggle="tab">
                                    <div class="img-holder">
                                        <img style="width: 22%" src="{{asset($item->image) }}" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3>{{$item->translate(App::getLocale())->title}}</h3>
                            </li>
                            @endforeach
                         
                        </ul>  --}}
                    </div>
                    <!--End tab box--> 
                </div>
            </div>
        </div>
    </div>
</section>  
<!--End service area-->
 
<!--Start team area-->
<section class="team-area">
    <div class="container">
        <div class="sec-title">
            <h1>{{ __('lang.Bizim hekimler') }}</h1>
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
                            <span>{{$item->doctor_pos->translate()->title}}</span>   
                        </div>    
                    </div>
                </div>
            </div>
            @endforeach
            <!--End single item-->
           
          
        </div>
    </div>
</section> 
<!--End team area-->
 
<!--Start fact counter area-->
<section class="fact-counter-area" style="background-image:url({{asset('template') }}/images/resources/fact-counter-bg.jpg);">
    <div class="container">
        <div class="sec-title text-center">
            <h1>{{ __('lang.Keep your headup & be patient') }}</h1>
            <p>{{ __('lang.How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the') }}</p>
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
 
<!--Start testimonial area-->
<section class="testimonial-area">
    <div class="container">
        <div class="sec-title mar0auto text-center">
            <h1>{{ __('lang.Comments') }}</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-12">
                <div class="testimonial-carousel">


                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        
                        <div class="text-holder">
                            <p>Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                        </div>
                        <div class="name">
                            <h3>Rossy Miranda</h3>
                            <span>Newyork</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->

                    
                </div>
            </div>
            <!--End single item-->

        </div>
    </div>
</section>
<!--End testimonial area--> 

<!--Start latest blog area-->  
<section class="latest-blog-area">
    <div class="container">
        <div class="sec-title">
            <h1>{{ __('lang.blog') }}</h1>
            <span class="border"></span>
        </div>
        <div class="row">


@foreach ($blogs as $item)
    

            <!--Start single blog item-->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="{{asset($item->image) }}" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('blog.detail',$item->slug)}}"><span class="flaticon-plus-symbol"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="{{route('blog.detail',$item->slug)}}">
                            <h3 class="blog-title">{{$item->translate(App::getLocale())->title}}</h3>
                        </a>
                        <div class="text">
                            <p>{!!Str::limit($item->translate(App::getLocale())->description,150,'...')!!}</p>
                        </div>
                        <ul class="meta-info">
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$item->created_at->format('M d, Y')}}</a></li>
                           
                        </ul>
                    </div>    
                </div>    
            </div>
            <!--End single blog item-->
            @endforeach
        </div>
    </div>
</section>
<!--End latest blog area-->

<!--Start facilities Appointment area-->
<section class="facilities-appointment-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="facilities-content-box">
                    <div class="sec-title">
                        <h1>Our Facilities</h1>
                        <span class="border"></span>
                    </div>
                    <!--Start facilities carousel-->
                    <div class="facilities-carousel">
                       
                        <!------Start single facilities item------->
                        <div class="single-facilities-item">
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-transport"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>24 Hrs Ambulance</h3>
                                            <p>How all this mistaken idea denoucing pleasure and praisings pain was born complete account expound.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-drink"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Food & Dietary</h3>
                                            <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-avatar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Special Nurses</h3>
                                            <p>Special nurse services can be arranged through Nursing , master of human happiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-church"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Places of Worship</h3>
                                            <p>There is a temple of Goddess Krishna mariamman in the hospital premises, a Namaz room & Prayer cell</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div>
                        <!-------End single facilities item------>
                        
                        <!------Start single facilities item------->
                        <div class="single-facilities-item">
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-transport"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>24 Hrs Ambulance</h3>
                                            <p>How all this mistaken idea denoucing pleasure and praisings pain was born complete account expound.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-drink"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Food & Dietary</h3>
                                            <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-avatar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Special Nurses</h3>
                                            <p>Special nurse services can be arranged through Nursing , master of human happiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-church"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Places of Worship</h3>
                                            <p>There is a temple of Goddess Krishna mariamman in the hospital premises, a Namaz room & Prayer cell</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div>
                        <!-------End single facilities item------>
                        
                     
                        
                    </div>
                    <!--End facilities carousel-->    
                </div>
            </div>
            <div class="col-md-4">
                <div class="appointment">
                    <div class="sec-title">
                        <h1>{{ __('lang.Make an Appointment') }}</h1>
                        <span class="border"></span>
                    </div>
                    <form id="appointment-form" name="appointment-form" action="http://st.ourhtmldemo.com/new/Hospitals/inc/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-box">
                                    <input type="text" name="form_name" value="" placeholder="{{ __('lang.Your Full Name') }}" required="">
                                </div>
                                <div class="input-box">
                                    <input type="email" name="form_email" value="" placeholder="{{ __('lang.Your Phone') }}" required="">
                                </div>
                               
                               
                                <button class="thm-btn bgclr-1" type="submit">{{ __('lang.submit') }}</button>        
                            </div>
                        </div>
                    </form>        
                </div>
            </div>
        </div>
    </div>    
</section>
<!--End facilities Appointment area-->
 
<!--Start brand area-->
<section class="brand-area" style="background-image:url({{asset('template') }}/images/awards/awards-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-holder">
                    <div class="sec-title">
                        <h1>{{ __('lang.You’re in Good Hands') }}</h1>
                    </div>
                    <div class="text">
                        <p>{{ __('lang.home text') }}</p>
                     
                    </div>
                </div>
            </div>
           
        </div>
    </div>    
</section>
<!--End brand area-->
@endsection