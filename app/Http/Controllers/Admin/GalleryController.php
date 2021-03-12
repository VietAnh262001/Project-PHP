<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\ModelGallery;
use App\Http\Requests\RequestGallery;
use Session;


class GalleryController extends Controller
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
        $listgallery = ModelGallery::all();
        return view('Admin.Pages.gallery.listgallery',compact('listgallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthLogin();
        return view('Admin.Pages.gallery.addgallery');
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
        $get_image = $request->file('image');
        if ($get_image) {
            $getFlieName = $request->image->getClientOriginalName();
            $image = $request->image->move('public/uploads/gallery',$getFlieName);
            $data['image']=$getFlieName;
        }

        DB::table('gallery')->insert($data);
        return Redirect()->route('gallery.index');
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
        $editgallery = DB::table('gallery')->where('id',$id)->get();
        return view('Admin.Pages.gallery.editgallery',compact('editgallery'));
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
        $get_image = $request->file('image');
        if ($get_image) {
            $getFlieName = $request->image->getClientOriginalName();
            $image = $request->image->move('public/uploads/gallery',$getFlieName);
            $data['image']=$getFlieName;
        }

        DB::table('gallery')->where('id',$id)->update($data);
        return Redirect()->route('gallery.index');
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
        DB::table('gallery')->where('id',$id)->delete();
        return Redirect()->route('gallery.index');
    }
}
