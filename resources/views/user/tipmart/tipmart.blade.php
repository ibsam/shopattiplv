
@extends('layouts.master')
@section('content')

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader" style="display: none;">
  <div class="loader clear-loader">
    <img class="img-fluid" src="{{ asset('images/loader.gif') }}" alt="">
  </div>
</div>

<!-- preloader end -->


<!--hero section start-->

<section class="banner-bg-full pos-r p-0 tipmart__class">
  <div class="container-fluid p-0">
    <div class="row">
       <div class="col-lg-12">
          <div class="banner-slider banner-6 owl-carousel no-pb h-100" data-dots="true" data-margin="5">
            <div class="item" data-bg-img="{{ asset('images/organic/slider/1.jpg') }}">
              <div class="container h-100">

              </div>
            </div>
            <div class="item" data-bg-img="{{ asset('images/organic/slider/02.jpg') }}">
            </div>
          </div>
        </div>
    </div>
  </div>
</section>


<!--hero section end-->

<section class="pb-1">
  <div class="container">
  <div class="row banner-list m-0">
  <div class="col-md-6 col-lg-4 col-12 col-sm-6 col-6 category-grid-item cat-design-default categories-with-shadow p-0">
    <div class="wrapp-category mt-0">
      <div class="category-image-wrapp"> <a href="#" class="category-image"> <img src="{{ asset('images/organic/product-ad/01.jpg') }}" alt="Clocks"> </a></div>
      <div class="hover-mask dark-yellow">
        <h3 class="category-title">Exotic Corner
          <mark class="count">(12)</mark>
        </h3>
        <div class="more-products"><a href="#" class="qty">12 products</a></div>
      </div>
      <a href="#" class="category-link"></a></div>
  </div>
  <div class=" col-md-6 col-lg-4 col-12 col-sm-6 category-grid-item cat-design-default categories-with-shadow product-category product p-0">
    <div class="wrapp-category mt-0">
      <div class="category-image-wrapp"> <a href="#" class="category-image"> <img src="{{ asset('images/organic/product-ad/02.jpg') }}"> </a></div>
      <div class="hover-mask dark-blue">
        <h3 class="category-title"> Season Sale
          <mark class="count">(12)</mark>
        </h3>
        <div class="more-products"><a href="#" class="qty">12 products</a></div>
      </div>
      <a href="#" class="category-link"></a></div>
  </div>
  <div class=" col-md-6 col-lg-4 col-12 col-sm-6 category-grid-item cat-design-default categories-with-shadow product-category product p-0">
    <div class="wrapp-category mt-0">
      <div class="category-image-wrapp"> <a href="#" class="category-image"> <img src="{{ asset('images/organic/product-ad/03.jpg') }}"> </a></div>
      <div class="hover-mask dark-purple">
        <h3 class="category-title"> 100% Organic
          <mark class="count">(12)</mark>
        </h3>
        <div class="more-products"><a href="#" class="qty">12 products</a></div>
      </div>
      <a href="#" class="category-link"></a></div>
  </div>
  <div class=" col-md-6 col-lg-4 col-12 col-sm-6 category-grid-item cat-design-default categories-with-shadow product-category product p-0">
    <div class="wrapp-category mt-0">
      <div class="category-image-wrapp"> <a href="#" class="category-image"> <img src="{{ asset('images/organic/product-ad/04.jpg') }}"> </a></div>
      <div class="hover-mask dark-green">
        <h3 class="category-title"> Daily Vegetables
          <mark class="count">(12)</mark>
        </h3>
        <div class="more-products"><a href="#" class="qty">12 products</a></div>
      </div>
      <a href="#" class="category-link"></a></div>
  </div>
  <div class=" col-md-6 col-lg-4 col-12 col-sm-6 category-grid-item cat-design-default categories-with-shadow product-category product p-0">
    <div class="wrapp-category mt-0">
      <div class="category-image-wrapp"> <a href="#" class="category-image"> <img src="{{ asset('images/organic/product-ad/05.jpg') }}"> </a></div>
      <div class="hover-mask dark-pink">
        <h3 class="category-title"> Special Offer
          <mark class="count">(12)</mark>
        </h3>
        <div class="more-products"><a href="#" class="qty">12 products</a></div>
      </div>
      <a href="#" class="category-link"></a></div>
  </div>
  <div class=" col-md-6 col-lg-4 col-12 col-sm-6 category-grid-item cat-design-default categories-with-shadow product-category product p-0">
    <div class="wrapp-category mt-0">
      <div class="category-image-wrapp"> <a href="#" class="category-image"> <img src="{{ asset('images/organic/product-ad/06.jpg') }}"> </a></div>
      <div class="hover-mask dark-red">
        <h3 class="category-title"> Fresh Fruits
          <mark class="count">(12)</mark>
        </h3>
        <div class="more-products"><a href="#" class="qty">12 products</a></div>
      </div>
      <a href="#" class="category-link"></a></div>
  </div>


  </div>
