@extends('Website.layouts.website')

@section('title')
<title>Trang chu</title>
@endsection
@section('content')

<div class="layout-login">
  <div class="container-login">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="{{route('user_checkout')}}" method="POST" class="sign-in-form">@csrf
        <div style="color:#84f542;font-size:20px;">
          @if(session('success'))
          {{session('success')}}
          @endif
        </div>
          <h2 class="title">Sign in</h2>
          <div style="color:#f54260;font-size:20px;">
            {{-- <i class="fas fa-user-times"></i> --}}
            <?php
            $message = Session::get('message');
            if ($message) {
              echo '<i class="fas fa-user-times"></i>   <span class="text-alert">'.$message.'</span>';
              Session::put('message',null);
            } 
          ?>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="email"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <a href="{{ route('form_forgot')}}"><p class="social-text">Forgot Password ?</p></a>
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="{{route('save_user')}}" method="POST" class="sign-up-form">
            @csrf
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="user_name" class="@error('user_name') is-invalid @enderror"/>
          </div>
          @error('user_name')
                <div class="" style="color: red">{{ $message }}</div>
                @enderror
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" class="@error('email') is-invalid @enderror" /> 
          </div>
          @error('email')
          <div class="" style="color: red">{{ $message }}</div>
          @enderror
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" class="@error('password') is-invalid @enderror"/>
          </div>
          @error('password')
                <div class="" style="color: red">{{ $message }}</div>
                @enderror
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="authenticationpassword" class="@error('authenticationpassword') is-invalid @enderror" />
          </div>
          @error('authenticationpassword')
                <div class="" style="color: red">{{ $message }}</div>
                @enderror
          <div class="input-field">
            <i class="fas fa-mobile"></i>
            <input type="text" placeholder="Phone" name="phone"  class="@error('phone') is-invalid @enderror"/>
          </div>
          @error('phone')
                <div class="" style="color: red">{{ $message }}</div>
                @enderror
          <div class="input-field">
            <i class="fas fa-map-marked"></i>
            <input type="text" placeholder="Adress" name="address" class="@error('address') is-invalid @enderror"/>
          </div>
          @error('address')
      <div class="" style="color: red">{{ $message }}</div>
      @enderror
          <input type="submit" class="btn" value="Sign up" />
        </form>
      </div>
    </div>
  
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            You do not have an account, please create it here!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="{{asset('public/website/assets/img/undraw_travelers.svg')}}" class="image" alt="" style="width: 75%;margin-top: 5px;"/>
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            You already have an account, please login here!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="{{asset('public/website/assets/img/undraw_travelers.svg')}}" class="image" alt="" style="width: 75%;margin-top: 5px;" />
      </div>
    </div>
  </div>
  <script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container-login");

    sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
    });

  </script>
</div>

@endsection