 <div class="header-top bg-blue pt-1">
      <div class="container">
        <div class="col-md-12">
          <div class="row justify-content-end">
            <div class="language-selection font-w-3">
              <div class="d-flex align-items-center justify-content-center justify-content-md-end">
              </div>
            </div>
            <ul class="header_list">
              <li><a href="#"><i class="icon fa fa-user"></i><span>Compare</span></a></li>
              <li><a href="checkout.php"><i class="icon fa fa-check"></i><span>Checkout</span></a></li>
              <!-- <li><a href="wishlist.php"><i class="icon fa fa-heart"></i><span>Wishlist</span></a></li> -->
              
              @if(Auth::guard('customers')->user())
                <li>
                  <form action="/customer_logout" method="post">
                    @csrf
                    <button><i class="icon fa fa-lock"></i><span>LogOut</span></button>                 
                  </form>
                </li>
              @else
              <li>
                <a href="/checkout"><i class="icon fa fa-lock"></i><span>Login</span></a>
              </li>
              @endif
              <li>
                <a href="/admin/vendor_register"><i class="icon fa fa-lock"></i><span>Seller Center</span></a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>