</div>

</section>


<!--body content start-->

<div class="page-content">



<!--product start-->

<section class="pb-0">
  <div class="container">
  <div class="product-block">
    <div class="row justify-content-left text-left row_title">
        <h2 class="mb-0 font-w-6">Top Categories</h2>
    </div>

    <div class="row justify-content-center text-center">
              <div class="owl-carousel no-pb owl-2 owl-loaded owl-drag" data-dots="false" data-nav="true" data-items="8" data-md-items="3" data-sm-items="2">





















              <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2418px, 0px, 0px); transition: all 0.25s ease 0s; width: 3699px;"><div class="owl-item cloned" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p3.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Meats</a></div>
                  </div></div><div class="owl-item cloned" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p5.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Lettuce</a></div>
                  </div></div><div class="owl-item cloned" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
            <img class="cat-img" src="{{ asset('images/organic/product/p12.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Citrus‎</a></div>
                  </div></div><div class="owl-item cloned" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p27.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Berries</a></div>
                  </div></div><div class="owl-item cloned" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
            <img class="cat-img" src="{{ asset('images/organic/product/p8.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Beans</a></div>
                  </div></div><div class="owl-item cloned" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
         <img class="cat-img" src="{{ asset('images/organic/product/p11.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Salads</a></div>
                  </div></div><div class="owl-item cloned" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p9.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Leafy Veg</a></div>
                  </div></div><div class="owl-item cloned" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
            <img class="cat-img" src="{{ asset('images/organic/product/p6.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Pomegranates</a></div>
                  </div></div><div class="owl-item" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
            <img class="cat-img" src="{{ asset('images/organic/product/p1.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fruits</a></div>
                  </div></div><div class="owl-item" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p2.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Vegetables</a></div>
                  </div></div><div class="owl-item" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p3.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Meats</a></div>
                  </div></div><div class="owl-item" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p5.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Lettuce</a></div>
                  </div></div><div class="owl-item" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
            <img class="cat-img" src="{{ asset('images/organic/product/p12.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Citrus‎</a></div>
                  </div></div><div class="owl-item" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p27.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Berries</a></div>
                  </div></div><div class="owl-item" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
            <img class="cat-img" src="{{ asset('images/organic/product/p8.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Beans</a></div>
                  </div></div><div class="owl-item" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
         <img class="cat-img" src="{{ asset('images/organic/product/p11.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Salads</a></div>
                  </div></div><div class="owl-item" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p9.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Leafy Veg</a></div>
                  </div></div><div class="owl-item active" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
            <img class="cat-img" src="{{ asset('images/organic/product/p6.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Pomegranates</a></div>
                  </div></div><div class="owl-item cloned active" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
            <img class="cat-img" src="{{ asset('images/organic/product/p1.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fruits</a></div>
                  </div></div><div class="owl-item cloned active" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p2.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Vegetables</a></div>
                  </div></div><div class="owl-item cloned active" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p3.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Meats</a></div>
                  </div></div><div class="owl-item cloned active" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p5.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Lettuce</a></div>
                  </div></div><div class="owl-item cloned active" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
            <img class="cat-img" src="{{ asset('images/organic/product/p12.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Citrus‎</a></div>
                  </div></div><div class="owl-item cloned active" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
           <img class="cat-img" src="{{ asset('images/organic/product/p27.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Berries</a></div>
                  </div></div><div class="owl-item cloned active" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
            <img class="cat-img" src="{{ asset('images/organic/product/p8.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Beans</a></div>
                  </div></div><div class="owl-item cloned" style="width: 142.25px;"><div class="item">
        <a class="d-block" href="product-left-image.html">
         <img class="cat-img" src="{{ asset('images/organic/product/p11.jpg') }}" alt="...">
                     </a>
                    <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Salads</a></div>
                  </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span class="la la-angle-left"><span></span></span></button><button type="button" role="presentation" class="owl-next"><span class="la la-angle-right"></span></button></div><div class="owl-dots disabled"></div></div>
          </div>
          </div>

  </div>
