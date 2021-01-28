
@extends('admin/layouts/contentLayoutMaster')

@section('vendor-style')
        {{-- vendor css files --}}
       
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}"> 
@endsection

@section('page-style')
         {{-- Page Css files --}}
         
@endsection

@section('content')
<style>
.active{
  display:block;
}
.deactive{
  display:none;
}
</style>
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">

              <div class="card-content">
                  <div class="card-body">
                  <form class="form" method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-body">
                            <br>
                              <div class="row">

                                <div class="col-12">

                                <fieldset class="form-label-group
                                form-group position-relative has-icon-left">
                                <div class="demo-inline-spacing">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="General" value="1" name="category_type_id" class="custom-control-input" checked="">
                                        <label class="custom-control-label" for="General">General</label>
                                    </div>
                                    <div class="custom-control custom-control-success custom-radio">
                                        <input type="radio" id="Groccery" value="2" name="category_type_id" class="custom-control-input" >
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
                                    <label for="name">Parent Category</label>
                                      <select class="select2 form-control form-control-lg" name="category_id" id="category">

                                          <option value="0,0,Category">Select Parent Category</option>
                                          @foreach($Categories as $Category)
                                              <option value="{{ $Category->id }},{{ $Category->category_level }},{{ $Category->level_name}}">({{$Category->level_name}}) <strong>{{ $Category->name }}</strong></option>                                           
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
                                  
                                  <div class="col-12">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-left">
                                      <input type="text" class="form-control"
                                      name="description"
                                      id="password" placeholder="Description" required="">
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
                                  <div class="col-12 deactive" id="commision">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-left">
                                      <input type="text" class="form-control"
                                      name="commision"
                                      id="password" placeholder="Commision in %" required="">
                                      <div class="form-control-position">
                                          <i class="feather icon-map"></i>
                                      </div>
                                      <label for="commision">Commision in %</label>
                                      @if ($errors->has('commision'))
                                      <div class="commision">
                                          {{ $errors->first('commision') }}
                                      </div>
                                      @endif
                                    </fieldset>

                                  </div>
                                  
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group pl-1">
                                        <label for="customFile">Category Image</label>
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
                                  
                                <div class="col-12  pt-2">
                                    <div class="custom-control custom-control-primary custom-switch ">
                                            <!-- <p class="mb-50">Primary</p> -->
                                        <input type="checkbox" class="custom-control-input" id="customSwitch" name="menubit" />
                                        <label class="custom-control-label" for="customSwitch">Show On Menu</label>

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
$("#category").change(function(){
  var parent_category = $(this).children('option:selected').val();
  var category = parent_category.split(',')[1];
  
  if(category == 2){
    $('#commision').removeClass('deactive');
  }
});

 </script>
{{-- vendor files --}}
@endsection
