<!-- Stored in resources/views/child.blade.php -->

@extends('Website.layouts.website')

@section('title')
<title>Room-detail</title>
@endsection
@section('content')
    <div class="content">

		<!-- Breadcrumb section -->
		<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
			style="background-image: url({{asset('public/website/assets/img/blog/blog-breadcrumb.jpg')}});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>Room Details</h1>
					<ul class="list-inline">
						<li><a href="index-2.html">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>Room Details</li>
					</ul>
				</div>
			</div>
			<h1 class="big-text">
				Room
			</h1>
		</section>
		<!-- Breadcrumb section End-->
		<section class="room-details-wrapper section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<!-- Room Details -->
						<div class="room-details">
							<div class="entry-header">
								<div class="post-thumb position-relative">
									<div class="post-thumb-slider">
										<div class="main-slider owl-carousel owl-theme">
											<div class="single-img item" style="width: 100%;">
												<!-- <a href="{{asset('public/website/assets/img/blog/01.jpg')}}" class="main-img">
												</a> -->
												<img src="{{asset('public/website/assets/img/blog/01.jpg')}}" alt="Image">
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
									<div class="price-tag">$180</div>
								</div>
								<div class="room-cat">
									<a href="#">Guest House</a>
								</div>
								<h2 class="entry-title">Modern Guest Rooms</h2>
								<ul class="entry-meta list-inline">
									<li><i class="far fa-bed"></i>3 Bed</li>
									<li><i class="far fa-bath"></i>2 Baths</li>
									<li><i class="far fa-ruler-triangle"></i>72 m</li>
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
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem
														accusantium
														doloremque
														laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
														veritatis et quasi
														architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
														voluptatem
														quia
														voluptas
														sit aspernatur aut odit aut fugit, sed quia consequuntur magni
														dolores
														eos qui
														ratione
														voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
														ipsum
														quia dolor
														sit
														amet, consectetur, adipisci velit, sed quia non numquam eius
														modi
														tempora incidunt
														ut
														labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
														minima
														veniam, quis
														nostrum exercitationem ullam corporis suscipit laboriosam, nisi
														ut
														aliquid ex ea
														comm
														odi consequatur
													</p>
													<div class="entry-gallery-img">
														<figure class="entry-media-img">
															<img src="{{asset('public/website/assets/img/blog/02.jpg')}}" alt="Image">
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
					</div>
					<div class="col-lg-4">
						<!-- Sidebars Area -->
						<div class="sidebar-wrap">
							<div class="widget booking-widget">
								<h4 class="widget-title">$160.00 <span>Night</span></h4>
								<form>
									<div class="input-wrap">
										<input type="text" placeholder="Location" id="f-location">
										<i class="far fa-search"></i>
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
									<div class="input-wrap">
										<select name="guests" id="guests">
											<option value="Guests">Guests</option>
											<option value="Guests">Guests</option>
											<option value="Guests">Guests</option>
										</select>
									</div>
									<div class="input-wrap">
										<button type="submit" class="btn filled-btn btn-block">
											book now <i class="far fa-long-arrow-right"></i>
										</button>
									</div>
								</form>
							</div>
							<div class="widget category-widget">
								<h4 class="widget-title">Category</h4>
								<div class="single-cat bg-img-center"
									style="background-image: url({{asset('public/website/assets/img/blog/cat-01.jpg')}});">
									<a href="#">Luxury Room</a>
								</div>
								<div class="single-cat bg-img-center"
									style="background-image: url({{asset('public/website/assets/img/blog/cat-02.jpg')}});">
									<a href="#">Couple Room</a>
								</div>
								<div class="single-cat bg-img-center"
									style="background-image: url({{asset('public/website/assets/img/blog/cat-03.jpg')}});">
									<a href="#">Hotel Views</a>
								</div>
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
					<div class="col-lg-4 col-md-6">
						<!-- Single Room -->
						<div class="single-room">
							<div class="room-thumb">
								<img src="{{asset('public/website/assets/img/rooms/01.jpg')}}" alt="Room">
							</div>
							<div class="room-desc">
								<div class="room-cat">
									<p>Guest House</p>
								</div>
								<h4><a href="single-room.html">Modern Guest Rooms</a></h4>
								<p>
									Avoids pleasure itself, because pleasure,
									but because those who do not know how
									to pursue pleasure rationally encounter
								</p>
								<ul class="room-info list-inline">
									<li><i class="far fa-bed"></i>3 Bed</li>
									<li><i class="far fa-bath"></i>2 Baths</li>
									<li><i class="far fa-ruler-triangle"></i>72 m</li>
								</ul>
								<div class="room-price">
									<p>$180.00</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<!-- Single Room -->
						<div class="single-room">
							<div class="room-thumb">
								<img src="{{asset('public/website/assets/img/rooms/02.jpg')}}" alt="Room">
							</div>
							<div class="room-desc">
								<div class="room-cat">
									<p>Meeting Room</p>
								</div>
								<h4><a href="single-room.html">Conference Room</a></h4>
								<p>
									Great explorer of the truth, the master-
									builder of human happiness one rejects,
									dislikes avoids pleasure because
								</p>
								<ul class="room-info list-inline">
									<li><i class="far fa-bed"></i>3 Bed</li>
									<li><i class="far fa-bath"></i>2 Baths</li>
									<li><i class="far fa-ruler-triangle"></i>72 m</li>
								</ul>
								<div class="room-price">
									<p>$205.00</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mx-auto">
						<!-- Single Room -->
						<div class="single-room">
							<div class="room-thumb">
								<img src="{{asset('public/website/assets/img/rooms/03.jpg')}}" alt="Room">
							</div>
							<div class="room-desc">
								<div class="room-cat">
									<p>Guest Room</p>
								</div>
								<h4><a href="single-room.html">Deluxe Couple Room</a></h4>
								<p>
									Provident, similique sunt in culpa qui
									officia deserunt mollitia animi laborum
									dolorum fuga. Et harum quidem
								</p>
								<ul class="room-info list-inline">
									<li><i class="far fa-bed"></i>3 Bed</li>
									<li><i class="far fa-bath"></i>2 Baths</li>
									<li><i class="far fa-ruler-triangle"></i>72 m</li>
								</ul>
								<div class="room-price">
									<p>$199.00</p>
								</div>
							</div>
						</div>
					</div>
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