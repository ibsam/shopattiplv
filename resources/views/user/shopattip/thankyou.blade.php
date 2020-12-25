<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
    <style>
     .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}
.image{
    height:200 !important;
    width:200 !important;
}

#logo img {
    margin:20px;
  width: 300px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #fff;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url('images/test.jpg');
  object-fit:cover;
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
    </style>
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
          <tr>
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