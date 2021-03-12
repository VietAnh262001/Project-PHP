<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Modelservice;
use App\Http\Requests\Requestservice;
use Session;


class ServiceController extends Controller
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
    public function addservice()
    {
        $this->AuthLogin();
    	return view('Admin.Pages.service.addservice');
    }
    public function save_service(Requestservice $request)
    {
    	$data = array();
    	$data['name'] = $request->sv_name;
    	$data['price'] = $request->price;
    	$data['description'] = $request->descript;
    	$get_image  = $request->file('image');
    	if ($get_image) {
    		$getFileName = $request->image->getClientOriginalName();
    		$image = $request->image->move('public/uploads/service',$getFileName);
    		$data['image']=$image;
    	}
    	DB::table('service')->insert($data);
    	return Redirect()->route('listservice');
    }
    public function listservice()
    {
        $this->AuthLogin();
    	$listservice = DB::table('service')->get();	
    	return view('Admin.Pages.service.listservice',compact('listservice'));
    }
    public function search(Request $request)
    {
        $this->AuthLogin();
        if ($request->ajax()) {
            $output = '';
            $listservice = DB::table('service')->where('name', 'LIKE', '%' . $request->search . '%')->get();
            if ($listservice) {
                foreach ($listservice as $key => $sv) {
                    $output .= '<tr>
                    <td>' . $sv->service_id . '</td>
                    <td>' . $sv->name . '</td>
                    <td>' . $sv->price . '</td>
                    <td>' . $sv->image . '</td>
                    <td>' . $sv->description . '</td>
                    </tr>';
                }
            }
            
            return Response($output);
        }
    }
    public function deleteservice($id)
    {
        $this->AuthLogin();
    	DB::table('service')->where('service_id',$id)->delete();
    	return Redirect()->route('listservice');
    }
    public function editservice($id)
    {
        $this->AuthLogin();
    	$editservice = DB::table('service')->where('service_id',$id)->get();
    	return view('Admin.Pages.service.editservice',compact('editservice'));
    }
    public function update_service(Request $request,$id)
    {
    	$data = array();
    	$data['name'] = $request->sv_name;
    	$data['price'] = $request->price;
    	$data['description'] = $request->descript;
    	$get_image  = $request->file('image');
    	if ($get_image) {
    		$getFileName = $request->image->getClientOriginalName();
    		$image = $request->image->move('public/uploads/service',$getFileName);
    		$data['image']=$image;
    	}
    	DB::table('service')->where('service_id',$id)->update($data);
    	return Redirect()->route('listservice');
    }

 
}
