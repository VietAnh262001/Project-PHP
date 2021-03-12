<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RequestBanner;
use App\ModelBanner;
use App\Modelblog;
use App\Http\Requests\Requestblog;

class BlogController extends Controller
{
	public function blog()
	{
		$banner_blog = DB::table('banner')->where('status','1')->where('position','7')->orderby('id','desc')->get();
		$blog1 = DB::table('blog')->where('status','1')->where('meta_key','1')->orderby('blog_id','desc')->get();
		$blog2 = DB::table('blog')->where('status','1')->where('meta_key','2')->orderby('blog_id','desc')->get();
		$blog3 = DB::table('blog')->where('status','1')->orderby('blog_id','desc')->paginate(2);
		$blog4 = DB::table('blog')->where('status','1')->whereBetween('meta_key',[5, 7])->orderby('blog_id','asc')->get();
		$blog5 = DB::table('room_category')->where('status','1')->orderby('category_id','asc')->limit(3)->get();
		$blog6 = DB::table('blog')->where('status','1')->where('meta_key','11')->orderby('blog_id','desc')->get();
		return view('Website.Pages.blog',compact('banner_blog','blog1','blog2','blog3','blog4','blog5','blog6'));
	}
	public function blog_details()
	{
		$blog4 = DB::table('blog')->where('status','1')->whereBetween('meta_key',[5, 7])->orderby('blog_id','asc')->get();
		$blog5 = DB::table('blog')->where('status','1')->whereBetween('meta_key',[8, 10])->orderby('blog_id','asc')->limit(3)->get();
		$blog6 = DB::table('blog')->where('status','1')->where('meta_key','11')->orderby('blog_id','desc')->get();
		$banner_blog_detail = DB::table('banner')->where('status','1')->where('position','12')->orderby('id','desc')->get();
		return view('Website.Pages.blog-details',compact('banner_blog_detail','blog4','blog5','blog6'));
	}
	public function blogdetails($id)
	{
		$blog4 = DB::table('blog')->where('status','1')->whereBetween('meta_key',[5, 7])->orderby('blog_id','asc')->get();
		$blog5 = DB::table('blog')->where('status','1')->whereBetween('meta_key',[8, 10])->orderby('blog_id','asc')->limit(3)->get();
		$blog6 = DB::table('blog')->where('status','1')->where('meta_key','11')->orderby('blog_id','desc')->get();
		$banner_blog_detail = DB::table('banner')->where('status','1')->where('position','12')->orderby('id','desc')->get();

		$blog_details = DB::table('blog')->where('status','1')->where('blog_id',$id)->get();
		return view('Website.Pages.blogdetails',compact('banner_blog_detail','blog4','blog5','blog6','blog_details'));
	}
}
