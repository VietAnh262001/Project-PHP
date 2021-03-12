@extends('Admin.layouts.admin')

@section('title')
<title>List Category</title>
@endsection

@section('content')

<div class="content-wrapper">
 <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Category</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>slug</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Meta_title</th>
                  <th>Meta_descritp</th>
                  <th>Prioty</th>
                  <th>Meta_keyword</th>
                  <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($catlist as $cat)
              <tr>
                <td>{{$cat->category_id}}</td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->slug}}</td>
                <td><img width="100px" height="100px" src="{{asset('public/uploads/category/'.$cat->image)}}"></td>
                <td>{{$cat->status}}</td>
                <td>{{$cat->meta_title}}</td>
                <td>{{$cat->meta_descritp}}</td>
                <td>{{$cat->prioty}}</td>
                <td>{{$cat->meta_keyword}}</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="{{route('editcat',['id'=>$cat->category_id ])}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                  </div>
                </td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('delete',['id'=>$cat->category_id ])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
</div>
@endsection