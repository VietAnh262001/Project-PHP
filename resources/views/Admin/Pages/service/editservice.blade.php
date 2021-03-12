<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>edit service</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Service</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  @foreach($editservice as $edit_value)
  <form role="form" action="{{URL::to('/admin/service/update_service/'.$edit_value->service_id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input value="{{$edit_value->name}}" name="sv_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input value="{{$edit_value->price}}" name="price" type="text" class="form-control"  id="exampleInputPassword1" placeholder="Price">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input class="btn" name="image" type="file" style="margin: 10px;" id="photo" accept="image/x-png,image/gif,image/jpeg">
        <img id="img-photo" name="image" type="file"
        src="{{url($edit_value->image)}}" style="width: 100px;margin-left: 16px">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descript</label>
        <textarea name="descript" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descript"> {{$edit_value->description}}</textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" name="addservice" class="btn btn-primary">Submit</button>
    </div>
  </form>
  @endforeach
</div>
</div>
@endsection