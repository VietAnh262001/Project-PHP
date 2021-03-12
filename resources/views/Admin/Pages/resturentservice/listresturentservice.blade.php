@extends('Admin.layouts.admin')

@section('title')
<title>List Restaurant</title>
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
            <h3 class="card-title">List Restaurant</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
                @foreach($listrestaurant as $restaurant)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$restaurant->name}}</td>
                  <td><img width="100px" height="100px" src="{{url($restaurant->image)}}"></td>
                  <td>{{$restaurant->price}}</td>
                  <td>{{$restaurant->status == 1 ? "Hiện" : "Ẩn"}}</td>
                  <td>{{$restaurant->description}}</td>
                  <td class=" py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="{{route('restaurantservice.edit',$restaurant->id)}}"><i class="btn btn-info far fa-edit"></i></a>
                      <form action="{{route('restaurantservice.destroy',$restaurant->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button style="display: inline-block;
                        background: none;
                        border: none;" onclick="return confirm('Are you sure you want to delete?')"><a href=""><i class="btn btn-danger fas fa-trash-alt"></i></a></button>
                      </form>
                    </div>
                  </td>
                  @php
                  $i++;             
                  @endphp
                  @endforeach
                </tr>
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