<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Edit Banner</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Banner</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  @foreach($editbanner as $edit_value)
  <form role="form" action="{{URL::to('/admin/banner/update_banner/'.$edit_value->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input value="{{$edit_value->name}}" name="banner_name" type="text" class="form-control @error('banner_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>

      @error('banner_name')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input class="btn" name="banner_image" type="file" style="margin: 10px;" id="photo" accept="image/x-png,image/gif,image/jpeg">
        <img id="img-photo" name="image" type="file"
        src="{{asset('public/uploads/banner/'.$edit_value->image)}}" style="width: 100px;margin-left: 16px">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Link</label>
        <input value="{{$edit_value->link}}" name="banner_link" type="text" class="form-control @error('banner_link') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Link">
      </div>
      @error('banner_link')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Prioty</label>
        <input value="{{$edit_value->prioty}}" name="banner_prioty" type="text" class="form-control @error('prioty') is-invalid @enderror" id="exampleInputPassword1" placeholder="Prioty">
      </div>
      @error('banner_prioty')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Position</label>
        <input value="{{$edit_value->position}}" name="banner_position" type="text" class="form-control @error('banner_position') is-invalid @enderror" id="exampleInputPassword1" placeholder="Position">
      </div>
      @error('banner_position')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select name="status" class="custom-select custom-select-sm-3">
          <option selected>Status</option>
          <option {{ $edit_value->status == 1 ? "selected" : " "}} value="1">Hiện</option>
          <option {{ $edit_value->status == 0 ? "selected" : " "}} value="0">Ẩn</option>
        </select>
      </div>
      @error('status')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descript</label>
        <textarea name="banner_descript" class="form-control @error('banner_descript') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="Descript">{{$edit_value->descript}}</textarea>
      </div>
      @error('banner_descript')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" name="addbanner" class="btn btn-primary">Submit</button>
    </div>
  </form>
  @endforeach
</div>
</div>
@endsection