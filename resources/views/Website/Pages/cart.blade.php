@extends('Website.layouts.website')

@section('title')
<title>Trang chu</title>
@endsection
@section('content')
<div class="shoping_cart">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping_cart_table">
                    
                    
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping_product">Rooms</th>
                                <th>Price</th>
                                <th>Start time</th>
                                <th>End time</th>
                                <th>Service</th>
                                <th>Total Service</th>
                                <th>Total</th>
                                <th>Remove</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart->items as $cart_room)
                            <tr>
                                <td class="shoping_cart_item">
                                    <img src={{URL::to('public/uploads/room/'.$cart_room['image'])}} alt="" width="50px">
                                <h5>{{$cart_room['name']}}</h5>
                                
                                </td>
                                <td class="shoping_cart_price">
                                    {{'$'.' '. number_format($cart_room['price']).'.00'}}
                                </td>
                                

                            <td>{{$cart_room['startdate']}}</td>
                            <td>{{$cart_room['enddate']}}</td>
                            <td><!-- Button trigger modal -->
                                <button type="button" class="showSV" style="background-color: #fff;
                                border: none;
                                color: #444444;
                                padding: 15px 30px;
                                display: inline-block;
                                font-size: 26px;
                            cursor: pointer;" data-toggle="modal" data-target="#exampleModal{{$cart_room['room_id']}}">
                                    <i class="fal fa-eye"></i>
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$cart_room['room_id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">List Service</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="shoping_product">Rooms</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    <th>Remove</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cart_room['services'] as $cart_service)
                                                <tr>
                                                    <td class="shoping_cart_item">
                                                        <img src={{URL::to($cart_service['image'])}} alt="" width="50px">
                                                    <h5>{{$cart_service['name']}}</h5>
                                                    
                                                    </td>
                                                    <td class="shoping_cart_price">
                                                        ${{$cart_service['price']}}.00
                                                    </td>
                                                    <td class="shoping_cart_quantity">
                                                        <div class="quantity">
                                                        <form action="{{route('updatecartservice',['room_id'=>$cart_room['room_id'],'id'=>$cart_service['id']])}}" method="GET">
                                                                @csrf
                                                                <div class="pro-qty">
                                                                    <button type="submit" class="dec qtybtn btncart">-</button>
                                                                    <input type="text" value="{{$cart_service['quantity']}}" name="quantity">
                                                                    <button type="submit" class="inc qtybtn btncart">+</button>
                                                                 </div>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td class="shoping_cart_total">
                                                        {{'$'.' '. number_format($cart->get_price_service($cart_room['room_id'])).'.00'}}
                                                    </td>
                                                    <td>
                                                    <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('removecartservice',['room_id'=>$cart_room['room_id'],'id'=>$cart_service['id']])}}"><i class="far fa-trash-alt delete"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                      </div>
                                      <div class="modal-footer">
                                        
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="{{route('resturent', ['room_id' => $cart_room['room_id']])}}">Add to Service</a>
                            
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </td>
                                <td class="shoping_cart_total">
                                    {{'$'.' '. number_format($cart->get_price_service($cart_room['room_id'])).'.00'}}
                                </td>
                                <td class="shoping_cart_total">
                                    <?php 
                                        $total = number_format($cart_room['price']) + number_format($cart->get_price_service($cart_room['room_id']));
                                        echo '$'.' '. number_format($total).'.00'
                                        ?>
                                </td>
                                <td>
                                <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('removecartroom',['id'=>$cart_room['room_id']])}}"><i class="far fa-trash-alt delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping_cart_btns">
                    <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    <a href="#" class="primary-btn cart-btn cart-btn-right"><i class="fas fa-spinner"></i>
                        Upadate Cart</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping_continue">
                    <div class="shoping_discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping_checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        
                        <li>Total Service <span> {{'$'.' '. number_format($cart->total_service).'.00'}}</span></li>
                        <li>Total Room <span>{{'$'.' '. number_format($cart->total_room)}}</span></li>
                                    
                             

                        <li>Total <span>{{'$'.' '. number_format($cart->total_price).'.00'}}</span></li>
                    </ul>
                    <?php
									$user_id = Session::get('user_id');
									if ($user_id != NULL) {

										?>
										<a href="{{route('checkout')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
										<?php
									}else{ 
										?>
										<a href="{{route('login')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
										<?php 
									}
									?>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection