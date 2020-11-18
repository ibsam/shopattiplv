@extends('layouts.master')

@section('content') 


<div class="page-content">

<!--product details start-->

<section>
  <div class="container">
    <div class="row">
      <my-com></my-com>
      <div class="col-lg-6 col-12 mt-5 mt-lg-0">
        <div class="product-details">
          <h1 class="h4 mb-0 font-w-6">Unpaired Running Shoes</h1>
          <div class="star-rating mb-4"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
          </div> <span class="product-price h5 text-pink">$25.00 <del class="text-muted h6">$35.00</del></span>
          <ul class="list-unstyled my-3">
            <li><small>Availibility: <span class="text-green"> In Stock</span> </small>
            </li>
            <li class="font-w-4"><small>Categories :<span class="text-muted"> womens, clothing, dresses, footwear</span></small>
            </li>
          </ul>
          <p class="mb-4 desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. vulputate adipiscing cursus eu, suscipit id nulla.</p>
          <div class="d-sm-flex align-items-center mb-5">
            <div class="d-flex align-items-center mr-sm-4">
              <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
              </button>
              <input class="form-product" type="number" name="form-product" value="1">
              <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
              </button>
            </div>
            <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect02">
              <option selected="">Size</option>
              <option value="1">XS</option>
              <option value="2">S</option>
              <option value="3">M</option>
              <option value="3">L</option>
              <option value="3">XL</option>
              <option value="3">XXL</option>
            </select>
            <div class="d-flex text-center ml-sm-4 mt-3 mt-sm-0">
              <div class="form-check pl-0 mr-2">
                <input type="radio" class="form-check-input" id="color-filter1" name="Radios">
                <label class="form-check-label" for="color-filter1" data-bg-color="#ffc107" style="background-color: rgb(255, 193, 7);"></label>
              </div>
              <div class="form-check pl-0 mr-2">
                <input type="radio" class="form-check-input" id="color-filter2" name="Radios" checked="">
                <label class="form-check-label" for="color-filter2" data-bg-color="#6d5b97" style="background-color: rgb(109, 91, 151);"></label>
              </div>
              <div class="form-check pl-0 mr-2">
                <input type="radio" class="form-check-input" id="color-filter3" name="Radios">
                <label class="form-check-label" for="color-filter3" data-bg-color="#88b04b" style="background-color: rgb(136, 176, 75);"></label>
              </div>
              <div class="form-check pl-0">
                <input type="radio" class="form-check-input" id="color-filter4" name="Radios">
                <label class="form-check-label" for="color-filter4" data-bg-color="#23a5a8" style="background-color: rgb(35, 165, 168);"></label>
              </div>
            </div>
          </div>
          <div class="d-sm-flex align-items-center mt-5">
            <button class="btn btn-primary btn-animated mr-sm-3 mb-3 mb-sm-0"><i class="las la-shopping-cart mr-2"></i>Add To Cart</button>
            <a class="btn btn-animated btn-dark" href="#"> <i class="lar la-heart mr-2 ic-1-2x"></i>Add To Wishlist
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

<!--product details end-->


<!--tab start-->

