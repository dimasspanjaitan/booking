<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="{{asset('assets/img/logo.png')}}">
	<title>GBI Pelita Medan</title>
	<!-- Bootstrap core CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Fonts -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{asset('assets/css/mediumish.css')}}" rel="stylesheet">
	@stack('css')


	<meta property="og:title" content="GBI Pelita Medan" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="{{asset('assets/img/logo.png')}}" />
	<meta property="og:url" content="{{config('app.url')}}" />
	<meta property="og:description" content="Bertumbuh dalam Pemuridan" />

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v10.0&appId=842779533315359&autoLogAppEvents=1" nonce="J73hL5X4"></script>
</head>
<body>
	@include('components.header')

	<div class="container">
		@yield('content')
	</div> 
	<div style="padding-bottom: 120px"></div>
	@include('components.footer')

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>

	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	@stack('script')
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
</body>
</html>