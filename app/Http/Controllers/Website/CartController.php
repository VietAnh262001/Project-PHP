<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modelroom;
use App\ModelResturentservice;
use App\Modelservice;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use Cart;
use App\Helper\CartHelper;
session_start();

class CartController extends Controller
{
    public function cart(CartHelper $cart)
    {
    	 $categoryroom = DB::table('room_category')->where('status','1')->orderby('category_id','desc')->get();
        $locations = DB::table('location')->where('status','1')->orderby('location_id','desc')->get();
         Alert::success('Success Title', 'Success Message');
        
    	return view('Website.Pages.cart',compact('categoryroom','locations', 'cart'));
    }
    public function save_cart(Request $request, CartHelper $cart)
    {

    	$roomId = $request->room_hidden;
    	$startdate = $request->start_date;
    	$enddate = $request->end_date;
    	$room_info = DB::table('room')->where('room_id',$roomId)->first();
        $room_info->startdate = $startdate;
    	$room_info->enddate = $enddate;
     
       $cart->add($room_info);
         Alert::success('Success Title', 'Success Message');


        return Redirect()->route('resturent', ['room_id'=> $room_info->room_id]);
    }
    public function add(CartHelper $cart,$id)
    {
        # code...
    }

    public function addcartservice(CartHelper $cart,$id)
    {


        $service = ModelResturentservice::find($id);
        $room_id = request()->room_id;
        $cart->add_service($service,$room_id, 1);
Alert::success('Success Title', 'Success Message');
        return Redirect()->back();
          // alertify.success('Success message');
    }
    public function removecartroom(CartHelper $cart,$id)
    {
        $cart->removecartroom($id);
        return Redirect()->back();
    }

    public function removecartservice(CartHelper $cart,$id,$room_id)
    {
        $cart->removecartservice($id,$room_id);
        return Redirect()->back();
    }
    public function updatecartservice(CartHelper $cart,$room_id,$id)
    {
        $quantity = request()->quantity ? request()->quantity : 1;
        $cart->updatecartservice($id,$quantity,$room_id);
        return Redirect()->back();
    }
    public function clearcartservice(CartHelper $cart)
    {
        $cart->clearcartservice();
        return Redirect()->back();
    }
}
