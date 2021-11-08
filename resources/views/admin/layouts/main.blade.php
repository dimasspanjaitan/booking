<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<link rel="icon" href="{{asset('admin-assets/images/logo.png')}}">
		<title>Admin | GBI Pelita</title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/fontawesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/themify-icons/themify-icons.min.css')}}">
		<link href="{{asset('vendor/animate.css/animate.min.css" rel="stylesheet" media="screen')}}">
		<link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen')}}">
		<link href="{{asset('vendor/switchery/switchery.min.css" rel="stylesheet" media="screen')}}">
		<!-- end: MAIN CSS -->
		<!-- start: CUSTOM CSS -->
		<link rel="stylesheet" href="{{asset('admin-assets/css/styles.css')}}">
		<link rel="stylesheet" href="{{asset('admin-assets/css/plugins.css')}}">
		<link rel="stylesheet" href="{{asset('admin-assets/css/themes/theme-1.css')}}" id="skin_color" />
		<link href="{{asset('vendor/DataTables/css/DT_bootstrap.css')}}" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="{{ asset('admin-assets/css/datatables.button.min.css') }}">
		<!-- end: CUSTOM CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		@stack('css')
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		
	</head>
	<!-- end: HEAD -->
	<body>
		<div id="app">
			@include('admin.components.sidebar')
			<div class="app-content">
				@include('admin.components.header')
				<div class="main-content" >
					<div class="wrap-content container" id="container">
                        @yield('content')
					</div>
				</div>
			</div>
			@include('admin.components.footer')
			@include('admin.components.setting')
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('vendor/modernizr/modernizr.js')}}"></script>
		<script src="{{asset('vendor/jquery-cookie/jquery.cookie.js')}}"></script>
		<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
		<script src="{{asset('vendor/switchery/switchery.min.js')}}"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="{{asset('vendor/Chart.js/Chart.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CUSTOM JAVASCRIPTS -->
		<script src="{{asset('admin-assets/js/main.js')}}"></script>
		<script src="{{asset('admin-assets/js/datatables.min.js')}}"></script>
		<script src="{{ asset('admin-assets/js/datatables.button.min.js') }}"></script>
		<script src="{{ asset('admin-assets/js/datatables.html5.min.js') }}"></script>
		<script src="{{ asset('admin-assets/js/datatables.jszip.min.js') }}"></script>
		<script src="{{ asset('admin-assets/js/datatables.pdfmake.min.js') }}"></script>
		<script src="{{ asset('admin-assets/js/datatables.vfs.min.js') }}"></script>
		<script src="{{ asset('admin-assets/js/datatables.print.min.js') }}"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="{{asset('admin-assets/js/index.js')}}"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				// Index.init();                                                                                                                                                                              
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		@stack('script')
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	</body>
</html>
