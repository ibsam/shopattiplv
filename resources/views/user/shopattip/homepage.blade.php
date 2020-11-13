@extends('layouts.master')

@section('content')
  <!--hero section start-->
  
  <section class="banner pos-r p-0 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="categories_wrap">
            <div class="head"><i class="las la-bars"></i> Categories</div>
            <div id="navCatContent" class="nav_cat navbar">
              <ul>
                @foreach($SideMenuCategories as $SmCategory)
                <li class="dropdown dropdown-mega-menu"> <a class="dropdown-item nav-link dropdown-toggler" href="#" data-toggle="dropdown"><i class="las la-laptop"></i> <span>{{ $SmCategory->name }}</span></a>
                  <div class="dropdown-menu">
                    <ul class="mega-menu d-lg-flex">
                      <li class="mega-menu-col col-lg-7">
                        <ul class="d-lg-flex mt-0">
                          <li class="mega-menu-col col-lg-6">
                            <ul>
                              @php 
                                $count = 1
                              @endphp 
                              @foreach($SmCategory->childCategory as $SmChildCategory)
                                         <li> <a href="#">{{ $SmChildCategory->name }}</a></li>
                                @if($count % 8 == 0 )
                                  </ul>

                                </li>
                                 <li class="mega-menu-col col-lg-6">
                                  <ul>
                                @endif
                              @endforeach
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="mega-menu-col col-lg-5">
                        <div class="header-banner2"> <img src="{{ asset('images/electronic/product-ad/04.jpg') }}" alt="menu_banner">
                          <div class="banne_info">
                            <h6>20% Off</h6>
                            <h4>Laptops</h4>
                            <a href="#">Shop now</a> </div>
                        </div>
                        <div class="header-banner2"> <img src="{{ asset('images/electronic/product-ad/05.jpg') }}" alt="menu_banner">
                          <div class="banne_info">
                            <h6>15% Off</h6>
                            <h4>Cameras</h4>
                            <a href="#">Shop now</a> </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                @endforeach

<!--                 <li><a class="dropdown-item nav-link nav_item" href="#"><i class="las la-headphones"></i> <span>Headphones</span></a></li>
                <li><a class="dropdown-item nav-link nav_item" href="#"><i class="las la-gamepad"></i> <span>Gaming</span></a></li>
                <li><a class="dropdown-item nav-link nav_item" href="#"><i class="las la-stopwatch"></i> <span>Watches</span></a></li>
                <li><a class="dropdown-item nav-link nav_item" href="#"><i class="las la-microphone"></i> <span>Home Audio &amp; Theater</span></a></li>
                <li><a class="dropdown-item nav-link nav_item" href="#"><i class="las la-print"></i> <span>Printer</span></a></li> -->
                
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="banner-slider banner-3 owl-carousel no-pb h-100" data-dots="true" data-margin="5">
            <div class="item" data-bg-img="assets/images/electronic/bg/01.jpg') }}">
              <div class="container h-100">
                <div class="row h-100 align-items-center">
                  <div class="col py-8 pl-0">
                    <div class="animated3"> <span class="dark-yellow d-inline-block text-white mb-0">Sale up to!</span> <br>
                      <h5 class="dark-red d-inline-block text-white font-w-6">30% Discount on</h5>
                    </div>
                    <h1 class="mt-4 animated3"><span>UA/32J</span><br>
                      Television</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="item" data-bg-img="assets/images/electronic/bg/02.jpg') }}">
              <div class="container h-100">
                <div class="row h-100 align-items-center">
                  <div class="col py-8 pl-0">
                    <div class="animated3"> <span class="dark-yellow d-inline-block text-white mb-0">Mega Sale!</span> <br>
                      <h5 class="dark-red d-inline-block text-white font-w-6">60% Discount on</h5>
                    </div>
                    <h1 class="mt-4 animated3"><span>UA/32J</span><br>
                      Exclusive</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--hero section end--> 
  
  <!--body content start-->
  
  <div class="page-content"> 
    
    <!--product ad start-->
    
    <section class="banner-row pt-5 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-4 col-md-6">
            <div class="position-relative rounded overflow-hidden"> 
              <!-- Background --> 
              <img class="img-fluid hover-zoom" src="{{ asset('images/electronic/product-ad/01.jpg') }}" alt=""> 
              <!-- Body -->
              <div class="position-absolute top-50 pl-5">
                <h6 class="text-white">Digital World</h6>
                <!-- Heading -->
                <h3 class="text-white font-w-7">Exchange <br>
                  Deals</h3>
                <!-- Link --> <a class="more-link text-white" href="#">Shop Now </a> </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="position-relative rounded overflow-hidden"> 
              <!-- Background --> 
              <img class="img-fluid hover-zoom" src="{{ asset('images/electronic/product-ad/02.jpg') }}" alt=""> 
              <!-- Body -->
              <div class="position-absolute top-50 pl-5">
                <h6 class="text-white">Todays Deals</h6>
                <!-- Heading -->
                <h3 class="font-w-7 text-white">Appliances <br>
                  Special</h3>
                <!-- Link --> <a class="more-link text-white" href="#">Shop Now </a> </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-12 mt-5 mt-lg-0 d-md-none d-lg-block">
            <div class="position-relative rounded overflow-hidden"> 
              <!-- Background --> 
              <img class="img-fluid hover-zoom" src="{{ asset('images/electronic/product-ad/03.jpg') }}" alt=""> 
              <!-- Body -->
              <div class="position-absolute top-50 pl-5">
                <h6 class="text-dark">Hot Deals</h6>
                <!-- Heading -->
                <h3 class="font-w-7">Bluetooth<br>
                  Speaker</h3>
                <!-- Link --> <a class="more-link text-dark" href="#">Shop Now </a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--product ad end--> 
    
    <!--product start-->
    
    <section class="pb-0 pt-5">
      <div class="container">
        <div class="product-block product-block-div">
          <div class="row justify-content-left text-left row_title">
            <h2 class="mb-0 font-w-5 bg-dark-blue">Best Seller</h2>
          </div>
          <div class="row">
               <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="5" data-md-items="2" data-sm-items="1">
               <div class="item">
                  <div class="card product-card card--default">
                    
                    <a class="card-img-hover d-block" href="product-single.php">
            <img class="card-img-top" src="{{ asset('images/electronic/product/01.jpg') }}" alt="...">
                    </a>
                    <div class="card-icons">
                      <div class="card-icons__item">
                        <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a>
                      </div>
                      <div class="card-icons__item"> 
                        <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a>
                      </div>
                      <div class="card-icons__item"> 
                        <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a>
                      </div>
                    </div>
                    <div class="card-info">
                      <div class="card-body">
                        <div class="product-title font-w-4"><a class="link-title" href="product-single.php">Wireless Bluetooth</a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-dark"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-yellow-dark mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card product-card card--default">
                    
                    <a class="card-img-hover d-block" href="product-single.php">
            <img class="card-img-top" src="{{ asset('images/electronic/product/02.jpg') }}" alt="...">
                    </a>
                    <div class="card-icons">
  <div class="card-icons__item">
  <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a>
  </div>
  <div class="card-icons__item"> 
   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a>
  </div>
  <div class="card-icons__item"> 
   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a>
  </div>