<section class="pt-0 pb-8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tab product-tab">
          <!-- Nav tabs -->
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active ml-0" id="nav-tab1" data-toggle="tab" href="#tab3-1" role="tab" aria-selected="true">Description</a>
              <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab3-2" role="tab" aria-selected="false">Specification</a>
              <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab3-3" role="tab" aria-selected="false">Ratings and Reviews</a>
            </div>
          </nav>
          <!-- Tab panes -->
          <div class="tab-content pt-5 p-0">
            <div role="tabpanel" class="tab-pane fade show active" id="tab3-1">
              <div class="row align-items-center">
                
                <div class="col-md-12">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Mauris vel tellus non nunc mattis lobortis. vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. </p>
                  <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit.</p> 
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab3-2">
              <table class="table table-bordered mb-0">
                <tbody>
                  <tr>
                    <td>Size</td>
                    <td>Small, Medium, Large &amp; Extra Large</td>
                  </tr>
                  <tr>
                    <td>Color</td>
                    <td>Yellow, Red, Blue, Green &amp; Black</td>
                  </tr>
                  <tr>
                    <td>Chest</td>
                    <td>38 inches</td>
                  </tr>
                  <tr>
                    <td>Waist</td>
                    <td>20 cm</td>
                  </tr>
                  <tr>
                    <td>Length</td>
                    <td>35 cm</td>
                  </tr>
                  <tr>
                    <td>Fabric</td>
                    <td>Cotton, Silk &amp; Synthetic</td>
                  </tr>
                  <tr>
                    <td>Warranty</td>
                    <td>6 Months</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab3-3">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="bg-light-4 text-center p-5">
                    <h4>Based on 3 Reviews</h4>
                    <h5>Average</h5>
                    <h4>4.0</h4>
                    <h6>(03 Reviews)</h6>
                  </div>
                </div>
                <div class="col-md-6 mt-3 mt-lg-0">
                  <div class="rating-list">
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap mr-3">5 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ml-3">90%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap mr-3">4 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ml-3">60%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap mr-3">3 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ml-3">40%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap mr-3">2 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ml-3">20%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap mr-3">1 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ml-3">10%</span>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="comment-area mt-5">
                    <div class="content_title">
                        <h4>Comments</h4>
                    </div>
                    <ul class="list_none comment_list">
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="comment_user">
                                    <img src="{{ asset ('images/thumbnail/member1.png' ) }}" alt="user2">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex">
                                        <div class="meta_data">
                                            <h6><a href="#">Saraha Doe</a></h6>
                                            <div class="comment-time">March 5, 2020, 07:35 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="las la-arrow-left"></i> Reply</a>
                                        </div>
                                    </div>
                                    <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <ul class="children">
                            	<li class="comment_info">
                                    <div class="d-flex">
                                        <div class="comment_user">
                                            <img src="{{ asset ('images/thumbnail/member2.png' ) }}" alt="user3">
                                        </div>
                                        <div class="comment_content">
                                            <div class="d-flex align-items-md-center">
                                                <div class="meta_data">
                                                    <h6><a href="#">Stephen Smith</a></h6>
                                                    <div class="comment-time">April 19, 2020, 01:45 PM</div>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="comment-reply"><i class="las la-arrow-left"></i> Reply</a>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, ex, quisquam. Nulla excepturi sint iusto incidunt sed omnis expedita, commodi dolores. Debitis nemo animi quia deleniti commodi nesciunt illo.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="comment_user">
                                    <img src="{{ asset ('images/thumbnail/member3.png' ) }}" alt="user4">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex">
                                        <div class="meta_data">
                                            <h6><a href="#">Karla Anderson </a></h6>
                                            <div class="comment-time">may 25, 2020, 05:20 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="las la-arrow-left"></i> Reply</a>
                                        </div>
                                    </div>
                                    <p>Aliquam vehicula neque ac nibh suscipit ultrices. Morbi interdum accumsan arcu nec scelerisque. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
          <div class="mt-8 bg-light-4 rounded p-5">
                <div class="section-title mb-3">
                  <h4>Add a review</h4>
                </div>
                <form id="contact-form" class="row" method="post" action="contact.php" novalidate="true">
                  <div class="messages"></div>
                  <div class="form-group col-sm-6">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Your Name" required="" data-error="Name is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group col-sm-6">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Your Email Address" required="" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group clearfix col-12">
                    <select class="custom-select form-control">
                      <option value="">Rating -- Select</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <div class="form-group col-12">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Write Your Review" rows="4" required="" data-error="Please,leave us a review."></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary btn-animated mt-1">Post Review</button>
                  </div>
                </form>
              </div>
          <div></div>
        </div>
              
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--tab end-->


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
          <div class="item">
            <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-left-image.html"> <img class="card-img-top card-img-back" src="{{ asset ('images/product/p2.jpg' ) }}" alt="..."> <img class="card-img-top card-img-front" src="{{ asset ('images/product/p2_hover.jpg' ) }}" alt="..."> </a>
                      <div class="card-icons">
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                      </div>
                      <div class="card-info">
                        <div class="card-body">
                          <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Unpaired Running Shoes</a> </div>
                          <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                            <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                          </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                          <div class="product-link d-flex align-items-center justify-content-center">
                            <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                          </div>
                        </div>
                      </div>
                    </div>
          </div>
          <div class="item">
            <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-left-image.html"> <img class="card-img-top card-img-back" src="{{ asset ('images/product/p11.jpg' ) }}" alt="..."> <img class="card-img-top card-img-front" src="{{ asset ('images/product/p11_hover.jpg' ) }}" alt="..."> </a>
                      <div class="card-icons">
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                      </div>
                      <div class="card-info">
                        <div class="card-body">
                          <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Unpaired Running Shoes</a> </div>
                          <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                            <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                          </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                          <div class="product-link d-flex align-items-center justify-content-center">
                            <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                          </div>
                        </div>
                      </div>
                    </div>
          </div>
          <div class="item">
            <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-left-image.html"> <img class="card-img-top card-img-back" src="{{ asset ('images/product/p15.jpg' ) }}" alt="..."> <img class="card-img-top card-img-front" src="{{ asset ('images/product/p15_hover.jpg' ) }}" alt="..."> </a>
                      <div class="card-icons">
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                      </div>
                      <div class="card-info">
                        <div class="card-body">
                          <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Unpaired Running Shoes</a> </div>
                          <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                            <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                          </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                          <div class="product-link d-flex align-items-center justify-content-center">
                            <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                          </div>
                        </div>
                      </div>
                    </div>
          </div>
          <div class="item">
            <div class="card product-card card--default">
                        <div class="hot-label">Hot</div>
                        <a class="card-img-hover d-block" href="product-left-image.html"> <img class="card-img-top card-img-back" src="{{ asset ('images/product/p5.jpg' ) }}" alt="..."> <img class="card-img-top card-img-front" src="{{ asset ('images/product/p5_hover.jpg' ) }}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="item">
            <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-left-image.html"> <img class="card-img-top card-img-back" src="{{ asset ('images/product/p6.jpg' ) }}" alt="..."> <img class="card-img-top card-img-front" src="{{ asset ('images/product/p6_hover.jpg' ) }}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-left-image.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
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

<!--recent product end-->

</div>


@endsection
