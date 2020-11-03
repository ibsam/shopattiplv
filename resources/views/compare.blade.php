@extends('layouts.master')
@section('content')

<div class="page-content">

    <section class="compare-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <td class="table_title">Product Image</td>
                                <td><img src="{{ asset('images/product/p13.jpg') }}" alt="compare-img"></td>
                                <td><img src="{{ asset('images/product/p11.jpg') }}" alt="compare-img"></td>
                                <td><img src="{{ asset('images/product/p15.jpg') }}" alt="compare-img"></td>
                            </tr>
                            <tr>
                                <td class="table_title">Product Name</td>
                                <td><a href="#">Unpaired Running Shoes</a></td>
                                <td><a href="#">Unpaired Running Shoes</a></td>
                                <td><a href="#">Unpaired Running Shoes</a></td>
                            </tr>
                            <tr>
                                <td class="table_title">Price</td>
                                <td><span class="price">$45.00</span></td>
                                <td><span class="price">$55.00</span></td>
                                <td><span class="price">$68.00</span></td>
                            </tr>
                            <tr>
                                <td class="table_title">Rating</td>
                                <td>
                                    <div class="star-rating">
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i> 
                                    </div>
                                </td>
                                <td>
                                    <div class="star-rating">
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i> 
                                    </div>
                                </td>
                                <td>
                                    <div class="star-rating">
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table_title">Add To Cart</td>
                                <td><button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button></td>
                                <td><button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button></td>
                                <td><button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button></td>
                            </tr>
                            <tr>
                                <td class="table_title">Description</td>
                                <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, ex, quisquam. Nulla excepturi sint iusto incidunt sed omnis expedita, commodi dolores. Debitis nemo animi quia deleniti commodi nesciunt illo.</p></td>
                                <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, ex, quisquam. Nulla excepturi sint iusto incidunt sed omnis expedita, commodi dolores. Debitis nemo animi quia deleniti commodi nesciunt illo.</p></td>
                                <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, ex, quisquam. Nulla excepturi sint iusto incidunt sed omnis expedita, commodi dolores. Debitis nemo animi quia deleniti commodi nesciunt illo.</p></td>
                            </tr>
                            <tr>
                                <td class="table_title">Color</td>
                                <td>
                                    <div class="product-color-option">
                                        <span style="background-color:#ffc107"></span>
                                        <span style="background-color:#6d5b97"></span>
                                        <span style="background-color:#88b04b"></span>
                                    </div>
                                </td>
                                <td>
                                 <div class="product-color-option">
                                <span style="background-color:#17bbf8"></span>
                                        <span style="background-color:#ffc107"></span>
                                        <span style="background-color:#6d5b97"></span>
                                        </div>
                                </td>
                                <td>
                                    <div class="product-color-option">
                                        <span style="background-color:#f67129"></span>
                                        <span style="background-color:#17bbf8"></span>
                                        <span style="background-color:#ffc107"></span>
                                        <span style="background-color:#6d5b97"></span>
                                        <span style="background-color:#88b04b"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table_title">Sizes Available</td>
                                <td><span>S, M, L, XL</span></td>
                                <td><span>S, M, L, XL</span></td>
                                <td><span>S, M, L, XL</span></td>
                            </tr>
                            <tr>
                                <td class="table_title">Item Availability</td>
                                <td><span class="stock-in">In Stock</span></td>
                                <td><span class="stock-out">Out of Stock</span></td>
                                <td><span class="stock-out">In Stock</span></td>
                            </tr>
                            <tr>
                                <td class="table_title">Weight</td>
                                <td>0.3kg</td>
                                <td>0.5kg</td>
                                <td>0.7kg</td>
                            </tr>
                            <tr>
                                <td class="table_title">Dimensions</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>N/A</td>
                            </tr>
                            <tr>
                                <td class="table_title">Action</td>
                                <td>
                                    <a href="#"><span>Remove</span> <i class="fa fa-times"></i></a>
                                </td>
                                <td>
                                    <a href="#"><span>Remove</span> <i class="fa fa-times"></i></a>
                                </td>
                                <td>
                                    <a href="#"><span>Remove</span> <i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
        </div>
        
      </div>
      
    </div>
    
  </div>
    </section>


</div>

@endsection
