@foreach($Slides as $slide)
    
    <div class="item" data-bg-img="{{ asset('uploads/slides_image/'.$slide->slug.'.jpg')}}">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
{{--            <div class="col py-8 pl-0">--}}
{{--                <div class="animated3"> <span class="dark-yellow d-inline-block text-white mb-0">Sale up to!</span> <br>--}}
{{--                    <h5 class="dark-red d-inline-block text-white font-w-6">30% Discount on</h5>--}}
{{--                </div>--}}
{{--                <h1 class="mt-4 animated3"><span>UA/32J</span><br>--}}
{{--                    Television</h1>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
@endforeach

