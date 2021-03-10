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
                            <li class="dropdown dropdown-mega-menu"> <a class="dropdown-item nav-link dropdown-toggler"
                                    href="#" data-toggle="dropdown"><i class="las la-laptop"></i>
                                    <span>{{ $SmCategory->name }}</span></a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-lg-flex">
                                        <li class="mega-menu-col col">
                                            <ul class="d-lg-flex mt-0">
                                                <li class="mega-menu-col col-lg-6">
                                                    <ul>
                                                        @php
                                                        $count = 1
                                                        @endphp
                                                        @foreach($SmCategory->childCategory as $SmChildCategory)
                                                        <li> <a
                                                                href="category/{{$SmChildCategory->url_name}}.htm ">{{ $SmChildCategory->name }}</a>
                                                        </li>
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
                                        {{--<li class="mega-menu-col col-lg-5">
                                             <div class="header-banner2"> 
                                              <img src="{{ asset('images/electronic/product-ad/03.jpg') }}" alt="menu_banner">
                                                <div class="banne_info">
                                                
                                                    <h6>20% Off</h6>
                                                    <h4>Laptops</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div> 
                                            <div class="header-banner2"> 
                                                <div class="banne_info">
                                                  <img src="{{ asset('images/electronic/product-ad/04.jpg') }}"
                                                    alt="menu_banner">
                                                    <h6>15% Off</h6>
                                                    <h4>Cameras</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div> 
                                        </li>--}}
                                    </ul>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="banner-slider banner-3 owl-carousel no-pb h-100" data-dots="true" data-margin="5">
                    @include('layouts.components.shop_slider')

                </div>
            </div>
        </div>
    </div>
</section>


<!--hero section end-->

<!--body content start-->
<div class="hp-mod-card-hm card-channels-hm J_Channels-hm" style="margin-right: 50px;">
    <div class="hp-mod-card-content-hm card-channels-content-hm" style="margin-right: -663px;">

        <div data-color="#442e93"
            class="card-channels-item-hm hp-mod-card-hover-hm J_ChannelsItem align-left-hm card-channels-length-5-hm responsive-layout-hm">
            <a href="{{url('tipmart')}}" class="card-channels-link-hm J_ChannelsLink-hm">
                <div class="card-channels-icon-hm align-left-hm">
                    <div class="card-channels-img-wrap-hm">
                        <img class="image-hm" src="{{asset('assets/img/buttons/cart.png')}}" alt="ShopAt">
                    </div>
                </div>
                <div class="card-channels-name-hm inline-hm align-left-hm one-line-hm break-line-hm ">
                    <div class="text-wrap-hm text-top-hm">TipMart</div>
                    <div class="text-wrap-hm text-bottom-hm"></div>
                </div>
            </a>
        </div>

        <div data-color="#442e93"
            class="card-channels-item-hm hp-mod-card-hover-hm J_ChannelsItem align-left-hm card-channels-length-5-hm responsive-layout-hm">
            <a href="{{ url('shop') }}" class="card-channels-link-hm J_ChannelsLink-hm">
                <div class="card-channels-icon-hm align-left-hm">
                    <div class="card-channels-img-wrap-hm">
                        <img class="image-hm" src="{{asset('assets/img/buttons/plane.png')}}" alt="ShopAt">
                    </div>
                </div>
                <div class="card-channels-name-hm inline-hm align-left-hm one-line-hm break-line-hm ">
                    <div class="text-wrap-hm text-top-hm">Shop Mall</div>
                    <div class="text-wrap-hm text-bottom-hm"></div>
                </div>
            </a>
        </div>

        <div data-color="#442e93"
            class="card-channels-item-hm hp-mod-card-hover-hm J_ChannelsItem align-left-hm card-channels-length-5-hm responsive-layout-hm">
            <a href="#" class="card-channels-link-hm J_ChannelsLink-hm">
                <div class="card-channels-icon-hm align-left-hm">
                    <div class="card-channels-img-wrap-hm">
                        <img class="image-hm" src="{{asset('assets/img/buttons/fashion.png')}}" alt="ShopAt">
                    </div>
                </div>
                <div class="card-channels-name-hm inline-hm align-left-hm one-line-hm break-line-hm ">
                    <div class="text-wrap-hm text-top-hm">Fashion & LifeStyle</div>
                    <div class="text-wrap-hm text-bottom-hm"></div>
                </div>
            </a>
        </div>

        {{-- <div data-color="#442e93"
            class="card-channels-item-hm hp-mod-card-hover-hm J_ChannelsItem align-left-hm card-channels-length-5-hm responsive-layout-hm">
            <a href="#" class="card-channels-link-hm J_ChannelsLink-hm">
                <div class="card-channels-icon-hm align-left-hm">
                    <div class="card-channels-img-wrap-hm">
                        <img class="image-hm" src="download.jpg" alt="ShopAt">
                    </div>
                </div>
                <div class="card-channels-name-hm inline-hm align-left-hm one-line-hm break-line-hm ">
                    <div class="text-wrap-hm text-top-hm">DarazMall</div>
                    <div class="text-wrap-hm text-bottom-hm"></div>
                </div>
            </a>
        </div> --}}
    </div>
