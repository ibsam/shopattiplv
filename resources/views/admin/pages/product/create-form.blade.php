
@extends('admin/layouts/contentLayoutMaster')

@section('vendor-style')
        {{-- vendor css files --}}

    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/3.22.1/tagify.css" integrity="sha512-91wa7heHLbuVdMrSXbWceVZva6iWDFlkFHnM+9Sc+oXFpTgw1FCqdnuaGBJfDVuNSNl0DwDmeGeJSORB0HyLZQ==" crossorigin="anonymous" />    <!-- <link rel="stylesheet" href="{{ asset('assets/css/aiz-core.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset(mix('vendors/css/vendors.min.css')) }}" /> -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-rtl.min.css') }}"> -->
    <style>

        /* product varient custom css */

        .tagify {
        --tags-border-color: #e2e5ec;
        --tag-bg: #7367f0;
        --tag-hover: #7367f0;
        --tag-text-color: #fff;
        --tag-text-color--edit: #212529;
        --tag-pad: 0.3rem 0.5rem;
        --tag-inset-shadow-size: 1.1em;
        --tag-invalid-color: #d39494;
        --tag-invalid-bg: rgba(253, 57, 75, 0.5);
        --tag-remove-bg: rgba(253, 57, 75, 0.3);
        --tag-remove-btn-bg: none;
        --tag-remove-btn-bg--hover: #fd394b;
        --tag--min-width: 1ch;
        --tag--max-width: auto;
        --tag-hide-transition: 0.3s;
        --loader-size: 0.8em;
        }


        /*tagify tag input*/

        .aiz-tag-input {
        height: auto;
        padding: 0.465rem 1rem 0.2rem;
        }
        .aiz-tag-input .tagify__tag,
        .aiz-tag-input .tagify__input {
        margin: 0px 5px 5px 0px;
        }
        .aiz-tag-input .tagify__tag__removeBtn {
        font: 12px Serif;
        line-height: 1.5;
        }
        .aiz-tag-input .tagify__tag__removeBtn:hover + div > span {
        opacity: 1;
        }

        /*switch*/
        .aiz-switch input:empty {
        height: 0;
        width: 0;
        overflow: hidden;
        position: absolute;
        opacity: 0;
        }
        .aiz-switch input:empty ~ span {
        display: inline-block;
        position: relative;
        text-indent: 0;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        line-height: 24px;
        height: 21px;
        width: 40px;
        border-radius: 12px;
        }
        .aiz-switch input:empty ~ span:after,
        .aiz-switch input:empty ~ span:before {
        position: absolute;
        display: block;
        top: 0;
        bottom: 0;
        left: 0;
        content: " ";
        -webkit-transition: all 0.1s ease-in;
        transition: all 0.1s ease-in;
        width: 40px;
        border-radius: 12px;
        }
        .aiz-switch input:empty ~ span:before {
        background-color: #e8ebf1;
        }
        .aiz-switch input:empty ~ span:after {
        height: 17px;
        width: 17px;
        line-height: 20px;
        top: 2px;
        bottom: 2px;
        margin-left: 2px;
        font-size: 0.8em;
        text-align: center;
        vertical-align: middle;
        color: #f8f9fb;
        background-color: #fff;
        }
        .aiz-switch input:checked ~ span:after {
        background-color: var(--primary);
        margin-left: 20px;
        }
        .aiz-switch-secondary input:checked ~ span:after {
        background-color: var(--secondary);
        }
        .aiz-switch-success input:checked ~ span:after {
        background-color: var(--success);
        }
        .aiz-switch-info input:checked ~ span:after {
        background-color: var(--info);
        }
        .aiz-switch-warning input:checked ~ span:after {
        background-color: var(--warning);
        }
        .aiz-switch-danger input:checked ~ span:after {
        background-color: var(--danger);
        }
        .aiz-switch-light input:checked ~ span:after {
        background-color: var(--light);
        }
        .aiz-switch-dark input:checked ~ span:after {
        background-color: var(--dark);
        }

    </style>
@endsection

@section('page-style')
         {{-- Page Css files --}}

