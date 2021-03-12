<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modelblog;
use App\Http\Requests\Requestblog;
use Session;



class BlogController extends Controller
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
    public function addblog()
    {
        $this->AuthLogin();
    	return view('Admin.Pages.blog.addblog');
    }
    public function save_blog(Requestblog $request)
    {
    	$data = array();
    	$data['name'] = $request->blog_name;
    	$data['slug'] = $request->blog_slug;
    	$data['summary'] = $request->summary;
    	$data['content'] = $request->content;
    	$data['status'] = $request->status;
    	$data['meta_key'] = $request->meta_key;
    	$data['meta_title'] = $request->meta_title;
		$data['meta_descript'] = $request->meta_descript;

    	$get_image = $request->file('image');
    	if ($get_image) {
    		$getFlieName = $request->image->getClientOriginalName();
    		$image = $request->image->move('public/uploads/blog',$getFlieName);
    		$data['image']=$getFlieName;
    	}

    	DB::table('blog')->insert($data);
    	return Redirect()->route('listblog');
    }
    public function listblog()
    {
        $this->AuthLogin();
    	$listblog = Modelblog::all();
    	return view('Admin.Pages.blog.listblog',compact('listblog'));
    }
    public function deleteblog($id)
    {
        $this->AuthLogin();
    	DB::table('blog')->where('blog_id',$id)->delete();
    	return Redirect()->route('listblog');
    }
    public function editblog($id)
    {
        $this->AuthLogin();
    	$editblogs = DB::table('blog')->where('blog_id',$id)->get();
    	return view('Admin.Pages.blog.editblog',compact('editblogs'));
    }
    public function update_blog(Request $request,$id)
    {
    	$data = array();
    	$data['name'] = $request->blog_name;
    	$data['slug'] = $request->blog_slug;
    	$data['summary'] = $request->summary;
    	$data['content'] = $request->content;
    	$data['status'] = $request->status;
    	$data['meta_key'] = $request->meta_key;
    	$data['meta_title'] = $request->meta_title;
    	$data['meta_descript'] = $request->meta_descript;
    	$get_image = $request->file('image');
    	if ($get_image) {
    		$getFlieName = $request->image->getClientOriginalName();
    		$image = $request->image->move('public/uploads/blog',$getFlieName);
    		$data['image']=$getFlieName;
    	}

    	DB::table('blog')->where('blog_id',$id)->update($data);
    	return Redirect()->route('listblog');
    }
}
