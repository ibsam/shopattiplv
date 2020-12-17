@extends('layouts.master')
@section('content') 

<section class="bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-6 col-md-8 col-sm-11">
        <div class="shadow p-6 login bg-white">
         <div class="store-name">ShopAtTip</div>
          <h4 class="text-left mb-3 font-w-5">Customer Login</h4>
          <form id="contact-form" method="post" action="/loggedin" novalidate="true">
            <div class="messages"></div>
            <div class="form-group">
              <input id="form_name" type="text" name="name" class="form-control" placeholder="User name" required="" data-error="Username is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <input id="form_password" type="password" name="password" class="form-control" placeholder="Password" required="" data-error="password is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group mt-4 mb-5">
              <div class="remember-checkbox d-flex align-items-center justify-content-between">
                <div class="checkbox">
                  <input type="checkbox" id="check2" name="check2">
                  <label for="check2">Remember me</label>
                </div>
                 <a href="/forget-password">Forgot Password?</a>
              </div>
            </div> <button type="submit" class="btn btn-primary btn-block">Login Now</a>
           
           
          </form>
          <div class="another_login"><span> or</span></div>
          <ul class="login-btn list_none text-center">
                            <li><a href="#" class="btn facebook-btn"><i class="ion-social-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn google-btn"><i class="ion-social-googleplus"></i>Google</a></li>
                        </ul>
          <div class="d-flex align-items-center text-center justify-content-center mt-4">
                <span class="text-muted mr-1">Don't have an account?</span>
                   <a href="customer_register">Sign Up</a>
                </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection