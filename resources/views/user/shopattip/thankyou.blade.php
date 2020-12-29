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
    <main class="mt-5">
      <table>
        <thead>
          <tr id="marg">
            <th>IMAGE</th>
            <th class="service">PRODUCTS</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
        @foreach($OrderDetails as $OrderDetail)
          <tr >
            <td ><img height="100px" width="100px" src="{{ asset('uploads/product_image/') }}/product_{{$OrderDetail->pid}}_1.jpg" alt=""></td>
            <td class="txt"><div>{{ $OrderDetail->name }}</div></td>
            <td class="unit "><div>{{$OrderDetail->price}}</div></td>
            <td class="qty "><div>{{$OrderDetail->qty}}</div></td>
            <td class="total"><div>{{$OrderDetails[0]->total_price}}</div></td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
      <!-- <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div> -->
    </main>
    <footer class="mb-3">
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
</div>
   
    @endsection