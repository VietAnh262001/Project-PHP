<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modelroom;
use App\Modelpayment_method;
use Session;
use Cart;
use App\Helper\CartHelper;
use Mail;


class CheckoutController extends Controller
{
    public function checkout(CartHelper $cart)
    {
    	$banner_detail = DB::table('banner')->where('status','1')->where('position','11')->orderby('id','desc')->get();
    	$payment = DB::table('payment_method')->orderby('id','asc')->get();
    	return view('Website.Pages.checkout',compact('banner_detail','payment','cart'));
    }
    public function save_checkout(Request $request ,CartHelper $cart)
    {

    	//insert booking
    	$data = array();
        $data['name'] = $request->name;
        $data['user_id'] = Session::get('user_id');
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['country'] = $request->country;
        $data['city'] = $request->city;
        $data['payment_id'] = $request->payment;
        $data['note'] = $request->note;
        $data['start_date'] = date('Y-m-d', strtotime($request->start_date));
        $data['end_date'] = date('Y-m-d', strtotime($request->end_date));
        $data['total'] = $cart->total_price;
        $data['status'] = 'Đang chờ xử lý';
        $booking = DB::table('booking')->insertGetId($data);


        //insert booking_room
        
        foreach ($cart->items as $room) {
        $roomdata['name'] = $room['name'];
        $roomdata['booking_id'] = $booking;
        $roomdata['price'] = $room['price'];
        $roomdata['status'] = 'Đang chờ xử lý';
        $roomdata['room_id'] = $room['room_id'];
        $roomdata['start_date'] = date('Y-m-d', strtotime($room['startdate']));
        $roomdata['end_date'] = date('Y-m-d', strtotime($room['enddate']));
        $booking_room = DB::table('booking_room')->insertGetId($roomdata);	
        }
        foreach ($cart->items as $room) {
            foreach ($room['services'] as $room_service) {
        $servicedata['booking_room_id'] = $booking_room;
        $servicedata['name'] = $room_service['name'];
        $servicedata['price'] = $room_service['price'];
        $servicedata['resturent_service_id'] = $room_service['id'];
        $servicedata['quatity'] = $room_service['quantity'];
        $servicedata['status'] = 'Đang chờ xử lý';
        $servicedata['room_id'] = $room_service['room_id'];
        $booking_service = DB::table('booking_room_service')->insertGetId($servicedata);  
        }
        }

        Mail::send('email.booking',[
            'name' => $request->name,
            'date' => date('Y-m-d', strtotime($request->start_date)),
            'booking' => $booking,
            'items' => $cart->items,
        ],function($mail) use($request)
        {
            $mail->to($request->email);
            $mail->from('takirn1234@gmail.com');
            $mail->subject('Email Booking');
        });

        return Redirect()->route('success');
    }
    public function success(CartHelper $cart)
    {
        foreach ($cart->items as $cart) {
            $room = $cart['room_id'];
            $user_id = Session::get('user_id');
            
        }
        
        $bookingroom = DB::table('room')->where('room_id',$room)->get();
        $users = DB::table('booking')->where('user_id',$user_id)->get();
    	
        
    	return view('Website.Pages.success',compact('cart','bookingroom','users'));
    }
    public function clearcart(CartHelper $cart)
    {
        $cart->clearcartservice();

        return Redirect()->route('home');
    }
}
