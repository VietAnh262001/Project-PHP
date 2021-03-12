@extends('Admin.layouts.admin')

@section('title')
<title>list service</title>
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
            <h3 class="card-title">List Service</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($listservice as $sv)
                <tr>
                  <td>{{$sv->service_id}}</td>
                  <td>{{$sv->name}}</td>
                  <td>{{$sv->price}}</td>
                  <td><img width="100px" height="100px" src="{{url($sv->image)}}"></td>
                  <td>{{$sv->description}}</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="{{route('editservice',['id'=>$sv->service_id])}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                    </div>
                  </td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('deleteservice',['id'=>$sv->service_id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>
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