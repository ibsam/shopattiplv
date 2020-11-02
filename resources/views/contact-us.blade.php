@extends('layouts.master')
@section('content') 

<section>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7">
        
        <form id="contact-form" class="row" method="post" action="php/contact.php" novalidate="true">
            <div class="messages"></div>
            <div class="form-group col-md-6">
              <label>First Name <span class="text-danger">*</span></label>
              <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name" required="" data-error="Name is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Last Name <span class="text-danger">*</span></label>
              <input id="form_name1" type="text" name="name" class="form-control" placeholder="Last Name" required="" data-error="Name is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Email Address <span class="text-danger">*</span></label>
              <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Phone Number <span class="text-danger">*</span></label>
              <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="" data-error="Phone is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <label>Message <span class="text-danger">*</span></label>
              <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="" data-error="Please,leave us a message."></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-12 mt-4">
              <button class="btn btn-primary btn-animated"><span>Submit</span>
              </button>
            </div>
          </form>
      </div>
      <div class="col-lg-5 mt-6 mt-lg-0">
        <div class="border-0 rounded p-5 bg-dark-1 contact-info">
         
        <div class="d-flex mb-4 border-bottom pb-4">
          <div class="mr-2"> <i class="las la-map-marker-alt ic-2x text-primary"></i>
          </div>
          <div>
            <h6 class="mb-1 text-white">We are located here for you</h6>
            <p class="mb-0">Flipmarto, 789 Main rd, Anytown, CA 12345 USA</p>
          </div>
        </div>
        <div class="d-flex mb-4 border-bottom pb-4">
          <div class="mr-2"> <i class="las la-envelope ic-2x text-primary"></i>
          </div>
          <div>
            <h6 class="mb-1 text-white">We're here for you! Just get answers</h6>
            <a href="#">info@domain.com / services@domain.com</a>
          </div>
        </div>
        <div class="d-flex mb-4 border-bottom pb-4">
          <div class="mr-2"> <i class="las la-mobile ic-2x text-primary"></i>
          </div>
          <div>
            <h6 class="mb-1 text-white">Have any questions? Reach us by phone</h6>
            <a href="#">1-800-222-000 / 1-800-222-002</a>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="mr-2"> <i class="las la-pen ic-2x text-primary"></i>
          </div>
          <div>
            <h6 class="mb-1 text-white">Explore most popular help topics</h6>
            <span>Lorem ipsum is simply dummy text typesetting</span>
          </div>
        </div>
        
        </div>
      </div>
    </div>
    
  </div>
</section>

@endsection
