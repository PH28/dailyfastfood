<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daily fastfood</title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('user/vendors/colorbox/example3/colorbox.css') }}">
	<link rel="stylesheet" href="{{ asset('user/rs-plugin/css/settings.css') }}">
	<link rel="stylesheet" href="{{ asset('user/rs-plugin/css/responsive.css') }}">
	<link rel="stylesheet" title="style" href="{{ asset('user/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/animate.css') }}">
	<link rel="stylesheet" title="style" href="{{ asset('user/css/huong-style.css') }}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"  crossorigin="anonymous"></script>

</head>
<body>

		@include('users.header')
	<div class="rev-slider">
		@yield('content')
	</div> <!-- .container -->
		@include('users.footer')
	

	<!-- include js files -->


	<script src="{{ asset('user/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="{{ asset('user/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
	<script src="{{ asset('user/vendors/colorbox/jquery.colorbox-min.js') }}"></script>
	<script src="{{ asset('user/vendors/animo/Animo.js') }}"></script>
	<script src="{{ asset('user/vendors/dug/dug.js') }}"></script>
	<script src="{{ asset('user/js/scripts.min.js') }}"></script>
	<script src="{{ asset('user/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('user/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('user/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('user/js/wow.min.js') }}"></script>
	<!--customjs-->
	<script src="{{ asset('user/js/custom2.js') }}"></script>


	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
		
	})
	</script>
	
	<script src="{{ asset('js/cart.js') }}"></script>
	@yield('test')
	<script src="{{ asset('js/test.js') }}"></script>
	
	
</body>
</html>


