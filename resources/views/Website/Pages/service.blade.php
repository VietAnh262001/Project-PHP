<!-- Stored in resources/views/child.blade.php -->

@extends('Website.layouts.website')

@section('title')
<title>Servive</title>
@endsection
@section('content')
    <div class="content">
            <!-- Breadcrumb section -->
            <section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
                style="background-image: url({{asset('public/website/assets/img/bg/breadcrumb-01.jpg')}});">
                <div class="container">
                    <div class="breadcrumb-content text-center">
                        <h1>Our Services</h1>
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
                <h1 class="big-text">
                    Services
                </h1>
            </section>
            <!-- Breadcrumb section End-->
            <!-- Why Choose US start -->
            <section class="wcu-section section-padding">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- Section Title -->
                            <div class="section-title">
                                <span class="title-top">Why Choose Us</span>
                                <h1>Since1990 We Provides <br> Professional Service</h1>
                            </div>
                            <div class="feature-accordion accordion" id="featureAccordion">
                                <div class="card">
                                    <div class="card-header ">
                                        <button type="button" class="active-accordion" data-toggle="collapse"
                                            data-target="#featureOne">
                                            Why Choose Our Product ?
                                            <span class="open-icon"><i class="far fa-eye-slash"></i></span>
                                            <span class="close-icon"><i class="far fa-eye"></i></span>
                                        </button>
                                    </div>
                                    <div id="featureOne" class="collapse show" data-parent="#featureAccordion">
                                        <div class="card-body">
                                            But must explain to you how all this mistaken idea denounie pleasure and
                                            praising pain was borand omnis dolor Tempbus autem officiis debitis rerum
                                            necessitatibus saepe
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#featureTwo">
                                            Meet Respond Testing To Make Build ?
                                            <span class="open-icon"><i class="far fa-eye-slash"></i></span>
                                            <span class="close-icon"><i class="far fa-eye"></i></span>
                                        </button>
                                    </div>
                                    <div id="featureTwo" class="collapse" data-parent="#featureAccordion">
                                        <div class="card-body">
                                            But must explain to you how all this mistaken idea denounie pleasure and
                                            praising pain was borand omnis dolor Tempbus autem officiis debitis rerum
                                            necessitatibus saepe
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#featureThree">
                                            CSS Grid Challenge: Build A Template ?
                                            <span class="open-icon"><i class="far fa-eye-slash"></i></span>
                                            <span class="close-icon"><i class="far fa-eye"></i></span>
                                        </button>
                                    </div>
                                    <div id="featureThree" class="collapse" data-parent="#featureAccordion">
                                        <div class="card-body">
                                            But must explain to you how all this mistaken idea denounie pleasure and
                                            praising pain was borand omnis dolor Tempbus autem officiis debitis rerum
                                            necessitatibus saepe
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#featureFour">
                                            Dwelling Past The Importance Project ?
                                            <span class="open-icon"><i class="far fa-eye-slash"></i></span>
                                            <span class="close-icon"><i class="far fa-eye"></i></span>
                                        </button>
                                    </div>
                                    <div id="featureFour" class="collapse" data-parent="#featureAccordion">
                                        <div class="card-body">
                                            But must explain to you how all this mistaken idea denounie pleasure and
                                            praising pain was borand omnis dolor Tempbus autem officiis debitis rerum
                                            necessitatibus saepe
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-accordion-img text-right">
                                <img src="{{asset('public/website/assets/img/tile-gallery/03.jpg')}}" alt="Image">
                                <div class="degin-shape">
                                    <div class="shape-one">
                                        <img src="{{asset('public/website/assets/img/shape/11.png')}}" alt="Shape">
                                    </div>
                                    <div class="shape-two">
                                        <img src="{{asset('public/website/assets/img/shape/12.png')}}" alt="Shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Why Choose US End -->
            <!-- Service Section Start -->
            <section class="service-section section-padding section-bg">
                <div class="container">
                    <!-- Section Title -->
                    <div class="section-title text-center">
                        <span class="title-top">Our Services</span>
                        <h1>We Provide Most Exclusive <br> Hotel & Room Services </h1>
                    </div>
    
                    <!-- Service Boxes -->
                    <div class="row">
                        @foreach($service as $sv)
                        <div class="col-lg-4 col-md-6">
                            <!-- SingleBox -->
                            <div class="single-service-box service-white-bg text-center wow fadeIn animated"
                                data-wow-duration="1500ms" data-wow-delay="900ms">
                                <span class="service-counter">03</span>
                                <div class="service-icon">
                                    <img src="{{url("$sv->image")}}" alt="Icon" class="first-icon">
                                    <img src="{{asset('public/website/assets/img/icons/06-hover.png')}}" alt="Hover Icon" class="second-icon">
                                </div>
                            <h4>{{$sv->name}}</h4>
                            <p>{{$sv->description}}</p>
                                <a href="service.html" class="read-more">raed more <i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- Service Section End -->
            <!-- CounterUp -->
            <section class="counter-up primary-bg" style="background-image: url({{asset('public/website/assets/img/bg/counter-bg.jpg')}});">
                <div class="container">
                    <div class="row" id="stop_count">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-box style-two">
                                <div class="fact-icon">
                                    <img src="{{asset('public/website/assets/img/icons/07.png')}}" alt="Icon">
                                </div>
                                <p class="fact-num"><span class="counter-number">506</span></p>
                                <p>Luxury Appartment</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-box style-two">
                                <div class="fact-icon">
                                    <img src="{{asset('public/website/assets/img/icons/08.png')}}" alt="Icon">
                                </div>
                                <p class="fact-num"><span class="counter-number">352</span></p>
                                <p>Modern Bedroom</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-box style-two">
                                <div class="fact-icon">
                                    <img src="{{asset('public/website/assets/img/icons/09.png')}}" alt="Icon">
                                </div>
                                <p class="fact-num"><span class="counter-number">420</span></p>
                                <p>Win Int Awards</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-box style-two">
                                <div class="fact-icon">
                                    <img src="{{asset('public/website/assets/img/icons/10.png')}}" alt="Icon">
                                </div>
                                <p class="fact-num"><span class="counter-number">653</span>k</p>
                                <p>Cup Of coffee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- CounterUp End -->
            <!-- Feedback section start -->
            <section class="feedback-section-two section-padding">
                <div class="container">
                    <!-- Section Title -->
                    <div class="section-title text-center">
                        <span class="title-top">Clients Feedback</span>
                        <h1>Our Satisfaction People Say <br> About Our Services</h1>
                    </div>
                    <div class="feedback-slider-two owl-carousel owl-theme" id="feedSliderTWo">
                        <div class="single-feedback-slide item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="client-big-img">
                                        <img src="{{asset('public/website/assets/img/man-image/01.jpg')}}" alt="Clients">
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-1">
                                    <div class="feedback-desc">
                                        <div class="feedback-client-desc d-flex align-items-center">
                                            <div class="client-img">
                                                <img src="{{asset('public/website/assets/img/man-image/man-small-01.png')}}" alt="Clients">
                                            </div>
                                            <div class="client-name">
                                                <h3>David K. Vinson</h3>
                                                <span class="client-job">Business Manager</span>
                                            </div>
                                        </div>
                                        <p>At vero eos accusamuset iusto odio dignissimos ducimus qui bpraes enum voluptatum
                                            deleniti atque corruptiesc quos dolores take a trivial examplest which of us
                                            ever undertakes laborious physical exercise except tobtain.</p>
                                        <p>Enum voluptatum deleniti atruptiesc quos dolores take a trivial exam</p>
                                        <span class="quote-icon"><img src="{{asset('public/website/assets/img/icons/quote.png')}}" alt="quote"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-feedback-slide item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="client-big-img">
                                        <img src="{{asset('public/website/assets/img/man-image/01.jpg')}}" alt="Clients">
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-1">
                                    <div class="feedback-desc">
                                        <div class="feedback-client-desc d-flex align-items-center">
                                            <div class="client-img">
                                                <img src="{{asset('public/website/assets/img/man-image/man-small-01.png')}}" alt="Clients">
                                            </div>
                                            <div class="client-name">
                                                <h3>David K. Vinson</h3>
                                                <span class="client-job">Business Manager</span>
                                            </div>
                                        </div>
                                        <p>At vero eos accusamuset iusto odio dignissimos ducimus qui bpraes enum voluptatum
                                            deleniti atque corruptiesc quos dolores take a trivial examplest which of us
                                            ever undertakes laborious physical exercise except tobtain.</p>
                                        <p>Enum voluptatum deleniti atruptiesc quos dolores take a trivial exam</p>
                                        <span class="quote-icon"><img src="{{asset('public/website/assets/img/icons/quote.png')}}" alt="quote"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-feedback-slide item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="client-big-img">
                                        <img src="{{asset('public/website/assets/img/man-image/01.jpg')}}" alt="Clients">
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-1">
                                    <div class="feedback-desc">
                                        <div class="feedback-client-desc d-flex align-items-center">
                                            <div class="client-img">
                                                <img src="{{asset('public/website/assets/img/man-image/man-small-01.png')}}" alt="Clients">
                                            </div>
                                            <div class="client-name">
                                                <h3>David K. Vinson</h3>
                                                <span class="client-job">Business Manager</span>
                                            </div>
                                        </div>
                                        <p>At vero eos accusamuset iusto odio dignissimos ducimus qui bpraes enum voluptatum
                                            deleniti atque corruptiesc quos dolores take a trivial examplest which of us
                                            ever undertakes laborious physical exercise except tobtain.</p>
                                        <p>Enum voluptatum deleniti atruptiesc quos dolores take a trivial exam</p>
                                        <span class="quote-icon"><img src="{{asset('public/website/assets/img/icons/quote.png')}}" alt="quote"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-feedback-slide item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="client-big-img">
                                        <img src="{{asset('public/website/assets/img/man-image/01.jpg')}}" alt="Clients">
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-1">
                                    <div class="feedback-desc">
                                        <div class="feedback-client-desc d-flex align-items-center">
                                            <div class="client-img">
                                                <img src="{{asset('public/website/assets/img/man-image/man-small-01.png')}}" alt="Clients">
                                            </div>
                                            <div class="client-name">
                                                <h3>David K. Vinson</h3>
                                                <span class="client-job">Business Manager</span>
                                            </div>
                                        </div>
                                        <p>At vero eos accusamuset iusto odio dignissimos ducimus qui bpraes enum voluptatum
                                            deleniti atque corruptiesc quos dolores take a trivial examplest which of us
                                            ever undertakes laborious physical exercise except tobtain.</p>
                                        <p>Enum voluptatum deleniti atruptiesc quos dolores take a trivial exam</p>
                                        <span class="quote-icon"><img src="{{asset('public/website/assets/img/icons/quote.png')}}" alt="quote"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feedback section End -->
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