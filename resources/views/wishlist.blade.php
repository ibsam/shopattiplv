@extends('layouts.master')
@section('content') 

<div class="page-content">

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="cart-table table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="cart-thumb media align-items-center">
                    <a href="#">
                      <img class="img-fluid" src="assets/images/product/p3.jpg" alt="">
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
                <td> <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                  <a href="#" class="close-link"><i class="las la-times"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="cart-thumb media align-items-center">
                    <a href="#">
                      <img class="img-fluid" src="assets/images/product/p13.jpg" alt="">
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
                <td> <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                 <a href="#" class="close-link"><i class="las la-times"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="cart-thumb media align-items-center">
                    <a href="#">
                      <img class="img-fluid" src="assets/images/product/p4.jpg" alt="">
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
                <td> <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                 <a href="#" class="close-link"><i class="las la-times"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="cart-thumb media align-items-center">
                    <a href="#">
                      <img class="img-fluid" src="assets/images/product/p7.jpg" alt="">
                    </a>
                    <div class="media-body ml-3">
                      <div class="product-title mb-2"><a class="link-title" href="#">Unpaired Running Shoes</a>
                      </div>
                    </div>
                  </div>
                </td>
                <td> <span class="product-price text-muted">$24.00</span>
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
                <td> <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                 <a href="#" class="close-link"><i class="las la-times"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        
      </div>
      
    </div>
    
  </div>
</section>


</div>

@endsection
