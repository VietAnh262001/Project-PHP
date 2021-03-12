<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\ModelResturentservice;
use App\Http\Requests\RequestResturentservice;
use Session;


class ResturentServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect()->route('admin_dashboard');
        }else{
            return Redirect()->route('admin_login')->send();
        }
    }
    public function index()
    {
        $this->AuthLogin();
        $listrestaurant = ModelResturentservice::all();
        return view('Admin.Pages.resturentservice.listresturentservice',compact('listrestaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthLogin();
        return view('Admin.Pages.resturentservice.addresturentservice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['status'] = $request->status;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $get_image = $request->file('image');
        if ($get_image) {
            $getFlieName = $request->image->getClientOriginalName();
            $image = $request->image->move('public/uploads/resturentservice',$getFlieName);
            $data['image']=$image;
        }

        DB::table('resturent_service')->insert($data);
        return Redirect()->route('restaurantservice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->AuthLogin();
         $editrestaurantservice = DB::table('resturent_service')->where('id',$id)->get();
        return view('Admin.Pages.resturentservice.editresturentservice',compact('editrestaurantservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['status'] = $request->status;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $get_image = $request->file('image');
        if ($get_image) {
            $getFlieName = $request->image->getClientOriginalName();
            $image = $request->image->move('public/uploads/resturentservice',$getFlieName);
            $data['image']=$image;
        }

        DB::table('resturent_service')->where('id',$id)->update($data);
        return Redirect()->route('restaurantservice.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->AuthLogin();
        DB::table('resturent_service')->where('id',$id)->delete();
        return Redirect()->route('restaurantservice.index');
    }
}