</section>

<!--product end-->


<!--product start-->

<section class="pb-0">
  <div class="container">
<div class="product-block">
    <div class="row justify-content-left text-left row_title">
        <h2 class="mb-0 font-w-6 bg-dark-green">Best Seller</h2>
    </div>


          <div class="row">
               <div class="owl-carousel no-pb owl-2 owl-loaded owl-drag" data-dots="false" data-nav="true" data-items="5" data-md-items="2" data-sm-items="2">






              <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1593px, 0px, 0px); transition: all 0.25s ease 0s; width: 3642px;"><div class="owl-item cloned" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p16.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p7.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p26.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p6.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p5.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p27.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p16.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p7.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p26.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p6.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p5.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned active" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p27.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p16.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p7.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p26.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 227.6px;"><div class="item">
                  <div class="card product-card card--default">

                    <a class="card-img-hover d-block" href="product-left-image.html">
            <img class="card-img-top" src="{{ asset('images/organic/product/p6.jpg') }}" alt="...">
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
                        <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Fresh Organic Leaves </a>
                        </div>
                        <div class="mt-1"> <span class="product-price text-green"><del class="text-muted">$35.00</del> $25.00</span>
                          <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer bg-transparent border-0">
                        <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-green mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span class="la la-angle-left"><span></span></span></button><button type="button" role="presentation" class="owl-next"><span class="la la-angle-right"></span></button></div><div class="owl-dots disabled"></div></div>
            </div>
          </div>
  </div>
</section>

<!--product end-->


