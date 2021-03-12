@extends('Admin.layouts.admin')

@section('title')
<title>list banner</title>
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
                <h3 class="card-title">List Banner</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Link</th>
                <th>Prioty</th>
                <th>Position</th>
                <th>Status</th>
                <th>Descript</th>
                <th>Edit</th>
                <th>Delete</th>
                  </tr>
                </thead>
                  <tbody>
                  @php
              $i=1;
              @endphp
              @foreach($banner as $bner)
              <tr>
                <td>{{$i}}</td>
                <td>{{$bner->name}}</td>
                <td><img width="100px" height="100px" src="{{asset('public/uploads/banner/'.$bner->image)}}"></td>
                <td>{{$bner->link}}</td>
                <td>{{$bner->prioty}}</td>
                <td>{{$bner->position}}</td>
                <td>{{$bner->status}}</td>
                <td>{{$bner->descript}}</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="{{route('editbanner',['id'=>$bner->id])}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                  </div>
                </td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('deletebanner',['id'=>$bner->id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
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