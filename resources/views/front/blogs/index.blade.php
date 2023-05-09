@extends('front.layouts.master')
@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{ asset('template') }}/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>{{ __('lang.blog') }} </h1>
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
                            <li class="active">{{ __('lang.blog') }} </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start blog area-->
<section id="blog-area" class="blog-default-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <div class="row">



                        @foreach ($news as $item)
                            
                     {{-- {{ dd(Str::limit($item->translate(App::getLocale())->description, 150, '...') ) }} --}}
                        <!--Start single blog post-->
                        <div class="col-md-6">   
                            <div class="single-blog-item wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                                <div class="img-holder">
                                    <img src="{{ asset('uploads/'.$item->image) }}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content"> 
                                                <a href="{{ route('blog.detail',$item->slug) }}"><span class="flaticon-plus-symbol"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <a href="{{ route('news.detail',$item->slug) }}">
                                        <h3 class="blog-title">{{ $item->getTranslatedAttribute('title', App::getLocale(), 'en') ?? '' }}</h3>
                                    </a>
                                    <div class="text">
                                        <p>{!! Str::limit($item->description, 150, '...') ?? '' !!}</p>
                                    </div>
                                    <ul class="meta-info">
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $item->created_at->format('M d, Y') }}</a></li>
                                      
                                    </ul>
                                </div>    
                            </div>
                        </div>
                        <!--End single blog post-->

                        @endforeach

                  
                    </div>
                    <!--Start post pagination-->
                    <div class="row">
                       
                            {{$news->links('front.paginator.paginate')}}
                        
                    </div>
                    <!--End post pagination-->
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
                                    <img src="{{ asset('uploads/'.$item->image) }}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
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
                    {{-- <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3 class="pull-left">Instagram</h3>
                            <a class="pull-right follow-us" href="#">Follow Us</a>
                        </div>
                        <ul class="instagram">
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/sidebar/instagram-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/sidebar/instagram-2.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/sidebar/instagram-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/sidebar/instagram-4.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/sidebar/instagram-5.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/sidebar/instagram-6.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> 
                        </ul>
                    </div> --}}
                    <!--End single-sidebar--> 
                    <!--Start single-sidebar-->
                    {{-- <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3>Facebook Feed</h3>
                        </div>
                        <div class="fb-feed">
                            <img src="{{ asset('template') }}/images/sidebar/facebook-feed.jpg" alt="">
                        </div>     
                    </div>  --}}
                    <!--End single-sidebar-->  
                    <!--Start single-sidebar-->
                    {{-- <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3>Tag Cloud</h3>
                        </div>
                        <ul class="popular-tag">
                            <li><a href="#">Ideas</a></li>
                            <li><a href="#">Doctor</a></li>
                            <li><a href="#">Experts</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Growth</a></li>
                        </ul>      
                    </div>  --}}
                    <!--End single-sidebar-->
                </div>    
            </div>
            <!--End Sidebar Wrapper-->  
        </div>
    </div>
</section> 
<!--End blog area-->                        
@endsection