<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modelroom;
use App\Modellocation;
use App\category;
use App\ModelBanner;
use App\Modelblog;
Use Alert;
use App\Modelservice;

use App\Http\Requests\Requestroom;

class RoomController extends Controller
{
    public function rooms()
    {
        $bannerroom = DB::table('banner')->where('status','1')->where('position','10')->orderby('id','desc')->get();
        $categoryroom = DB::table('room_category')->where('status','1')->orderby('category_id','desc')->get();
        $locations = DB::table('location')->where('status','1')->orderby('location_id','desc')->get();
        $listroom = DB::table('room')
        ->join('room_category','room_category.category_id','=','room.category_id')
        ->join('location','location.location_id','=','room.location_id')
        ->select('room.*','room_category.name as category_name','location.name as location_name')
        ->paginate(6);
        return view('Website.Pages.room-gird')->with('categoryroom',$categoryroom)->with('locations',$locations)->with('listroom',$listroom)->with('bannerroom',$bannerroom);
    }
    public function room_gird()
    {
        
        $bannerroom = DB::table('banner')->where('status','1')->where('position','10')->orderby('id','desc')->get();
        $categoryroom = DB::table('room_category')->where('status','1')->orderby('category_id','desc')->get();
        $locations = DB::table('location')->where('status','1')->orderby('location_id','desc')->get();
        $listroom = DB::table('room')
        ->join('room_category','room_category.category_id','=','room.category_id')
        ->join('location','location.location_id','=','room.location_id')
        ->select('room.*','room_category.name as category_name','location.name as location_name')
        ->paginate(6);
        return view('Website.Pages.room-gird')->with('categoryroom',$categoryroom)->with('locations',$locations)->with('listroom',$listroom)->with('bannerroom',$bannerroom);
    }
    public function room_details()
    {

        return view('Website.Pages.room-detail');
    }
    public function details($id)
    {
        $categoryroom = DB::table('room_category')->where('status','1')->orderby('category_id','desc')->get();
        $locations = DB::table('location')->where('status','1')->orderby('location_id','desc')->get();
        $detailroom = DB::table('room')
        ->join('room_category','room_category.category_id','=','room.category_id')
        ->join('location','location.location_id','=','room.location_id')
        ->select('room.*','room_category.name as category_name','location.name as location_name')
        ->where('room.room_id',$id)
        ->get();
        $categorydetail = DB::table('blog')->where('status','1')->whereBetween('meta_key',[8, 10])->orderby('blog_id','asc')->limit(3)->get();
        $bannerdetail = DB::table('blog')->where('status','1')->where('meta_key','11')->orderby('blog_id','desc')->get();
        $banner_detail = DB::table('banner')->where('status','1')->where('position','11')->orderby('id','desc')->get();
        $service = DB::table('service')->orderby('service_id','asc')->get();

        foreach ($detailroom as $value){
            $category_id = $value->category_id;
        }
        $related_room = DB::table('room')
        ->join('room_category','room_category.category_id','=','room.category_id')
        ->join('location','location.location_id','=','room.location_id')
        ->select('room.*','room_category.name as category_name','location.name as location_name')
        ->where('room_category.category_id',$category_id)
        ->whereNotIn('room.room_id',[$id])
        ->get();
        return view('Website.Pages.details')->with('detailroom',$detailroom)->with('categoryroom',$categoryroom)->with('locations',$locations)->with('categorydetail',$categorydetail)->with('bannerdetail',$bannerdetail)->with('banner_detail',$banner_detail)->with('related_room',$related_room)->with('service',$service);
    }
    public function roomsearch(Request $request)
    {
        $bannerroom = DB::table('banner')->where('status','1')->where('position','10')->orderby('id','desc')->get();
        $categoryroom = DB::table('room_category')->where('status','1')->orderby('category_id','desc')->get();
        $locations = DB::table('location')->where('status','1')->orderby('location_id','desc')->get();
        $search = DB::table('room')
        ->join('room_category','room_category.category_id','=','room.category_id')
        ->join('location','location.location_id','=','room.location_id')
        ->select('room.*','room_category.name as category_name','location.name as location_name')
        ->limit(6)
        ->where("room.name",'LIKE','%'."$request->search".'%')
        ->get();
        return view('Website.Pages.searchroom')->with('categoryroom',$categoryroom)->with('locations',$locations)->with('search',$search)->with('bannerroom',$bannerroom);
    }
}
