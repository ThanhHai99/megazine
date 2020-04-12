<!DOCTYPE HTML>
<html>

<head>
	@include('head')
</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		@include('navbar')

		@yield('content')
	</div>

	@include('script')

	</body>
</html>

