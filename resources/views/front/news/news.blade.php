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
                                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>{{ $news->comment()->count() }} {{ __('lang.Comments') }}</a></li>
                                <li><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>{{ $news->news_category->translate(App::getLocale())->title }}</a></li>
                               
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
                    <!--End author box-->
                    <!--Start comment box-->
                    <div class="comment-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sec-title pdb-30">
                                    <h3> {{ __('lang.Comments') }}</h3>
                                    <span class="border"></span>
                                </div>


                                @foreach ($news->comment as $item)
                                      
                                 
                                <!--Start single comment box-->
                                <div class="single-comment-box">
                                   
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="date pull-left">
                                                <h5>{{ $item->name }} {{ $item->surname }}– {{ $item->created_at->format('M d, Y') }}:</h5>
                                            </div>
                                            
                                        </div>
                                        <div class="text">
                                            <p>{{ $item->text }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single comment box-->
                                @endforeach
                                
                            
                            </div>
                        </div>
                    </div>
                    <!--End comment box-->
                    <!--Start add comment box-->
                    <div class="add-comment-box">
                        <div class="sec-title pdb-30">
                            <h3>Add Your Comments</h3>
                            <span class="border"></span>
                        </div>
                     
                        <form  id="add-comment-form" name="comment-form"action="{{ route('comment') }}" method="post">
                            @csrf
                            <input type="hidden" name="news_id" value="{{ $news->id }}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="field-label">{{ __('lang.First Name') }}*</div>
                                            <input type="text" name="name" placeholder="{{ __('lang.First Name') }}" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-label">{{ __('lang.Last Name') }}*</div>
                                            <input type="text" name="surname" placeholder="{{ __('lang.Last Name') }}" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-label">{{ __('lang.Email') }}*</div>
                                            <input type="email" name="email" placeholder="{{ __('lang.Email') }}" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-label">{{ __('lang.Your Comments') }}</div>
                                            <textarea name="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="thm-btn bgclr-1" type="submit">{{ __('lang.submit') }} </button>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End add comment box-->
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
                            <h3>{{ __('lang.Categories') }}</h3>
                        </div>
                        <ul class="categories clearfix">
                            @foreach ($news_categories as $item)
                            <li><a href="#">{{ $item->translate(App::getLocale())->title }}<span>(6)</span></a></li>
                            @endforeach
                           
                          
                        </ul>
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