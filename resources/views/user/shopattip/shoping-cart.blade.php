@extends('layouts.master')
@section('content') 
 
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="table-responsive">
            <table class="cart-table table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="cart-thumb media align-items-center">
                      <a href="#">
                        <img class="img-fluid" src="{{ asset('images/product/p10.jpg') }}" alt="">
                      </a>
                      <div class="media-body ml-3">
                        <div class="product-title mb-2"><a class="link-title" href="#">Unpaired Running Shoes</a>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td> <span class="product-price text-muted">$35.00</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
                      </button>
                      <input class="form-product" type="number" name="form-product" value="1">
                      <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td> <span class="product-price text-dark font-w-6">$35.00</span>
                    <a href="#" class="close-link"><i class="las la-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="cart-thumb media align-items-center">
                      <a href="#">
                        <img class="img-fluid" src="{{ asset('images/product/p13.jpg') }}" alt="">
                      </a>
                      <div class="media-body ml-3">
                        <div class="product-title mb-2"><a class="link-title" href="#">Unpaired Running Shoes</a>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td> <span class="product-price text-muted">$39.00</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
                      </button>
                      <input class="form-product" type="number" name="form-product" value="1">
                      <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td> <span class="product-price text-dark font-w-6">$39.00</span>
                   <a href="#" class="close-link"><i class="las la-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="cart-thumb media align-items-center">
                      <a href="#">
                        <img class="img-fluid" src="{{ asset('images/product/p11.jpg') }}" alt="">
                      </a>
                      <div class="media-body ml-3">
                        <div class="product-title mb-2"><a class="link-title" href="#">Unpaired Running Shoes</a>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td> <span class="product-price text-muted">$68.00</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
                      </button>
                      <input class="form-product" type="number" name="form-product" value="1">
                      <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td> <span class="product-price text-dark font-w-6">$68.00</span>
                   <a href="#" class="close-link"><i class="las la-times"></i></a>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
          
        </div>
        <div class="col-lg-4 pl-lg-5 mt-8 mt-lg-0">
          <div class="border rounded p-5 bg-light-4">
            <h4 class="text-black text-left mb-2 font-w-6">Cart Totals</h4>
            <div class="d-flex justify-content-between align-items-center border-bottom py-3"> <span class="text-muted">Subtotal</span>  <span class="text-dark">$745.00</span> 
            </div>
            <div class="d-flex justify-content-between align-items-center border-bottom py-3"> <span class="text-muted">Tax</span>  <span class="text-dark">$06.00</span> 
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 mb-5"> <span class="text-dark h5">Total</span>  <span class="text-dark font-w-6 h5">$751.00</span> 
            </div> <a class="btn btn-primary btn-animated btn-block" href="product-checkout.html">Proceed To Checkout</a>
            <a class="btn btn-dark btn-animated mt-3 btn-block" href="#">Continue Shopping</a>
          </div>
        </div>
      </div>
      <div class="d-md-flex align-items-end justify-content-between py-5 px-5 mt-5 bg-light-4">
            <div>
              <label class="text-black h4" for="coupon">Coupon</label>
              <p>Enter your coupon code if you have one.</p>
              <div class="row form-row">
                <div class="col">
                  <input class="form-control" id="coupon" placeholder="Coupon Code" type="text">
                </div>
                <div class="col col-auto">
                  <button class="btn btn-dark btn-animated">Apply Coupon</button>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-animated mt-3 mt-md-0">Update Cart</button>
          </div>
    </div>
  </section>

@endsection
