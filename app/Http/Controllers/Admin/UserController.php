<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modeluser;
use App\Http\Requests\Requestuser;
use Session;


class UserController extends Controller
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
        $listuser = Modeluser::all();
        return view('Admin.Pages.user.listuser',compact('listuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthLogin();
        return view('Admin.Pages.user.adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requestuser $request)
    {
        $data = array();
        $data['name'] = $request->user_name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['remember_token'] = $request->remember_token;
        $data['email_verified_at'] = $request->email_verified_at;
        $data['status'] = $request->status;
        $data['url'] = $request->url;
        $get_image = $request->file('image');
        if($get_image){
            $getFileName = $request->image->getClientOriginalName();
            $image = $request->image->move('public/uploads/user' ,$getFileName.md5(date("Y:M:D H:i:S")));
            $data['image'] = $image;
        }
        DB::table('user')->insert($data);
        return Redirect()->route('user.index');
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
        $edituser = DB::table('user')->where('user_id',$id)->get();
        return view('Admin.Pages.user.edituser',compact('edituser'));
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
        $data['name'] = $request->user_name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['remember_token'] = $request->remember_token;
        $data['email_verified_at'] = $request->email_verified_at;
        $data['status'] = $request->status;
        $data['url'] = $request->url;
        $get_image = $request->file('image');
        if($get_image){
            $getFileName = $request->image->getClientOriginalName();
            $image = $request->image->move('public/uploads/user' ,$getFileName.md5(date("Y:M:D H:i:S")));
            $data['image'] = $image;
        }
         DB::table('user')->where('user_id',$id)->update($data);
        return Redirect()->route('user.index');
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
        DB::table('user')->where('user_id',$id)->delete();
        return Redirect()->route('user.index');
    }
}
