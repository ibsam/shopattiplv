<!--footer start-->

<footer class="py-7 bg-dark-grey">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4"> <a class="footer-logo text-white h2 mb-0" href="index-2.html">
              <img class="img-fluid" src="{{ asset('images/logo3.png') }}" alt="">
            </a>
        <p class="my-3 text-muted pr-6">Shop At Tip is such a platform to build a border less marketplace both for physical and digital goods..</p>
        <ul class="list-inline mb-0">
          <li class="list-inline-item"><a class="text-muted ic-2x" href="https://www.facebook.com/shopattip.ecommercestore"><i class="la la-facebook"></i></a>
          </li>
          <li class="list-inline-item"><a class="text-muted ic-2x" href="#"><i class="la la-dribbble"></i></a>
          </li>
          <li class="list-inline-item"><a class="text-muted ic-2x" href="https://www.instagram.com/shopattip/"><i class="la la-instagram"></i></a>
          </li>
          <li class="list-inline-item"><a class="text-muted ic-2x" href="#"><i class="la la-twitter"></i></a>
          </li>
          {{-- <li class="list-inline-item"><a class="text-muted ic-2x" href="#"><i class="la la-linkedin"></i></a>
          </li> --}}
        </ul>
      </div>
      <div class="col-12 col-lg-8 mt-6 mt-lg-0">
        <div class="row">
          <div class="col-12 col-sm-4 navbar-white">
            <h6 class="mb-4 text-white font-w-5 txt-transform">Quick Links</h6>
            <ul class="navbar-nav list-unstyled mb-0">
              <li class="mb-3 nav-item"><a class="nav-link text-muted font-w-4" href="/customer_login">Login</a>
              </li>
                @if (Request::segment(1) =='tipmart')
                    <li class="mb-3 nav-item"><a class="nav-link text-muted font-w-4" href="/tipmart/shop">Shop</a>
                    </li>
                @else
                    <li class="mb-3 nav-item"><a class="nav-link text-muted font-w-4" href="/shop">Shop</a>
                    </li>
                @endif

              <li class="mb-3 nav-item"><a class="nav-link text-muted font-w-4" href="{{url('faq')}}">Faq</a>
              </li>
              <li class="nav-item"><a class="nav-link text-muted font-w-4" href="/contact-us">Contact Us</a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-sm-4 mt-6 mt-sm-0 navbar-white">
            <h6 class="mb-4 text-white font-w-5 txt-transform">Information</h6>
            <ul class="navbar-nav list-unstyled mb-0">
              <li class="mb-3 nav-item"><a class="nav-link text-muted font-w-4" href="{{url('termsOfService')}}">Term Of Service</a>
              </li>
              <li class="mb-3 nav-item"><a class="nav-link text-muted font-w-4" href="#">Support</a>
              </li>
              <!-- <li class="mb-3 nav-item"><a class="nav-link text-muted font-w-4" href="#">Orders History</a>
              </li> -->
              <li class="mb-3 nav-item"><a class="nav-link text-muted font-w-4" href="/my-account">Your Account</a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-sm-4 mt-6 mt-sm-0 navbar-white">
            <h6 class="mb-4 text-white font-w-5 txt-transform">Shopping Guide</h6>
            <ul class="navbar-nav list-unstyled mb-0">
              <li class="mb-3 nav-item"><a class="nav-link text-muted font-w-4" href="#">Return policy</a>
              </li>
              <li class="mb-3 nav-item"><a class="nav-link text-muted font-w-4" href="#">Where is my order?</a>
              </li>
              <li class="nav-item"><a class="nav-link text-muted font-w-4" href="#">Our Story</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <hr class="my-6 light-border">
    <div class="row text-muted text-center">
      <div class="col-md-7 font-w-4"><small>Copyright ©2020 Shopattip. All Rights Reserved.</small>
      </div>
      <!-- <div class="col-md-5 text-md-right mt-3 mt-md-0">
        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <a href="#">
              <img class="img-fluid" src="{{ asset('images/pay-icon/01.png') }}" alt="">
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <img class="img-fluid" src="{{ asset('images/pay-icon/02.png') }}" alt="">
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <img class="img-fluid" src="{{ asset('images/pay-icon/03.png') }}" alt="">
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <img class="img-fluid" src="{{ asset('images/pay-icon/04.png') }}" alt="">
            </a>
          </li>
        </ul>
      </div> -->
    </div>
  </div>
  
</footer>

  <!--footer end-->
  <!-- page wrapper end -->
@php
if(isset($Customer_detail)){
$id =json_encode($Customer_detail->id);
}else{
  $id=0;
}
@endphp


            <!-- Modal -->
      <div class="modal  ChangeShippingAddModal  fade view-modal"  id="parentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content ChangeShippingAddModal">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Shipping Address</h5>
              <button   class="btn btn-sm close" id="closeParentModal" data-dismiss="modal" >
                &times;
              </button>
            </div>
              <editaddressonorder :id="{{$id}}"
              ></editaddressonorder>
            </div>
            
          </div>
        </div>
      </div>

</div>