@endsection

@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">

              <div class="card-content">
                  <div class="card-body">
                    <form class="form" method="POST" action="{{route('product.store')}}" id="choice_form" enctype="multipart/form-data">
                        @csrf

                            <div class="form-body">
                                    <br>
                                <div class="row">

                                    @php
                                            $user_id = auth()->user()->id;
                                    
                                            $user = \App\User::findorfail($user_id);
                                            if( $user_id ==1)
                                            {
                                                @endphp
                                                <div class="col-12">
                                                    <fieldset class="form-label-group
                                                    form-group position-relative has-icon-left">
                                                    <div class="demo-inline-spacing">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="General" value="1" name="product_type_id" class="custom-control-input" checked="">
                                                            <label class="custom-control-label" for="General">General</label>
                                                        </div>
                                                        <div class="custom-control custom-control-success custom-radio">
                                                            <input type="radio" id="Groccery" value="2" name="product_type_id" class="custom-control-input" >
                                                            <label class="custom-control-label" for="Groccery">Groccery</label>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('product_type_id'))
                                                    <div class="product_type_id">
                                                        {{ $errors->first('product_type_id') }}
                                                    </div>
                                                    @endif
                                                    </fieldset>
                                                </div>
                                                @php

                                            }
                                        
                                    @endphp

                                   

                                    <div class="col-12">
                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="text" class="form-control"
                                        name="name"
                                        id="name" placeholder="Name" required="">
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                        <label for="name">Name</label>
                                        @if ($errors->has('name'))
                                        <div class="danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                        @endif
                                        </fieldset>
                                    </div>

                                    <div class="col-12">
                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <label for="name">Parent Category</label>
                                            <select class="select2 form-control form-control-lg" name="category_id">

                                                <option value="0,0,Category">Select Parent Category</option>
                                                @foreach($Categories as $Category)
                                                    <option value="{{ $Category->id }}" {{( $Category->category_level==3) ? '':'disabled' }}>({{$Category->level_name}}) <strong>{{ $Category->name }}</strong></option>

                                                @endforeach
                                            </select>
                                        @if ($errors->has('category_id'))
                                        <div class="category_id">
                                            {{ $errors->first('category_id') }}
                                        </div>
                                        @endif
                                        </fieldset>
                                    </div>

                                    <div class="col-12">
                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <label for="name">Select Brand</label>
                                            <select class="select2 form-control form-control-lg" name="brand_id">

                                                <option value="0,0,Category">Select brand</option>
                                                @foreach($Brands as $brand)
                                                    <option value="{{ $brand->id }}}}" >{{ $brand->name }}</option>

                                                    @endforeach
                                            </select>
                                        @if ($errors->has('product_type_id'))
                                        <div class="product_type_id">
                                            {{ $errors->first('product_type_id') }}
                                        </div>
                                        @endif
                                        </fieldset>
                                    </div>

                                    <div class="col-12">
                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <label for="tags">Tags</label>
                                        <input type="text" class="form-control aiz-tag-input" name="tags[]" placeholder="Type and hit enter to add a tag" required>
                                        <small class="text-muted">This is used for search. Input those words by which cutomer can find this product.</small>
                                        @if ($errors->has('tags'))
                                        <div class="tags">
                                            {{ $errors->first('tags') }}
                                        </div>
                                        @endif
                                        </fieldset>
                                    </div>

                                    <div class="col-12">
                                        <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                            <textarea type="text" class="form-control"
                                            name="description"
                                            id="password" placeholder="Description" required=""></textarea>
                                            <div class="form-control-position">
                                                <i class="feather icon-map"></i>
                                            </div>
                                            <label for="description">Description</label>
                                            @if ($errors->has('description'))
                                            <div class="description">
                                                {{ $errors->first('description') }}
                                            </div>
                                            @endif
                                        </fieldset>
                                    </div>


                                    <div class="row conatiner">
                                        <h4 class="card-title col-12" >Add Images</h4>
                                            <div class="col-lg-6 col-md-12">
                                                    <div class="form-group pl-1">
                                                        <label for="customFile">Main Image</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="logo" class="custom-file-input" id="imgInp">
                                                            <label class="custom-file-label" for="customFile" id="imgLabel"></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <img src="" id="displayHere" alt="" width="250" height="">
                                                    </div>
                                                </div>

                                                <!-- </div> -->

                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group pl-1">
                                                        <label for="customFile">Thumbnail Images(Upload 5 files)</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="thumbnail_images[]" class="custom-file-input" id="thumImg" multiple>
                                                            <label class="custom-file-label" for="customFile" id="imgLabel"></label>
                                                        </div>
                                                    </div>
                                                </div>

                                    </div>

                                    <div class="row col-md-12">


                                        <div class="form-group col-md-2">
                                            <img src="" id="thumbnail0" alt="" width="100" height="">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <img src="" id="thumbnail1" alt="" width="100" height="">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <img src="" id="thumbnail2" alt="" width="100" height="">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <img src="" id="thumbnail3" alt="" width="100" height="">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <img src="" id="thumbnail4" alt="" width="100" height="">
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h1 class="mb-0 h6"><strong>Add Variation</strong></h1>
                                    </div>
                                    <div class="container">

                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" value="Colors" disabled>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="color-choose" data-live-search="true" data-selected-text-format="count" name="colors[]" id="colors" multiple disabled>
                                                    @foreach (\App\ProductColor::orderBy('name', 'asc')->where('active',1)->get() as $key => $color)
                                                    <option  value="{{ $color->color_code }}">{{ $color->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1">
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input value="1" type="checkbox" name="colors_active" >
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" value="Attributes" disabled>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="choice_attributes[]" id="choice_attributes" class="select2 form-control" data-selected-text-format="count" data-live-search="true" multiple data-placeholder="Choose Attributes">
                                                    @foreach (\App\Attribute::all() as $key => $attribute)
                                                    <option value="{{ $attribute->name }}">{{ $attribute->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <p>Choose the attributes of this product and then input values of each attribute</p>
                                            <br>
                                        </div>

                                        <div class="customer_choice_options" id="customer_choice_options">

                                        </div>

                                    </div>

                                    <!-- varient -->

                                    <div class="container">

                                        <div class="form-group row">
                                            <label class="col-md-3 col-from-label">Unit price <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="number" min="0" value="0" step="0.01" placeholder="Unit price" name="unit_price" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-from-label">Purchase price<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="number" min="0" value="0" step="0.01" placeholder="Purchase price" name="purchase_price" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-from-label">Discount<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="number" min="0" value="0" step="0.01" placeholder="Discount" name="discount" class="form-control" required>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control select2" name="discount_type">
                                                    <option value="amount">Flat</option>
                                                    <option value="percent">Percent</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" id="quantity">
                                            <label class="col-md-3 col-from-label">Quantity <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="number" min="0" value="0" step="1" placeholder="Quantity" name="current_stock" class="form-control" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="sku_combination" id="sku_combination">

                                        </div>


                                    </div>

                                        <div class="card-header">
                                            <h1 class="mb-0 h6"><strong>Product Shipping Cost</strong></h1>
                                        </div>
                                        <div class="container">
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <h5 class="mb-0 h6">Free Shipping</h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-from-label">Status</label>
                                                        <div class="col-md-8">
                                                            <label class="aiz-switch aiz-switch-success mb-0">
                                                                <input type="radio" name="shipping_type" value="free" checked>
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <h5 class="mb-0 h6">Flat Rate</h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-from-label">Status</label>
                                                        <div class="col-md-8">
                                                            <label class="aiz-switch aiz-switch-success mb-0">
                                                                <input type="radio" name="shipping_type" value="flat_rate" checked>
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-from-label">Shipping cost</label>
                                                        <div class="col-md-8">
                                                            <input type="number" min="0" value="0" step="0.01" placeholder="Shipping cost" name="flat_shipping_cost" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>


                                  <div class="col-12">
                                    <input type="submit" class="btn btn-primary mr-1 mb-1 float-right" value="Submit">
                                  </div>



                                </div>
                            </div>
                        </form>
                    </div>
                </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection

@section('vendor-script')
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>


<script>

    function formatState (state) {
      if (!state.id) { return state.text; }

      var $state = $('<span><span class="size-15px d-inline-block mr-2 rounded border" style="background:' + state.element.value + ';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>' + state.text + '</span></span>');
      return $state;
    };

    $(".color-choose").select2({
        width: "100%",
      templateResult: formatState
    });

    $(".form-control select2").select2({
        width: "100%",
    });

    // function readURL(input) {
    function readURL(input,id,i) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
            $('#'+id).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[i]); // convert to base64 string
         }
      }
    var _URL = window.URL || window.webkitURL;
    $("#imgInp").change(function(e) {
        var file, img;
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function() {
                if(this.width >= 4000 && this.height >= 4000){
                    var $el = $('#imgInp');
                    $el.wrap('<form>').closest('form').get(0).reset();
                    $el.unwrap();
                    $('#imgLabel').text('');
                    imgLabel
                    alert(this.width + " " + this.height);
                }
            };
            img.onerror = function() {
                alert( "not a valid file: " + file.type);
            };
            img.src = _URL.createObjectURL(file);


        }
      readURL(this,'displayHere',0);
    });

    var _URL = window.URL || window.webkitURL;
    $("#thumImg").change(function(e) {
        var file, img;
        for(let i = 0; i<this.files.length;i++){
            if ((file = this.files[i])) {
                img = new Image();
                //alert('x');
                // img.onload = function() {
                //     if(this.width >= 1200 && this.height >= 1200){
                //         var $el = $('#thumImg');
                //         $el.wrap('<form>').closest('form').get(0).reset();
                //         $el.unwrap();
                //         $('#imgLabel').text('');
                //         imgLabel
                //         alert(this.width + " " + this.height);
                //     }
                // };
                // img.onerror = function() {
                //     alert( "not a valid file: " + file.type);
                // };
                img.src = _URL.createObjectURL(file);


            }
            readURL(this,'thumbnail'+i,i);
        }

    });

    function add_more_customer_choice_option(i, name){
        $('#customer_choice_options').append('<div class="form-group row"><div class="col-md-3"><input type="hidden" name="choice_no[]" value="'+i+'"><input type="text" class="form-control" name="choice[]" value="'+name+'" placeholder="Choice Title" readonly></div><div class="col-md-8"><input type="text" class="form-control aiz-tag-input" name="choice_options_'+i+'[]" placeholder="Enter choice values" data-on-change="update_sku"  ></div></div>');

        AIZ.plugins.tagify();
    }

	$('input[name="colors_active"]').on('change', function() {
	    if(!$('input[name="colors_active"]').is(':checked')){
			$('#colors').prop('disabled', true);
		}
		else{
			$('#colors').prop('disabled', false);
		}

	});

	$('#colors').on('change', function() {
        update_sku();
	});

	$('input[name="unit_price"]').on('keyup', function() {
	    update_sku();
	});

    $(document).on("keyup", ".aiz-tag-input ajax", function(){
        alert("here");

    });

	$('input[name="name"]').on('keyup', function() {
	    update_sku();
	});

	function delete_row(em){
		$(em).closest('.form-group row').remove();
        update_sku();
	}

    function delete_variant(em){
		$(em).closest('.variant').remove();
	}

	function update_sku(){
        // console.log($('#choice_form').serialize());
		$.ajax({
		   type:"POST",
           url:"{{ route('admin.products.sku_combination') }}",

           data:$('#choice_form').serialize(),
           beforeSend: function(){

            },
            success: function(data){
			   $('#sku_combination').html(data);
			   if (data.length > 1) {
				   $('#quantity').hide();
			   }
			   else {
					$('#quantity').show();
			   }
		   }
	   });
	}

	$('#choice_attributes').on('change', function() {
		$('#customer_choice_options').html(null);
		$.each($("#choice_attributes option:selected"), function(){
            add_more_customer_choice_option($(this).val(), $(this).text());
        });
        update_sku();

	});


 </script>



{{-- vendor files --}}
@endsection
