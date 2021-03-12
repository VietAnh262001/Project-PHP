<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modeluseradmin;
use App\Http\Requests\Requestuseradmin;
use Session;


class UseradminController extends Controller
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
	public function admin_login()
	{
		return view('Admin.Pages.login.admin_login');
	}
	public function show_dashboard()
	{
		$this->AuthLogin();
		return view('Admin.layouts.admin');
	}
	public function admin_dashboard(Request $request)
	{
		$admin_email = $request->admin_email;
		$admin_password = md5($request->admin_password);

		$result = DB::table('useradmin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
		if ($result) {
			Session::put('admin_name',$result->admin_name);
			Session::put('admin_id',$result->admin_id);
			return view('Admin.layouts.admin');
		}else{
			Session::put('message','Mật khẩu hoặc tài khoản sai');
			return view('Admin.Pages.login.admin_login');
		}
	}
	public function admin_logout()
	{
		$this->AuthLogin();
		Session::put('admin_name',null);
		Session::put('admin_id',null);
		return view('Admin.Pages.login.admin_login');
	}
	public function addlogin()
	{
		$this->AuthLogin();
		return view('Admin.Pages.login.addlogin');
	}
	public function save_login(Requestuseradmin $request)
	{
		$data = array();
		$data['admin_email'] = $request->admin_email;
		$data['admin_password'] = md5($request->admin_password);
		$data['admin_name'] = $request->admin_name;
		$data['admin_phone'] = $request->admin_phone;

		DB::table('useradmin')->insert($data);
		return Redirect()->route('listlogin');
	}
	public function listlogin()
	{
		$this->AuthLogin();
		$listlogin = Modeluseradmin::paginate(5);
		return view('Admin.Pages.login.listlogin',['listlogin'=>$listlogin]);
	}
}
