
@extends('layouts.master')

@section('content') 
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
    text-decoration: none !important;
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
</style>

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
