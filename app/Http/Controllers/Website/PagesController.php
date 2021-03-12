<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RequestBanner;
use App\ModelBanner;
use App\ModelEmployee;
use App\Http\Requests\RequestEmployee;

class PagesController extends Controller
{
    public function pages()
    {
        return view('Website.Pages.pages');
    }
    public function about()
    {
        return view('Website.Pages.about');
    }
    public function our_staff()
    {
        $banneremployee = DB::table('banner')->where('status','1')->where('position','8')->orderby('id','desc')->get();
        
        $employee = DB::table('employee')->where('status','1')->orderby('id','asc')->get();
        return view('Website.Pages.our-staff')->with('employee',$employee)->with('banneremployee',$banneremployee);
    }
    public function resturent()
    {
        $bannerresturent = DB::table('banner')->where('status','1')->where('position','9')->orderby('id','desc')->get();
        $restaurantservice = DB::table('resturent_service')->where('status','1')->orderby('id','asc')->limit(4)->get();
        $restaurantservice1 = DB::table('resturent_service')->where('status','1')->orderby('id','desc')->limit(6)->get();
        return view('Website.Pages.resturent')->with('bannerresturent',$bannerresturent)->with('restaurantservice',$restaurantservice)->with('restaurantservice1',$restaurantservice1);
    }
    public function reservation()
    {
        return view('Website.Pages.reservation');
    }
}
