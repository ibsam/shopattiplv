
<link rel="stylesheet" href="{{asset ('css/custom-css.css')}}">
@extends('layouts.master')

@section('content') 


<!--body content start-->

<div class="page-content">

<section>
  <div class="container">
  
    <div class="row mb-4 align-items-center">
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
    <div class="row">
      <div class="col-md-2 mr-5 ml-6">
          <div class="row mb-4 align-items-center col-lg-6">
              <div class="row mb-4 align-items-center">
              <div class="col">
                  <div class="card" >
                      <article class="filter-group">
                          <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                  <h6 class="title">Categories </h6>
                              </a> </header>
                          <div class="filter-content collapse" id="collapse_aside1" style="">
                              <div class="card-body">
                                  <ul class="list-menu">
                                      <li><a href="#" data-abc="true">Electronics </a></li>
                                      <li><a href="#" data-abc="true">Watches </a></li>
                                      <li><a href="#" data-abc="true">Laptops </a></li>
                                      <li><a href="#" data-abc="true">Clothes </a></li>
                                      <li><a href="#" data-abc="true">Accessories </a></li>
                                  </ul>
                              </div>
                          </div>
                      </article>
                      <article class="filter-group">
                          <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside2" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                  <h6 class="title">Price </h6>
                              </a> </header>
                          <div class="filter-content collapse" id="collapse_aside2" style="">
                              <div class="card-body"> <input type="range" class="custom-range" min="0" max="100" name="">
                                  <div class="form-row">
                                      <div class="form-group col-md-6"> <label>Min</label> <input class="form-control" placeholder="$0" type="number"> </div>
                                      <div class="form-group text-right col-md-6"> <label>Max</label> <input class="form-control" placeholder="$1,0000" type="number"> </div>
                                  </div> <a href="#" class="highlight-button btn btn-medium button xs-margin-bottom-five" data-abc="true">Apply Now</a>
                              </div>
                          </div>
                      </article>
                      <article class="filter-group">
                          <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside3" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                  <h6 class="title">Size </h6>
                              </a> </header>
                          <div class="filter-content collapse" id="collapse_aside3" style="">
                              <div class="card-body"> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XS </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> SM </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> LG </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XXL </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XXXL </span> </label> </div>
                          </div>
                      </article>
                      <article class="filter-group">
                          <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside4" data-abc="true" class="collapsed" aria-expanded="false"> <i class="icon-control fa fa-chevron-down"></i>
                                  <h6 class="title">Rating </h6>
                              </a> </header>
                          <div class="filter-content collapse" id="collapse_aside4" style="">
                              <div class="card-body"> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                      <div class="custom-control-label">Better </div>
                                  </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                      <div class="custom-control-label">Best </div>
                                  </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                      <div class="custom-control-label">Good</div>
                                  </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                      <div class="custom-control-label">Not good</div>
                                  </label> </div>
                          </div>
                      </article>
                  </div>
              </div>
            </div>
           </div>
      </div>
      <div class="col-md-9 pl-0 ml-3">
      
        <shop-com></shop-com>
      </div>
      

    </div>

    <div class="row">
      <div class="col">
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>

</div>

<!--body content end--> 


@endsection
