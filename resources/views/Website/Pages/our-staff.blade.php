<!-- Stored in resources/views/child.blade.php -->

@extends('Website.layouts.website')

@section('title')
<title>Our-staff</title>
@endsection
@section('content')
    <div class="content">
            <!-- Breadcrumb section -->
            @foreach($banneremployee as $banner)
            <section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
    style="background-image: url('../public/uploads/banner/{{$banner->image}}');">
                <div class="container">
                    <div class="breadcrumb-content text-center">
                    <h1>{{$banner->name}}</h1>
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="far fa-angle-double-right"></i></li>
                        <li>{{$banner->descript}}</li>
                        </ul>
                    </div>
                </div>
                <h1 class="big-text">
                    {{$banner->descript}}
                </h1>
            </section>
            @endforeach
            <!-- Breadcrumb section End-->
            <section class="staffs-section section-padding">
                <div class="container">
                    <div class="row">
                        <!-- Single Staff -->
                        @foreach($employee as $emp)
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="staff-fact text-center">
                                <div class="staf-img">
                                    <img src="{{url("$emp->image")}}" alt="Staff">
                                </div>
                                <h4>{{$emp->name}}</h4>
                                <p class="staff-post">{{$emp->position}}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- Single Staff -->
                    </div>
                    <div class="pagination-wrap">
                        <ul class="list-inline">
                            <li><a href="#"><i class="far fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#"><i class="far fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Brands section start -->
            <section class="brands-section primary-bg">
                <div class="container">
                    <div id="brandsSlideActive" class="owl-carousel owl-theme row brands-Slide">
                        <div class="item">
                            <div class="brand-item text-center">
                                <img src="{{asset('public/website/assets/img/brands/01.png')}}" alt="Brands">
                            </div>
                        </div>
                        <div class="item">
                            <div class="brand-item text-center">
                                <img src="{{asset('public/website/assets/img/brands/02.png')}}" alt="Brands">
                            </div>
                        </div>
                        <div class="item">
                            <div class="brand-item text-center">
                                <img src="{{asset('public/website/assets/img/brands/03.png')}}" alt="Brands">
                            </div>
                        </div>
                        <div class="item">
                            <div class="brand-item text-center">
                                <img src="{{asset('public/website/assets/img/brands/04.png')}}" alt="Brands">
                            </div>
                        </div>
                        <div class="item">
                            <div class="brand-item text-center">
                                <img src="{{asset('public/website/assets/img/brands/05.png')}}" alt="Brands">
                            </div>
                        </div>
                        <div class="item">
                            <div class="brand-item text-center">
                                <img src="{{asset('public/website/assets/img/brands/06.png')}}" alt="Brands">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- Brands section End -->
    </div>
@endsection