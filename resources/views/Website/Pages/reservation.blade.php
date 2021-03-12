<!-- Stored in resources/views/child.blade.php -->

@extends('Website.layouts.website')

@section('title')
<title>Reservation</title>
@endsection
@section('content')
    <div class="content">
            <!-- Breadcrumb section -->
            <section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
                style="background-image: url({{asset('public/website/assets/img/reservation/01.jpg')}});">
                <div class="container">
                    <div class="breadcrumb-content text-center">
                        <h1>Reservation</h1>
                        <ul class="list-inline">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li>Reservation</li>
                        </ul>
                    </div>
                </div>
                <h1 class="big-text">
                    Reserv
                </h1>
            </section>
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-latest-food">
                                <div class="food-img">
                                    <img src="{{asset('public/website/assets/img/food/01.jpg')}}" alt="Food">
                                </div>
                                <div class="l-food-desc d-flex justify-content-between align-items-center">
                                    <h4>London <br> Mashroom</h4>
                                    <p class="price"><span class="price-currency">$</span> 59</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-latest-food">
                                <div class="food-img">
                                    <img src="{{asset('public/website/assets/img/food/02.jpg')}}" alt="Food">
                                </div>
                                <div class="l-food-desc d-flex justify-content-between align-items-center">
                                    <h4>Special <br> Hot Burger</h4>
                                    <p class="price"><span class="price-currency">$</span> 29</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-latest-food">
                                <div class="food-img">
                                    <img src="{{asset('public/website/assets/img/food/03.jpg')}}" alt="Food">
                                </div>
                                <div class="l-food-desc d-flex justify-content-between align-items-center">
                                    <h4>Italian <br> Supper Pizza</h4>
                                    <p class="price"><span class="price-currency">$</span> 85</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-latest-food">
                                <div class="food-img">
                                    <img src="{{asset('public/website/assets/img/food/11.jpg')}}" alt="Food">
                                </div>
                                <div class="l-food-desc d-flex justify-content-between align-items-center">
                                    <h4>Special <br> Hot Burger</h4>
                                    <p class="price"><span class="price-currency">$</span> 47</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Latest Food End -->
            <!-- Video Section Strart -->
            <section class="video-section bg-img-center" style="background-image: url({{asset('public/website/assets/img/reservation/02.jpg')}});">
                <div class="video-play">
                    <a href="https://www.youtube.com/watch?v=NpEaa2P7qZI" class="video-popup"> <i
                            class="fas fa-play"></i></a>
                </div>
            </section>
            <!-- Video Section End -->
            <section class="reserv-form-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <!-- Section Title -->
                            <div class="section-title book-table-desc">
                                <span class="title-top">Book Your Table</span>
                                <h1>Reservation</h1>
                                <p>
                                    But I must explain to you how all this mistaken idea denouncing pleasure and praising
                                    pain was born and I will give you a complete account of the system, and expound the
                                    actual teachings of the great explorer of the truth, the master-builder of human
                                    hapness. No one rejects dislikes or avoids pleasure itself
                                </p>
                                <a href="contact.html" class="read-more">Get Started <i
                                        class="far fa-long-arrow-right"></i></a>
                                <div class="book-table-img">
                                    <img src="{{asset('public/website/assets/img/reservation/03.jpg')}}" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-7 offset-lg-1">
                            <div class="booking-form-wrap">
                                <h2 class="b-form-title">Book A Table</h2>
                                <div class="b-form section-bg">
                                    <form>
                                        <label for="name">Your Full Name</label>
                                        <div class="input-wrap">
                                            <input type="text" placeholder="Your Full Name" id="name">
                                            <i class="far fa-user-alt"></i>
                                        </div>
                                        <label for="email">Your Email Address</label>
                                        <div class="input-wrap">
                                            <input type="text" placeholder="Your Email" id="email">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <label for="msg">Write Message</label>
                                        <div class="input-wrap text-area">
                                            <textarea placeholder="Write Message" id="msg"></textarea>
                                            <i class="far fa-pencil"></i>
                                        </div>
                                        <button type="submit" class="btn filled-btn">Book Now <i
                                                class="far fa-long-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
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