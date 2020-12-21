@extends('layouts.master')
@section('content')
<section class="bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-6 col-md-8 col-sm-11">
        <div class="shadow p-6 login bg-white">
         <div class="store-name">ShopAtTip</div>
          <h4 class="text-center mb-3 font-w-5">Reset Password</h4>
          <form method="post" action="/customer_login">
            @csrf
            <div class="messages"></div>
            <div class="form-group">
              <input id="form_name" type="email" name="email" class="form-control" placeholder="Enter Email" required="" data-error="Username is required.">
              <div class="help-block with-errors"></div>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">send reset password email</button>
          </form>
      </div> 
    </div>
  </div>
</section>

    @endsection