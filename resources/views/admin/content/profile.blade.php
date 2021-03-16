@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Profile')

@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">

                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{url('admin/profile_update')}}"
                            enctype="multipart/form-data">

                            @csrf

                            <div class="form-body">
                                <br>
                                <div class="row">


                                    <div class="col-12">


                                    </div>
                                    <div class="col-12">



                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Name" value="{{$vendor->name}}">
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

                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="Email" value="{{$vendor->email}}" />
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
                                        <input type="password" class="form-control"
                                        name="password"
                                        id="password" placeholder="Password"/>
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
                                        id="cPassword" placeholder="Confirm Password" />
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



                                    @if($vendor->id != 1)

                                    <input type="hidden" name="vendor_id" value="{{$vendor->id}}">
                                    <div class="col-12">
                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" name="company" id="company" placeholder="Company Name" value="{{$vendor->company}}" />
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
                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{$vendor->address}}" />
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

                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" name="phone" id="phone"
                                                placeholder="Phone" value="{{$vendor->phone}}">
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
                                    @endif
                                    <div class="col-12">
                                        <input id="btnsub" type="submit" class="btn btn-primary mr-1 mb-1" value="Submit" >
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
