
@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Edit Vendor')

@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">   
      <div class="col-12">
          <div class="card">

              <div class="card-content">
                  <div class="card-body">
                        <form class="form" method="POST" action="{{route('vendor.update',$vendor)}}"  enctype="multipart/form-data">
                             @method('PUT')
                            @csrf

                            <div class="form-body">
                                <br>
                                <div class="row">

                                    <input id="user_id" type="hidden" name="user_id" value="{{$vendor->user_id}}" >

                                    <div class="col-12">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-left">
                                    <div class="demo-inline-spacing">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="General" value="1" name="vendor_type_id" class="custom-control-input" {{($vendor->vendor_type_id==1) ? "checked" :''}}/>
                                            <label class="custom-control-label" for="General">General</label>
                                        </div>
                                        <div class="custom-control custom-control-success custom-radio">
                                            <input type="radio" id="Groccery" value="2" name="vendor_type_id" class="custom-control-input" {{($vendor->vendor_type_id==2) ? "checked" :''}}/>
                                            <label class="custom-control-label" for="Groccery">Groccery</label>
                                        </div>
                                        
                                    </div>
                                    @if ($errors->has('vendor_type_id'))
                                    <div class="danger">
                                        {{ $errors->first('vendor_type_id') }}
                                    </div>
                                    @endif
                                    </fieldset>

                                    </div>
                                    <div class="col-12">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-left">
                                        <input type="text" class="form-control"
                                        name="name"  id="name"  placeholder="Name" value="{{$vendor->name}}" >
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
                                        id="email" placeholder="Email"  value="{{$vendor->email}}"/>
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="email">Email</label>
                                        @if ($errors->has('email'))
                                        <div class="danger">
                                            {{ $errors->first('email') }}
                                        </div>
                                        @endif
                                        </fieldset>

                                    </div>

                                    <div class="col-12">

                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="Password" class="form-control"
                                        name="password"
                                        id="password" placeholder="Password"  />
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="danger">Password</label>
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
                                        id="cPassword" placeholder="Confirm Password"  />
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="password">password</label>
                                        @if ($errors->has('password'))
                                        <div class="danger">
                                            {{ $errors->first('password') }}
                                        </div>
                                        @endif
                                        <div class="registrationFormAlert " style="color:rgb(221, 45, 32);" id="CheckPasswordMatch">
                                        </fieldset>

                                    </div>

                                    <div class="col-12">

                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="text" class="form-control"
                                        name="company"
                                        id="company" placeholder="Company Name"  value="{{$vendor->company}}"/>
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="company">company</label>
                                        @if ($errors->has('company'))
                                        <div class="danger">
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
                                        id="address" placeholder="Address"  value="{{$vendor->address}}"/>
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="address">address</label>
                                        @if ($errors->has('address'))
                                        <div class="danger">
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
                                        id="phone" placeholder="Phone"  value="{{$vendor->phone}}">
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="phone">Phone No</label>
                                        @if ($errors->has('phone'))
                                        <div class="danger">
                                            {{ $errors->first('phone') }}
                                        </div>
                                        @endif
                                        </fieldset>

                                    </div>

                                    <div class="col-12">

                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <label for="rating">Vendor Rating</label>
                                        <select class="select2 form-control form-control-lg" name="rating" id="vendor_rating">

                                            <option value="0,0,vendor_rating">Select Vendor Rating</option>
                                            <option value="1" {{( $vendor->rating == 1) ? "selected" :''}}>1</option>
                                            <option value="2" {{( $vendor->rating == 2) ? "selected" :''}}>2</option>
                                            <option value="3" {{( $vendor->rating == 3) ? "selected" :''}}>3</option>
                                            <option value="4" {{( $vendor->rating == 4) ? "selected" :''}}>4</option>
                                            <option value="5" {{( $vendor->rating == 5) ? "selected" :''}}>5</option>

                                          


                                        </select>
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                        </fieldset>

                                    </div>


                                   
                                    
                                    <div class="col-12  pt-2 pb-2">
                                        <div class="custom-control custom-control-primary custom-switch ">
                                                <!-- <p class="mb-50">Primary</p> -->
                                            
                                            <input type="checkbox" class="custom-control-input" id="customSwitch" name="status" {{($vendor->status=='approved') ? "checked" :''}}/>
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
<script>

    function checkPasswordMatch() {
     var password = $("#password").val();
     var confirmPassword = $("#cPassword").val();
     if (password != confirmPassword){
         $("#CheckPasswordMatch").html("Passwords does not match!");
         $("#CheckPasswordMatch").css('color','red');
         $(':input[type="submit"]').prop('disabled', true);     
     }
     else{
         $("#CheckPasswordMatch").html("Passwords match.");
         $("#CheckPasswordMatch").css('color','green');
         $(':input[type="submit"]').prop('disabled', false); 
     }
     }
     $(document).ready(function(){
         $("#cPassword").keyup(checkPasswordMatch);
     });

</script>
{{-- vendor files --}}
@endsection
