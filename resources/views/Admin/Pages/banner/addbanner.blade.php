<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Add Banner</title>
@endsection
@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Banner</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="{{URL::to('/admin/banner/save_banner')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="banner_name" type="text" class="form-control @error('banner_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>

      @error('banner_name')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input class="btn" name="banner_image" type="file" style="margin: 10px;" id="photo" accept="image/x-png,image/gif,image/jpeg">
        <img id="img-photo" name="image" type="file"
        src=" " style="width: 100px;margin-left: 16px">
      </div>
      @error('banner_image')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Link</label>
        <input name="banner_link" type="text" class="form-control @error('banner_link') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Link">
      </div>
      @error('banner_link')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Prioty</label>
        <input name="banner_prioty" type="text" class="form-control @error('prioty') is-invalid @enderror" id="exampleInputPassword1" placeholder="Prioty">
      </div>
      @error('banner_prioty')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Position</label>
        <input name="banner_position" type="text" class="form-control @error('banner_position') is-invalid @enderror" id="exampleInputPassword1" placeholder="Position">
      </div>
      @error('banner_position')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select name="status" class="custom-select custom-select-sm-3">
          <option selected>Status</option>
          <option value="1">Hiện</option>
          <option value="0">Ẩn</option>
        </select>
      </div>
      @error('status')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descript</label>
        <textarea name="banner_descript" class="form-control @error('banner_descript') is-invalid @enderror" id="ckeditor4" rows="3" placeholder="Descript"></textarea>
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
</div>
</div>
@endsection