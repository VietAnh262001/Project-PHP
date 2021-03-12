<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	<!-- preloader -->
		<!-- <div class="loader" id="preLoader">
			<span></span>
			<span></span>
			<span></span>
		</div> -->
		<!-- Header Start -->
		<header>
			<div class="header-top-area section-bg">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-7 offset-xl-3 col-md-6">
							<ul class="top-contact-info list-inline">
								<li><i class="far fa-map-marker-alt"></i>205 Main Rood, New York</li>
								<li><i class="far fa-phone"></i>+89(456) 789 999</li>
							</ul>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-6">
							<div class="top-right text-right">
								
								<ul class="top-menu list-inline d-inline">
									<li>
										<?php
            $user_name = Session::get('user_name');
            if ($user_name) {
              echo '<i class="fas fa-user-tie"></i>'.' '.$user_name;
            } 
            ?>
									</li>
									
									<li><a href="{{route('cart')}}" class="icart">
										<i class="far fa-store"></i>
										
										<span class="cart">{{$cart->total_cart}}</span>
										
									</a></li>
								</ul>
								<ul class="top-social-icon list-inline d-inline">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-google"></i></a></li>
									<?php
									$user_id = Session::get('user_id');
									if ($user_id != NULL) {

										?>
										<li><a href="{{route('logout')}}">Log Out</a></li>
										<?php
									}else{ 
										?>
										<li><a href="{{route('login')}}">Log In</a></li>
										<?php 
									}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-menu-area">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-xl-3 col-lg-3 col-md-4 col-7">
							<div class="logo">
								<a href="{{route('home')}}"><img src="{{asset('public/website/assets/img/logo.png')}}" alt="Avson"></a>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-8 col-5">
							<div class="menu-right-area">
								<div class="lag-select">
									<div class="lag-img">
										<img src="{{asset('public/website/assets/img/icons/flag.png')}}" alt="Flug">
									</div>
									<div class="lag-option">
										
										<div class="nice-select" tabindex="0">
											<label class="current">English</span>
												
											</div>
										</div>
									</div>
									<nav class="main-menu">
										<ul class="list-inline">
											<li class="submenu">
												<a href="{{route('home')}}">Home</a>
											</li>
											<li class="have-submenu room-menu">
												<a href="{{route('room_gird')}}">Rooms</a>
												<ul class="submenu">
													<li><a href="{{route('room_gird')}}">Room List</a></li>
													<li><a href="{{route('room_gird')}}">Room Gird</a></li>
													<li><a href="{{route('room_details')}}">Room Details</a></li>
												</ul>
											</li>
											<li><a href="{{route('service')}}">Services</a></li>
											<li class="have-submenu">
												<a href="{{route('blog')}}">Blog</a>
												<ul class="submenu">
													<li><a href="{{route('blog')}}">Blog Gird</a></li>
													<li><a href="{{route('blog')}}">Blog Standard</a></li>
													<li><a href="{{route('blog_details')}}">Blog Details</a></li>
												</ul>
											</li>
											<li class="have-submenu">
												<a href="#">Pages</a>
												<ul class="submenu">
													<li><a href="{{route('about')}}">About Us</a></li>
													<li><a href="{{route('our_staff')}}">Our Staff</a></li>
													<li><a href="{{route('resturent')}}">Resturent</a></li>
													<li><a href="{{route('reservation')}}">Reservation</a></li>
												</ul>
											</li>
											<li><a href="{{route('gallery')}}">Gallery</a></li>
											<li><a href="{{route('contact')}}">Contact</a></li>
											<li class="cart-none"><a href="{{route('cart')}}" class="icart">
										<i class="far fa-store"></i> Cart	
										
										
										
									</a></li>
										</ul>
									</nav>
									<div class="search-wrap">
										<a href="#" class="search-icon"><i class="far fa-search"></i></a>
										<a href="#" class="search-icon icon-close">
											<i class="far fa-times"></i>
										</a>
										<div class="search-form">
										<form action="{{route('roomsearch')}}" method="POST">
											@csrf
												<input type="search" name="search" placeholder="TYPE AND PRESS ENTER.....">
												
											</form>
										</div>
									</div>
									<div class="quote-btn">
										<a href="#" class="btn filled-btn">get a quote <i
											class="far fa-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="mobilemenu"></div>
						</div>
					</div>
					<script type="text/javascript">
						$(document).on('click','ul li',function(){
							$(this).addClass('active-page').siblings.removeClass('active-page')
						});
					</script>
					@stack('scripts')
				</header>
	<!-- Header End -->