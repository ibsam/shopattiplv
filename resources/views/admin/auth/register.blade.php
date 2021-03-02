@extends('admin.layouts.fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">

<style>
.auth-wrapper.auth-v1 .auth-inner.register-extend {
    max-width: 700px !important;
}
</style>

@endsection

@section('content')
<div class="auth-wrapper auth-v1  px-2">
  <div class="auth-inner register-extend py-2">
    <!-- Register v1 -->
    <div class="card mb-0">
      <div class="card-body">
        <a href="javascript:void(0);" class="brand-logo">
          <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
            <defs>
              <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                <stop stop-color="#000000" offset="0%"></stop>
                <stop stop-color="#FFFFFF" offset="100%"></stop>
              </lineargradient>
              <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                <stop stop-color="#FFFFFF" offset="100%"></stop>
              </lineargradient>
            </defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                <g id="Group" transform="translate(400.000000, 178.000000)">
                  <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                  <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                  <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                  <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                  <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                </g>
              </g>
            </g>
          </svg>
          <h2 class="brand-text text-primary ml-1">Shopatip</h2>
        </a>

        

        <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
          @csrf
          <div class="form-group d-flex justify-content-between align-items-center">
          <label for="register-user-type-general">User Type General</label>
          <input type="radio" name="vendor_type_id" id="register-user-type-general"  value="1" required tabindex="1"/>

          <label for="register-user-type-grocery">User Type Grocery</label>
          <input type="radio" name="vendor_type_id" id="register-user-type-grocery" value="2" required tabindex="2"/>

          </div>

          <div class="row">
          <div class="form-group col-6">
            <label for="register-username" class="form-label">Username</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-username" name="name" placeholder="johndoe" aria-describedby="register-username"  autofocus tabindex="3" value="{{ old('name') }}"  />
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group col-6">
            <label for="register-email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="register-email" name="email" placeholder="john@example.com" aria-describedby="register-email" tabindex="4" value="{{ old('email') }}" />
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          </div>

          <div class="row ">
          <div class="form-group col-6">
            <label for="register-password" class="form-label">Password</label>

            <div class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
              <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" id="register-password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="5" />
              <div class="input-group-append">
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
            </div>
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group col-6">
            <label for="register-password-confirm" class="form-label">Confirm Password</label>

            <div class="input-group input-group-merge form-password-toggle">
              <input type="password" class="form-control form-control-merge" id="register-password-confirm" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="6" />
              <div class="input-group-append">
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
            </div>
          </div>
          </div>

          <div class="form-group">
            <label for="register-company" class="form-label">Company</label>
            <input type="text" class="form-control @error('company') is-invalid @enderror" id="register-company" name="company" placeholder="Enter Company Name" aria-describedby="register-username" tabindex="7" autofocus value="{{ old('name') }}" />
            @error('company')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="register-address" class="form-label">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="register-address" name="address" placeholder="Enter Address" aria-describedby="register-username" tabindex="8" autofocus value="{{ old('name') }}" />
            @error('address')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="register-phone" class="form-label">Phone No</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="register-phone" name="phone" placeholder="Enter Phone No" aria-describedby="register-username" tabindex="9" autofocus value="{{ old('name') }}" />
            @error('phone')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

        
          

          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox" id="register-privacy-policy" tabindex="10" />
              <label class="custom-control-label" for="register-privacy-policy">
                I agree to <a href="javascript:void(0);">privacy policy & terms</a>
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" tabindex="11">Sign up</button>
        </form>

        <p class="text-center mt-2">
          <span>Already have an account?</span>
          @if (Route::has('login'))
          <a href="{{ route('login') }}">
            <span>Sign in instead</span>
          </a>
          @endif
        </p>

        

        
      </div>
    </div>
    <!-- /Register v1 -->
  </div>
</div>
@endsection

@section('page-script')
      <script>
         $("body").addClass("blank-page");
      </script>
@endsection
