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
use App\Modelservice;

class ServicesController extends Controller
{
    public function service()
    {
    	$service = DB::table('service')->orderby('service_id','desc')->get();
        return view('Website.Pages.service')->with('service',$service);
    }
}
