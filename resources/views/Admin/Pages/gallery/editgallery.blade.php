<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Edit Gallery</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Gallery</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  @foreach($editgallery as $edit_value)
  <form role="form" action="{{route('gallery.update',$edit_value->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
     @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input value="{{$edit_value->name}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>
       <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input class="btn" name="image" type="file" style="margin: 10px;" id="photo" accept="image/x-png,image/gif,image/jpeg">
        <img id="img-photo" name="image" type="file"
        src="{{url($edit_value->image)}}" style="width: 100px;margin-left: 16px">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select name="status" class="custom-select custom-select-sm-3">
          <option selected {{$edit_value->status==1 ? "selected":" "}} value="1">Hiện</option>
          <option {{$edit_value->status==0 ? "selected":" "}} value="0">Ẩn</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Prioty</label>
        <textarea name="prioty" class="form-control @error('prioty') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="prioty">{{$edit_value->prioty}}</textarea>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" name="addgallery" class="btn btn-primary">Submit</button>
    </div>
  </form>
  @endforeach
</div>
</div>
@endsection