
@extends('admin/layouts/contentLayoutMaster')

@section('vendor-style')
        {{-- vendor css files --}}
       
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('page-style')
         {{-- Page Css files --}}
         
@endsection

@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">

              <div class="card-content">
                  <div class="card-body">
                  <form class="form" method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                    @csrf

                            <div class="form-body">
                                <br>
                                <div class="row">

                                    <div class="col-12">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-left">
                                    <div class="demo-inline-spacing">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="General" value="1" name="vendor_type_id" class="custom-control-input" />
                                            <label class="custom-control-label" for="General">General</label>
                                        </div>
                                        <div class="custom-control custom-control-success custom-radio">
                                            <input type="radio" id="Groccery" value="2" name="vendor_type_id" class="custom-control-input" />
                                            <label class="custom-control-label" for="Groccery">Groccery</label>
                                        </div>
                                        
                                    </div>
                                    @if ($errors->has('vendor_type_id'))
                                    <div class="vendor_type_id">
                                        {{ $errors->first('vendor_type_id') }}
                                    </div>
                                    @endif
                                    </fieldset>

                                    </div>
                                    <div class="col-12">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-left">
                                        <input type="text" class="form-control"
                                        name="name" id="name" placeholder="Name" required="">
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                        <label for="name">Name</label>
                                        @if ($errors->has('name'))
                                        <div class="danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                        @endif
                                    </fieldset>

                                    </div>

                                    
                                    
                                

                                    <div class="col-12">

                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="text" class="form-control"
                                        name="email"
                                        id="email" placeholder="Email" required=""/>
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="email">Email</label>
                                        @if ($errors->has('email'))
                                        <div class="email">
                                            {{ $errors->first('email') }}
                                        </div>
                                        @endif
                                        </fieldset>

                                    </div>

                                    <div class="col-12">

                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="password" class="form-control"
                                        name="password"
                                        id="password" placeholder="Password" required=""/>
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="password">Password</label>
                                        @if ($errors->has('password'))
                                        <div class="danger">
                                            {{ $errors->first('password') }}
                                        </div>
                                        @endif
                                        </fieldset>

                                    </div>

                                    <div class="col-12">

                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="password" class="form-control"
                                        name="password_confirmation"
                                        id="cPassword" placeholder="Confirm Password" required=""/>
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="password">password</label>
                                        @if ($errors->has('password'))
                                        <div class="danger">
                                            {{ $errors->first('password') }}
                                        </div>
                                        @endif
                                        </fieldset>

                                    </div>

                                    <div class="col-12">

                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="text" class="form-control"
                                        name="company"
                                        id="company" placeholder="Company Name" required=""/>
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="company">company</label>
                                        @if ($errors->has('company'))
                                        <div class="company">
                                            {{ $errors->first('company') }}
                                        </div>
                                        @endif
                                        </fieldset>

                                    </div>

                                    <div class="col-12">

                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="text" class="form-control"
                                        name="address"
                                        id="address" placeholder="Address" required=""/>
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="address">address</label>
                                        @if ($errors->has('address'))
                                        <div class="address">
                                            {{ $errors->first('address') }}
                                        </div>
                                        @endif
                                        </fieldset>

                                    </div>

                                    


                                    <div class="col-12">

                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="text" class="form-control"
                                        name="phone"
                                        id="phone" placeholder="Phone" required="">
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="phone">Phone No</label>
                                        @if ($errors->has('phone'))
                                        <div class="phone">
                                            {{ $errors->first('phone') }}
                                        </div>
                                        @endif
                                        </fieldset>

                                    </div>

                                   
                                    
                                    <div class="col-12  pt-2 pb-2">
                                        <div class="custom-control custom-control-primary custom-switch ">
                                                <!-- <p class="mb-50">Primary</p> -->
                                            
                                            <input type="checkbox" class="custom-control-input" id="customSwitch" name="status" />
                                            <label class="custom-control-label" for="customSwitch">Approved</label>
                                            
                                        </div>
                                    </div>
                                

                                

                                
                                    <div class="col-12">
                                    <input type="submit" class="btn btn-primary mr-1 mb-1" value="Submit">
                                    </div>

                                </div>
                            </div>

                    
                           
                              
                        </form>
                    </div>
                </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection

@section('vendor-script')
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
{{-- vendor files --}}
@endsection
