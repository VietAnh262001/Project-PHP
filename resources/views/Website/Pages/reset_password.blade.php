@extends('Website.layouts.website')

@section('title')
<title>Trang chu</title>
@endsection
@section('content')
<div class="container" style="min-height: 50vh">
    <form action="{{route('save_forgot',['code'=>$code,'email'=>$email])}}" method="POST">
        @if(Session('success'))
        <div>{{Session('success')}}</div>
        @endif
        @csrf
      
        <div class="form-group row">
            <label for="password" class="col-md-4">{{('New Password')}}</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" autofocus>

                @if ($errors->has('password'))
                    <span   class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password')}}</strong>
                    </span>
                @endif
                @if(Session('messages'))
                <div>{{Session('messages')}}</div>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="password_comfirm" class="col-md-4">{{('Password Comfirm')}}</label>
                <div class="col-md-6">
                    <input id="password_comfirm" type="password" class="form-control" name="password_comfirm">
    
                    @if ($errors->has('password_comfirm'))
                        <span   class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_comfirm')}}</strong>
                        </span>
                    @endif
                </div>
                @if(session('danger'))
                {{session('danger')}}
                @endif
            </div>
        <div class="form-group row mb-0">
            <div class="col-md-6">
                <button type="submit" class="">
                    Reset Password
                </button>
            </div>

        </div>
    </form>
</div>
@endsection