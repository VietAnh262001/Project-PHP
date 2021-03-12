<!-- Stored in resources/views/child.blade.php -->

@extends('Admin.layouts.admin')

@section('title')
<title>add category</title>
@endsection

@section('content')
<div class="content-wrapper">
 <div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Category</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="{{URL::to('/admin/category/save_category')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="cat_name" type="text" class="form-control @error('cat_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name">
      </div>

      @error('cat_name')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Slug</label>
        <input name="cat_slug" type="text" class="form-control @error('cat_slug') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Slug">
      </div>
      @error('cat_slug')
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
        <label for="exampleInputPassword1">Meta_title</label>
        <input name="meta_title" type="text" class="form-control @error('meta_title') is-invalid @enderror" id="exampleInputPassword1" placeholder="meta_title">
      </div>
      @error('meta_title')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Meta_descript</label>
        <textarea name="meta_descript" class="form-control @error('meta_descript') is-invalid @enderror" id="ckeditor3" rows="3" placeholder="meta_descript"></textarea>
      </div>
      @error('meta_descript')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
       <div class="form-group">
        <label for="exampleInputPassword1">Prioty</label>
        <input name="prioty" type="text" class="form-control @error('prioty') is-invalid @enderror" id="exampleInputPassword1" placeholder="prioty">
      </div>
      @error('prioty')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">Meta_keyword</label>
        <input name="meta_keyword" type="text" class="form-control @error('meta_keyword') is-invalid @enderror" id="exampleInputPassword1" placeholder="meta_keyword">
      </div>
      @error('meta_keyword')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" name="addcategory" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
@endsection