</div>
                    <div class="card-info">
                      <div class="card-body">
                        <div class="product-title font-w-4"><a class="link-title" href="product-single.php">Wireless Bluetooth</a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-dark"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-yellow-dark mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card product-card card--default">
                    
                    <a class="card-img-hover d-block" href="product-single.php">
            <img class="card-img-top" src="{{ asset('images/electronic/product/03.jpg') }}" alt="...">
                    </a>
                    <div class="card-icons">
  <div class="card-icons__item">
  <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a>
  </div>
  <div class="card-icons__item"> 
   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a>
  </div>
  <div class="card-icons__item"> 
   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a>
  </div>
</div>
                    <div class="card-info">
                      <div class="card-body">
                        <div class="product-title font-w-4"><a class="link-title" href="product-single.php">Wireless Bluetooth</a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-dark"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-yellow-dark mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card product-card card--default">
                    
                    <a class="card-img-hover d-block" href="product-single.php">
            <img class="card-img-top" src="{{ asset('images/electronic/product/09.jpg') }}" alt="...">
                    </a>
                    <div class="card-icons">
  <div class="card-icons__item">
  <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a>
  </div>
  <div class="card-icons__item"> 
   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a>
  </div>
  <div class="card-icons__item"> 
   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a>
  </div>
</div>
                    <div class="card-info">
                      <div class="card-body">
                        <div class="product-title font-w-4"><a class="link-title" href="product-single.php">Wireless Bluetooth</a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-dark"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-yellow-dark mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card product-card card--default">
                    
                    <a class="card-img-hover d-block" href="product-single.php">
            <img class="card-img-top" src="{{ asset('images/electronic/product/04.jpg') }}" alt="...">
                    </a>
                    <div class="card-icons">
  <div class="card-icons__item">
  <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a>
  </div>
  <div class="card-icons__item"> 
   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a>
  </div>
  <div class="card-icons__item"> 
   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a>
  </div>
