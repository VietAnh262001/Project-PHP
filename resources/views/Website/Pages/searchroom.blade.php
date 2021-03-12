<!-- Stored in resources/views/child.blade.php -->

@extends('Website.layouts.website')

@section('title')
<title>Room-grid</title>
@endsection
@section('content')

    <div class="content">
        <main>
        <!-- Breadcrumb section -->
        @foreach($bannerroom as $banner)
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
                Room
            </h1>
        </section>
        @endforeach
        <!-- Breadcrumb section End-->
        <!-- Latest Room Section -->
        <section class="rooms-warp gird-view section-bg section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="filter-view">
                            <ul>
                                <li class="active-f-view">Default Sorting</li>
                                <li>Low To High</li>
                                <li>High To Low</li>
                                <li>View A to Z</li>
                                <li>View Z to A</li>
                                <li>Popular</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            @foreach($search as $room)
                            <div class="col-md-6">
                                <!-- Single Room -->
                                <div class="single-room">
                                    <div class="room-thumb">
                                        <a href=""><img src="{{url("public/uploads/room/$room->image")}}" alt="Room"></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-cat">
                                        <p>{{$room->content}}</p>
                                        </div>
                                    <h4><a href="room-details.html">{{$room->name}}</a></h4>
                                        <p>
                                            {{$room->description}}
                                        </p>
                                        <ul class="room-info list-inline">
                                            <li><i class="far fa-bed"></i>{{$room->area}} Bed</li>
                                            <li><i class="far fa-bath"></i>{{$room->bed}} Baths</li>
                                            <li><i class="far fa-ruler-triangle"></i>{{$room->bath}} m</li>
                                        </ul>
                                        <div class="room-price">
                                           
                                                <p> 
                                                <a href="{{URL::to('room/details/'.$room->room_id)}}">${{$room->price}}.00 </a>
                                                </p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            @endforeach  
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-wrap">
                            <div class="widget fillter-widget">
                                <h4 class="widget-title">Your Reservation</h4>
                            <form action="{{route('roomsearch')}}" method="POST">
                                @csrf
                                    <div class="input-wrap angle-down">
                                        <select name="loaction" id="loaction">
                                            <option value="" disabled selected>Locations</option>
                                            @foreach($locations as $location)
                                        <option value="1">{{$location->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-wrap">
                                        <input type="text" placeholder="Arrive Date" id="arrive-date">
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                    <div class="input-wrap">
                                        <input type="text" placeholder="Depart Date" id="depart-date">
                                        <i class=""></i>
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                    <div class="input-wrap angle-down">
                                        <select name="rooms" id="rooms">
                                            <option value="" disabled selected>Rooms</option>
                                            @foreach($categoryroom as $category)
                                        <option value="1">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-wrap angle-down">
                                        <select name="adults" id="adults">
                                            <option value="" disabled selected>Adults</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="input-wrap angle-down">
                                        <select name="child" id="child">
                                            <option value="" disabled selected>Children</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="input-wrap">
										<div class="price-range-wrap">
											<div class="slider-range">
												<div id="slider-range"></div>
											</div>
											<div class="price-ammount">
												<input type="text" id="amount" name="price"
													placeholder="Add Your Price" />
											</div>
										</div>
									</div>
                                    
                                    <div class="input-wrap">
                                        <div class="checkboxes">
                                            <p>
                                                <input type="checkbox" value="guest-room" id="guest-room">
                                                <label for="guest-room">Guest Room</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" value="meeting-room" id="meeting-room">
                                                <label for="meeting-room">Meeting Room </label>
                                            </p>
                                            <p>
                                                <input type="checkbox" value="wifi" id="wifi">
                                                <label for="wifi">Free Wifi</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" value="pet" id="pet">
                                                <label for="pet">Pet Friendly</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" value="parking" id="parking">
                                                <label for="parking">Parking</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" value="pureair" id="pureair">
                                                <label for="pureair">Pure Air</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" value="airc" id="airc">
                                                <label for="airc">Air Conditioner</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" value="nosmoke" id="nosmoke">
                                                <label for="nosmoke">No Smoking</label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input-wrap">
                                        <button type="submit" class="btn filled-btn btn-block">
                                            Filter Results <i class="far fa-long-arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget banner-widget"
                                style="background-image: url({{asset('public/website/assets/img/blog/sidebar-banner.jpg')}});">
                                <h2>Booking Your Latest apartment</h2>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit sed do eiusmod tempor
                                    incididunt ut labore </p>
                                <a href="#" class="btn filled-btn">BOOK NOW <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
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
                </div>
            </div>
        </section>
        <!-- Latest Room Section Ends -->
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
    </main>
    </div>
@endsection