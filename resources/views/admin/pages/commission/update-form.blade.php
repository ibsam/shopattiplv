
@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Edit Brand')

@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">

              <div class="card-content">
                  <div class="card-body">
                  <form class="form" method="POST" action="{{route('commission.update',$commission)}}"  enctype="multipart/form-data">
                  @method('PUT')
                    @csrf

                    <div class="form-body">
                            <br>
                              <div class="row">

                                <div class="col-12">

                                <fieldset class="form-label-group
                                form-group position-relative has-icon-left">
                                <div class="demo-inline-spacing">
                                    <div class="custom-control custom-control-success custom-radio">
                                        <input type="radio" id="active" value="1" name="status" class="custom-control-input" {{($commission->status==1) ? "checked" :''}}/>
                                        <label class="custom-control-label" for="active">Active</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="deactive" value="0" name="status" class="custom-control-input" {{($commission->status==0) ? "checked" :''}}>
                                        <label class="custom-control-label" for="deactive">Deactive</label>
                                    </div>
                                    
                                </div>
                                @if ($errors->has('status'))
                                <div class="status">
                                    {{ $errors->first('status') }}
                                </div>
                                @endif
                                </fieldset>

                                </div>
                                <div class="col-12">

                                <fieldset class="form-label-group
                                form-group position-relative has-icon-left">
                                    <input type="number" class="form-control"
                                    name="percentage" value="{{$commission->percentage}}"
                                    id="percentage" placeholder="percentage" required="">
                                    <div class="form-control-position">
                                        <i class="feather icon-user"></i>
                                    </div>
                                    <label for="percentage">Percentage</label>
                                    @if ($errors->has('percentage'))
                                    <div class="danger">
                                        {{ $errors->first('percentage') }}
                                    </div>
                                    @endif
                                </fieldset>

                                </div>
                                
                               
                            

                             
                                <div class="col-12">
                                <input type="submit" class="btn btn-primary mr-1 mb-1" value="Submit">
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
 </script>
{{-- vendor files --}}
@endsection
