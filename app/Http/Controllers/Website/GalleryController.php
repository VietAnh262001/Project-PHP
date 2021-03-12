<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RequestBanner;
use App\ModelBanner;
use App\ModelGallery;
use App\Http\Requests\RequestGallery;
use App\ModelCategory_gallery;



class GalleryController extends Controller
{
    public function gallery()
    {
    	$bannergallery = DB::table('banner')->where('status','1')->where('position','14')->orderby('id','desc')->get();
    	$listgallery = DB::table('gallery')->where('status','1')->orderby('id','asc')->get();
    	$listcategorygallery = DB::table('category_gallery')->where('status','1')->orderby('id','asc')->get();
        return view('Website.Pages.gallery')->with('bannergallery',$bannergallery)->with('listgallery',$listgallery)->with('listcategorygallery',$listcategorygallery);
    }
}
