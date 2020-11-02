<!DOCTYPE html>
<html>
<head>

	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="keywords" content="bootstrap 4, premium, multipurpose, ecommerce, html5, CSS" />
	<meta name="description" content="Bootstrap 4 Landing Page Template" />
	<meta name="author" content="www.themesground.com" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title -->
	<title>Shop At Tip - Multi-Vendor E-commerce Store</title>

	<!-- Favicon Icon -->
	<link rel="shortcut icon" href="{{ asset( 'images/favicon.png' ) }}" />

	<!-- inject css start -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" />


	<!-- inject css end -->

	<!-- Js -->
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>


	@include('layouts.header');

	<div class="container">
		@yield('content')
	</div>
	
	@include('layouts.newsletter');
	
	@include('layouts.footer');


</body>
</html>