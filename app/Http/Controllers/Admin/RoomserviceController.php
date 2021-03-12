<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modelroomservice;
use App\Modelroom;
use App\Modelservice;
use App\Http\Requests\Requestroomservice;
use Session;


class RoomserviceController extends Controller
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
    public function addroomservice()
    {
        $this->AuthLogin();
    	$service = DB::table('service')->orderby('service_id','desc')->get();
    	$rooms = DB::table('room')->orderby('room_id','desc')->get();
    	return view('Admin.Pages.room_service.addroomservice')->with('service',$service)->with('rooms',$rooms);
    }
    public function save_roomservice(Request $request)
    {
    	$data = array();
    	$data['service_id'] = $request->service;
    	$data['room_id'] = $request->room;
    	$data['status'] = $request->status;

    	DB::table('rooms_service')->insert($data);
    	return Redirect()->route('listroomservice');
    }
    public function listroomservice()
    {
        $this->AuthLogin();
    	$listroomservice = DB::table('rooms_service')
    	->join('service','service.service_id','=','rooms_service.service_id')
    	->join('room','room.room_id','=','rooms_service.room_id')
    	->select('rooms_service.*','service.name as servicename','room.name as roomname')
    	->get();
    	return view('Admin.Pages.room_service.listroomservice',compact('listroomservice'));
    }
    public function deleteroomservice($id)
    {
        $this->AuthLogin();
    	DB::table('rooms_service')->where('id',$id)->delete();
    	return Redirect()->route('listroomservice');
    }
    public function editroomservice($id)
    {
        $this->AuthLogin();
    	$service = DB::table('service')->orderby('service_id','desc')->get();
    	$rooms = DB::table('room')->orderby('room_id','desc')->get();
    	$editroomservice = DB::table('rooms_service')->where('id',$id)->get();
    	return view('Admin.Pages.room_service.editroomservice')->with('editroomservice',$editroomservice)->with('service',$service)->with('rooms',$rooms);
    }
    public function update_roomservice(Request $request,$id)
    {
    	$data = array();
    	$data['service_id'] = $request->service;
    	$data['room_id'] = $request->room;
    	$data['status'] = $request->status;

    	DB::table('rooms_service')->where('id',$id)->update($data);
    	return Redirect()->route('listroomservice');
    }
}
