@extends('layouts.master')
@section('content') 
<link rel="stylesheet" href="{{asset ('css/custom-css.css')}}">
<div class="container mt-5">
<h1 class="d-flex  justify-content-center bg-blue text-white">Order Summery</h1>
  <div class="row">
    <div class="col">
    <div><h5>Customer Information</h5></div>
    </div>

    <div class="col">
    <div class="pullright"><h5>Billing Address</h5></div>
    </div>
  </div>
  <div class="row">
    <div class="col"> 
        
        <div><span>NAME</span> {{$OrderDetails[0]->customer_name}}</div>
        <div><span>ADDRESS</span> {{$OrderDetails[0]->address}}</div>
        <div><span>EMAIL</span> {{$OrderDetails[0]->email}}</div>
        <div><span>PHONE NO</span> {{$OrderDetails[0]->phone_no}}</div>
        <div><span>DATE</span> {{ date('Y-m-d')}}</div>

    </div>
    <div class="col">
    
    <div class="pullright">{{$OrderDetails[0]->address}}</div>

    </div>
  </div>
      <!-- <header class="clearfix">
      
      <h1>Order Summery</h1>
      <div id="company" class="clearfix">
        <div><h5>Billing Address</h5></div>
        <div>delevery addrress</div>
      </div>
      <div id="project">
     
        <div><span>NAME</span> {{$OrderDetails[0]->customer_name}}</div>
        <div><span>ADDRESS</span> {{$OrderDetails[0]->address}}</div>
        <div><span>EMAIL</span> {{$OrderDetails[0]->email}}</div>
        <div><span>PHONE NO</span> {{$OrderDetails[0]->phone_no}}</div>
        <div><span>DATE</span> {{ date('Y-m-d')}}</div>
      </div>
    </header> -->

    <div class="row mt-5">
      <div class="col"><h5>PRODUCTS</h5></div>
      <div class="col"><h5>PRICE</h5></div>
      <div class="col"><h5>QTY</h5></div>
      <div class="col"><h5>TOTAL</h5></div>
    </div>
    @foreach($OrderDetails as $OrderDetail)
    <div class="row bg-white d-flex align-items-center mb-2">
      <div class="col"><img  height="90px" width="90px" src="{{ asset('uploads/product_image/product_'.$OrderDetail->pid. '_1.jpg') }}" alt="">
      <span class="ml-3">{{$OrderDetail->name }}</span>
           </div>
      <div class="col">{{$OrderDetail->price}}</div>
      <div class="col">{{$OrderDetail->qty}}</div>
      <div class="col">{{$OrderDetails[0]->total_price}}</div>
    </div>
    @endforeach
    <footer class="mb-3 mt-3">
     <p class="font-italic font-weight-bolder"> We have sent you confirmation email if you face any issue contact us.</p>
    </footer>

    
    
     
</div>
   
    @endsection