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
                    <a class="nav-link active" href="index.php">Home</a>
                  </li>
                  <li class="nav-item dropdown position-static"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Categories</a>
                    <div class="dropdown-menu w-100"> 
                      <!-- Tabs -->

                      @if (\Request::is('/'))  
                      @php
                       $Categories = App\Category::with('childCategory')->select('id','name')->where('active',1)->where('category_type_id',1)->where('category_id',0)->get();
                      
                      @endphp
                      @else
                      @php 
                        $Categories = App\Category::with('childCategory')->select('id','name')->where('active',1)->where('category_type_id',2)->where('category_id',0)->get();
                      @endphp
                      @endif
                     
                      @php 
                        $count = 1
                      @endphp
                      <div class="container p-0">
                        <div class="row w-100 no-gutters">
                          <div class="col-lg-8 p-lg-3">
                            <div class="row">
                             
                              <div class="col-12 col-md-3 col-sm-6"> 
                                <!-- Heading -->
                                <!-- Links -->
                                
                                <ul class="list-unstyled mb-6 mb-md-0">
                                
                                @foreach($Categories as $Category)
                                  <li> <a href="#">{{ $Category->name }}</a></li>
                                @if($count % 8 == 0)
                                </ul> 
                                </div> 
                                <div class="col-12 col-md-3 col-sm-6">                              
                                <ul class="list-unstyled mb-6 mb-md-0">
                                @endif
                                @php $count+=1 @endphp
                               @endforeach
                                </ul>
                                
                              </div>
                            
                            </div>
                          </div>
                          <div class="col-lg-4 d-none d-lg-block pr-2"> <img class="img-fluid rounded-bottom rounded-top" src="{{ asset('images/header-img.jpg') }}" alt="..."> </div>
                        </div>
                      </div>
                      
                    </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{ asset('shop') }}">Shop</a>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="contact-us.php">Contact Us</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="tipmart.php"><img src="{{ asset('images/grocery-cart.png') }}"> Tip Mart</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <!--menu end--> 
        </div>
      </div>
    </div>