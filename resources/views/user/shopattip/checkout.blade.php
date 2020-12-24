
@extends('layouts.master')
@section('content')

<section class="checkout-page">

  <div class="container">
   <form action="/payment" method="POST">
    @csrf
    <div class="row">
     
        <div class="col-lg-7 col-md-12">
          <div class="checkout-form box-shadow white-bg">
            <h4 class="mb-4 font-w-6">Billing Details</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" id="first_name" name="first_name" class="form-control" value="{{ Auth::guard('customers')->user()->first_name }}">
                </div>
                  @error('first_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" id="last_name" name="last_name" class="form-control" value="{{ Auth::guard('customers')->user()->last_name }}">
                </div>
                  @error('last_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                 @enderror
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>E-mail Address</label>
                  <input type="text" id="email" name="email" class="form-control" value="{{ Auth::guard('customers')->user()->email }}">
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" id="phone_no" name="" class="form-control" placeholder="Phone No">
                </div>
                @error('phone_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
              </div>
              <input type="hidden" name="customer_id" value="{{ Auth::guard('customers')->user()->id }}"/>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Company Name</label>
                  <input type="text" id="companyname" class="form-control" placeholder="Company Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Select Country</label>
                  <select name="country" id="people" class="form-control">
                      <option value="#">Select Country</option>
                      <option value="pakistan">Pakistan</option>
                    </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" id="address" class="form-control" name="address1" placeholder="Enter Your Address">
                </div>
                @error('address1')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
                <div class="form-group">
                  <input type="text" id="address2" class="form-control" name="address2" placeholder="Second Address">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Town/City</label>
                  <input type="text" id="towncity" class="form-control" name="city" placeholder="Town or City">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-md-0">
                  <label>State/Province</label>
                  <input type="text" id="statename" class="form-control" name="state" placeholder="State Province">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-md-0">
                  <label>Zip/Postal Code</label>
                  <input type="text" id="zippostalcode" class="form-control" name="zip_code" placeholder="Zip / Postal">
                </div>
              </div>
            </div>
          </div>
        </div>
      
      <div class="col-lg-5 col-md-12 mt-5 mt-lg-0">
        <div class="border bg-light-4 p-3 p-lg-5">
          <!-- <div class="mb-7">
              <label class="text-black mb-3">Enter your coupon code if you have one</label>
              <div class="input-group">
                <input class="form-control" id="c-code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2" type="text">
                <div class="input-group-append">
                  <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">Apply</button>
                </div>
              </div>
            </div> -->
        <div class="mb-7">
          <h6 class="mb-3 font-w-6">Your Order</h6>
         
            <ul class="list-unstyled">
            <?php $price = 0 ?>
            @foreach($CartDetail as $rsCartDetail)
              <li class="mb-3 border-bottom pb-3 d-flex"><span class="mr-auto">{{ $rsCartDetail->name }}</span> <span>{{ number_format($rsCartDetail->price, 2) }}</span></li>
              <!-- <li class="mb-3 border-bottom pb-3 d-flex"><span class="mr-auto"> 1 x Unpaired Running Shoes </span> <span>$952.00</span></li> -->
            <?php  $price += $rsCartDetail->price; ?>
            @endforeach
              <!-- <li class="mb-3 border-bottom pb-3 d-flex"><span class="mr-auto"> Shipping </span> <span>$99.00</span></li> -->
              <li class="mb-3 border-bottom pb-3 d-flex"><span class="mr-auto"> Subtotal </span> <span>{{ $price }}</span></li>
              <li class="d-flex"><span class="mr-auto"><strong class="cart-total"> Total :</strong></span>  <strong class="cart-total">{{ number_format($price, 2) }} </strong>
              </li>
             
            </ul>
            
        </div>
        <div class="cart-detail my-5">
          <h6 class="mb-3 font-w-6">Payment Method</h6>
          <div class="form-group">
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">Cash On Delivery</label>
            </div>
          </div>
          <div class="form-group mb-0">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1" required>
              <label class="custom-control-label" for="customCheck1">I have read and accept the terms and conditions</label>
            </div>
          </div>
        </div>
        <button  class="btn btn-primary btn-animated btn-block">Proceed to Payment</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</section>

@endsection