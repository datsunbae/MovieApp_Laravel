<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">
		<!-- CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/nouislider.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/plyr.css')}}">
		<link rel="stylesheet" href="{{ asset('css/photoswipe.css')}}">
		<link rel="stylesheet" href="{{ asset('css/default-skin.css')}}">
		<link rel="stylesheet" href="{{ asset('css/main.css')}}">
		<!-- Favicons -->
		<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
		<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
		<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">
		<title>DoubleD - Online Movies, TV Shows & Cinema</title>
	</head>
	<body class="body">
		<!-- header -->
		<header class="header">
			<div class="header__wrap">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="header__content">
								<!-- header logo -->
								<a href="{{route('homepage')}}" class="header__logo">
								<img src="{{ asset('img/logo.svg')}}" alt="">
								</a>
								<!-- end header logo -->
								<!-- header nav -->
								<ul class="header__nav">
									<li class="header__nav-item">
										<a href="{{route('homepage')}}" class="header__nav-link">Trang chủ</a>
									</li>
									<!-- dropdown -->
									<li class="header__nav-item">
										<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh mục</a>
										<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
											@foreach($category as $key => $cate)
											<li class="mega"><a title="{{$cate->title}}" href="{{route('category',$cate->slug)}}">{{$cate->title}}</a></li>
											@endforeach
										</ul>
									</li>
									<!-- end dropdown -->
									<!-- dropdown -->
									<li class="header__nav-item">
										<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thể loại</a>
										<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
											@foreach($genre as $key => $gen)
											<li><a title="{{$gen->title}}" href="{{route('genre',$gen->slug)}}">{{$gen->title}}</a></li>
											@endforeach
										</ul>
									</li>
									<!-- end dropdown -->
									<!-- dropdown -->
									<li class="header__nav-item">
										<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quốc gia</a>
										<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
											@foreach($country as $key => $count)
											<li><a title="{{$count->title}}" href="{{route('country',$count->slug)}}">{{$count->title}}</a></li>
											@endforeach
										</ul>
									</li>
									<!-- end dropdown -->
								</ul>
								<!-- end header nav -->
								<!-- header auth -->
								<div class="header__auth">
									<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
									</button>
									<a href="{{route('signin')}}" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>Đăng nhập</span>
									</a>
								</div>
								<!-- end header auth -->
								<!-- header menu btn -->
								<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
								</button>
								<!-- end header menu btn -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header search -->
			<form action="#" class="header__search">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="header__search-content">
								<input type="text" placeholder="Tìm kiếm phim tại đây">
								<button type="button">search</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!-- end header search -->
		</header>
		<!-- end header -->
		@yield('content')
		<!-- footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<!-- footer list -->
					<div class="col-12 col-md-3">
						<h6 class="footer__title">Download Our App</h6>
						<ul class="footer__app">
							<li><a href="#"><img src="img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
							<li><a href="#"><img src="img/google-play-badge.png" alt=""></a></li>
						</ul>
					</div>
					<!-- end footer list -->
					<!-- footer list -->
					<div class="col-6 col-sm-4 col-md-3">
						<h6 class="footer__title">Resources</h6>
						<ul class="footer__list">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Pricing Plan</a></li>
							<li><a href="#">Help</a></li>
						</ul>
					</div>
					<!-- end footer list -->
					<!-- footer list -->
					<div class="col-6 col-sm-4 col-md-3">
						<h6 class="footer__title">Legal</h6>
						<ul class="footer__list">
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Security</a></li>
						</ul>
					</div>
					<!-- end footer list -->
					<!-- footer list -->
					<div class="col-12 col-sm-4 col-md-3">
						<h6 class="footer__title">Contact</h6>
						<ul class="footer__list">
							<li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
							<li><a href="mailto:support@moviego.com">support@flixgo.com</a></li>
						</ul>
						<ul class="footer__social">
							<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
							<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
							<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
							<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
						</ul>
					</div>
					<!-- end footer list -->
				</div>
			</div>
		</footer>
		<!-- end footer -->
		<!-- JS -->
		<script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('js/jquery.mousewheel.min.js')}}"></script>
		<script src="{{ asset('js/jquery.mCustomScrollbar.min.js')}}"></script>
		<script src="{{ asset('js/wNumb.js')}}"></script>
		<script src="{{ asset('js/nouislider.min.js')}}"></script>
		<script src="{{ asset('js/plyr.min.js')}}"></script>
		<script src="{{ asset('js/jquery.morelines.min.js')}}"></script>
		<script src="{{ asset('js/photoswipe.min.js')}}"></script>
		<script src="{{ asset('js/photoswipe-ui-default.min.js')}}"></script>
		<script src="{{ asset('js/main.js')}}"></script>
	</body>
</html>