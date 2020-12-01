
<link rel="stylesheet" href="{{asset ('css/custom-css.css')}}">
@extends('layouts.master')

@section('content') 


<!--body content start-->

<div class="page-content">

<section>
  <div class="container">
  
    <div class="row mb-4 align-items-center mx-lg-n5 ">
      <div class="col-md-5 mb-3 mb-md-0"> <span class="text-muted">Showing 1 to 12 of 30 total</span>
      </div>
      <div class="col-md-7 d-flex align-items-center justify-content-md-end">
        <div class="view-filter"> <a class="active" href="shop-grid-left-sidebar.html"><i class="las la-th-large"></i></a>
              <a href="shop-list-no-sidebar.html"><i class="las la-bars"></i></a>
        </div>
        <div class="sort-filter ml-2 d-flex justify-content-end">
          <select class="custom-select" id="inputGroupSelect02">
            <option selected>Default sorting</option>
            <option value="1">Newest Item</option>
            <option value="2">Populer</option>
            <option value="3">Best Match</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row mx-lg-n5 ">
      <div class="col-md-2 mr-0 ml-0">
          <shop-filter></shop-filter>
      </div>
      
      <div class="col-md-10 pl-0 ml-0">
      
        <shop-com></shop-com>
      </div>
      

    </div>

    
  </div>
</section>

</div>

<!--body content end--> 


@endsection
