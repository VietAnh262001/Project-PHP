@extends('Admin.layouts.admin')

@section('title')
<title>List Gallery</title>
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
            <h3 class="card-title">List Gallery</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Prioty</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
                @foreach($listgallery as $gallery)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$gallery->name}}</td>
                  <td><img width="100px" height="100px" src="{{asset('public/uploads/gallery/'.$gallery->image)}}"></td>
                  <td>{{$gallery->status == 1 ? "Hiện" : "Ẩn"}}</td>
                  <td>{{$gallery->prioty}}</td>
                  <td class="">
                    <div class="btn-group btn-group-sm">
                      <a href="{{route('gallery.edit',$gallery->id)}}"><i class="btn btn-info far fa-edit"></i></a>
                      <form action="{{route('gallery.destroy',$gallery->id)}}" method="post" enctype="multipart/form-data">
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