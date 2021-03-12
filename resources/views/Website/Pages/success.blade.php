@extends('Website.layouts.website')

@section('title')
<title>Order Success</title>
@endsection
@section('content')
<main>
    <div class="container">

      <!--Section: Block Content-->
      <section class="mt-5 mb-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-8">

            <!-- Card -->
            @foreach($cart->items as $success)
            <div class="card wish-list mb-4">
              <div class="card-body">

                <h5 class="mb-4">Order detail</h5>
                @foreach($bookingroom as $room)
                <div class="row mb-4">
                  <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                      <a href="#"><img class="img-fluid w-100"
                      src="{{url("public/uploads/room/$room->image")}}" alt="Sample"></a>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5>Room Name : {{$success['name']}}</h5>
                        <p class="mb-3 text-muted text-uppercase small">Date of arrival : {{$success['startdate']}}</p>
                        <p class="mb-2 text-muted text-uppercase small">Date of department : {{$success['enddate']}}</p>
                       
                        <div class="row">
                          <p class="col-md-4 mb-3 text-muted text-uppercase small"><i class="far fa-bed"></i> {{$room->bed}} Bed </p>
                          <p class="col-md-4 mb-3 text-muted text-uppercase small"><i class="far fa-bath"></i> {{$room->area}} Baths </p>
                          <p class="col-md-4 mb-3 text-muted text-uppercase small"><i class="far fa-ruler-triangle"></i> {{$room->bath}} m</p>
                        </div>
                          
                        </div>
                        <div>
                          
                          <small id="passwordHelpBlock" class="form-text text-muted text-center">
                            (Note, 1 piece)
                          </small>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0"style="position: absolute;top:80%; left: 80%;font-size: 26px;"> <span><strong>${{$success['price']}}.00</strong></span></p>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <hr class="mb-4">
              </div>
              <div class="card-body">

                <h5 class="mb-4">Order Service detail</h5>
                @foreach($success['services'] as $service)
                <div class="row mb-4">
                  <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                      <a href="#"><img class="img-fluid w-100"
                      src="{{URL::to($service['image'])}}" alt="Sample"></a>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                      <div class="d-flex justify-content-between">
                        <div>
                        <h5>Service Name: {{$service['name']}}</h5>
                        <p class="mb-3 text-muted text-uppercase small">Quantity : {{$service['quantity']}}</p>
                          <br>
                          <br>
                        </div>
                        <div>
                          
                          <small id="passwordHelpBlock" class="form-text text-muted text-center">
                            (Note, 1 piece)
                          </small>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0"style="position: absolute;top:80%; left: 80%;font-size: 26px;"> <span><strong>${{$service['price']}}.00</strong></span></p>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endforeach
            <!-- Card -->
            <!-- Card -->
            
            <!-- Card -->


          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4">

            <!-- Card -->
            
            <div class="card mb-4">
              @foreach($users as $user)
              <div class="card-body">
                <h6 class="mb-3">Name: <?php
                  $user_name = Session::get('user_name');
                  if ($user_name) {
                    echo $user_name;
                  } 
                  ?></h6>
                <h6 class="mb-3">Date of receipt: {{$user->start_date}}</h6>
                <h6 class="mb-3">Phone: {{$user->phone}} </h6>
                <h6 class="mb-3">Address:{{$user->address}} </h6>
                <h5 class="mb-3">The total amount of</h5>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    Total Room Rates
                    <span>{{'$'.' '. number_format($cart->total_room)}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    Total Service Rates
                    <span>{{'$'.' '. number_format($cart->total_service).'.00'}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                    <div>
                      <strong>The total amount of</strong>
                      <strong>
                        <p class="mb-0">(including VAT)</p>
                      </strong>
                    </div>
                    <span><strong>{{'$'.' '. number_format($cart->total_price).'.00'}}</strong></span>
                  </li>
                  <button class="btn filled-btn btn-block">
                  <a href="{{route('clearcart')}}" style="color: aliceblue">Finish</a>
                  </button>
                </ul>
              </div>
              @endforeach
            </div>
          
            <!-- Card -->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Block Content-->

    </div>
  </main>
	
@endsection