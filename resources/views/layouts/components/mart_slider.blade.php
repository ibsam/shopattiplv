@foreach($Slides as $slide)

    <div class="item" data-bg-img="{{ asset('uploads/slides_image/'.$slide->slug.'.jpg') }}">
    </div>

@endforeach