</div>
<div class="page-content">

    <!--product ad start-->

    <section class="banner-row pt-5 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="position-relative rounded overflow-hidden">
                        <!-- Background -->
                        <img class="img-fluid hover-zoom" src="{{ asset('images/electronic/product-ad/01.jpg')   }}"
                            alt="">
                        <!-- Body -->
                        <div class="position-absolute top-50 pl-5">
                            <h6 class="text-white">Digital World</h6>
                            <!-- Heading -->
                            <h3 class="text-white font-w-7">Exchange <br>
                                Deals</h3>
                            <!-- Link --> <a class="more-link text-white" href="#">Shop Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 mt-5 mt-md-0">
                    <div class="position-relative rounded overflow-hidden">
                        <!-- Background -->
                        <img class="img-fluid hover-zoom" src="{{ asset('images/electronic/product-ad/02.jpg') }}"
                            alt="">
                        <!-- Body -->
                        <div class="position-absolute top-50 pl-5">
                            <h6 class="text-white">Todays Deals</h6>
                            <!-- Heading -->
                            <h3 class="font-w-7 text-white">Appliances <br>
                                Special</h3>
                            <!-- Link --> <a class="more-link text-white" href="#">Shop Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12 mt-5 mt-lg-0 d-md-none d-lg-block">
                    <div class="position-relative rounded overflow-hidden">
                        <!-- Background -->
                        <img class="img-fluid hover-zoom" src="{{ asset('images/electronic/product-ad/03.jpg') }}"
                            alt="">
                        <!-- Body -->
                        <div class="position-absolute top-50 pl-5">
                            <h6 class="text-dark">Hot Deals</h6>
                            <!-- Heading -->
                            <h3 class="font-w-7">Bluetooth<br>
                                Speaker</h3>
                            <!-- Link --> <a class="more-link text-dark" href="#">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--product ad end-->

    <!--product start-->
    @php
    $count = 0
    @endphp
    @foreach($SectionData as $rsSectionData)
    <section class="pb-0 pt-5">
        <div class="container">
            <div class="product-block product-block-div">
                <div class="row justify-content-left text-left row_title">
                    <h2 class="mb-0 font-w-5 bg-dark-blue">{{ $Sections[$count]->name }}</h2>
                </div>
                <div class="row">
                    <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="5"
                        data-md-items="2" data-sm-items="1">
                        @foreach($rsSectionData as $childSectionData)
                        <div class="item">
                            <div class="card product-card card--default">

                                <a class="card-img-hover d-block"
                                    href="/{{ $childSectionData->url_name }}_{{  $childSectionData->pid }}.htm">
                                    <img class="card-img-top"
                                        src="{{ asset('uploads/product_image/') }}/product_{{ $childSectionData->pid }}_1.jpg"
                                        alt="..." width="250" height="200">
                                </a>
                                <div class="card-icons">
                                    <div class="card-icons__item">
                                        {{--                            <a href="/{{ $childSectionData->url_name }}_{{  $childSectionData->pid }}.htm"
                                        data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to
                                        wishlist"> <i class="lar la-heart"></i> </a>--}}
                                    </div>
                                    <div class="card-icons__item">
                                        {{--                            <a href="/{{ $childSectionData->url_name }}_{{  $childSectionData->pid }}.htm"
                                        data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick
                                        View"><span data-target="#quick-view" data-toggle="modal"> <i
                                                class="ion-ios-search-strong"></i></span> </a>--}}
                                    </div>
                                    <div class="card-icons__item">
                                        {{--                            <a href="/{{ $childSectionData->url_name }}_{{  $childSectionData->pid }}.htm"
                                        data-toggle="tooltip" data-placement="left" title=""
                                        data-original-title="Compare"> <i class="las la-random"></i> </a>--}}
                                    </div>
                                </div>
                                <div class="card-info">
                                    <div class="card-body">
                                        <div class="product-title font-w-4"><a class="link-title"
                                                href="/{{ $childSectionData->url_name }}_{{  $childSectionData->pid }}.htm">{{ $childSectionData->pname }}</a>
                                        </div>
                                        <div class="mt-1">
                                            <span class="product-price text-dark">
                                                <!-- <del class="text-muted">Rs:{{ $childSectionData->sale_price}}/-
                            </del> -->
                                                Rs:{{ $childSectionData->sale_price }}/-
                                            </span>
                                            <div class="star-rating"><i class="las la-star"></i><i
                                                    class="las la-star"></i><i class="las la-star"></i><i
                                                    class="las la-star"></i><i class="las la-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <div class="product-link d-flex align-items-center justify-content-center">
                                            {{--                            <button class="btn-cart btn btn-yellow-dark mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart--}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @php $count+=1 @endphp
    </section>
    @endforeach


    <!--product end-->

    <!--product start-->

    <section class="pb-0 pt-5" style="padding-bottom: -520px !important;">
      <div class="container" style="margin-bottom: 50px !important;">
          <div class="product-block product-block-div">
              <div class="row justify-content-left text-left row_title"><h2 class="mb-0 font-w-5 bg-dark-blue">Best Sellers</h2></div>
              <div class="row">
                  <div data-dots="false" data-nav="true" data-items="5" data-md-items="2" data-sm-items="1" class="owl-carousel no-pb owl-2 owl-loaded owl-drag">
                      <div class="owl-stage-outer">
                          <div class="owl-stage" style="transform: translate3d(-1080px, 0px, 0px); transition: all 0s ease 0s; width: 3672px; margin-top: 25px;">
                              <div class="owl-item cloned" style="width: 216px;">
                                  <div class="item">
                                      <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                          <div class="card-official-stores-brand-overlay-hm"></div>
                                          <div class="card-official-stores-brand-img-hm">
                                              <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-shop-img-hm">
                                              <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-h1-hm">Pampers</div>
                                          <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="owl-item cloned" style="width: 216px;">
                                  <div class="item">
                                      <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                          <div class="card-official-stores-brand-overlay-hm"></div>
                                          <div class="card-official-stores-brand-img-hm">
                                              <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-shop-img-hm">
                                              <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-h1-hm">Pampers</div>
                                          <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="owl-item cloned" style="width: 216px;">
                                  <div class="item">
                                      <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                          <div class="card-official-stores-brand-overlay-hm"></div>
                                          <div class="card-official-stores-brand-img-hm">
                                              <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-shop-img-hm">
                                              <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-h1-hm">Pampers</div>
                                          <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                                      </a>
                                  </div>
                              </div>
                              <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                  <div class="card-official-stores-brand-overlay-hm"></div>
                                  <div class="card-official-stores-brand-img-hm">
                                      <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-shop-img-hm">
                                      <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-h1-hm">Pampers</div>
                                  <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                              </a>

                              <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                  <div class="card-official-stores-brand-overlay-hm"></div>
                                  <div class="card-official-stores-brand-img-hm">
                                      <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-shop-img-hm">
                                      <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-h1-hm">Pampers</div>
                                  <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                              </a>
                              <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                  <div class="card-official-stores-brand-overlay-hm"></div>
                                  <div class="card-official-stores-brand-img-hm">
                                      <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-shop-img-hm">
                                      <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-h1-hm">Pampers</div>
                                  <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                              </a>
                              <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                  <div class="card-official-stores-brand-overlay-hm"></div>
                                  <div class="card-official-stores-brand-img-hm">
                                      <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-shop-img-hm">
                                      <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-h1-hm">Pampers</div>
                                  <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                              </a>
                              <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                  <div class="card-official-stores-brand-overlay-hm"></div>
                                  <div class="card-official-stores-brand-img-hm">
                                      <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-shop-img-hm">
                                      <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-h1-hm">Pampers</div>
                                  <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                              </a>
                              <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                  <div class="card-official-stores-brand-overlay-hm"></div>
                                  <div class="card-official-stores-brand-img-hm">
                                      <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-shop-img-hm">
                                      <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                  </div>
                                  <div class="card-official-stores-h1-hm">Pampers</div>
                                  <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                              </a>

                              <div class="owl-item cloned" style="width: 216px;">
                                  <div class="item">
                                      <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                          <div class="card-official-stores-brand-overlay-hm"></div>
                                          <div class="card-official-stores-brand-img-hm">
                                              <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-shop-img-hm">
                                              <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-h1-hm">Pampers</div>
                                          <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="owl-item cloned" style="width: 216px;">
                                  <div class="item">
                                      <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                          <div class="card-official-stores-brand-overlay-hm"></div>
                                          <div class="card-official-stores-brand-img-hm">
                                              <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-shop-img-hm">
                                              <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-h1-hm">Pampers</div>
                                          <p class="card-official-stores-p-hm">Mother &amp; Baby 15</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="owl-item cloned" style="width: 216px;">
                                  <div class="item">
                                      <a class="card-official-stores-box-hm hp-mod-card-hover-hm align-left-hm" href="#">
                                          <div class="card-official-stores-brand-overlay-hm"></div>
                                          <div class="card-official-stores-brand-img-hm">
                                              <img src="https://static-01.daraz.pk/original/c0cbcc892d9217270613bedfe9930423.jpg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-shop-img-hm">
                                              <img src="https://static-01.daraz.pk/other/shop/8ad709a5009e4539334293846e1626bf.jpeg" class="hm-image-hm" alt="Pampers" />
                                          </div>
                                          <div class="card-official-stores-h1-hm">Pampers</div>
                                          <p class="card-official-stores-p-hm">Mother &amp; Baby</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="owl-nav">
                          <button type="button" role="presentation" class="owl-prev">
                              <span aria-label="Previous">‹</span></button>
                              <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                      </div>
                      
                   
                      <div class="owl-dots"></div>
                  </div>
              </div>
          </div>
      </div>
  </section>

</div>
@endsection
@section('customJS')

<script>
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });

</script>


@endsection
