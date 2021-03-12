<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Home Page One</title>
	<!-- Font Awesome Css -->
	<link rel="stylesheet" href="{{asset('public/website/assets/css/all.min.css')}}">

	<!-- Bootstrap version 4.4.1 -->
    <link rel="stylesheet" href="{{asset('public/website/assets/css/bootstrap.min.css')}}" />
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>	
    <!-- meanmenu version 2.0.7 -->
	<link rel="stylesheet" href="{{asset('public/website/assets/css/meanmenu-2.0.7.min.css')}}">
	<!-- Carousel Css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- datetimepicker -->
	<link rel="stylesheet" href="{{asset('public/website/assets/css/bootstrap-datepicker.css')}}" />
	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('public/website/assets/css/style.css')}}" />
	<!-- Responsive Css -->
	<link rel="stylesheet" href="{{asset('public/website/assets/css/responsive.css')}}" />
</head>

<body>

    <main>
        <!-- Header Start -->
         @include('Website.partials.header')
        <!-- Header End -->
        <!-- Main Wrap start -->
        
        <!-- Main Wrap End -->
        {{-- Footer Start --}}
        @include('Website.partials.footer')

        {{-- Footer End --}}
    </main>
    
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Slick Version 1.9.0 -->
	
	<!-- <script src="assets/js/slick.min-1.9.0.js"></script> -->
	<script src="{{asset('public/website/assets/js/owl.carousel.js')}}"></script>
	<!-- MeanMenu version 2.0.7-->
    <script src="{{asset('public/website/assets/js/meanmenu-2.0.7.min.js')}}"></script>
    <!-- Bootstrap Version 4.5.0 -->
	<script src="{{asset('public/website/assets/js/bootstrap.min.js')}}"></script>
	<!-- owl carousel js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
	<!-- Waypoints js version 2.0.3 -->

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> -->
	<script src="{{asset('public/website/assets/js/jquery.countup.js')}}"></script>
	<script src="{{asset('public/website/assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- counterup js version 1.0 -->
	<!-- <script src="assets/js/jquery.counterup-1.0.min.js"></script> -->
    <!-- bootstrap datepicker -->
	<script src="{{asset('public/website/assets/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('public/website/assets/js/main.js')}}"></script>
</body>


</html>