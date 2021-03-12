<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>Add Location</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Location</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="{{URL::to('admin/roomservice/save_roomservice')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputPassword1">Service</label>
        <select name="service" class="custom-select custom-select-sm-3">
          <option selected>Service</option>
          @foreach($service as $sv)
          <option value="{{$sv->service_id}}">{{$sv->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Room</label>
        <select name="room" class="custom-select custom-select-sm-3">
          <option selected>Room</option>
          @foreach($rooms as $room)
          <option value="{{$room->room_id}}">{{$room->name}}</option>
          @endforeach
        </select>
      </div>
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
      <!-- /.card-body -->
    </div>
    <div class="card-footer">
        <button type="submit" name="addlocation" class="btn btn-primary">Submit</button>
      </div>
  </form>
</div>
</div>
@endsection