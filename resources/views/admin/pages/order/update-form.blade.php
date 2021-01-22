
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
                  <form class="form" method="POST" action="{{route('order.update',$order)}}" enctype="multipart/form-data">
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
