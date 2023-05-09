<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Home || Hospitals || Responsive HTML 5 Template</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="{{asset('template') }}/css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="{{asset('template') }}/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('template') }}/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="{{asset('template') }}/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('template') }}/images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
</head>
<body>
<div class="boxed_wrapper">

<!--Start Preloader -->
<div class="preloader"></div>
<!--End Preloader --> 

<!--Start header area-->

<!--Start top bar area-->
<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="top-left">
                    <p><span class="flaticon-phone"></span>{{ __('lang.24 hours emergency & ambulance Service: +321 789 01 2345')}}</p> 
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="top-right clearfix">
                    <ul class="social-links">
                        <li><a href="{{ $contact->facebook  ?? ''}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $contact->instagram ?? ''}}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{ $contact->youtube   ?? ''}}"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="{{ $contact->linkedin  ?? ''}}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End top bar area-->  

<!--Start header area--> 
<section class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{asset('template') }}/images/resources/logo.png" alt="Awesome Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="header-right">
                    <ul>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <h4>{{ __('lang.Call us now') }}</h4>
                                <span>{{ $contact->phone ?? ''}}</span>    
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-pin"></span>
                            </div>
                            <div class="text-holder">
                                <h4>{{ $contact->getTranslatedAttribute('address', App::getLocale(), 'en') ?? ''}}</h4>
                               
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-agenda"></span>
                            </div>
                            <div class="text-holder">
                                <h4>{{ __('lang.Mon - Satday') }}</h4>
                                <span>{{ __('lang.09.00am to 18.00pm') }}</span>    
                            </div>
                        </li>        
                    </ul>
                    <div class="search-button pull-right">
                        <div class="toggle-search">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!--End header area-->  

<!--Start header-search  area-->
<section class="header-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="search-form pull-right">
                    <form action="{{ route('search') }}">
                        <div class="search">
                            <input type="search" name="doctor" value="" placeholder="{{ __('lang.Search') }}">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End header-search  area-->        

<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--Start mainmenu-->
                <nav class="main-menu pull-left">
                    <div class="navbar-header">   	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{ route('home') }}">{{ __('lang.Home') }}</a></li>
                            <li ><a href="{{ route('about') }}">{{ __('lang.About Us') }}</a>
                             
                            </li>
                            <li class="dropdown"><a href="#">{{ __('lang.Doctors') }}</a>
                                <ul>
                                    @foreach ($doctor_positons as $item)
                                    <li><a href="{{route('doctors',$item->slug)}}">{{ $item->getTranslatedAttribute('title', App::getLocale(), 'en') }}</a></li>
                                    @endforeach
                                   
                                  
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">{{ __('lang.Xidmetler') }}</a>
                                <ul>
                                    @foreach ($services as $item)
                                  
                                    <li><a href="{{ route('service.detail',$item->slug) }}">{{ $item->getTranslatedAttribute('title', App::getLocale(), 'en') }}</a></li>
                                    @endforeach
                                  
                                   
                                </ul>
                            </li>
                            
                            <li class="dropdown"><a href="#">{{ __('lang.news') }}</a>
                                <ul>
                                    @foreach ($news_categories as $item)
                                    <li><a href="{{ route('news',$item->slug) }}">{{ $item->getTranslatedAttribute('title', App::getLocale(), 'en') }}</a></li>
                                    @endforeach
                                  
                                    
                                </ul>
                            </li>
                            <li><a href="{{ route('blog') }}">{{ __('lang.blog') }}</a></li>
                            <li class="dropdown"><a href="#">{{ __('lang.Galleries') }}</a>
                                <ul>
                                    <li><a href="{{ route('image.gallery') }}">{{ __('lang.Image gallery') }}</a></li>
                                    <li><a href="{{ route('video.gallery') }}">{{ __('lang.Video Gallery') }}</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('elaqe') }}">{{ __('lang.Contact Us') }}</a></li>
                        </ul>
                    </div>
                </nav>
                <!--End mainmenu-->
                <!--Start mainmenu right box-->
                {{-- <div class="mainmenu-right-box pull-right">
                   
                    <div class="consultation-button">
                        <a href="#">For Consultation</a>    
                    </div>
                </div> --}}
                <!--End mainmenu right box-->    
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area-->