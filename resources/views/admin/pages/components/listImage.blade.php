
@if($model == 'category')
 <img class="" src="{{ asset('uploads/'.$model.'_image/') }}/{{ $data->banner }}" alt="..." width="50" height="50">
@else 
<img class="" src="{{ asset('uploads/'.$model.'_image/') }}/{{ $data->logo }}" alt="..." width="50" height="50">  
@endif
 
 
