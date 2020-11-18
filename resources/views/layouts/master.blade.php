<!DOCTYPE html>
<html>

<body>

<div id="app">
	@include('layouts.partials.header')

	<div class="container">
		@yield('content')
	</div>
	</div>	
	@include('layouts.newsletter')
	
	@include('layouts.partials.footer')

	
</body>
</html>