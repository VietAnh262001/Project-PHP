@extends('Website.layouts.website')

@section('title')
<title>Trang chu</title>
@endsection
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('../public/website/assets/img/bg/cta-01.jpg');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
        <form class="login100-form validate-form flex-sb flex-w" action="{{route('save_user')}}" method="POST">
                @csrf
                <span class="login100-form-title p-b-53">
                    Create Account
                </span>
                
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Username
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Username is required">
                    <input class="input100 @error('user_name') is-invalid @enderror" type="text" name="user_name" >
                    <span class="focus-input100"></span>
                </div>
                @error('user_name')
                <div class="" style="color: red">{{ $message }}</div>
                @enderror
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Email
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Username is required">
                    <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" >
                    <span class="focus-input100"></span>
                </div>
                @error('email')
                <div class="" style="color: red">{{ $message }}</div>
                @enderror
                
                <div class="p-t-13 p-b-9">
                    <span class="txt1">
                        Password
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" >
                    <span class="focus-input100"></span>
                </div>
                @error('password')
                <div class="" style="color: red">{{ $message }}</div>
                @enderror
                <div class="p-t-13 p-b-9">
                    <span class="txt1">
                        Password Authentication
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100 @error('authenticationpassword') is-invalid @enderror" type="password" name="authenticationpassword" >
                    <span class="focus-input100"></span>
                </div>
                @error('authenticationpassword')
                <div class="" style="color: red">{{ $message }}</div>
                @enderror
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Phone
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Username is required">
                    <input class="input100 @error('phone') is-invalid @enderror" type="text" name="phone" >
                    <span class="focus-input100"></span>
                </div>
                @error('phone')
                <div class="" style="color: red">{{ $message }}</div>
                @enderror
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Address
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Username is required">
                    <input class="input100 @error('address') is-invalid @enderror" type="text" name="address" >
                    <span class="focus-input100"></span>
                </div>
                @error('address')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn" type="submit" name="signin">
                        Registration
                    </button>
                </div>

                <div class="w-full text-center p-t-55">
                    <span class="txt2">
                        Go Back To Login
                    </span>

                    <a href="#" class="txt2 bo1">
                        Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection