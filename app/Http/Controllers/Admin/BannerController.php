<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RequestBanner;
use App\ModelBanner;
use Session;


class BannerController extends Controller
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
   public function addbanner()
   {
      $this->AuthLogin();
   	return view('Admin.Pages.banner.addbanner');
   }
   public function save_banner(RequestBanner $request)  
   {
 
		$data = array();
		$data['name'] = $request->banner_name;
		$data['link'] = $request->banner_link;
		$data['prioty'] = $request->banner_prioty;
		$data['position'] = $request->banner_position;
		$data['status'] = $request->status;
		$data['descript'] = $request->banner_descript;
		$get_image = $request->file('banner_image');
		if($get_image){
			$getFileName = $request->banner_image->getClientOriginalName();
			$image = $request->banner_image->move('public/uploads/banner' ,$getFileName);
			$data['image'] = $getFileName;
		}
		DB::table('banner')->insert($data);
		return Redirect::to('admin/banner/listbanner');
   }
   public function listbanner(){
      $this->AuthLogin();
   	$listban = ModelBanner::all();
   	return view('Admin.Pages.banner.listbanner',['banner'=>$listban]);
   }
   public function deletebanner($id){
      $this->AuthLogin();
   	DB::table('banner')->where('id',$id)->delete();
   	return Redirect::to('admin/banner/listbanner');
   }
   public function editbanner($id){
      $this->AuthLogin();
   		$editbanner = DB::table("banner")->where('id',$id)->get();
   		return view('Admin.Pages.banner.editbanner',['editbanner'=>$editbanner]);
   }
   public function update_banner(Request $request,$id)
   {
   		$data = array();
   		$data['name'] = $request->banner_name;
      $data['link'] = $request->banner_link;
      $data['prioty'] = $request->banner_prioty;
      $data['position'] = $request->banner_position;
      $data['status'] = $request->status;
      $data['descript'] = $request->banner_descript;
      $get_image = $request->file('banner_image');
      if($get_image){
         $getFileName = $request->banner_image->getClientOriginalName();
         $image = $request->banner_image->move('public/uploads/banner',$getFileName);
         $data['image'] = $getFileName;
      }
		DB::table('banner')->where('id',$id)->update($data);
		return Redirect::to('admin/banner/listbanner');
   }
   public function searchbanner(Request $request)
   {
      $this->AuthLogin();
   	 $searchbanner = DB::table('banner')->where("name",'LIKE','%'."$request->search".'%')->get();
   	 return view('Admin.Pages.banner.searchbanner',['searchbanner'=>$searchbanner]);
   }
}
