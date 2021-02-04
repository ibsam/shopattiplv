{{-- For submenu --}}
<ul class="menu-content">
  @if(isset($menu))
  @foreach($menu as $submenu)
      @php
        $user_id = auth()->user()->id;
          if( $user_id ==1)
          {
            @endphp
            <li class="{{ $submenu->slug === Route::currentRouteName() ? 'active' : '' }}">
                  <a href="{{isset($submenu->url) ? url($submenu->url):'javascript:void(0)'}}" class="d-flex align-items-center" target="{{isset($submenu->newTab) && $submenu->newTab === true  ? '_blank':'_self'}}">
                    @if(isset($submenu->icon))
                    <i  data-feather="{{$submenu->icon}}"></i>
                    @endif
                    <span class="menu-item">{{ __('locale.'.$submenu->name) }}</span>
                  </a>
                  @if (isset($submenu->submenu))
                  @include('admin/panels/submenu', ['menu' => $submenu->submenu])
                  @endif
                </li>
                @php

          }
          else
          {
            switch ( $submenu->name ) {
              case "All Products":
                @endphp
                
                <li class="{{ $submenu->slug === Route::currentRouteName() ? 'active' : '' }}">
                  <a href="{{isset($submenu->url) ? url($submenu->url):'javascript:void(0)'}}" class="d-flex align-items-center" target="{{isset($submenu->newTab) && $submenu->newTab === true  ? '_blank':'_self'}}">
                    @if(isset($submenu->icon))
                    <i  data-feather="{{$submenu->icon}}"></i>
                    @endif
                    <span class="menu-item">{{ __('locale.'.$submenu->name) }}</span>
                  </a>
                  @if (isset($submenu->submenu))
                  @include('admin/panels/submenu', ['menu' => $submenu->submenu])
                  @endif
                </li>
                
              @php
                break;
              
                
             
              
              default:
              
            }

          }

      @endphp
  
  @endforeach
  @endif
  

</ul>
