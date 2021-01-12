
@extends('layouts/contentLayoutMaster')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('page-style')
         {{-- Page Css files --}}
         <!-- <link rel="stylesheet" href="{{ asset(mix('css/pages/aggrid.css')) }}"> -->
@endsection

@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">

              <div class="card-content">
                  <div class="card-body">
                  <form class="form" method="POST" action="{{route('cities.store')}}">
                    @csrf

                    <div class="form-body">
                            <br>
                              <div class="row">
                                  <div class="col-12">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-left">
                                      <input type="text" class="form-control"
                                      name="name"
                                      id="name" placeholder="Name" required="">
                                      <div class="form-control-position">
                                          <i class="feather icon-map-pin"></i>
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
                                      name="short_code"
                                      id="short_code" placeholder="Short Code ex KHI,LHR" required="">
                                      <div class="form-control-position">
                                          <i class="feather icon-map"></i>
                                      </div>
                                      <label for="short_code">short_code</label>
                                      @if ($errors->has('short_code'))
                                      <div class="danger">
                                          {{ $errors->first('short_code') }}
                                      </div>
                                      @endif
                                  </fieldset>

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
<script href="{{ asset(mix('vendors/js/forms/select/select2.js')) }}"></script>
{{-- vendor files --}}
@endsection
