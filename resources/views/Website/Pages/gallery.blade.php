<!-- Stored in resources/views/child.blade.php -->

@extends('Website.layouts.website')

@section('title')
<title>Gallery</title>
@endsection
@section('content')
    <div class="content">
            <!-- Breadcrumb section -->
            @foreach($bannergallery as $gallery)
            <section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
                style="background-image: url('public/uploads/banner/{{$gallery->image}}');">
                <div class="container">
                    <div class="breadcrumb-content text-center">
                        <h1>{{$gallery->name}} </h1>
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li>{{$gallery->descript}}</li>
                        </ul>
                    </div>
                </div>
                <h1 class="big-text">
                    {{$gallery->descript}}
                </h1>
            </section>
            @endforeach
            <!-- Breadcrumb section End-->
            <!-- Gallery Start -->
            <section class="gallery-warp section-padding">
                <div class="container">
                    <div class="gallery-filter text-center">
                        <ul class="list-inline">
                         <li class="active" data-filter="*">Show All</li>
                        @foreach($listcategorygallery as $category)
                            <li class="active" data-filter="*">{{$category->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="gallery-items">
                        <div class="row gallery-filter-items">
                            <!-- Single Item -->
                            @foreach($listgallery as $gallery)
                            <div class="col-lg-4 col-md-6 col-sm-6 luxury conference">
                                <div class="gallery-item" style="background-image: url('public/uploads/gallery/{{$gallery->image}}');">
                                    <div class="gallery-content">
                                        <h3><a href="#">{{$gallery->name}}</a></h3>
                                        <a href="#" class="view-gallery"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Single Item -->
                        </div>
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
            <!-- Gallery End -->
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