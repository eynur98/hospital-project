@extends('front.layouts.master')
@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{ asset('template') }}/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>{{ $news->getTranslatedAttribute('title', App::getLocale(), 'en') }}</h1>
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
                            <li class="active">{{ $news->getTranslatedAttribute('title', App::getLocale(), 'en') }}</li>
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start blog Single area-->
<section id="blog-area" class="blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <div class="single-blog-item">
                        <div class="img-holder">
                            <img src="{{ asset('uploads/'.$news->image) }}" alt="Awesome Image">
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">{{ $news->getTranslatedAttribute('title', App::getLocale(), 'en') }}</h3>
                        <p>
                            {!! $news->getTranslatedAttribute('description', App::getLocale(), 'en') !!}
                        </p>
                            <!--End bottom content box-->
                            <ul class="meta-info">
                             
                                <li><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>{{ $news->doctor_pos->getTranslatedAttribute('title', App::getLocale(), 'en') }}</a></li>
                               
                            </ul>
                        </div>    
                    </div>
                 
              
             
                </div>
            </div>
            <!--Start sidebar Wrapper-->
            <div class="col-lg-4 col-md-6 col-sm-7 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <form class="search-form" action="#">
							<input placeholder="{{ __('lang.Search') }}..." type="text">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3>{{ __('lang.Positions') }}</h3>
                        </div>
                        <ul class="categories clearfix">
                            @foreach ($doctor_positons as $item)
                            <li><a href="#">{{ $item->getTranslatedAttribute('title', App::getLocale(), 'en') }}<span>({{ $item->doctors()->count() }})</span></a></li>
                            @endforeach
                           
                          
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3>{{ __('lang.Doctors') }}</h3>
                        </div>
                        <ul class="popular-post">

                    @foreach ($similar_products as $item)
    

                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('uploads/'.$item->image)}}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="{{ route('doctor.detail',$item->slug) }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#"><h5 class="post-title">{{ $item->getTranslatedAttribute('title', App::getLocale(), 'en') }}</h5></a>
                                    <h6 class="post-date"> {{ $item->created_at->format('M d, Y') }}</h6>
                                </div>
                            </li>
                            @endforeach

                          
                          
                           
                           
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single-sidebar-->    
                  
                    <!--End single-sidebar--> 
                  
                </div>    
            </div>
            <!--End Sidebar Wrapper-->  
        </div>
    </div>
</section> 
<!--End blog Single area-->    

<!--Start certificates area-->  
<section class="certificates-area">
    <div class="container">
        <div class="sec-title">
            <h1>{{ __('lang.Certificates') }}</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="certificates">
                    {{-- {{ dd(json_decode($news->certificate)[0]) }} --}}
                  @foreach (json_decode($news->certificate) as $item)
                        <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="{{ asset('uploads/'.$item)}}" alt="Awesome Image">
                         
                          
                        </div>
                    </a>
                    <!--End single item-->
                  @endforeach
                 
                </div>
            </div>
        </div>
    </div>
</section>
<!--End certificates area-->  
@endsection