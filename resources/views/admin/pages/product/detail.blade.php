
@extends('layouts/contentLayoutMaster')

@section('title', 'Create User')

@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Multiple Column</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                          <label for="first-name-column">First Name</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                          <label for="last-name-column">Last Name</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                          <label for="city-column">City</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                          <label for="country-floating">Country</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company">
                                          <label for="company-column">Company</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                          <label for="email-id-column">Email</label>
                                      </div>
                                  </div>
                                  <div class="form-group col-12">
                  <fieldset class="checkbox">
                    <div class="vs-checkbox-con vs-checkbox-primary">
                      <input type="checkbox">
                      <span class="vs-checkbox">
                        <span class="vs-checkbox--check">
                          <i class="vs-icon feather icon-check"></i>
                        </span>
                      </span>
                      <span class="">Remember me</span>
                    </div>
                  </fieldset>
                </div>
                <div class="col-12">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
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
