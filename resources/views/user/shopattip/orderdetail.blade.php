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
                        <img src="{{ asset('uploads/product_image/product_'.$cartDetail->pid. '_1.jpg') }}" alt="" class="img-fluid">
                      </a> 
                      <div class="media-body ml-3">
                        <div class="product-title mb-2">
                            <a href="/nike-air-huarechi-drift_256" class="link-title">{{$cartDetail->name}}</a>
                        </div>
                      </div>
                    </div>
                  </td> 
                  <td>
                    <span class="product-price text-muted">Rs.{{number_format($cartDetail->price, 2)}}</span>
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
          <div class="border rounded p-5 bg-white ">
              
            
            <div class=" " >
                 <h5 class="text-nowrap">Payment Metheod</h5>
                   <span>Cash On Delivery</span> 
            </div>
           
            <div > 
                <h5 class="mt-3 mb-3">Shipping & Billing</h5>
                <div class=" py-1">
                
                     <i class="fas fa-map-marker-alt text-pink"></i> 
                        <span class="text-dark">{{$Customer_detail->customerDetail[0]->first_name .' '.$Customer_detail->customerDetail[0]->last_name}}</span>
                        <div class="row d-flex justify-content-between align-items-center">
                          
                        <div class="ml-5">{{$Customer_detail->customerDetail[0]->address1}}</div>
                        <a type="button" class="text-pink" data-toggle="modal" data-target="#exampleModal">
                          Change
                        </a>


                        </div>
                        <!-- Modal -->
                            <div class="modal  ChangeShippingAddModal  fade view-modal"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content ChangeShippingAddModal">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Shipping Address</h5>
                                    <button   class="btn btn-sm close" data-dismiss="modal" >
                                      &times;
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <editaddress :id="{{ $Customer_detail->id }}"></editaddress>
                                  </div>
                                  <div class="modal-footer">
                                    
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                  </div>
                                </div>
                              </div>
                            </div>
                        
                        
                </div>
                <div class=" py-3">
                <i class="fas fa-envelope text-pink"></i><span class="ml-1">{{$Customer_detail->customerDetail[0]->email}}</span>
                </div>
                 <div class=" py-2">
                 <i class="fas fa-mobile-alt text-pink"></i><span class="ml-1">{{$Customer_detail->phone_no}}</span>
                    </div>
            </div>
            <div class=" py-3"> 
                 <h5 class=" py-3">Order Summery</h5>
                <div class="d-flex justify-content-between align-items-center  py-1">
                <span class="">Order Amount:</span>  <span class="text-dark">Rs.{{ number_format($total_price, 2) }}</span> 
                </div>
                <div class="d-flex justify-content-between align-items-center  py-1">
                    <span>Shipping Fee:</span><span>00</span>
                </div>
                
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center  py-1">
                 <span>Payment in Rupees:</span><span>Rs:{{number_format($total_price, 2)}}</span>
            </div>

           
            <div class="d-grid py-1 mt-5">
              <form method="post" action="/thankyou">
                @csrf
                <input type="hidden" name="tot_price" value="{{ $total_price }}"/>
               <button class="btn bg-pink-btn btn-block" type="subnmit">Place Order</button>
              </form>
             
            </div>
          </div>
        </div>
      </div>
     
    </div>

@endsection