<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="custom-css.css" media="all" />
    
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{ asset('images/logo3.png') }}">
      </div>
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
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th>IMAGE</th>
            <th class="service">PRODUCTS</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
        @foreach($OrderDetails as $OrderDetail)
          <tr class="ml-2">
            <td ><img class="" height="100px" width="100px" src="{{ asset('uploads/product_image/') }}/product_{{$OrderDetail->pid}}_1.jpg" alt=""></td>
            <td >{{ $OrderDetail->name }}</td>
            <td class="unit">{{$OrderDetail->price}}</td>
            <td class="qty">{{$OrderDetail->qty}}</td>
            <td class="total">{{$OrderDetails[0]->total_price}}</td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
      <!-- <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div> -->
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>