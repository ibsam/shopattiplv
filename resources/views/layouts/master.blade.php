<!DOCTYPE html>
<html>

	@include('layouts.partials.header')
<body>

<div id="app">

	<div class="container">
		@yield('content')
	</div>
</div>	
 
<!-- @include('layouts.newsletter') -->
	@include('layouts.partials.footer')

	
</body>
</html>