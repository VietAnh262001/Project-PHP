@extends('Admin.layouts.admin')

@section('title')
<title>List Category Gallery</title>
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
            <h3 class="card-title">List Category Gallery</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
                @foreach($listcategorygallery as $categorygallery)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$categorygallery->name}}</td>
                  <td>{{$categorygallery->status}}</td>
                  <td class=" py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="{{route('categorygallery.edit',$categorygallery->id)}}"><i class="btn btn-info far fa-edit"></i></a>
                      <form action="{{route('categorygallery.destroy',$categorygallery->id)}}" method="post" enctype="multipart/form-data">
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