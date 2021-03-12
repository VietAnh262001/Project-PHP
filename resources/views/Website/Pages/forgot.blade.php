@extends('Website.layouts.website')

@section('title')
<title>Trang chu</title>
@endsection
@section('content')
<div class="container">
<form action="{{route('postEmail')}}" method="POST">
        @if(Session('danger'))
        <div>{{Session('danger')}}</div>
        @endif
        @if(Session('success'))
        <div>{{Session('success')}}</div>
        @endif
        @csrf
      
        <div class="form-group row">
            <h6>Email</h6>
            <label for="email" class="col-md-4">Please enter your email to retrieve your password   </label>
            <div class="col-md-6">
                <input type="email" id="email" name="email">

                {{-- @if($error->has('email'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif --}}
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6">
                <button type="submit" class="">
                    Confirm
                </button>
            </div>

        </div>
    </form>
</div>
@endsection