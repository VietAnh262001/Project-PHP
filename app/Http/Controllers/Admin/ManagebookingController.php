<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modelroom;
use App\Modellocation;
use App\category;
use App\ModelOrderbooking;
use App\ModelOrderbooking_room;
use App\ModelOrderbooking_service;
use App\Http\Requests\Requestroom;
use Session;

class ManagebookingController extends Controller
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
        $booking = ModelOrderbooking::booking();
        return view('Admin.Pages.manage.manage_booking',compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listbookingroom()
    {
        $this->AuthLogin();
        $booking_room = ModelOrderbooking_room::bookingroom();
        return view('Admin.Pages.manage.manage_booking_room',compact('booking_room'));
    }
    public function listbookingservice()
    {
        $this->AuthLogin();
        $booking_service = ModelOrderbooking_service::bookingservice();
        return view('Admin.Pages.manage.manage_booking_service',compact('booking_service'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $editbooking = DB::table('booking')->where('booking_id',$id)->get();
        return view('Admin.Pages.manage.editmanage_booking',compact('editbooking'));
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
        $data['status'] = $request->status;

        DB::table('booking')->where('booking_id',$id)->update($data);
        return Redirect()->route('managebooking.index');
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
        DB::table('booking')->where('booking_id',$id)->delete();
        return Redirect()->route('managebooking.index');
    }
}
