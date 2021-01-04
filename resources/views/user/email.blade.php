@extends('layouts.master')
@section('content') 

<section class="bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-6 col-md-8 col-sm-11">
        <div class="shadow p-6 login bg-white">
         <div class="store-name">ShopAtTip</div>
         @if ($status)
            <div class="alert alert-success" role="alert">
                We have send you an email 
            </div>
          @else
          <div class="alert alert-danger" role="alert">
                Does not match with or record
            </div>
        @endif
          <h4 class="text-left mb-3 font-w-5">Forget Password</h4>
          <form method="post" action="/customer/forget_email">
            @csrf
            <div class="messages"></div>
            <div class="form-group">
              <input id="form_name" type="text" name="email" class="form-control" placeholder="Email" required="" data-error="Email is required.">
              <div class="help-block with-errors"></div>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Reset Password Link</button>
           
          </form>
        </div>
    </div>
  </div>
</section>


@endsection