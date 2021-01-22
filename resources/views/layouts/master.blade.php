<!DOCTYPE html>
<html>
	<head>

		<!-- meta tags -->
		<meta charset="utf-8">
		<meta name="keywords" content="Shop At Tip - Multi-Vendor E-commerce Store" />
		<meta name="description" content="Shop At Tip - Multi-Vendor E-commerce Store" />
		<meta name="author" content="www.naufnetwork.com" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}"/>

		<!-- Title -->
		<title>Shop At Tip - Multi-Vendor E-commerce Store</title>

		<!-- Favicon Icon -->
		<link rel="shortcut icon" href="{{ asset( 'images/favicon.png' ) }}" />

		<!-- inject css start -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" defer/>
		<link href="{{ asset('css/theme-plugin.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/theme.min.css') }}" rel="stylesheet" />
		 <!-- <link href="{{ asset('css/custom-css.css') }}" rel="stylesheet" />  -->
	 	<!-- <link href="{{ asset('css/lightslider.min.css') }}" rel="stylesheet" />  -->
        <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
		<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">

		<!-- inject css end -->

		<!-- Js -->

	</head>

<body>
	@include('layouts.partials.header')
	<div>

		<div class="container">
			@yield('content')
		</div>
	</div>

{{--	   @include('layouts.newsletter')--}}
		@include('layouts.partials.footer')

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+923360310942", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
                pre_filled_message: "ShopAtTip I would Like Now About Product", // WhatsApp pre-filled message
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

</body>
</html>
