@extends('front.layouts.master')
@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{ asset('template') }}/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>News Single Post</h1>
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
                            <li class="active">News Single Post</li>
                        </ul>
                    </div>
                    <div class="right pull-right">
                        <a href="#">
                            <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span> 
                        </a>   
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
                                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18 Comments</a></li>
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
                                    <h3>Read Comments</h3>
                                    <span class="border"></span>
                                </div>
                                <!--Start single comment box-->
                                <div class="single-comment-box">
                                    <div class="img-holder">
                                        <img src="{{ asset('template') }}/images/blog/comment-1.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="date pull-left">
                                                <h5>Steven Rich – Sep 17, 2016:</h5>
                                            </div>
                                            
                                        </div>
                                        <div class="text">
                                            <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single comment box-->
                                <!--Start single comment box-->
                                <div class="single-comment-box">
                                    <div class="img-holder">
                                        <img src="{{ asset('template') }}/images/blog/comment-2.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="date pull-left">
                                                <h5>William Cobus – Aug 21, 2016:</h5>
                                            </div>
                                          
                                        </div>
                                        <div class="text">
                                            <p>there anyone who loves or pursues or desires to obtain pain itself, because it is pain, because occasionally circumstances occur some great pleasure.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single comment box-->
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
                     
                        <form id="add-comment-form" name="comment-form" action="#" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="field-label">First Name*</div>
                                            <input type="text" name="fname" placeholder="" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-label">Last Name*</div>
                                            <input type="text" name="lname" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-label">Email*</div>
                                            <input type="email" name="email" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-label">Your Comments</div>
                                            <textarea name="comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="thm-btn bgclr-1" type="submit">Submit Now</button>
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
							<input placeholder="Search..." type="text">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3>Categories</h3>
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
                            <h3>Popular Posts</h3>
                        </div>
                        <ul class="popular-post">
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/sidebar/popular-post-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#"><h5 class="post-title">How to handle your kids’<br> from mystery ailments</h5></a>
                                    <h6 class="post-date">June 21, 2017</h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/sidebar/popular-post-2.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#"><h5 class="post-title">Lung cancer survival rate in <br>England improves</h5></a>
                                    <h6 class="post-date">February 14, 2017</h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('template') }}/images/sidebar/popular-post-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#"><h5 class="post-title">Negative statin stories add <br>to heart health risk</h5></a>
                                    <h6 class="post-date">January 17, 2017</h6>
                                </div>
                            </li>
                           
                           
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