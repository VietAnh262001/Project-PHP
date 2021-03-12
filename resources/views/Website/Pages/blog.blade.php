<!-- Stored in resources/views/child.blade.php -->

@extends('Website.layouts.website')

@section('title')
<title>blog</title>
@endsection
@section('content')
    <div class="content">
            <!-- Breadcrumb section -->
            @foreach($banner_blog as $banner)
            <section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
    style="background-image: url('public/uploads/banner/{{$banner->image}}');">
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
            <section class="blog-wrapper section-padding section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Blog Post Loop -->
                            <div class="post-loop">
                                @foreach($blog1 as $blog)
                                <div class="single-blog-wrap">
                                    <div class="post-thumbnail">
                                        <img src="{{url("public/uploads/blog/$blog->image")}}" alt="Image">
                                    </div>
                                    <div class="post-desc">
                                        <ul class="blog-meta list-inline">
                                        <li><a href="single-blog.html"><i class="far fa-user-alt"></i>{{$blog->meta_title}}</a>
                                            </li>
                                        <li><a href="single-blog.html"><i class="far fa-calendar-alt"></i>{{$blog->meta_descript}}</a></li>
                                        </ul>
                                    <h3><a href="single-blog-html.html">{{$blog->name}}</a></h3>
                                    <a href="{{route('blogdetails',['id'=>$blog->blog_id])}}" class="btn filled-btn">View post <i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                @endforeach
                                @foreach($blog2 as $blog)
                                <div class="single-blog-wrap video-post">
                                    <div class="post-thumbnail">
                                        <img src="{{url("public/uploads/blog/$blog->image")}}" alt="Image">
                                        <a href="https://www.youtube.com/watch?v=NpEaa2P7qZI" class="video-popup"> <i
                                                class="fas fa-play"></i></a>
                                    </div>
                                    <div class="post-desc">
                                        <ul class="blog-meta list-inline">
                                            <li><a href="single-blog.html"><i class="far fa-user-alt"></i>{{$blog->meta_title}}</a>
                                            </li>
                                            <li><a href="single-blog.html"><i class="far fa-calendar-alt"></i>{{$blog->meta_descript}}</a></li>
                                        </ul>
                                        <h3><a href="single-blog-html.html">{{$blog->name}}</a></h3>
                                        <a href="{{route('blogdetails',['id'=>$blog->blog_id])}}" class="btn filled-btn">View post <i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                @endforeach
                                <div class="single-blog-wrap quote-post">
                                    <div class="post-desc">
                                        <h3><a href="single-blog-html.html">Web Development Reading List One Real-World
                                                Accessibility, Flexbox Madness And The Ephemerality Things Build</a></h3>
                                        <p class="quote-v">Zakia X Petel</p>
                                    </div>
                                </div>
                                @foreach($blog3 as $blog)
                                <div class="single-blog-wrap">
                                    <div class="post-thumbnail">
                                        <img src="{{url("public/uploads/blog/$blog->image")}}" alt="Image">
                                    </div>
                                    <div class="post-desc">
                                        <ul class="blog-meta list-inline">
                                            <li><a href="single-blog.html"><i class="far fa-user-alt"></i>{{$blog->meta_title}}</a>
                                            </li>
                                            {{-- <li><a href="single-blog.html"><i class="far fa-calendar-alt"></i>{{$blog->meta_descript}}</a></li> --}}
                                        </ul>
                                        <h3><a href="single-blog-html.html">{{$blog->name}}</a></h3>
                                        <a href="{{route('blogdetails',['id'=>$blog->blog_id])}}" class="btn filled-btn">View post <i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- Pagination Wrap -->
                            <div class="pagination-wrap">
                                <ul class="list-inline">
                                    <li>{{$blog3->links('vendor.pagination.default')}}</li>
                                </ul>
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
                                            <span class="date">{!!$blog->meta_descript!!}</span>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="widget category-widget">
                                    <h4 class="widget-title">Gategory</h4>
                                    @foreach($blog5 as $blog)
                                    <div class="single-cat bg-img-center"
                                style="background-image: url('public/uploads/category/{{$blog->image}}');">
                                <a href="#">{{$blog->name}}</a>
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
                                    style="background-image: url('public/uploads/blog/{{$blog->image}}');">
                                    <h2>{{$blog->name}}</h2>
                                    <p>{{$blog->content}}</p>
                                    <a href="#" class="btn filled-btn">BOOK NOW<i class="far fa-long-arrow-right"></i></a>
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