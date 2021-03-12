@extends('Admin.layouts.admin')

@section('title')
<title>list category</title>
@endsection

@section('content')
<div class="content-wrapper">
   <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Category</h3>
  </div>
  @foreach($editcategory as $edit_value)
<form role="form" action="{{URL::to('/admin/category/update_category/'.$edit_value->category_id)}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input value="{{$edit_value->name}}" name="cat_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">  
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Slug</label>
      <input value="{{$edit_value->slug}}" name="cat_slug" type="text" class="form-control" id="exampleInputPassword1" placeholder="Slug">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Image</label>
      <input class="btn" name="image" type="file" style="margin: 10px;" id="photo" accept="image/x-png,image/gif,image/jpeg">
        <img id="img-photo" name="image" type="file"
      src="{{asset('public/uploads/category/'.$edit_value->image)}}" style="width: 100px;margin-left: 16px">
    </div>
    <div class="form-group">
      <label  for="exampleInputPassword1">Status</label>
      <select name="status" class="custom-select custom-select-sm-3 ">
        <option selected>Status</option>
        <option  {{$edit_value->status == 1 ? "selected" : " "}}     value="1">Hiện</option>
        <option  {{$edit_value->status == 0 ? "selected" : " "}} value="0">Ẩn</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Meta_title</label>
      <input value="{{$edit_value->meta_title}}" name="meta_title" type="text" class="form-control" id="exampleInputPassword1" placeholder="meta_title">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Meta_descript</label>
      <textarea name="meta_descript" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="meta_descript">{{$edit_value->meta_descritp}}</textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Prioty</label>
      <input value="{{$edit_value->prioty}}" name="prioty" type="text" class="form-control" id="exampleInputPassword1" placeholder="prioty">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Meta_keyword</label>
      <input value="{{$edit_value->meta_keyword}}" name="meta_keyword" type="text" class="form-control" id="exampleInputPassword1" placeholder="meta_keyword">
    </div>

  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" name="addcategory" class="btn btn-primary">Submit</button>
  </div>
</form>
 @endforeach
</div>
</div>
@endsection
