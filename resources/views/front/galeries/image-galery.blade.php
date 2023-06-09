@extends('front.layouts.master')
@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{ asset('template') }}/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>{{ __('lang.Image gallery') }}</h1>
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
                            <li class="active">{{ __('lang.Image gallery') }}</li>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start project with text area--> 
<section class="main-project-area">
    <div class="container">
        <div class="row">

            @foreach ($news as $item)
                
           

            <!--Start single project item-->
            <a target="__blanc" href="{{ asset('uploads/'.$item->image) }}">
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item robustness workouts">
                <div class="single-project-item">
                    <div class="img-holder">
                        <img src="{{ asset('uploads/'.$item->image) }}" alt="Awesome Image">
                        {{-- <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="project-single.html">Happy Young Family</a>
                                    <span class="border"></span>
                                    <p>Healthy Food</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>   
                </div> 
            </div>
            </a>
            <!--End single project item-->
            @endforeach

           
        </div>
        <div class="row">
            {{$news->links('front.paginator.paginate')}}
        </div>
    </div>
</section>                            
<!--End project with text area-->   
@endsection