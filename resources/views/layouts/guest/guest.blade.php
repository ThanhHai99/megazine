<!DOCTYPE HTML>
<html>

<head>
	@include('layouts.guest.head')
</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		@include('layouts.guest.navbar')

		@yield('content')
	</div>

	@include('layouts.guest.script')

	@include("layouts.guest.handleEmail")
	
	@include('layouts.guest.processNews')

	</body>
</html>

