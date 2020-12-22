@extends('layouts.master')

@section('content')

<div class="container">
      <div class="row">
        <div class="col-lg-7 mt-8">
          <div class="table-responsive">
           
            <table class="cart-table table " >
              
              <tbody>
              @foreach($Cart_detail as $cartDetail)
                <tr>
              
                  <td>
                    <div class="cart-thumb media align-items-center">
                      <a href="/nike-air-huarechi-drift_256">
                        <img src="/uploads/product_image/product_256_1_thumb.jpg" alt="" class="img-fluid">
                      </a> 
                      <div class="media-body ml-3">
                        <div class="product-title mb-2">
                            <a href="/nike-air-huarechi-drift_256" class="link-title">{{$cartDetail->name}}</a>
                        </div>
                      </div>
                    </div>
                  </td> 
                  <td>
                    <span class="product-price text-muted">Rs.{{$cartDetail->price}}</span>
                  </td> 
                  <td>
                    <div class="d-flex align-items-center">
                    </div>
                  </td> 
                  <td>
                    <span class="text-muted">qty</span>
                    <span class="text-muted">{{$cartDetail->qty}}</span>
                  </td>
                 
                </tr>
                @endforeach
              </tbody>
            </table>
            
          </div>
          
        </div>
        <div class="col-lg-5 pl-lg-5 mt-8 ">
          <div class="border rounded p-5 bg-light-4">
              
            
            <div class="d-flex justify-content-between align-items-center " >
                 <span class="text-nowrap">Payment Metheod</span>
                   <span>Cash On Delivery</span> 
            </div><hr>
           
            <div > 
                <div class="d-flex justify-content-between align-items-center  py-1">
                <span class="">name:</span>  <span class="text-dark">{{$Customer_detail->first_name .' '.$Customer_detail->last_name}}</span> 
                </div>
                <div class="d-flex justify-content-between align-items-center  py-1">
                    <span>e-mail:</span><span>{{$Customer_detail->email}}</span>
                </div>
                 <div class="d-flex justify-content-between align-items-center  py-1">
                     <span>Phone No:</span><span>{{$Customer_detail->phone_no}}</span>
                    </div>
            </div><hr>
            <div > 
                <div class="d-flex justify-content-between align-items-center  py-1">
                <span class="">Order Amount:</span>  <span class="text-dark">Rs.{{$total_price}}</span> 
                </div>
                <div class="d-flex justify-content-between align-items-center  py-1">
                    <span>Shipping Fee:</span><span>00</span>
                </div>
                
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center  py-1">
                 <span>Payment in Rupees:</span><span>Rs:{{$total_price}}</span>
            </div>

           
            <div class="d-grid py-1 mt-5">
               <button class="btn bg-pink-btn btn-block" type="button">Place Order</button>
            </div>
          </div>
        </div>
      </div>
     
    </div>

@endsection