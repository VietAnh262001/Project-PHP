<!-- Stored in resources/views/child.blade.php -->

@extends('Website.layouts.website')

@section('title')
<title>Room-detail</title>
@endsection
@section('content')
    <div class="content">
    </div>
		<!-- Breadcrumb section -->
		@foreach($banner_detail as $banner)
	<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
	style="background-image: url('../../public/uploads/banner/{{$banner->image}}');">
			<div class="container">
				<div class="breadcrumb-content text-center">
				<h1>{{$banner->name}}</h1>
					<ul class="list-inline">
						<li><a href="index-2.html">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>{{$banner->name}}</li>
					</ul>
				</div>
			</div>
			<h1 class="big-text">
				Room
			</h1>
		</section>
		@endforeach
		<!-- Breadcrumb section End-->
		<section class="room-details-wrapper section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
                        <!-- Room Details -->
                        @foreach($detailroom as $detail)
						<div class="room-details">
							<div class="entry-header">
								<div class="post-thumb position-relative">
									<div class="post-thumb-slider">
										<div class="main-slider owl-carousel owl-theme">
											<div class="single-img item" style="width: 100%;">
												<!-- <a href="{{asset('public/website/assets/img/blog/01.jpg')}}" class="main-img">
												</a> -->
												<img src="{{url("public/uploads/room/$detail->image")}}" alt="Image">
											</div>
											<div class="single-img item">
												<!-- <a href="{{asset('public/website/assets/img/blog/02.jpg')}}" class="main-img">
												</a> -->
												<img src="{{asset('public/website/assets/img/blog/02.jpg')}}" alt="Image">
											</div>
											<div class="single-img item">
												<!-- <a href="{{asset('public/website/assets/img/blog/03.jpg')}}" class="main-img">
												</a> -->
												<img src="{{asset('public/website/assets/img/blog/03.jpg')}}" alt="Image">
											</div>
											<div class="single-img item">
												<!-- <a href="{{asset('public/website/assets/img/blog/04.jpg')}}" class="main-img">
												</a> -->
												<img src="{{asset('public/website/assets/img/blog/04.jpg')}}" alt="Image">
											</div>
										</div>
										<div class="dots-slider row owl-carousel owl-theme">
											<div class="item">
												<div class="single-dots">
													<img src="{{asset('public/website/assets/img/blog/01.jpg')}}" alt="image">
												</div>
											</div>
											<div class="item">
												<div class="single-dots">
													<img src="{{asset('public/website/assets/img/blog/02.jpg')}}" alt="image">
												</div>
											</div>
											<div class="item">
												<div class="single-dots">
													<img src="{{asset('public/website/assets/img/blog/03.jpg')}}" alt="image">
												</div>
											</div>
											<div class="item">
												<div class="single-dots">
													<img src="{{asset('public/website/assets/img/blog/04.jpg')}}" alt="image">
												</div>
											</div>
										</div>
									</div>
                                <div class="price-tag">${{$detail->price}}</div>
								</div>
								<div class="room-cat">
                                <a href="#">{!!$detail->content!!}</a>
								</div>
                            <h2 class="entry-title">{{$detail->name}}</h2>
								<ul class="entry-meta list-inline">
									<li><i class="far fa-bed"></i>{{$detail->area}} Bed</li>
									<li><i class="far fa-bath"></i>{{$detail->bed}} Baths</li>
									<li><i class="far fa-ruler-triangle"></i>{{$detail->bath}} m</li>
								</ul>
							</div>
							<div class="room-details-tab">
								<div class="row">
									<div class="col-sm-3">
										<ul class="nav desc-tab-item" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" href="#desc" role="tab"
													data-toggle="tab">Room Details</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#location" role="tab"
													data-toggle="tab">Location</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#reviews" role="tab"
													data-toggle="tab">Reviews</a>
											</li>
										</ul>
									</div>
									<div class="col-sm-9">
										<div class="tab-content desc-tab-content">
											<div role="tabpanel" class="tab-pane fade in active show" id="desc">
												<h5 class="tab-title">Room Details </h5>
												<div class="entry-content">
													<p>
													{!!$detail->description!!}
													</p>
													<div class="entry-gallery-img">
														<figure class="entry-media-img">
															<img src="{{url("public/uploads/room/$detail->image")}}" alt="Image">
														</figure>
													</div>
												</div>
												<div class="room-specification">
													<div class="row">
														<div class="col-lg-4 col-md-12">
															<div class="pricing-plan">
																<h4 class="specific-title"> Pricing Plan </h4>
																<table>
																	<tbody>
																		<tr>
																			<td>Nightly: </td>
																			<td class="big">$525</td>
																		</tr>
																		<tr>
																			<td>Weekends (Sat_sun): </td>
																			<td class="big">$515</td>
																		</tr>
																		<tr>
																			<td>Weekly (7d+): </td>
																			<td class="big">$515</td>
																		</tr>
																		<tr>
																			<td>Monthly (30d+): </td>
																			<td class="big">$505</td>
																		</tr>
																		<tr>
																			<td>Cleaning Fee: </td>
																			<td class="big">$1050</td>
																		</tr>
																		<tr>
																			<td>City Fee:</td>
																			<td class="big">$25 Per Stay</td>
																		</tr>
																		<tr>
																			<td>Minimum Number Of Days:</td>
																			<td class="big">1</td>
																		</tr>
																		<tr>
																			<td>Maximum Number Of Days:</td>
																			<td class="big">60</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="col-lg-4 col-6">
															<div class="feature">
																<h4 class="specific-title"> Features </h4>
																<ul>
																	<li>Gym </li>
																	<li>Laundry</li>
																	<li>TV Cable</li>
																	<li>Wi-Fi</li>
																</ul>
															</div>
															<div class="facilities">
																<h4 class="specific-title"> Facilities </h4>
																<ul>
																	<li>Farmacy </li>
																	<li>Free Parking</li>
																	<li>Reception</li>
																	<li>Security</li>
																</ul>
															</div>
														</div>
														<div class="col-lg-4 col-6">
															<div class="accomodation">
																<h4 class="specific-title"> Features </h4>
																<ul>
																	<li>Master Room</li>
																	<li>1 King Size</li>
																	<li>2 Guests</li>
																</ul>
															</div>
															<div class="bedrooms">
																<h4 class="specific-title"> Bedrooms </h4>
																<ul>
																	<li>1 Queen Size</li>
																	<li>2 Guests</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="location">
												<h5 class="tab-title">Location</h5>
												<div id="roomMaps" class="row">
													<div class="map">
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6673782236126!2d105.7828015498982!3d21.04599100714999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c9e359e2a4f618c!2sB%C3%A1ch%20Khoa%20Aptech!5e0!3m2!1svi!2s!4v1593158115666!5m2!1svi!2s"
														 width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
													  </div>
												</div>
												<div class="room-location">
													<div class="row">
														<div class="col-4">
															<h6>City</h6>
															<p>New York, US</p>
														</div>
														<div class="col-4">
															<h6>Phone</h6>
															<p>+901280-89121</p>
															<p>+901280-89121</p>
														</div>
														<div class="col-4">
															<h6>Email</h6>
															<p>room@avson.com</p>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="reviews">
												<h5 class="tab-title">Reviews</h5>
												<div class="reviews-count">
													<div class="row">
														<div class="col-4">
														  <div class="count-num d-flex align-items-center justify-content-center">
															<p>
															  <span>6.8</span>
															  Suprrb
															</p>
														  </div>
														</div>
														<div class="col-8">
														  <div class="reviews-bars">
															<div class="single-bar">
															  <p class="bar-title">Acaommodation
																<span>8.0</span>
															  </p>
															  <div class="bar">
																<div class="bar-inner" style="width: 80%;"></div>
															  </div>
															</div>
															<div class="single-bar">
															  <p class="bar-title">Destination
																<span>6.0</span>
															  </p>
															  <div class="bar">
																<div class="bar-inner" style="width: 60%;"></div>
															  </div>
															</div>
															<div class="single-bar">
															  <p class="bar-title">Transport
																<span>7.0</span>
															  </p>
															  <div class="bar">
																<div class="bar-inner" style="width: 70%;"></div>
															  </div>
															</div>
															<div class="single-bar">
															  <p class="bar-title">Overall
																<span>9.0</span>
															  </p>
															  <div class="bar">
																<div class="bar-inner" style="width: 90%;"></div>
															  </div>
															</div>
														  </div>
														</div>
													  </div>
												</div>
												<div class="comment-area">
													<h5 class="tab-title">All Reviews</h5>
													<ul class="comment-list">
														<li>
															<div class="comment-autor">
																<img src="{{asset('public/website/assets/img/blog-details/04.jpg')}}" alt="reviews">
															</div>
															<div class="comment-desc">
																<h6>Alexzeder Alex <span class="comment-date"> 25 Feb
																		2020</span></h6>
																<p>But I must explain to you how all this mistaken idea
																	of denouncing pleasure
																	and praising pain was born and I will give you a
																	complete account</p>
																<a href="#" class="reply-comment">Reply <i
																		class="far fa-long-arrow-right"></i></a>
																<div class="autor-rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-alt"></i>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="review-form">
													<h5 class="tab-title">Write a Review</h5>
													<div class="star-given-box">
														<ul class="list-inline">
															<li>
																<p class="st-title">Acaommodation</p>
																<p class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</p>
															</li>
															<li>
																<p class="st-title">Destination</p>
																<p class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</p>
															</li>
															<li>
																<p class="st-title">Transport</p>
																<p class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</p>
															</li>
															<li>
																<p class="st-title">Overall</p>
																<p class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</p>
															</li>
														</ul>
													</div>
													<form>
														<div class="input-wrap text-area">
															<textarea placeholder="Write Review"></textarea>
															<i class="far fa-pencil"></i>
														</div>
														<div class="input-wrap">
															<input type="text" placeholder="Name" id="name">
															<i class="far fa-user-alt"></i>
														</div>
														<div class="input-wrap">
															<input type="text" placeholder="Your Email" id="email">
															<i class="far fa-envelope"></i>
														</div>
														<div class="input-wrap">
															<button type="submit" class="btn btn-block">Submit</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                        @endforeach
					</div>
					<div class="col-lg-4">
						<!-- Sidebars Area -->
						<div class="sidebar-wrap">
							@foreach($detailroom as $detail)
							<div class="widget booking-widget">
								<h4 class="widget-title">${{$detail->price}} <span>Night</span></h4>
								<form action="{{route('save_cart',$detail->room_id)}}" method="POST">
									@csrf
									<div class="input-wrap">
										<input type="text" placeholder="Search" id="f-location">
										<i class="far fa-search"></i>
									</div>
									<div class="input-wrap angle-down">
                                        <select name="loaction" id="loaction">
                                            <option value="" disabled selected>Locations</option>
                                            @foreach($locations as $location)
										<option  value="{{$location->location_id}}"{{$location->location_id == $detail->location_id ? 'selected': ' '}}>{{$location->name}}</option>
                                            @endforeach
                                        </select>
									</div>
									<div class="input-wrap angle-down">
                                        <select name="rooms" id="rooms">
                                            <option value="" disabled selected>Rooms</option>
                                            @foreach($categoryroom as $category)
										<option value="{{$category->category_id}}"{{$category->category_id == $detail->category_id ? 'selected' : ' '}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
									<div class="input-wrap">
										<input name="start_date" type="text" placeholder="Arrive Date" id="arrive-date">
										<i class="far fa-calendar-alt"></i>
									</div>
									<div class="input-wrap">
										<input name="end_date" type="text" placeholder="Depart Date" id="depart-date">
										<i class=""></i>
										<i class="far fa-calendar-alt"></i>
									</div>
									<div cl	ss="input-wrap">
									<input type="hidden" name="room_hidden" value="{{$detail->room_id}}">
									</div>
									<div class="input-wrap">
										<button type="submit" class="btn filled-btn btn-block">
											book now <i class="far fa-long-arrow-right"></i>
										</button>
									</div>
								</form>
							</div>
							@endforeach
							<div class="widget category-widget">
								<h4 class="widget-title">Category</h4>
								@foreach($categorydetail as $cat)
								<div class="single-cat bg-img-center"
							style="background-image: url('../../public/uploads/blog/{{$cat->image}}');">
							<a href="#">{{$cat->name}}</a>
								</div>
								@endforeach
							</div>
							@foreach($bannerdetail as $banner)
							<div class="widget banner-widget"
						style="background-image: url('../../public/uploads/blog/{{$banner->image}}');">
								<h2>Booking Your Latest apartment</h2>
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit sed do eiusmod tempor
									incididunt ut labore </p>
								<a href="#" class="btn filled-btn">BOOK NOW <i class="far fa-long-arrow-right"></i></a>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Latest Room Start -->
		<section class="latest-room-d section-bg section-padding">
			<div class="container">
				<!-- Section Title -->
				<div class="section-title text-center">
					<span class="title-top">Latest Product</span>
					<h1>Explore Latest Product</h1>
				</div>
				<div class="row">
					@foreach($related_room as $related)
					<div class="col-lg-4 col-md-6">
						<!-- Single Room -->
						<div class="single-room">
							<div class="room-thumb">
								<img src="{{url("public/uploads/room/$related->image")}}" alt="Room">
							</div>
							<div class="room-desc">
								<div class="room-cat">
								<p>{!!$related->content!!}</p>
								</div>
							<h4><a href="single-room.html">{{$related->name}}</a></h4>
								<p>
									{!!$related->description!!}
								</p>
								<ul class="room-info list-inline">
									<li><i class="far fa-bed"></i>{{$related->area}} Bed</li>
									<li><i class="far fa-bath"></i>{{$related->bed}} Baths</li>
									<li><i class="far fa-ruler-triangle"></i>{{$related->bath}} m</li>
								</ul>
								<div class="room-price">
								<p>${{$related->price}}</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- Latest Room End -->
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