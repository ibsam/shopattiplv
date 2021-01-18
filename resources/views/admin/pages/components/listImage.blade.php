
@if($model == 'category')
 <img class="" src="{{ asset('uploads/'.$model.'_image/') }}/{{ $data->banner }}" alt="..." width="50" height="50">
 @elseif( $model == 'product' )
 <img class="" src="{{ asset('uploads/'.$model.'_image/') }}/{{ 'product_'.$data->id.'_1.jpg' }}" alt="..." width="50" height="50">
 @else 
<img class="" src="{{ asset('uploads/'.$model.'_image/') }}/{{ $data->logo }}" alt="..." width="50" height="50">  
@endif
 
 
