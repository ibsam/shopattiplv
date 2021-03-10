<!-- @php
echo "<pre>";
print_r($Customer_detail->first_name);
@endphp -->
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
          
            @php
            
            if(isset($Customer_detail->customerDetail[0]->first_name)){
              $first_name =json_encode($Customer_detail->customerDetail[0]->first_name);
              $last_name =json_encode($Customer_detail->customerDetail[0]->last_name);
              $address1 =json_encode($Customer_detail->customerDetail[0]->address1);
              $phone_no =json_encode($Customer_detail->customerDetail[0]->phone_no);
              $email =json_encode($Customer_detail->customerDetail[0]->email);

            $id =json_encode($Customer_detail->id);
            }else{
              $first_name ="";
              $last_name ="";
              $address1 ="";
              $phone_no ="";
              $email ="";
            }
            
            
            @endphp
           <paymentbiiling :first_name="{{$first_name}}"
                           :last_name="{{$last_name}}"
                           :address1="{{$address1}}"
                           :phone_no="{{$phone_no}}"
                           :email="{{$email}}"

                           
           ></paymentbiiling>
            <div class=" py-3"> 
                 <h5 class=" py-3">Order Summary</h5>
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