<section>
  <div class="container text-center custom-pb-0">
  <div class="row">
   <div class="col-12 col-md-12 col-lg-6 col-md-6 pr-lg-0">
   <div class="product-block">
   <div class="row justify-content-left text-left row_title">
        <h2 class="mb-0 font-w-6">Brand Logos</h2>
    </div>
   <div class="owl-carousel owl-2 no-pb owl-loaded owl-drag" data-dots="false" data-nav="true" data-items="3" data-lg-items="2" data-md-items="3" data-sm-items="2">






        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-537px, 0px, 0px); transition: all 0s ease 0s; width: 2152px;"><div class="owl-item cloned" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/01.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/02.png') }}" alt="">
          </div></div><div class="owl-item cloned" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/03.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/04.png') }}" alt="">
          </div></div><div class="owl-item cloned" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/05.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/06.png') }}" alt="">
          </div></div><div class="owl-item active" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/01.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/02.png') }}" alt="">
          </div></div><div class="owl-item active" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/03.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/04.png') }}" alt="">
          </div></div><div class="owl-item active" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/05.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/06.png') }}" alt="">
          </div></div><div class="owl-item" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/01.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/02.png') }}" alt="">
          </div></div><div class="owl-item" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/03.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/04.png') }}" alt="">
          </div></div><div class="owl-item" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/05.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/06.png') }}" alt="">
          </div></div><div class="owl-item cloned" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/01.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/02.png') }}" alt="">
          </div></div><div class="owl-item cloned" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/03.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/04.png') }}" alt="">
          </div></div><div class="owl-item cloned" style="width: 179.333px;"><div class="item">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/05.png') }}" alt="">
            <img class="client-img d-inline d-lg-block d-md-block" src="{{ asset('images/client/06.png') }}" alt="">
          </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span class="la la-angle-left"><span></span></span></button><button type="button" role="presentation" class="owl-next"><span class="la la-angle-right"></span></button></div><div class="owl-dots disabled"></div></div>
        </div>

   </div>
   <div class="col-12 col-md-12 pl-lg-0 col-lg-6 col-md-6">
    <div class="justify-content-center bg-green-row testimonails type2">
      <div class="col-12 pl-5 pr-5">
        <div class="owl-carousel owl-center owl-2 owl-loaded owl-drag" data-center="true" data-dots="true" data-nav="false" data-items="1" data-md-items="1" data-sm-items="1">




        <div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0s ease 0s; width: 3542px; transform: translate3d(-1012px, 0px, 0px);"><div class="owl-item cloned" style="width: 506px;"><div class="item">
            <div class="card pt-8 pb-10 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{ asset('images/thumbnail/member1.png') }}" class="img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body">
                <p class="text-white font-w-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla auguest Nunc condime tristique auctor. placerat a condimentum diam mollis.</p>
                <div>
                  <h6 class="text-white d-inline mb-0 font-w-6">Karla Anderson </h6>
                  <small class="text-white">- Happy Customer</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 506px;"><div class="item">
            <div class="card pt-8 pb-10 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{ asset('images/thumbnail/member3.png') }}" class="img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body">
                <p class="text-white font-w-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla auguest Nunc condime tristique auctor. placerat a condimentum diam mollis.</p>
                <div>
                  <h6 class="text-white d-inline mb-0 font-w-6">Stephen Doe </h6>
                  <small class="text-white">- Happy Customer</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item active center" style="width: 506px;"><div class="item">
            <div class="card pt-8 pb-10 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{ asset('images/thumbnail/member2.png') }}" class="img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body">
               <p class="text-white font-w-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla auguest Nunc condime tristique auctor. placerat a condimentum diam mollis.</p>
                <div>
                  <h6 class="text-white d-inline mb-0 font-w-6">John Smith </h6>
                  <small class="text-white">- Happy Customer</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item" style="width: 506px;"><div class="item">
            <div class="card pt-8 pb-10 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{ asset('images/thumbnail/member1.png') }}" class="img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body">
                <p class="text-white font-w-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla auguest Nunc condime tristique auctor. placerat a condimentum diam mollis.</p>
                <div>
                  <h6 class="text-white d-inline mb-0 font-w-6">Karla Anderson </h6>
                  <small class="text-white">- Happy Customer</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item" style="width: 506px;"><div class="item">
            <div class="card pt-8 pb-10 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{ asset('images/thumbnail/member3.png') }}" class="img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body">
                <p class="text-white font-w-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla auguest Nunc condime tristique auctor. placerat a condimentum diam mollis.</p>
                <div>
                  <h6 class="text-white d-inline mb-0 font-w-6">Stephen Doe </h6>
                  <small class="text-white">- Happy Customer</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 506px;"><div class="item">
            <div class="card pt-8 pb-10 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{ asset('images/thumbnail/member2.png') }}" class="img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body">
               <p class="text-white font-w-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla auguest Nunc condime tristique auctor. placerat a condimentum diam mollis.</p>
                <div>
                  <h6 class="text-white d-inline mb-0 font-w-6">John Smith </h6>
                  <small class="text-white">- Happy Customer</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 506px;"><div class="item">
            <div class="card pt-8 pb-10 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{ asset('images/thumbnail/member1.png') }}" class="img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body">
                <p class="text-white font-w-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla auguest Nunc condime tristique auctor. placerat a condimentum diam mollis.</p>
                <div>
                  <h6 class="text-white d-inline mb-0 font-w-6">Karla Anderson </h6>
                  <small class="text-white">- Happy Customer</small>
                </div>
              </div>
            </div>
          </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span class="la la-angle-left"><span></span></span></button><button type="button" role="presentation" class="owl-next"><span class="la la-angle-right"></span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
      </div>
    </div>
    </div>
    </div>
  </div>
</section>


<!--hot deal start-->

