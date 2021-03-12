<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\category;
use App\Http\Requests\RequestRoom_Category;
use Session;


class CategoryController extends Controller
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
	public function addcategory()
	{
		$this->AuthLogin();
		return view('Admin.Pages.Category.home');
	}
	public function save_category(RequestRoom_Category $request)
	{		

		$getFileName = $request->image->getClientOriginalName();
		$image = $request->image->move('public/uploads/category' ,$getFileName);
		$addcategory = new category ; 
		$addcategory->name = $request->cat_name;
		$addcategory->slug = $request->cat_slug;
		$addcategory->image = $getFileName;
		$addcategory->status = $request->status;
		$addcategory->meta_title = $request->meta_title;
		$addcategory->meta_descritp = $request->meta_descript;
		$addcategory->prioty = $request->prioty;
		$addcategory->meta_keyword = $request->meta_keyword;
		$addcategory->save();
		return Redirect()->route('listcategory');
	}
	
	
	public function listcategory()
	{
		$this->AuthLogin();
		$listcat = category::paginate(5);
		return view('Admin.Pages.Category.listcategory',['catlist' => $listcat]);
	}
	public function deletecategory($id)
	{
		$this->AuthLogin();
		DB::table('room_category')->where('category_id',$id)->delete();
		return Redirect::to('admin/category/listcategory');
		
	}
	public function editcategory($id)
	{
		$this->AuthLogin();
		$editcategory = DB::table("room_category")->where('category_id',$id)->get();
		return view('Admin.Pages.Category.editcategory',['editcategory'=>$editcategory]);
	}

	public function searchCategory(Request $request){
		$this->AuthLogin();
		$searchCategory = DB::table("room_category")->where("name",'LIKE','%'."$request->search".'%')->get();
		
		return view('Admin.Pages.Category.searchCategory',['searchCategory'=>$searchCategory]);
	}
	public function update_category(Request $request,$id)
	{
		$data = array();
		$data['name'] = $request->cat_name;
		$data['slug'] = $request->cat_slug;
		$data['status'] = $request->status;
		$data['meta_title'] = $request->meta_title;
		$data['meta_descritp'] = $request->meta_descript;
		$data['prioty'] = $request->prioty;
		$data['meta_keyword'] = $request->meta_keyword;
		$get_image = $request->file('image');
		if($get_image){
			$getFileName = $request->image->getClientOriginalName();
			$image = $request->image->move('public/uploads/category' ,$getFileName);
			$data['image'] = $getFileName;
		}


		DB::table('room_category')->where('category_id',$id)->update($data);
		return Redirect::to('admin/category/listcategory');
	}
}