<!-- Quick View Modal -->
<!-- <div class="modal fade view-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="row align-items-center">
          <div class="col-lg-5 col-12"> <img class="img-fluid rounded" src="assets/images/product/large/01.html" alt="" /> </div>
          <div class="col-lg-7 col-12 mt-5 mt-lg-0">
            <div class="product-details">
              <h3 class="mb-0">Women Sweater</h3>
              <div class="star-rating mb-4"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
              <span class="product-price h4">$25.00 <del class="text-muted h6">$35.00</del></span>
              <ul class="list-unstyled my-4">
                <li class="mb-2">Availibility: <span class="text-muted"> In Stock</span> </li>
                <li>Categories :<span class="text-muted"> Women's</span> </li>
              </ul>
              <p class="mb-4">Nulla eget sem vitae eros pharetra viverra Nam vitae luctus ligula suscipit risus nec eleifend Pellentesque eu quam sem, ac malesuada</p>
              <div class="d-sm-flex align-items-center mb-5">
                <div class="d-flex align-items-center mr-sm-4">
                  <button class="btn-product btn-product-up"> <i class="las la-minus"></i> </button>
                  <input class="form-product" type="number" name="form-product" value="1">
                  <button class="btn-product btn-product-down"> <i class="las la-plus"></i> </button>
                </div>
                <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect01">
                  <option selected>Size</option>
                  <option value="1">XS</option>
                  <option value="2">S</option>
                  <option value="3">M</option>
                  <option value="3">L</option>
                  <option value="3">XL</option>
                  <option value="3">XXL</option>
                </select>
                <div class="d-flex text-center ml-sm-4 mt-3 mt-sm-0">
                  <div class="form-check pl-0 mr-3">
                    <input type="radio" class="form-check-input" id="color-filter01" name="Radios">
                    <label class="form-check-label" for="color-filter01" data-bg-color="#3cb371"></label>
                  </div>
                  <div class="form-check pl-0 mr-3">
                    <input type="radio" class="form-check-input" id="color-filter02" name="Radios" checked>
                    <label class="form-check-label" for="color-filter02" data-bg-color="#4876ff"></label>
                  </div>
                  <div class="form-check pl-0 mr-3">
                    <input type="radio" class="form-check-input" id="color-filter03" name="Radios">
                    <label class="form-check-label" for="color-filter03" data-bg-color="#0a1b2b"></label>
                  </div>
                  <div class="form-check pl-0">
                    <input type="radio" class="form-check-input" id="color-filter04" name="Radios">
                    <label class="form-check-label" for="color-filter04" data-bg-color="#f94f15"></label>
                  </div>
                </div>
              </div>
              <div class="d-sm-flex align-items-center mt-5">
                <button class="btn btn-primary btn-animated mr-sm-4 mb-3 mb-sm-0"><i class="las la-shopping-cart mr-1"></i>Add To Cart</button>
                <a class="btn btn-animated btn-dark" href="#"> <i class="lar la-heart mr-1"></i>Add To Wishlist</a> </div>
              <div class="d-sm-flex align-items-center border-top pt-4 mt-5">
                <h6 class="mb-sm-0 mr-sm-4">Share It:</h6>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i class="la la-facebook"></i></a> </li>
                  <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i class="la la-dribbble"></i></a> </li>
                  <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i class="la la-instagram"></i></a> </li>
                  <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i class="la la-twitter"></i></a> </li>
                  <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i class="la la-linkedin"></i></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->


<!--back-to-top start-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>

<!--back-to-top end-->

<!-- inject js start -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- <script src="assets/js/bootstrap.min.js"></script>  -->

<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- <script src="{{ asset('js/light-slider.js') }}"></script> -->
<!-- <script src="{{ asset('js/parallax.js') }}"></script> -->
<!-- <script src="{{ asset('js/magnific-popup.min.js') }}"></script> -->
<!-- <script src="{{ asset('js/jquery.countdown.min.js') }}"></script> -->
<!-- <script src="{{ asset('js/jquery.elevatezoom.js') }}"></script> -->
<!-- <script src="{{ asset('js/jquery.dd.min.js') }}"></script> -->
 {{-- <script src="{{ asset('js/validator.js') }}"></script>  --}}
<!-- <script src="{{ asset('js/wow.js') }}"></script> -->
<script src="{{ asset('js/theme-script.js') }}"></script>
<!-- <script src="{{ asset('js/custom.js') }}"></script> -->


<!-- <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script> -->
<script>
    $(document).ready(function(){
      $('select').select2({
  placeholder: 'Select an option',
  width:'100%'
});
        // $(".tb").click(function(){
        //     alert("now here");
        //
        //     $(".tb").removeClass("tb-active");
        //     $(this).addClass("tb-active");
        //
        //     current_fs = $(".active");
        //
        //     next_fs = $(this).attr('id');
        //     next_fs = "#" + next_fs + "1";
        //
        //     $("fieldset").removeClass("active");
        //     $(next_fs).addClass("active");
        //
        //     current_fs.animate({}, {
        //         step: function() {
        //             current_fs.css({
        //                 'display': 'none',
        //                 'position': 'relative'
        //             });
        //             next_fs.css({
        //                 'display': 'block'
        //             });
        //         }
        //     });
        // });

    });
</script>
<!-- inject js end -->

<!-- </body>
</html> -->
