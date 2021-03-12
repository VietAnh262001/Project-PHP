<!-- Stored in resources/views/child.blade.php -->

@extends('Website.layouts.website')

@section('title')
<title>blog-details</title>
@endsection
@section('content')
    <div class="content">
            <!-- Breadcrumb section -->
            @foreach($banner_blog_detail as $banner)
            <section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
    style="background-image: url('../public/uploads/banner/{{$banner->image}}');">
                <div class="container">
                    <div class="breadcrumb-content text-center">
                    <h1>{{$banner->name}}</h1>
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="far fa-angle-double-right"></i></li>
                        <li>{{$banner->name}}</li>
                        </ul>
                    </div>
                </div>
                <h1 class="big-text">
                    {{$banner->descript}}
                </h1>
            </section>
            @endforeach
            <!-- Breadcrumb section End-->
            <section class="blog-details-wrapper section-padding section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="post-details">
                                <div class="entry-header">
                                    <div class="post-thumb">
                                        <img src="{{asset('public/website/assets/img/blog-details/01.jpg')}}" alt="Image">
                                    </div>
                                    <ul class="entry-meta list-inline">
                                        <li><a href="single-blog.html"><i class="far fa-user-alt"></i>Somalia Alexz</a></li>
                                        <li><a href="single-blog.html"><i class="far fa-calendar-alt"></i>20 jan 2020</a>
                                        </li>
                                    </ul>
                                    <h2 class="entry-title"> Taming Advanced Color Palettes In Photo Sketch And Affinity
                                        Designer Challenge </h2>
                                </div>
                                <div class="entry-content">
                                    <p> But we ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor
                                        incididunt labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        reprehendermust explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system, and
                                        expound the actual teachings of the great explorer of the truth, the mas
                                        ter-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
                                        because it is plea
                                        sure, but because those who do not know how to pursue pleasure rationally encounter
                                        conse
                                        quences that are extremely painful. Nor again is there anyone
                                    </p>
                                    <div class="entry-gallery-img">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <figure class="entry-media-img"><img src="{{asset('public/website/assets/img/blog-details/02.jpg')}}"
                                                        alt="Image"></figure>
                                            </div>
                                            <div class="col-md-6">
                                                <figure class="entry-media-img"><img src="{{asset('public/website/assets/img/blog-details/03.jpg')}}"
                                                        alt="Image"></figure>
                                            </div>
                                        </div>
                                    </div>
                                    <blockquote>
                                        Avoids pleasure itself because it pleasure but because those who do not know how to
                                        pursue pleasure rationally encounter consequences that are extremely painful again
                                        <h6 class="blockquote-v">Tony R. Francois</h6>
                                    </blockquote>
                                </div>
                                <div class="entry-footer d-flex justify-content-md-between">
                                    <ul class="popular-tag list-inline">
                                        <li class="title">Popular Tag :</li>
                                        <li><a href="#">Hotel,</a></li>
                                        <li><a href="#">Luxury,</a></li>
                                        <li><a href="#">Living</a></li>
                                    </ul>
                                    <ul class="social-share list-inline">
                                        <li class="title">Share </li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-nav">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="post-nav-box">
                                            <a href="#">Building Pub Sub Service Using Node And Redis</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="post-nav-box">
                                            <a href="#">Once Upon Timey Storyis For Better Enga gement</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-area">
                                <h2 class="comment-title">Client’s Comments</h2>
                                <ul class="comment-list">
                                    <li>
                                        <div class="comment-autor">
                                            <img src="{{asset('public/website/assets/img/blog-details/04.jpg')}}" alt="Comment">
                                        </div>
                                        <div class="comment-desc">
                                            <h6>Alexzeder Alex <span class="comment-date"> 25 Feb 2020</span></h6>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                                and praising pain was born and I will give you a complete account</p>
                                            <a href="#" class="reply-comment">Reply Commets <i
                                                    class="far fa-long-arrow-right"></i></a>
                                        </div>
                                        <ul class="children">
                                            <li>
                                                <div class="comment-autor">
                                                    <img src="{{asset('public/website/assets/img/blog-details/05.jpg')}}" alt="Comment">
                                                </div>
                                                <div class="comment-desc">
                                                    <h6>Alexzeder Alex <span class="comment-date"> 25 Feb 2020</span></h6>
                                                    <p>But I must explain to you how all this mistaken idea of denouncing
                                                        pleasure and praising pain was born and I will give you a complete
                                                        account</p>
                                                    <a href="#" class="reply-comment">Reply Commets <i
                                                            class="far fa-long-arrow-right"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment-autor">
                                            <img src="{{asset('public/website/assets/img/blog-details/06.jpg')}}" alt="Comment">
                                        </div>
                                        <div class="comment-desc">
                                            <h6>Alexzeder Alex <span class="comment-date"> 25 Feb 2020</span></h6>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                                and praising pain was born and I will give you a complete account</p>
                                            <a href="#" class="reply-comment">Reply Commets <i
                                                    class="far fa-long-arrow-right"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="comment-form">
                                <h2 class="comment-form-title">Send A Message</h2>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="input-wrap">
                                                <input type="text" placeholder="Your Full Name" id="name">
                                                <i class="far fa-user-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="input-wrap">
                                                <input type="text" placeholder="Your Email" id="email">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-wrap text-area">
                                                <textarea placeholder="Write Message"></textarea>
                                                <i class="far fa-pencil"></i>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn filled-btn">Send Message <i
                                                    class="far fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Sidebars Area -->
                            <div class="sidebar-wrap">
                                <div class="widget search-widget">
                                    <h4 class="widget-title">Search Here</h4>
                                    <form>
                                        <input type="text" placeholder="Seacrh Keywords">
                                        <button><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="widget recent-news">
                                    <h4 class="widget-title">Latest News</h4>
                                    <ul>
                                        @foreach($blog4 as $blog)
                                        <li>
                                            <div class="recent-post-img">
                                                <img src="{{url("public/uploads/blog/$blog->image")}}" alt="Image">
                                            </div>
                                            <div class="recent-post-desc">
                                            <h6><a href="#">{{$blog->name}}</a></h6>
                                            <span class="date">{{$blog->meta_descript}}</span>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="widget category-widget">
                                    <h4 class="widget-title">Gategory</h4>
                                    @foreach($blog5 as $blog)
                                    <div class="single-cat bg-img-center"
                                style="background-image: url('../public/uploads/blog/{{$blog->image}}');">
                                        <a href="#">Luxury Room</a>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="widget popular-tag">
                                    <h4 class="widget-title">Populer Tag</h4>
                                    <div class="tag-wrap">
                                        <a href="#">Cleaning</a>
                                        <a href="#">Business</a>
                                        <a href="#">Booking</a>
                                        <a href="#">Car</a>
                                        <a href="#">House</a>
                                        <a href="#">Apartment</a>
                                        <a href="#">Washing</a>
                                        <a href="#">Agency</a>
                                        <a href="#">Listing</a>
                                    </div>
                                </div>
                                @foreach($blog6 as $blog)
                                <div class="widget banner-widget"
                                    style="background-image: url('../public/uploads/blog/{{$blog->image}}');">
                                    <h2>{{$blog->name}}</h2>
                                    <p>{{$blog->content}}</p>
                                    <a href="#" class="btn filled-btn">{{$blog->meta_title}}<i class="far fa-long-arrow-right"></i></a>
                                </div>
                                @endforeach
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