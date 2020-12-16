 <div class="py-md-4 py-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-3 d-none d-md-flex align-items-center"> <a class="navbar-brand logo d-none d-lg-block" href="index.php"> <img class="img-fluid" src="{{ asset('images/logo3.png') }}" alt=""> </a> </div>
          <div class="col-md-8 col-lg-7 col-sm-10 col-10">
            <div class="right-nav align-items-center d-flex justify-content-end">
              <form class="form-inline w-100" method="get" action="/shop">

{{--                  @csrf--}}
                <select class="custom-select rounded-left form-control d-none d-lg-inline d-md-inline">
                  <option selected>All Categories</option>
                  <option value="1">Men</option>
                  <option value="2">Women</option>
                  <option value="3">Kids</option>
                </select>
                <input class="form-control border-0 rounded-0 border-left col" type="text" name="search" placeholder="Enter Your Keyword" aria-label="Search"/>
                <button class="btn btn-yellow text-white col-auto rounded-right" type="submit"><i class="fa fa-search" aria-hidden="true"></i> </button>
              </form>
            </div>
          </div>
          <div class="col-md-4 col-lg-2 col-sm-2 col-2 pl-0">
            <headercart data="1"></headercart>
          </div>
        </div>
      </div>
    </div>
