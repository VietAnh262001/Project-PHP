<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modelroom;
use App\Modellocation;
use App\category;
use App\Http\Requests\Requestroom;
use Session;

class RoomController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect()->route('admin_dashboard');
        }else{
            return Redirect()->route('admin_login')->send();
        }
    }
    public function addroom()
    {
        $this->AuthLogin();
    	$cat_product = DB::table('room_category')->orderby('category_id','desc')->get();
    	$location_product = DB::table('location')->orderby('location_id','desc')->get();
    	return view('Admin.Pages.room.addroom')->with('cat_product',$cat_product)->with('location_product',$location_product);
    }
    public function save_room(Requestroom $request)
    {
    	$data = array();
    	$data['name'] = $request->room_name;
    	$data['price'] = $request->price;
    	$data['description'] = $request->descript;
    	$data['category_id'] = $request->category;
    	$data['content'] = $request->content;
    	$data['area'] = $request->area;
    	$data['bed'] = $request->bed;
    	$data['bath'] = $request->bath;
    	$data['location_id'] = $request->location;
    	$data['status'] = $request->status;
    	$get_image = $request->file('image');
    	if ($get_image) {
    		$getFileName = $request->image->getClientOriginalName();
    		$image = $request->image->move('public/uploads/room',$getFileName);
    		$data['image'] = $getFileName;
    	}

    	DB::table('room')->insert($data);
    	return Redirect()->route('listroom');
    }
    public function listroom()
    {
        $this->AuthLogin();
    	$listroom = DB::table('room')
        ->join('room_category','room_category.category_id','=','room.category_id')
        ->join('location','location.location_id','=','room.location_id')
        ->select('room.*','room_category.name as category_name','location.name as location_name')
        ->get();
    	return view('Admin.Pages.room.listroom',compact('listroom'));
    }
    public function deleteroom($i)
    {
        $this->AuthLogin();
    	DB::table('room')->where('room_id',$i)->delete();
    	return Redirect()->route('listroom');
    }
    public function editroom($i)
    {
        $this->AuthLogin();
        $cat_product = DB::table('room_category')->orderby('category_id','desc')->get();
        $location_product = DB::table('location')->orderby('location_id','desc')->get();
    	$editroom = DB::table('room')->where('room_id',$i)->get();
        return view('Admin.Pages.room.editroom')->with('editroom',$editroom)->with('cat_product',$cat_product)->with('location_product',$location_product);
    }
    public function update_room(Request $request,$i)
    {
        $data = array();
        $data['name'] = $request->room_name;
        $data['price'] = $request->price;
        $data['description'] = $request->descript;
        $data['category_id'] = $request->category;
        $data['content'] = $request->content;
        $data['area'] = $request->area;
        $data['bed'] = $request->bed;
        $data['bath'] = $request->bath;
        $data['location_id'] = $request->location;
        $data['status'] = $request->status;
        $get_image = $request->file('image');
        if ($get_image) {
            $getFileName = $request->image->getClientOriginalName();
            $image = $request->image->move('public/uploads/room',$getFileName);
            $data['image'] = $getFileName;
        }
        DB::table('room')->where('room_id',$i)->update($data);
        return Redirect()->route('listroom');   
    }
    public function searchroom(Request $request)
    {
        $this->AuthLogin();
        $searchroom = DB::table('room')
        ->join('room_category','room_category.category_id','=','room.category_id')
        ->join('location','location.location_id','=','room.location_id')
        ->select('room.*','room_category.name as category_name','location.name as location_name')->where("room.name",'LIKE','%'."$request->search".'%')
        ->get();
        return view('Admin.Pages.room.searchroom',compact('searchroom'));
    }
}

