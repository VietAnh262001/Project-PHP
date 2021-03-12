<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>edit room</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Room</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  @foreach($editroom as $edit_value)
  <form role="form" action="{{URL::to('/admin/room/update_room/'.$edit_value->room_id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input value="{{$edit_value->name}}" name="room_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
      </div>

      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input class="btn" name="image" type="file" style="margin: 10px;" id="photo" accept="image/x-png,image/gif,image/jpeg">
        <img id="img-photo" name="image" type="file"
        src="{{asset('public/uploads/room/'.$edit_value->image)}}" style="width: 100px;margin-left: 16px">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
          <input value="{{$edit_value->price}}" name="price" type="text" class="form-control"  id="exampleInputPassword1" placeholder="Price">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Category</label>
          <select name="category" class="custom-select custom-select-sm-3">
            <option selected>Category</option>
            @foreach($cat_product as $cat)
            <option value="{{$cat->category_id}}" {{$cat->category_id == $edit_value->category_id ? 'selected' : ' '}}>{{$cat->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Location</label>
          <select name="location" class="custom-select custom-select-sm-3">
            <option selected>Location</option>
            @foreach($location_product as $location)
            <option value="{{$location->location_id}}" {{$location->location_id == $edit_value->location_id ? 'selected':' '}}>{{$location->name}}</option>
             @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Content</label>
          <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="content">{{$edit_value->content}}</textarea>
        </div>
         <div class="form-group">
          <label for="exampleFormControlTextarea1">Descript</label>
          <textarea name="descript" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="descript">{{$edit_value->description}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Status</label>
          <select name="status" class="custom-select custom-select-sm-3">
            <option selected>Status</option>
            <option {{$edit_value->status == 1 ? "selected" : " " }} value="1">Hiện</option>
            <option {{$edit_value->status == 0 ? "selected" : " " }} value="0">Ẩn</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Area</label>
          <input value="{{$edit_value->area}}" name="area" type="text" class="form-control " id="exampleInputPassword1" placeholder="area">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Bed</label>
          <input value="{{$edit_value->bed}}" name="bed" type="text" class="form-control" id="exampleInputPassword1" placeholder="bed">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Bath</label>
          <input value="{{$edit_value->bath}}" name="bath" type="text" class="form-control " id="exampleInputPassword1" placeholder="bath">
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" name="addroom" class="btn btn-primary">Submit</button>
      </div>
    </form>
    @endforeach
  </div>
</div>
@endsection