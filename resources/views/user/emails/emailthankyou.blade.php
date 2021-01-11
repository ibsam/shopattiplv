<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <!-- <link rel="stylesheet" href="{{asset ('css/custom-css.css')}}"> -->
    <style>
    
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

    body {
        background-color: #eeeeee;
        font-family: 'Open Sans', serif;
        font-size: 14px
    }

    .mt-100 {
        margin-top: 150px
    }

    .filter-group {
        border-bottom: 1px solid #e4e4e4
    }


    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 0.37rem
    }

    .my {
        width: 230px !important;
        height: 50px;
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1)
    }

    .filter-group .card-header {
        border-bottom: 0
    }

    .icon-control {
        margin-top: 6px;
        float: right;
        font-size: 80%
    }

    .list-menu {
        list-style: none;
        margin: 0;
        padding-left: 0
    }

    .list-menu a {
        color: #343a40
    }

    a {
        text-decoration: none ;
        background-color: transparent
    }

    .checkbox-btn {
        position: relative
    }

    .checkbox-btn input {
        position: absolute;
        z-index: -1;
        opacity: 0
    }

    .checkbox-btn input:checked~.btn {
        border-color: #3167eb;
        background-color: #3167eb;
        color: #fff
    }

    .btn-light {
        display: inline-block;
        font-weight: 600;
        color: #343a40;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: #eee;
        border: 1px solid #eee;
        padding: 0.45rem 0.85rem;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 0.37rem
    }

    .btn-light:hover {
        background-color: #fff;
        border-color: #989898
    }

    .btn-medium {
        font-size: 12px;
        padding: 10px 22px;
        display: inline-block;
        margin-right: 20px;
        letter-spacing: 2px;
        border: 1px solid #157af6;
        width: 100%
    }

    .highlight-button:hover {
        background-color: #157af6;
        border: 2px solid #157af6;
        color: #fff
    }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5rem
    }


    .clearfix:after {
        content: "";
        display: table;
        clear: both;
      }

      a {
        color: #5D6975;
        text-decoration: underline;
      }

      /* .body {
        position: relative;
        width: 21cm;
        height: 29.7cm;
        margin: 0 auto;
        color: #001028;
        background: #FFFFFF;
        font-family: Arial, sans-serif;
        font-size: 12px;
        font-family: Arial;
      } */
      .pullright{
        float:right;
      }

      header {
        padding: 10px 0;
        margin-bottom: 30px;
      }

      #logo {
        text-align: center;
        margin-bottom: 10px;
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
        background-color:blue;
        object-fit:cover;
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