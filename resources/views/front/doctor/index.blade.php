@extends('front.layouts.master')
@section('content')


<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('template')}}/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1> {{ __('lang.Doctors') }}</h1>
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
                            <li class="active">{{ __('lang.Doctors') }}</li>
                        </ul>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start team area-->
<section class="team-area doctor doctor-page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-tabs tab-menu">
                    @foreach ($doctor_positons as $item)
                    <li><a href="#{{$item->id}}" data-toggle="tab">{{$item->translate(App::getLocale())->title}}</a></li>
                    @endforeach
                 
                </ul>   
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    @foreach ($doctor_positons as $item)
                        
                
                    <!--Start single tab pane-->
                    <div class="tab-pane @if($item->id==$doctor_position->id) active @endif" id="{{$item->id}}">
                        <div class="row">
                            @foreach ($item->doctors as $doctor)
                                    <!--Start single item-->
                                    <a href="{{ route('doctor.detail',$doctor->slug) }}">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="{{asset($doctor->image) }}" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>{{$doctor->translate()->title}}</h3>
                                                             <span>{{$doctor->doctor_pos->title ?? ''}}</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> {{$doctor->phone}}</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> {{$doctor->email}}</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>{{$doctor->translate()->title}}</h3> 
                                                 <span>{{$doctor->doctor_pos->title ?? ''}}</span>   
                                        </div>    
                                    </div>
                                </div>
                                </div>
                                 </a>
                            <!--End single item-->
                            @endforeach
                        
                         </div>
                        </div>
                    </div>
                    <!--End single tab pane-->
                    @endforeach
                 
                    
                
                    
                </div>
            </div>
        </div>
    </div>
</section> 
<!--End team area--> 
  @endsection