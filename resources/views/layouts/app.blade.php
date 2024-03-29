<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Tempusdominus Bootstrap 4 -->
		<link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
		<!-- iCheck -->
		<link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
		<!-- JQVMap -->
		<link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css')}}">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
		<!-- summernote -->
		<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
		<!-- datatables -->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
		<!-- Favicons -->
		<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
		<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
		<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				@guest
				@if (Route::has('login'))
				<ul class="navbar-nav">
					<li class="nav-item d-none d-sm-inline-block">
						<a href="{{ route('login') }}" class="nav-link">{{ __('Login') }}</a>
					</li>
				</ul>
				@endif
				@if (Route::has('register'))
				<ul class="navbar-nav">
					<li class="nav-item d-none d-sm-inline-block">
						<a href="{{ route('register') }}" class="nav-link">{{ __('Register') }}</a>
					</li>
				</ul>
				@endif
				@else
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
				</ul>
				<!-- Right navbar links -->
				<ul class="navbar-nav ml-auto">
					<!-- Navbar Search -->
					<a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
					<li class="nav-item">
						<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
						</a>
					</li>
				</ul>
				@endguest
			</nav>
			<main class="py-4">
				@if(Auth::id())
				<div class="container">
					@include('layouts.navbar')
				</div>
				@endif
				@yield('content')
			</main>
		</div>
		<!-- /.navbar -->
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- ChartJS -->
		<script src="{{ asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
		<!-- Sparkline -->
		<script src="{{ asset('admin/plugins/sparklines/sparkline.js')}}"></script>
		<!-- JQVMap -->
		<script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
		<!-- daterangepicker -->
		<script src="{{ asset('admin/plugins/moment/moment.min.js')}}"></script>
		<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.jss')}}"></script>
		<!-- Summernote -->
		<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
		<!-- overlayScrollbars -->
		<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('admin/js/adminlte.js')}}"></script>
		<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
		<script type="text/javascript">
			$(document).ready( function () {
   				$('#movietable').DataTable();
			} );
		</script>
		<script type="text/javascript">
			$('.select-movie').change(function(){
				var id = $(this).val();
				$.ajax({
					url: "{{route('select-movie')}}",
					method: "GET",
					data:{id:id},
					success:function(data){
						$('#show_movie').html(data)
					}
				});
			})
		</script>
    </script>
	</body>
</html>