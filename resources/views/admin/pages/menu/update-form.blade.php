
@extends('admin/layouts/contentLayoutMaster')

@section('vendor-style')
        {{-- vendor css files --}}
       
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
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
                  <form class="form" method="POST" action="{{route('menu.update',$menu)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-body">
                            <br>
                              <div class="row">

                                <div class="col-12">

                                <fieldset class="form-label-group
                                form-group position-relative has-icon-left">
                                <div class="demo-inline-spacing">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="General" value="1" name="menu_type_id" class="custom-control-input" {{ ($menu->menu_type_id == 1)? 'checked' : '' }}>
                                        <label class="custom-control-label" for="General">General</label>
                                    </div>
                                    <div class="custom-control custom-control-success custom-radio">
                                        <input type="radio" id="Groccery" value="2" name="menu_type_id" class="custom-control-input"  {{ ($menu->menu_type_id == 2)? 'checked' : '' }}>
                                        <label class="custom-control-label" for="Groccery">Groccery</label>
                                    </div>
                                    
                                </div>
                                @if ($errors->has('menu_type_id'))
                                <div class="menu_type_id">
                                    {{ $errors->first('menu_type_id') }}
                                </div>
                                @endif
                                </fieldset>

                                </div>
                                  <div class="col-12">

                                    <fieldset class="form-label-group
                                    form-group position-relative has-icon-left">
                                      <input type="text" class="form-control"
                                      name="title"
                                      id="name" placeholder="Name" required="" value="{{$menu->name}}">
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
                                      name="destination_url"
                                      id="password" placeholder="destination_url" required="" value="{{ $menu->destination_url}}"/>
                                      <div class="form-control-position">
                                          <i class="feather icon-map"></i>
                                      </div>
                                      <label for="destination_url">Link</label>
                                      @if ($errors->has('destination_url'))
                                      <div class="destination_url">
                                          {{ $errors->first('destination_url') }}
                                      </div>
                                      @endif
                                  </fieldset>

                                  </div>
                                  <div class="col-12  pt-2 pb-2 pl-2">
                                    <div class="custom-control custom-control-primary custom-switch ">
                                            <!-- <p class="mb-50">Primary</p> -->
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name="active" {{($menu->active==1) ? "checked" :''}}/>
                                        <label class="custom-control-label" for="customSwitch1">Active</label>

                                    </div>
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

 </script>
{{-- vendor files --}}
@endsection
