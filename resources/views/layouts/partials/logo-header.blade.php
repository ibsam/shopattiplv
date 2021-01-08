 <div class="py-md-4 py-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-3 d-none d-md-flex align-items-center"> 
            @if (Request::segment(1) =='tipmart')
              <a class="navbar-brand logo d-none d-lg-block" href="/tipmart"> 
               <img class="img-fluid" src="{{ asset('images/tipmartlogo.png') }}" alt=""> 
              </a> 
            @else
              <a class="navbar-brand logo d-none d-lg-block" href="/"> 
                <img class="img-fluid" src="{{ asset('images/logo3.png') }}" alt=""> 
              </a> 
            @endif
             
          </div>
          <div class="col-md-8 col-lg-7 col-sm-10 col-10">
            <div class="right-nav align-items-center d-flex justify-content-end">
                @if (Request::segment(1) =='tipmart')
                    <form class="form-inline w-100" method="get" action="/tipmart/shop">
                @else
                            <form class="form-inline w-100" method="get" action="/shop">
                @endif



{{--                  @csrf--}}

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
