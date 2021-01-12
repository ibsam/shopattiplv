
@extends('layouts/contentLayoutMaster')

@section('title', 'Edit Vendor')

@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">

              <div class="card-content">
                  <div class="card-body">
                  <form class="form" method="POST" action="{{route('vendor.update',$vendor)}}">
                  @method('PUT')
                    @csrf

                    <div class="form-body">
                            <br>
                              <div class="row">
                                  <div class="col-12">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-left">
                                      <input type="text" class="form-control"
                                      name="name" value="{{$vendor->name}}"
                                      id="name" placeholder="Name" required="">
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
                                      <input type="number" class="form-control"
                                      name="phone"  value="{{$vendor->phone}}"
                                      id="phone" placeholder="Phone" required="">
                                      <div class="form-control-position">
                                          <i class="feather icon-phone"></i>
                                      </div>
                                      <label for="phone">Phone</label>
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
                                      <input type="text" class="form-control"
                                      name="address"  value="{{$vendor->address}}"
                                      id="password" placeholder="Address" required="">
                                      <div class="form-control-position">
                                          <i class="feather icon-map"></i>
                                      </div>
                                      <label for="address">Address</label>
                                      @if ($errors->has('address'))
                                      <div class="danger">
                                          {{ $errors->first('address') }}
                                      </div>
                                      @endif
                                  </fieldset>

                                  </div>

                                  <div class="col-12">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-filter">
                                    <select class="select2 form-control" name="status" id="status">
                                        <option value="">Select Status</option>
                                        <option value="0" selected="{{ $vendor->status  ==0 ? 'true' : '' }}"> De-Active</option>
                                        <option value="1" selected="{{ $vendor->status  ==1 ? 'true' : '' }}">Active</option>
                                        <option value="2" selected="{{ $vendor->status  ==2 ? 'true' : '' }}">Pending</option>
                                    </select>
                                      <div class="form-control-position">
                                          <i class="feather icon-status"></i>
                                      </div>
                                      <label for="status">Status</label>
                                      @if ($errors->has('status'))
                                      <div class="danger">
                                          {{ $errors->first('status') }}
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
