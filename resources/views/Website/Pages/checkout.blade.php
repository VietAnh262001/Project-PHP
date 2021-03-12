@extends('Website.layouts.website')

@section('title')
<title>Trang chu</title>
@endsection
@section('content')

<div class="checkout">
    <div class="container">
        <div class="checkout_form">
            <h4>Billing Details</h4>
            
        <form action="{{route('save_checkout')}}" method="POST">
            @csrf
           
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="checkout_input">
                            <p>Name<span>*</span></p>
                            <input type="text" name="name">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout_input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="checkout_input">
                            <p>Address<span>*</span></p>
                            <input type="text" class="checkout_input_add" name="address">
                        </div>
                        <div class="checkout_input">
                            <p>Town/City<span>*</span></p>
                            <input type="text" name="city">
                        </div>
                        <div class="checkout_input">
                            <p>Country/State<span>*</span></p>
                            <input type="text" name="country">
                        </div>
                        <div class="checkout_input">
                            <p>Postcode / ZIP<span>*</span></p>
                            <input type="text" name="postcode">
                        </div>
                        <div class="checkout_input">
                            <p>Payment<span>*</span></p>
                            <div class="input-wrap angle-down">
                                <select name="payment" id="payment">
                                    <option value="" disabled selected>Payment</option>
                                    @foreach($payment as $pay)
                                <option  value="{{$pay->id}}">{{$pay->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="checkout_input">
                            <p>Order notes<span>*</span></p>
                            <input type="text" name="note">
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout_order">
                            {{-- @foreach($cart->items as $cart_room) --}}
                            <h4>Your Order</h4>
                            <div class="checkout_order_products">Rooms <span>Total</span></div>
                            <ul>
                                @foreach($cart->items as $cart_room)
                            <li>{{$cart_room['name']}}<span>{{'$'.' '. number_format($cart_room['price']).'.00'}}</span></li>
                                 <input type="hidden" name="start_date" value="{{date('d-m-Y', strtotime($cart_room['startdate']))}}">
                                 <input type="hidden" name="end_date" value="{{date('d-m-Y', strtotime($cart_room['enddate']))}}">
                                @endforeach
                                
                            </ul>
                            <div class="checkout_order_products">Service <span>{{'$'.' '. number_format($cart->total_service).'.00'}}</span></div>
                            <ul>
                                
                            <li><span></span></li>
                            
                                
                            </ul>
                            <div class="checkout_order_subtotal">Subtotal <span>{{'$'.' '. number_format($cart->total_price).'.00'}}</span></div>
                            <div class="checkout_order_total">Total <span>{{'$'.' '. number_format($cart->total_price).'.00'}}</span></div>
                            <button type="submit" class="btn">PLACE ORDER</button>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
                
            </form>
           
        </div>
    </div>
</div>
@endsection