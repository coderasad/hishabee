<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{asset('public/frontend/img/fav.png')}}" />
	<title>@yield('title') | Code Fun</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/vendor/slick/slick.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/vendor/slick/slick-theme.min.css')}}" />
	<link href="{{asset('public/frontend/vendor/icons/feather.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet" />
</head>

<body>
	@include ('layouts.navBar')
  	@yield('content')

	<script src="{{asset('public/frontend/vendor/jquery/jquery.min.js')}}" type="9ef55dd56cdb8d002ab758dc-text/javascript"></script>
	<script src="{{asset('public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" type="9ef55dd56cdb8d002ab758dc-text/javascript"></script>
	<script type="9ef55dd56cdb8d002ab758dc-text/javascript" src="{{asset('public/frontend/vendor/slick/slick.min.js')}}"></script>
	<script></script>
	<script src="{{asset('public/frontend/js/api.js')}}" type="9ef55dd56cdb8d002ab758dc-text/javascript"></script>
	<script src="{{asset('public/frontend/js/osahan.js')}}" type="9ef55dd56cdb8d002ab758dc-text/javascript"></script>
	<script src="{{asset('public/frontend/js/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="9ef55dd56cdb8d002ab758dc-|49" defer=""></script>
	<script defer src="{{asset('public/frontend/js/static.cloudflareinsights.com/beacon.min.js')}}" data-cf-beacon='{"rayId":"5fee368779631a80","r":1,"version":"2020.11.6","si":10}'></script>	
</body>

</html>