<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>add service</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Service</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="{{URL::to('/admin/service/save_service')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="sv_name" type="text" class="form-control @error('sv_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>

      @error('sv_name')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input name="price" type="text" class="form-control @error('price') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Price">
      </div>
      @error('price')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input class="btn" name="image" type="file" style="margin: 10px;" id="photo" accept="image/x-png,image/gif,image/jpeg">
        <img id="img-photo" name="image" type="file"
        src=" " style="width: 100px;margin-left: 16px">
      </div>
      @error('image')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descript</label>
        <textarea name="descript" class="form-control @error('descript') is-invalid @enderror" id="ckeditor9" rows="3" placeholder="Descript"></textarea>
      </div>
      @error('descript')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" name="addservice" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
@endsection