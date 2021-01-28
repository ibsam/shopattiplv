@if($data->menubit == 1)
    <div class="custom-control custom-control-primary custom-switch">
        <!-- <p class="mb-50">Primary</p> -->
        <input type="checkbox" checked class="custom-control-input" id="customSwitch" disabled/>
        <label class="custom-control-label" for="customSwitch"></label>
    </div>
@else
    <div class="custom-control custom-control-primary custom-switch">
        
        <input type="checkbox" class="custom-control-input" id="" disabled/>
        <label class="custom-control-label" for="customSwitch"></label>
    </div>
@endif