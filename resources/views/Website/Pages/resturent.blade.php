<!-- Stored in resources/views/child.blade.php -->

@extends('Website.layouts.website')

@section('title')
<title>Resturent</title>
@endsection
@section('content')
    <div class="content">
            <!-- Breadcrumb section -->
            @foreach($bannerresturent as $banner)
            <section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
                style="background-image: url('../public/uploads/banner/{{$banner->image}}');">
                <div class="container">
                    <div class="breadcrumb-content text-center">
                        <h1>{{$banner->name}}</h1>
                        <ul class="list-inline">
                            <li><a href="index-2.html">Home</a></li>
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
            <!-- Latest Food Section -->
            <section class="latest-food section-padding">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="title-top">Latest Food</span>
                        <h1>Popular Dishes</h1>
                    </div>
                    <!-- Foods Wrap -->
                    
                    <div class="row">
                            @foreach($restaurantservice as $restaurant)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-latest-food">
                                <div class="text-center">
                                    <div class="food-img">
                                    <img src="{{url("$restaurant->image")}}" alt="Food">
                                    
                                   </div>
                                   <a href="{{route('addcartservice',['id'=>$restaurant->id,'room_id' => request()->room_id])}}">Add to service</a>

                                </div>
                                   @if(request()->room_id > 0)
                            @endif 
                                   
                                <div class="l-food-desc d-flex justify-content-between align-items-center">
                                    <h4>{{$restaurant->name}}</h4>
                                    <p class="price"><span class="price-currency">$</span> {{$restaurant->price}}</p>
                                </div>
                            </div>
                        </div>
                    
                    @endforeach
                    </div>
                
                </div>
            </section>
            <!-- Latest Food End -->
            <!-- Food Cta Section -->
            <section class="food-cta bg-img-center" style="background-image: url({{asset('public/website/assets/img/food/food-cta.jpg')}});">
                <div class="container">
                    <div class="food-cta-text">
                        <h1>Special Offer <span>For Burgers</span></h1>
                        <a href="#" class="btn filled-btn">SHOP NOW <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <h1 class="big-text">
                    Burgers
                </h1>
            </section>
            <!-- Food Cta Section End -->
            <!-- Food Menu -->
            <section class="food-section section-padding">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="title-top">Regular Food</span>
                        <h1>Main Menu / Food List</h1>
                    </div>
                    <div class="regular-food-wrap">
                        <div class="row">
                         @foreach($restaurantservice1 as $restaurant)
                            <div class="col-lg-6">
                                <div class="single-regular-food d-flex justify-content-between align-items-center">
                                    <div class="food-img">
                                        <img src="{{url("$restaurant->image")}}" alt="Food">
                                    </div>
                                    <div class="food-dec">
                                        <h4>{{$restaurant->name}}</h4>
                                        <p>{{$restaurant->description}}</p>
                                        <p class="price">$ {{$restaurant->price}}</p>
                                        <a href="{{route('addcartservice',['id'=>$restaurant->id,'room_id' => request()->room_id])}}">Add to service</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-12 text-center">
                                <a href="#" class="btn filled-btn">View More Food <i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Food Menu End -->
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
@include('sweetalert::alert')