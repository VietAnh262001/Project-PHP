<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modeluser;
use App\Http\Requests\Requestuser;
use Session;


class LoginController extends Controller
{
    public function login()
    {
    	return view('Website.Pages.login');
    }
    public function signin()
    {
    	return view('Website.Pages.signup');
    	
    }
    public function save_user(Requestuser $request)
    {
    	
    	$data = array();
        $data['name'] = $request->user_name;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        DB::table('user')->insert($data);
        
        return Redirect()->route('login');
    }
    public function user_checkout(Request $request)
    {
    	$email = $request->email;
        $password = md5($request->password);
        $payment = DB::table('payment_method')->orderby('id','asc')->get();
        $result = DB::table('user')->where('email',$email)->where('password',$password)->first();
        if ($result) {
			Session::put('user_name',$result->name);
			Session::put('user_id',$result->user_id);
			return view('Website.Pages.checkout')->with('payment',$payment);
		}else{
			Session::put('message','Mật khẩu hoặc tài khoản sai');
			return view('Website.Pages.login');
		}
    }
    public function logout()
    {
    	Session::put('user_name',null);
		Session::put('user_id',null);
		return view('Website.Pages.login');
    }
}
