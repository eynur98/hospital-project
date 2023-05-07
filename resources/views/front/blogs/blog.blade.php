@extends('front.layouts.master')
@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{ asset('template') }}/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>{{ $news->translate(App::getLocale())->title }}</h1>
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
                            <li class="active">{{ $news->translate(App::getLocale())->title }}</li>
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
                            <img src="{{ asset($news->image) }}" alt="Awesome Image">
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">{{ $news->translate(App::getLocale())->title }}</h3>
                        <p>
                            {{ $news->translate(App::getLocale())->description }}
                        </p>
                            <!--End bottom content box-->
                            <ul class="meta-info">
                                <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $news->created_at->format('M d, Y') }}</a></li>
                             
                            </ul>
                        </div>    
                    </div>
                    <!--Start tag and social share box-->
                   
                    <!--End tag and social share box-->
                    <!--Start author box-->
                    {{-- <div class="author-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/blog/author.jpg" alt="Awesome Image">
                                </div>
                                <div class="text-holder">
                                    <h3>Mark Richardson</h3>
                                    <p>We will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                    <ul class="social-link">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                 
                </div>
            </div>
            <!--Start sidebar Wrapper-->
            <div class="col-lg-4 col-md-6 col-sm-7 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <form  class="search-form" action="{{ route('search') }}">
							<input name="blog" placeholder="{{ __('lang.Search') }}..." type="text">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
                    </div>
                    <!--End single sidebar-->
                 
                    <!--Start single sidebar--> 
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3>{{ __('lang.Popular Posts') }}</h3>
                        </div>
                        <ul class="popular-post">
                            @foreach ($last_news as $item)
                                
                          
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset($item->image) }}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#"><h5 class="post-title">{{ $item->translate(App::getLocale())->title }}</h5></a>
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
@endsection