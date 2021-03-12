<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modelpayment_method;
use App\Http\Requests\Requestpayment_method;
use Session;


class PaymentmethodController extends Controller
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
        $listpaymentmethod = Modelpayment_method::all();
        return view('Admin.Pages.payment_method.listpaymentmethod',compact('listpaymentmethod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthLogin();
        return view('Admin.Pages.payment_method.addpaymentmethod');
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
        $data['prioty'] = $request->prioty;

        DB::table('payment_method')->insert($data);
        return Redirect()->route('payment.index');
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
        $editpay = DB::table('payment_method') ->where('id',$id)->get();
        return view('Admin.Pages.payment_method.editpaymentmethod',compact('editpay'));
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
        $data['prioty'] = $request->prioty;

        DB::table('payment_method')->where('id',$id)->update($data);
        return Redirect()->route('payment.index');
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
        DB::table('payment_method')->where('id',$id)->delete();
        return Redirect::to('admin/payment');
    }
}
