<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>add room</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Room</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="{{URL::to('/admin/room/save_room')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="room_name" type="text" class="form-control @error('room_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>
      @error('room_name')
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
        <label for="exampleInputPassword1">Price</label>
          <input name="price" type="text" class="form-control @error('price') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Price">
        </div>
        @error('price')
        <div class="" style="color: red">{{ $message }}</div>
        @enderror
       <div class="form-group">
          <label for="exampleInputPassword1">Category</label>
          <select name="category" class="custom-select custom-select-sm-3">
            <option selected>Category</option>
            @foreach($cat_product as $cat)
            <option value="{{$cat->category_id}}">{{$cat->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Location</label>
          <select name="location" class="custom-select custom-select-sm-3">
            <option selected>Location</option>
            @foreach($location_product as $location)
            <option value="{{$location->location_id}}">{{$location->name}}</option>
             @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Content</label>
          <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="ckeditor1" rows="3" placeholder="content"></textarea>
        </div>
        @error('content')
        <div class="" style="color: red">{{ $message }}</div>
        @enderror
         <div class="form-group">
          <label for="exampleFormControlTextarea1">Descript</label>
          <textarea name="descript" class="form-control @error('descript') is-invalid @enderror" id="ckeditor2" rows="3" placeholder="descript"></textarea>
        </div>
        @error('descript')
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
        <div class="form-group">
          <label for="exampleInputPassword1">Area</label>
          <input name="area" type="text" class="form-control @error('area') is-invalid @enderror" id="exampleInputPassword1" placeholder="area">
        </div>
        @error('area')
        <div class="" style="color: red">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="exampleInputPassword1">Bed</label>
          <input name="bed" type="text" class="form-control @error('bed') is-invalid @enderror" id="exampleInputPassword1" placeholder="bed">
        </div>
        @error('bed')
        <div class="" style="color: red">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="exampleInputPassword1">Bath</label>
          <input name="bath" type="text" class="form-control @error('bath') is-invalid @enderror" id="exampleInputPassword1" placeholder="bath">
        </div>
        @error('bath')
        <div class="" style="color: red">{{ $message }}</div>
        @enderror

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" name="addroom" class="btn btn-primary">Submit</button>
      </div>
    </div>
    </form>
  </div>
</div>
@endsection