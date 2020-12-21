@if (Request::segment(1) =='tipmart')
    @php
            $Categories = App\Category::with('childCategory.childCategory')->select('id','name','banner')->where('active',1)->where('category_type_id',2)->where('category_id',0)->where('menubit',1)->limit(3)->get();

    @endphp
@else
    @php
        $Categories = App\Category::with('childCategory.childCategory')->select('id','name','banner')->where('active',1)->where('category_type_id',1)->where('category_id',0)->where('menubit',1)->limit(3)->get();
    @endphp
@endif






 <div id="header-wrap" class="shadow-sm">
      <div class="container">
        <div class="row m-0">
          <!--menu start-->
          <div class="col p-0">
            <nav class="navbar navbar-expand-lg navbar-light position-static"> <a class="navbar-brand logo d-lg-none" href="index-2.html"> <img class="img-fluid" src="{{ asset('images/logo3.png') }}" alt=""> </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                  </li>
                  @foreach($Categories as $Category)
                  <li class="nav-item dropdown position-static"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">{{ $Category->name }}</a>
                    <div class="dropdown-menu w-100">
                      <!-- Tabs -->

                      @if (\Request::is('/tipmart'))
                      @php
                        $Categories = App\Category::with('childCategory')->select('id','name')->where('active',1)->where('category_type_id',2)->where('category_id',0)->get();

                      @endphp
                      @else
                      @php
                         $Categories = App\Category::with('childCategory')->select('id','name')->where('active',1)->where('category_type_id',1)->where('category_id',0)->get();
                      @endphp
                      @endif


                      @php
                           $count = 1
                      @endphp
                      <div class="container p-0">
                        <div class="row w-100 no-gutters">
                          <div class="col-lg-8 p-lg-3">
                            <div class="row">
                              @php $sub_cat =0; @endphp
                                @foreach($Category->childCategory as $childCategory )
                                @if($sub_cat < 4)
                                <div class="col-12 col-md-3 col-sm-6">
                                  <!-- Heading -->

                                  <div class="mb-2 font-w-5 text-link">{{$childCategory->name}}</div>
                                    <!-- Links -->

                                    <ul class="list-unstyled mb-6 mb-md-0">
                                    @php $child_sub_cat =0; @endphp
                                      @foreach($childCategory->childCategory as $sub_child_cat)
                                    @if($child_sub_cat < 10)

                                                @if (Request::segment(1) =='tipmart')
                                                    <li> <a href="/tipmart/category/{{$sub_child_cat->url_name}}.htm ">{{$sub_child_cat->name}}</a></li>
                                                @else
                                                    <li> <a href="/category/{{$sub_child_cat->url_name}}.htm ">{{$sub_child_cat->name}}</a></li>
                                                @endif

                                      @php $child_sub_cat++; @endphp
                                      @endif
                                      @endforeach
                                    </ul>
                                </div>
                                @php $sub_cat++; @endphp
                                @endif
                                @endforeach

                            </div>
                          </div>
                          <div class="col-lg-4 d-none d-lg-block pr-2"> <img class="img-fluid rounded-bottom rounded-top" src="{{ asset('uploads/category_image/'.$Category->banner) }}" alt="..." width="390px" height="520px"> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                @endforeach

                    @if (Request::segment(1) =='tipmart')
                        <li class="nav-item"> <a class="nav-link" href="{{ asset('tipmart/shop') }}">Shop</a>
                        </li>
                    @else
                        <li class="nav-item"> <a class="nav-link" href="{{ asset('shop') }}">Shop</a>
                        </li>
                    @endif



                  <li class="nav-item"> <a class="nav-link" href="contact-us.php">Contact Us</a> </li>
{{--                  <li class="nav-item"> <a class="nav-link" href="tipmart"><img src="{{ asset('images/grocery-cart.png') }}"> Tip Mart</a></li>--}}
                  <li class="nav-item"> <a class="nav-link" href="/tipmart"><img src="{{ asset('images/grocery-cart.png') }}"> Tip Mart</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <!--menu end-->
        </div>
      </div>
    </div>