</div>
                    <div class="card-info">
                      <div class="card-body">
                        <div class="product-title font-w-4"><a class="link-title" href="product-single.php">Wireless Bluetooth</a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-dark"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-yellow-dark mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card product-card card--default">
                    
                    <a class="card-img-hover d-block" href="product-single.php">
            <img class="card-img-top" src="{{ asset('images/electronic/product/14.jpg') }}" alt="...">
                    </a>
                    <div class="card-icons">
  <div class="card-icons__item">
  <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a>
  </div>
  <div class="card-icons__item"> 
   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a>
  </div>
  <div class="card-icons__item"> 
   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a>
  </div>
</div>
                    <div class="card-info">
                      <div class="card-body">
                        <div class="product-title font-w-4"><a class="link-title" href="product-single.php">Wireless Bluetooth</a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-dark"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-yellow-dark mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    
    <!--product end--> 
    
    <!--product start-->
    
    <section class="pb-0 pt-5">
      <div class="container">
        <div class="product-block product-block-div pb-1">
          <div class="row justify-content-left text-left row_title">
            <h2 class="mb-0 font-w-5 bg-yellow text-dark">New Products</h2>
          </div>
              <div class="row pl-3">
              <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="3" data-md-items="2" data-sm-items="1">
               <div class="item">
                <div class="col-lg-12 col-md-12 pt-5">
                  <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/15.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                        <span class="product-price"><del class="text-muted">$42.00</del> $37.00</span> 
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                    </div>
                  </div>
                  <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/14.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                       <span class="product-price"><del class="text-muted">$35.00</del> $25.00</span>
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                      </div>
                  </div>
                  <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/12.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                       <span class="product-price"><del class="text-muted">$24.00</del> $18.00</span>
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                      </div>
                  </div>
                  
                </div>
                </div>
                <div class="item">
                <div class="col-lg-12 col-md-12 mt-md-0 pt-5">
                  <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/11.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                      <span class="product-price"><del class="text-muted">$12.00</del> $9.00</span>
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                       </div>
                  </div>
                  <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/10.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                      <span class="product-price"><del class="text-muted">$19.00</del> $13.00</span>
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                       </div>
                  </div>
                  <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/09.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                      <span class="product-price"><del class="text-muted">$24.00</del> $22.00</span>
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                       </div>
                  </div>
                  
                </div>
                </div>
                <div class="item">
                <div class="col-lg-12 col-md-12 mt-lg-0 pt-5">
   <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/06.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                      <span class="product-price"><del class="text-muted">$42.00</del> $37.00</span>
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                       </div>
                  </div>
                  <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/08.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                       <span class="product-price"><del class="text-muted">$35.00</del> $25.00</span>
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                      </div>
                  </div>
                  <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/07.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                       <span class="product-price"><del class="text-muted">$24.00</del> $18.00</span>
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                      </div>
                  </div>
                  
                </div>
                </div>
                <div class="item">
                <div class="col-lg-12 col-md-12 mt-lg-0 pt-5">
   <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/05.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                      <span class="product-price"><del class="text-muted">$42.00</del> $37.00</span> 
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                      </div>
                  </div>
                  <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/04.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                      <span class="product-price"><del class="text-muted">$35.00</del> $25.00</span>
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                       </div>
                  </div>
                  <div class="media align-items-center mb-4"> <a class="d-block mr-3" href="product-single.php"> <img class="border" src="{{ asset('images/electronic/product/03.jpg') }}" alt="Product" width="100"> </a>
                    <div class="media-body">
                      <div class="product-title"><a class="link-title" href="#">Wireless Bluetooth Receiver</a> </div>
                      <span class="product-price"><del class="text-muted">$24.00</del> $18.00</span>
                      <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                       </div>
                  </div>
                  
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    
    <!--product end--> 
    
    
    <!--blog start-->
    
    <section class="pb-0 pt-5">
  <div class="container">
      <div class="product-block product-block-div">
    <div class="row justify-content-left text-left row_title">
        <h2 class="mb-0 font-w-6 bg-redish">Latest From Blog</h2>
    </div>
    <!-- / .row -->
    <div class="row m-0">
      <div class="col-12 col-lg-4 mt-5">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
          <div class="position-relative overflow-hidden">
            <div class="position-absolute z-index-1 bottom-0 bg-white text-primary shadow-primary text-center py-1 px-2 rounded ml-3 mb-3">20 June</div>
            <img class="card-img-top hover-zoom" src="{{ asset('images/electronic/blog/01.jpg') }}" alt="Image">
          </div>
          <div class="card-body px-0 pb-0">
            <div> <a class="d-inline-block link-title btn-link text-small mr-2" href="#">Speaker,</a><a class="d-inline-block link-title btn-link text-small" href="#">Audeo,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Theater</a>
            </div>
            <h2 class="h5 font-w-5 mt-2 mb-0">
                <a class="link-title" href="blog-single.html">Powerful and flexible premium Ecommerce themes</a>
              </h2>
          </div>
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 mt-5">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
          <div class="position-relative overflow-hidden">
            <div class="position-absolute z-index-1 bottom-0 bg-white text-primary shadow-primary text-center py-1 px-2 rounded ml-3 mb-3">13 May</div>
            <img class="card-img-top hover-zoom" src="{{ asset('images/electronic/blog/02.jpg') }}" alt="Image">
          </div>
          <div class="card-body px-0 pb-0">
            <div> <a class="d-inline-block link-title btn-link text-small mr-2" href="#">Watch,</a><a class="d-inline-block link-title btn-link text-small" href="#">Digital,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Waterproof</a>
            </div>
            <h2 class="h5 font-w-5 mt-3">
                <a class="link-title" href="blog-single.html">Premium template with unlimited colours, and fully Customizable</a>
              </h2>
          </div>
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 mt-5">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
          <div class="position-relative overflow-hidden">
            <div class="position-absolute z-index-1 bottom-0 bg-white text-primary shadow-primary text-center py-1 px-2 rounded ml-3 mb-3">07 Apr</div>
            <img class="card-img-top hover-zoom" src="{{ asset('images/electronic/blog/03.jpg') }}" alt="Image">
          </div>
          <div class="card-body px-0 pb-0">
            <div> <a class="d-inline-block link-title btn-link text-small mr-2" href="#">Mobile,</a><a class="d-inline-block link-title btn-link text-small" href="#">Phones,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Smartphones</a>
            </div>
            <h2 class="h5 font-w-5 mt-3">
                <a class="link-title" href="blog-single.html">Awesome template with lot's of features on the board!</a>
              </h2>
          </div>
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
    </div>
  </div>  
  </div>
