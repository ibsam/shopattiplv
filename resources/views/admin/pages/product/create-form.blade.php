
@extends('admin/layouts/contentLayoutMaster')

@section('vendor-style')
        {{-- vendor css files --}}
       
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="https://demo.activeitzone.com/ecommerce/public/assets/css/aiz-core.css">
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
                  <form class="form" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-body">
                            <br>
                              <div class="row">

                                <div class="col-12">

                                <fieldset class="form-label-group
                                form-group position-relative has-icon-left">
                                <div class="demo-inline-spacing">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="General" value="1" name="brand_type_id" class="custom-control-input" checked="">
                                        <label class="custom-control-label" for="General">General</label>
                                    </div>
                                    <div class="custom-control custom-control-success custom-radio">
                                        <input type="radio" id="Groccery" value="2" name="brand_type_id" class="custom-control-input" >
                                        <label class="custom-control-label" for="Groccery">Groccery</label>
                                    </div>
                                    
                                </div>
                                @if ($errors->has('brand_type_id'))
                                <div class="brand_type_id">
                                    {{ $errors->first('brand_type_id') }}
                                </div>
                                @endif
                                </fieldset>

                                </div>
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

                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="customFile">Thumbnail Images(Upload Multiple files)</label>
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail_images[]" class="custom-file-input" id="imgInp">
                                            <label class="custom-file-label" for="customFile" id="imgLabel"></label>
                                        </div>
                                    </div>
                                </div>

                <div class="form-group row">
					<div class="col-md-3">
						<input type="text" class="form-control" value="Colors" >
					</div>
					<div class="col-md-8">
						<select class="color-choose" data-live-search="true" data-selected-text-format="count" name="colors[]" id="colors" multiple>
							@foreach (\App\ProductColor::orderBy('name', 'asc')->get() as $key => $color)
                            <option  value="{{ $color->color_code }}">{{ $color->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="col-md-1">
						<label class="aiz-switch aiz-switch-success mb-0">
							<input value="1" type="checkbox" name="colors_active">
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
                        <option value="Size">Size</option>
                        <option value="Fabric">Fabric</option>
						</select>
		            </div>
	        	</div>
				<div>
					<p>Choose the attributes of this product and then input values of each attribute</p>
					<br>
				</div>

				<div class="customer_choice_options" id="customer_choice_options">

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
    console.log(state.id);
  if (!state.id) { return state.text; }

  var $state = $('<span><span class="size-15px d-inline-block mr-2 rounded border" style="background:' + state.element.value + ';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>' + state.text + '</span></span>');
  console.log(state);
  return $state;
};

$(".color-choose").select2({
    width: "100%",
  templateResult: formatState
});



    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#displayHere').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}
var _URL = window.URL || window.webkitURL;
$("#imgInp").change(function(e) {
    var file, img;
    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function() {
            if(this.width >= 1200 && this.height >= 1200){
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
  readURL(this);
});


function add_more_customer_choice_option(i, name){
        $('#customer_choice_options').append('<div class="form-group row"><div class="col-md-3"><input type="hidden" name="choice_no[]" value="'+i+'"><input type="text" class="form-control" name="choice[]" value="'+name+'" placeholder="Choice Title" readonly></div><div class="col-md-8"><input type="text" class="form-control aiz-tag-input" name="choice_options_'+i+'[]" placeholder="Enter choice values" data-on-change="update_sku"></div></div>');

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
	 
	});

	$('input[name="unit_price"]').on('keyup', function() {
	   
	});

	$('input[name="name"]').on('keyup', function() {
	   
	});

	function delete_row(em){
		$(em).closest('.form-group row').remove();
	 
	}

    function delete_variant(em){
		$(em).closest('.variant').remove();
	}

	function update_sku(){
	 
	}

	$('#choice_attributes').on('change', function() {
		$('#customer_choice_options').html(null);
		$.each($("#choice_attributes option:selected"), function(){
            add_more_customer_choice_option($(this).val(), $(this).text());
        });
		 
	});


 </script>



{{-- vendor files --}}
@endsection