<section class="bg-pos-ct hot-deal" data-bg-img="assets/images/organic/bg/01.jpg') }}" style="background-image: url(&quot;assets/images/organic/bg/01.jpg&quot;);">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-10">
        <div>
          <h6 class="text-dark mb-1 font-w-6">
                  Limited Time Offer
              </h6>
          <h2 class="mb-0 font-w-6 text-white txt-transform">Deals of the Day</h2>
        </div>
        <ul class="countdown list-inline d-flex my-5" data-countdown="2020/08/23"><li><span>0</span><p>d</p></li><li><span>0</span><p>h</p></li><li><span>0</span><p>m</p></li><li><span>00</span><p>s</p></li></ul>
        <div class="subscribe-form">
          <form id="mc-form" class="row align-items-center no-gutters mb-3">
            <div class="col">
              <input value="" name="EMAIL" class="email form-control input-2 bg-white" id="mc-email" placeholder="Email Address" required="" type="email">
            </div>
            <div class="col-auto">
              <input class="btn btn-red overflow-auto" name="subscribe" value="Subscribe" type="submit">
            </div>
          </form> <small>To receive latest offers and discounts from the shop.</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!--hot deal end-->


<!--blog start-->

<section class="pb-0">
  <div class="container">
      <div class="product-block">
    <div class="row justify-content-left text-left row_title">
        <h2 class="mb-0 font-w-6 bg-dark-green">Latest From Blog</h2>
    </div>
    <!-- / .row -->
    <div class="row m-0">
      <div class="col-12 col-lg-4 mt-5">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
          <div class="position-relative overflow-hidden">
            <div class="position-absolute z-index-1 bottom-0 bg-white text-primary shadow-primary text-center py-1 px-2 rounded ml-3 mb-3">20 June</div>
            <img class="card-img-top hover-zoom" src="{{ asset('images/organic/blog/01.jpg') }}" alt="Image">
          </div>
          <div class="card-body px-0 pb-0">
            <div> <a class="d-inline-block link-title btn-link text-small mr-2" href="#">Fruits,</a><a class="d-inline-block link-title btn-link text-small" href="#">Vegetable,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Organic</a>
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
            <img class="card-img-top hover-zoom" src="{{ asset('images/organic/blog/02.jpg') }}" alt="Image">
          </div>
          <div class="card-body px-0 pb-0">
            <div> <a class="d-inline-block link-title btn-link text-small mr-2" href="#">Fruits,</a><a class="d-inline-block link-title btn-link text-small" href="#">Vegetable,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Organic</a>
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
            <img class="card-img-top hover-zoom" src="{{ asset('images/organic/blog/03.jpg') }}" alt="Image">
          </div>
          <div class="card-body px-0 pb-0">
            <div> <a class="d-inline-block link-title btn-link text-small mr-2" href="#">Fruits,</a><a class="d-inline-block link-title btn-link text-small" href="#">Vegetable,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Organic</a>
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

<section>
<div class="container">
<div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="d-flex free-shipping">
          <div class="mr-2">
            <i class="las la-truck ic-2x text-green"></i>
          </div>
            <h6 class="mb-0 text-white font-w-6">Free Shipping on order over $99</h6>

       </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-3 mt-sm-0">
        <div class="d-flex need-help">
          <div class="mr-2">
           <i class="las la-mobile ic-2x text-white"></i>
          </div>
            <h6 class="mb-0 text-white font-w-6">Need Help +1 800 123 1234</h6>

        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-3 mt-lg-0">
        <div class="d-flex money-back">
          <div class="mr-2">
           <i class="las la-wallet ic-2x text-white"></i>
          </div>

            <h6 class="mb-0 text-white font-w-6">Money Back Guarantee</h6>

        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-3 mt-lg-0">
        <div class="d-flex return-policy">
          <div class="mr-2">
           <i class="las la-briefcase ic-2x text-white"></i>
          </div>
            <h6 class="mb-0 text-white font-w-6">30 Days Return Service</h6>

        </div>
      </div>
    </div>
    </div>
    </section>


</div>

<!--body content end-->


</div>

@endsection
