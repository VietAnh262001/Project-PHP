<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RequestBanner;
use App\ModelBanner;
use App\Modelroom;
use App\Modellocation;
use App\category;

class HomeController extends Controller
{
    public function home()
    {
    	$banner1 = DB::table('banner')->where('status','1')->where('position','1')->orderby('id','desc')->get();
    	$banner2 = DB::table('banner')->where('status','1')->where('position','2')->orderby('id','desc')->get();
    	$banner3 = DB::table('banner')->where('status','1')->where('position','3')->orderby('id','desc')->get();
    	$banner4 = DB::table('banner')->where('status','1')->where('position','4')->orderby('id','desc')->get();
    	$banner5 = DB::table('banner')->where('status','1')->where('position','5')->where('prioty','1')->orderby('id','desc')->get();
    	$banner5_1 = DB::table('banner')->where('status','1')->where('position','5')->where('prioty','5')->orderby('id','desc')->get();
    	$banner5_2 = DB::table('banner')->where('status','1')->where('position','5')->where('prioty','2')->orderby('id','desc')->get();
    	$banner5_3 = DB::table('banner')->where('status','1')->where('position','5')->where('prioty','3')->orderby('id','desc')->get();
    	$banner5_4 = DB::table('banner')->where('status','1')->where('position','5')->where('prioty','4')->orderby('id','desc')->get();
    	$banner6 = DB::table('banner')->where('status','1')->where('position','6')->where('prioty','1')->orderby('id','desc')->get();

        $slineroom = DB::table('room')
        ->join('room_category','room_category.category_id','=','room.category_id')
        ->join('location','location.location_id','=','room.location_id')
        ->select('room.*','room_category.name as category_name','location.name as location_name')
        ->limit(6)
        ->get();
        return view('Website.home')->with('banner1',$banner1)->with('banner2',$banner2)->with('banner3',$banner3)->with('banner4',$banner4)->with('banner5',$banner5)->with('banner5_1',$banner5_1)->with('banner5_2',$banner5_2)->with('banner5_3',$banner5_3)->with('banner5_4',$banner5_4)->with('banner6',$banner6)->with('slineroom',$slineroom);
    }
}
