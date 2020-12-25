<!--product start-->

@foreach($SectionData as $rsSectionData)

    <section class="pb-0 pt-5">
        <div class="container">
            <div class="product-block product-block-div">
                <div class="row justify-content-left text-left row_title">
                    <h2 class="mb-0 font-w-5 bg-dark-blue">{{ $Sections[$loop->index]->name }}</h2>
                </div>
                <div class="row">
                    <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="5" data-md-items="2" data-sm-items="1">
                        @foreach($rsSectionData as $childSectionData)
                            <div class="item">
                                <div class="card product-card card--default">

                                    <a class="card-img-hover d-block" href="/{{ $childSectionData->url_name }}_{{  $childSectionData->pid }}.htm">
                                        <img class="card-img-top" src="{{ asset('uploads/product_image/') }}/product_{{ $childSectionData->pid }}_1.jpg" alt="..." width="250" height="200">
                                    </a>
                                    <div class="card-icons">
                                        <div class="card-icons__item">
                                            {{--                            <a href="/{{ $childSectionData->url_name }}_{{  $childSectionData->pid }}.htm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a>--}}
                                        </div>
                                        <div class="card-icons__item">
                                            {{--                            <a href="/{{ $childSectionData->url_name }}_{{  $childSectionData->pid }}.htm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a>--}}
                                        </div>
                                        <div class="card-icons__item">
                                            {{--                            <a href="/{{ $childSectionData->url_name }}_{{  $childSectionData->pid }}.htm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a>--}}
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-body">
                                            <div class="product-title font-w-4"><a class="link-title" href="/{{ $childSectionData->url_name }}_{{  $childSectionData->pid }}.htm">{{ $childSectionData->pname }}</a>
                                            </div>
                                            <div class="mt-1"> <span class="product-price text-dark"><del class="text-muted">{{ $childSectionData->sale_price}}</del>{{ $childSectionData->sale_price }}</span>
                                                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
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
    </section>
@endforeach
<!--product end-->
