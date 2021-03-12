<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modellocation;
use App\Http\Requests\RequestLocation;
use Session;


class LocationController extends Controller
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
    public function addlocation()
    {
        $this->AuthLogin();
    	return view('Admin.Pages.location.addlocation');
    }
    public function save_location(RequestLocation $request)
    {
    	$addlocation = new Modellocation; 
		$addlocation->name = $request->name;
		$addlocation->status = $request->status;
		$addlocation->prioty = $request->prioty;
		$addlocation->save();
        return Redirect()->route('listlocation');
    }
    public function listlocation()
    {
        $this->AuthLogin();
        $listlocation = Modellocation::paginate(5);
        return view('Admin.Pages.location.listlocation',['listlocation'=>$listlocation]);
    }
    public function deletelocation($id)
    {
        $this->AuthLogin();
        DB::table('location')->where('location_id',$id)->delete();
        return Redirect()->route('listlocation');
    }
    public function editlocation($id)
    {
        $this->AuthLogin();
        $editlocation = DB::table('location')->where('location_id',$id)->get();
        return view('Admin.Pages.location.editlocation',['editlocation'=>$editlocation]);
    }
    public function update_location(Request $request,$id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['status'] = $request->status;
        $data['prioty'] = $request->prioty;

        DB::table('location')->where('location_id',$id)->update($data);
        return Redirect()->route('listlocation');
    }
    public function searchlocation(Request $request)
    {
        $this->AuthLogin();
        $searchlocation = DB::table("location")->where("name",'LIKE','%'."$request->search".'%')->get();
        return view('Admin.Pages.location.searchlocation',['searchlocation'=>$searchlocation]);
    }
}
