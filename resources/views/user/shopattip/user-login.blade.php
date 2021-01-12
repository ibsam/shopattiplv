@extends('layouts.master')
@section('content') 

<section class="bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-6 col-md-8 col-sm-11">
        <div class="shadow p-6 login bg-white">
         <div class="store-name">ShopAtTip</div>
          <h4 class="text-left mb-3 font-w-5">Customer Login</h4>
          <form method="post" action="/customer_login">
            @csrf
            <div class="messages"></div>
            <div class="form-group">
              <input id="form_name" type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="User name" value="{{ old('email') }}" required="" data-error="Username is required.">
              <div class="help-block with-errors"></div>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <input id="form_password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required="" data-error="password is required.">
              <div class="help-block with-errors"></div>
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group mt-4 mb-5">
              <div class="remember-checkbox d-flex align-items-center justify-content-between">
                <div class="checkbox">
                  <input type="checkbox" id="check2" name="check2" name="remember">
                  <label for="check2">Remember me</label>
                </div>
                 <a href="/customer/forget_password">Forgot Password?</a>
              </div>
            </div> 
            <input type="hidden" name="api_login" value="0" />
            <button type="submit" class="btn btn-primary btn-block">Login Now</button>
           
           
          </form>
          <div class="another_login"><span> or</span></div>
          <ul class="login-btn list_none text-center">
            <!-- <li disabled="true"><a href="#" class="btn facebook-btn"><i class="ion-social-facebook"></i>Facebook</a></li> -->
            <li><a href="/customer/google" class="btn google-btn"><i class="ion-social-googleplus"></i>Google</a></li>
          </ul>
          <div class="d-flex align-items-center text-center justify-content-center mt-4">
                <span class="text-muted mr-1">Don't have an account?</span>
                   <a href="/customer_register">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection