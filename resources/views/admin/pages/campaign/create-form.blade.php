
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
                  <form class="form" method="POST" action="{{route('campaign.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-body">
                            <br>
                              <div class="row">


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
                                      <input type="text" class="form-control"
                                      name="slug"
                                      id="password" placeholder="Slug" required=""/>
                                      <div class="form-control-position">
                                          <i class="feather icon-map"></i>
                                      </div>
                                      <label for="slug">Slug</label>
                                      @if ($errors->has('slug'))
                                      <div class="slug">
                                          {{ $errors->first('slug') }}
                                      </div>
                                      @endif
                                  </fieldset>

                                  </div>

                                  <div class="col-12">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-left">
                                    <label for="name"> Category</label>
                                      <select class="select2 form-control form-control-lg" name="category_id" id="category">

                                          <option value="0">Select Category</option>
                                          @foreach($Categories as $Category)
                                              <option value="{{ $Category->id }}">({{$Category->level_name}}) <strong>{{ $Category->name }}</strong></option>                                           
                                          @endforeach
                                                                                                       
                                      </select>
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

                                  <div class="col-lg-6 col-md-12">
                                    <div class="form-group pl-1">
                                        <label for="customFile">Campaign Banner</label>
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
                                <div class="col-lg-6 col-md-12">
                                    <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="text" class="form-control"
                                        name="price_start"
                                        id="password" placeholder="Minimum Price" required=""/>
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="slug">Minimum Price</label>
                                        @if ($errors->has('price_start'))
                                        <div class="slug">
                                            {{ $errors->first('price_start') }}
                                        </div>
                                        @endif
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="text" class="form-control"
                                        name="price_end"
                                        id="password" placeholder="Maximum Price" required=""/>
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="slug">Maximum Price</label>
                                        @if ($errors->has('price_end'))
                                        <div class="slug">
                                            {{ $errors->first('price_end') }}
                                        </div>
                                        @endif
                                    </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="date" id="fp-default" class="form-control flatpickr-basic flatpickr-input active" placeholder="YYYY-MM-DD" name="start_date">
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="slug">Start Date</label>
                                        @if ($errors->has('start_date'))
                                        <div class="slug">
                                            {{ $errors->first('start_date') }}
                                        </div>
                                        @endif
                                    </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <fieldset class="form-label-group
                                        form-group position-relative has-icon-left">
                                        <input type="date" id="fp-default" class="form-control flatpickr-basic flatpickr-input active" placeholder="YYYY-MM-DD" name="end_date">
                                        <div class="form-control-position">
                                            <i class="feather icon-map"></i>
                                        </div>
                                        <label for="slug">End Date</label>
                                        @if ($errors->has('end_date'))
                                        <div class="slug">
                                            {{ $errors->first('end_date') }}
                                        </div>
                                        @endif
                                    </fieldset>
                                </div>
                                <!-- </div> -->

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
  readURL(this,'displayHere',0);
});

var _URL = window.URL || window.webkitURL;
$("#thumImg").change(function(e) {
    var file, img;
    for(let i = 0; i<this.files.length;i++){
        if ((file = this.files[i])) {
            img = new Image();
            //alert('x');
            img.onload = function() {
                if(this.width >= 1200 && this.height >= 1200){
                    var $el = $('#thumImg');
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
        readURL(this,'thumbnail'+i,i);
    }
    
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