</section>
    
    
    <!--blog end--> 
    
    <section class="pt-1 pb-8">
  <div class="container">
<div class="row mt-8">
      <div class="col-12">
        <div class="owl-carousel no-pb" data-dots="false" data-items="5" data-md-items="3" data-sm-items="1">
          <div class="item">
            <img class="img-fluid d-inline" src="{{ asset('images/client/01.png') }}" alt="">
          </div>
          <div class="item">
            <img class="img-fluid d-inline" src="{{ asset('images/client/02.png') }}" alt="">
          </div>
          <div class="item">
            <img class="img-fluid d-inline" src="{{ asset('images/client/03.png') }}" alt="">
          </div>
          <div class="item">
            <img class="img-fluid d-inline" src="{{ asset('images/client/04.png') }}" alt="">
          </div>
          <div class="item">
            <img class="img-fluid d-inline" src="{{ asset('images/client/05.png') }}" alt="">
          </div>
          <div class="item">
            <img class="img-fluid d-inline" src="{{ asset('images/client/06.png') }}" alt="">
          </div>
          <div class="item">
            <img class="img-fluid d-inline" src="{{ asset('images/client/07.png') }}" alt="">
          </div>
          <div class="item">
            <img class="img-fluid d-inline" src="{{ asset('images/client/08.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
</div>
</section>
    
    
    <!--feature start-->
    
    <section class="bg-yellow services-block-1 py-5">
      <div class="container "> 
        <!-- / .row -->
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="d-flex p-3">
              <div class="mr-3"> <i class="las la-truck ic-2x text-dark"></i> </div>
              <div>
                <h5 class="mb-1 text-dark">Free Shipping</h5>
                <p class="mb-0 text-dark">Free Shipping on order over $99</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-3 mt-sm-0">
            <div class="d-flex p-3">
              <div class="mr-3"> <i class="las la-wallet ic-2x text-dark"></i> </div>
              <div>
                <h5 class="mb-1 text-dark">Money Return</h5>
                <p class="mb-0 text-dark">100% Money Back Guarentee</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-3 mt-lg-0">
            <div class="d-flex p-3">
              <div class="mr-3"> <i class="las la-briefcase ic-2x text-dark"></i> </div>
              <div>
                <h5 class="mb-1 text-dark">Return Policy</h5>
                <p class="mb-0 text-dark">30 Days Return Service Available</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-3 mt-lg-0">
            <div class="d-flex p-3">
              <div class="mr-3"> <i class="las la-mobile ic-2x text-dark"></i> </div>
              <div>
                <h5 class="mb-1 text-dark">24/7 Support</h5>
                <p class="mb-0 text-dark">Call +1 800 123 1234 <br>
                flipmarto@gmail.com
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--feature end--> 
    
  </div>
@endsection

