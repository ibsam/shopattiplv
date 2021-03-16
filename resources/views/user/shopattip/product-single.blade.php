@extends('layouts.master')
@section('content')
{{-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> --}}


<div class="page-content">
  <div class="pdp-block pdp-block__delivery-seller">
    <div class="pdp-block module">
        <div data-spm="delivery_options">
            <div class="delivery">
                <div class="delivery-header" style="margin-top: 80px;">
                    <div class="delivery-header__title">Delivery Options</div>
                    <div class="delivery-header__tooltip">
                        <div>
                          <i class="fas fa-exclamation-circle"></i>
                          
                        </div>
                    </div>
                </div>
                {{-- <div class="delivery__header">
                    <div class="location delivery__location">
                        <div class="location__current">
                            <div class="location__body">
                                <i class="location__icon">
                                  <i class="fas fa-map-marker-alt"></i>
                                   
                                </i>
                                <div class="location__address">Sindh, Karachi - Gulshan-e-Iqbal, Block 15</div>
                                <div class="location__link-change">
                                  <a class="location-link location-link_size_xs automation-location-link-change">CHANGE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                --}}
                <div class="delivery__content">
                    <div class="delivery__options">
                        <div class="delivery__option">
                            <div class="delivery-option-item delivery-option-item_type_standard">
                                <div class="delivery-option-item__body">
                                    <i class="delivery-option-item__icon">
                                      <i class="fas fa-truck"></i>
                                        
                                    </i>
                                    <div class="delivery-option-item__info">
                                        <div class="delivery-option-item__title">Home Delivery</div>
                                        <div class="delivery-option-item__time">3 - 4 days</div>
                                    </div>
                                    <div class="delivery-option-item__shipping-fee">Rs. 130</div>
                                </div>
                                <div class="delivery-option-item__promotion"><div class="html-content">Enjoy free shipping promotion with minimum spend Rs. 5,000 in certain area</div></div>
                            </div>
                        </div>
                        <div class="delivery__option">
                            <div class="delivery-option-item delivery-option-item_type_COD" data-spm-anchor-id="a2a0e.pdp.delivery_options.i0.ffc6203ci0r86d">
                                <div class="delivery-option-item__body">
                                    <i class="delivery-option-item__icon">
                                      <i class="fas fa-money-bill-wave"></i>
                                       
                                    </i>
                                    <div class="delivery-option-item__info"><div class="delivery-option-item__title">Cash on Delivery Available</div></div>
                                    <div class="delivery-option-item__shipping-fee"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pdp-block module"></div>
    <div class="pdp-block module">
        <div class="warranty" data-spm="return_warranty">
            <div class="delivery-header">
                <div class="delivery-header__title">Return &amp; Warranty</div>
                <div class="delivery-header__tooltip">
                    <div>
                        <i class="delivery-tooltip__icon">
                            <span><span class="lazada lazada-ic-Tooltip lazada-icon undefined"></span></span>
                        </i>
                    </div>
                </div>
            </div>
            <div class="warranty__options">
                <div class="warranty__option-item">
                    <div class="delivery-option-item delivery-option-item_type_returnPolicy7">
                        <div class="delivery-option-item__body">
                            <i class="delivery-option-item__icon">
                              <i class="fas fa-undo-alt"></i>
                            </i>
                            <div class="delivery-option-item__info">
                                <div class="delivery-option-item__title">7 Days Returns</div>
                                <div class="delivery-option-item__subtitle">Change of mind is not applicable</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="warranty__option-item">
                    <div class="delivery-option-item delivery-option-item_type_warranty">
                        <div class="delivery-option-item__body">
                            <i class="delivery-option-item__icon">
                              <i class="fas fa-shield-alt"></i>
                            </i>
                            <div class="delivery-option-item__info"><div class="delivery-option-item__title">N/A Brand Warranty</div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pdp-block module"></div>
    <div class="pdp-block module">
        <div class="seller-container" data-spm="seller">
            {{-- <div class="seller-name-retail">
                <div class="seller-name__wrapper">
                    <div class="seller-name__title">Sold by</div>
                    <div class="seller-name__detail" data-spm="seller">
                        <a class="pdp-link pdp-link_size_l pdp-link_theme_black seller-name__detail-name" target="_self" href="#">
                            Friendly Offers (Toba Tek Singh)
                        </a>
                    </div>
                </div>
                <div class="seller-im-wrapper">
                    <span class="seller-im-content">
                        <span class="seller-im-icon"><span class="lazada lazada-sis-tray-2 lazada-icon undefined"></span></span><span>Chat Now</span>
                    </span>
                </div>
            </div>
            <div class="pdp-seller-info-pc">
                <div class="info-content">
                    <div class="seller-info-title">Positive Seller Ratings</div>
                    <div class="seller-info-value rating-positive">74%</div>
                </div>
                <div class="info-content">
                    <div class="seller-info-title">Ship on Time</div>
                    <div class="seller-info-value">98%</div>
                </div>
                <div class="info-content">
                    <div class="seller-info-title">Chat Response Rate</div>
                    <div class="seller-info-value">98%</div>
                </div>
            </div> --}}
            <div class="seller-link" data-spm="seller">
                <a class="pdp-link pdp-link_size_xs pdp-link_theme_blue" target="_self" href="{{ url('shop') }}">GO TO STORE</a>
            </div>
        </div>
    </div>
    <div class="pdp-block module"></div>
</div>
<productsingle></productsingle>


<!--recent product start-->

<section class="pb-6 border-top pt-7">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-10">
        <div class="mb-5">
          <h2 class="mb-0 font-w-6">Related Products</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="4" data-md-items="2" data-sm-items="1">
        @foreach($RelatedProducts as $RelatedProduct)
          <div class="item">
            <div class="card product-card card--default"> <a class="card-img-hover d-block" href="/{{$RelatedProduct->url_name}}_{{$RelatedProduct->id}}.htm"> <img class="card-img-top card-img-back" src="{{ asset('uploads/product_image/product_'.$RelatedProduct->id . '_1.jpg') }}" alt="..." width="250" height="200"> <img class="card-img-top card-img-front" src="{{ asset('uploads/product_image/product_'.$RelatedProduct->id . '_1.jpg') }}" alt="..." width="250" height="200" > </a>
                      <div class="card-icons">
{{--                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>--}}
{{--                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>--}}
{{--                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>--}}
                      </div>
                      <div class="card-info">
                        <div class="card-body">
                          <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">{{ $RelatedProduct->name }}</a> </div>
                          <div class="mt-1"> <span class="product-price text-pink">{{ $RelatedProduct->sale_price }}</span>
                            <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                          </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                          <div class="product-link d-flex align-items-center justify-content-center">
{{--                            <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>--}}
                          </div>
                        </div>
                      </div>
                    </div>
          </div>
        @endforeach
         
           
          
           
        </div>
      </div>
    </div>
  </div>
</section>

<!--recent product end-->

</div>


@endsection
@section('customJS')
<script>
  $(document).ready(function(){
      $('#testbtn').click(function(){
          alert('hello');

      });
  });
</script>
@endsection
