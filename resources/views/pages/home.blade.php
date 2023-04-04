@extends('layout')
@section('content')
<!-- home -->
<section class="home">
	<!-- home bg -->
	<div class="owl-carousel home__bg">
		<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg2.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg3.jpg"></div>
		<div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div>
	</div>
	<!-- end home bg -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="home__title"><b>PHIM</b> HOT</h1>
				<button class="home__nav home__nav--prev" type="button">
				<i class="icon ion-ios-arrow-round-back"></i>
				</button>
				<button class="home__nav home__nav--next" type="button">
				<i class="icon ion-ios-arrow-round-forward"></i>
				</button>
			</div>
			<div class="col-12">
				<div class="owl-carousel home__carousel">
					@foreach($moviehot as $key => $hot)
					<div class="item">
						<!-- card -->
						<div class="card card--big">
							<div class="card__cover">
								<img src="{{asset('uploads/movie/' .$hot->image)}}" alt="">
								<a href="{{route('movies',['slug'=>$hot->slug, 'tap'=>$episode_movie->episode])}}" class="card__play">
								<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="{{route('movies',['slug'=>$hot->slug, 'tap'=>$episode_movie->episode])}}">{{$hot->title}}</a></h3>
								<span class="card__category">
								<a href="#">{{$hot->genre->title}}</a>
								</span>
							</div>
						</div>
						<!-- end card -->
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end home -->
<!-- content -->
<section class="content">
	<div class="content__head">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- content title -->
					<h2 class="content__title">DANH SÁCH PHIM</h2>
					<!-- end content title -->
					<!-- content tabs nav -->
					<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">PHIM MỚI</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">PHIM LẺ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">PHIM CHIẾU RẠP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">PHIM HOẠT HÌNH</a>
						</li>
					</ul>
					<!-- end content tabs nav -->
					<!-- content mobile tabs nav -->
					<div class="content__mobile-tabs" id="content__mobile-tabs">
						<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<input type="button" value="Danh mục phim">
							<span></span>
						</div>
						<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">PHIM LẺ</a></li>
								<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">PHIM CHIẾU RẠP</a></li>
								<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">PHIM HOẠT HÌNH</a></li>
							</ul>
						</div>
					</div>
					<!-- end content mobile tabs nav -->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<!-- content tabs -->
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
				<div class="row">
					@foreach($movie_new->take(8) as $key => $mov)
					<!-- card -->
					<div class="col-6 col-sm-12 col-lg-6">
						<div class="card card--list">
							<div class="row">
								<div class="col-12 col-sm-4">
									<div class="card__cover">
										<img src="{{asset('uploads/movie/' .$mov->image)}}">
										<a href="{{route('movies',['slug'=>$mov->slug, 'tap'=>$episode_movie->episode])}}" class="card__play">
										<i class="icon ion-ios-play"></i>
										</a>
									</div>
								</div>
								<div class="col-12 col-sm-8">
									<div class="card__content">
										<h3 class="card__title"><a href="{{route('movies',['slug'=>$mov->slug, 'tap'=>$episode_movie->episode])}}">{{$mov->title}}</a></h3>
										<span class="card__category">
										<a href="#">{{$mov->genre->title}}</a>
										</span>
										<div class="card__description">
											<p>{{$mov->description}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end card -->
					@endforeach
				</div>
			</div>
			<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
				<div class="row">
					@foreach($category_le as $key => $cate_le)
					@foreach($cate_le->movie->take(8) as $key => $mov)  
					<!-- card -->
					<div class="col-6 col-sm-12 col-lg-6">
						<div class="card card--list">
							<div class="row">
								<div class="col-12 col-sm-4">
									<div class="card__cover">
										<img src="{{asset('uploads/movie/' .$mov->image)}}">
										<a href="{{route('movies',['slug'=>$mov->slug, 'tap'=>$episode_movie->episode])}}" class="card__play">
										<i class="icon ion-ios-play"></i>
										</a>
									</div>
								</div>
								<div class="col-12 col-sm-8">
									<div class="card__content">
										<h3 class="card__title"><a href="{{route('movies',['slug'=>$mov->slug, 'tap'=>$episode_movie->episode])}}">{{$mov->title}}</a></h3>
										<span class="card__category">
										<a href="#">{{$mov->genre->title}}</a>
										</span>
										<div class="card__description">
											<p>{{$mov->description}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end card -->
					@endforeach
					@endforeach
				</div>
			</div>
			<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
				<div class="row">
					@foreach($category_chieurap as $key => $cate_chieurap)
					@foreach($cate_chieurap->movie->take(8) as $key => $mov)  
					<!-- card -->
					<div class="col-6 col-sm-12 col-lg-6">
						<div class="card card--list">
							<div class="row">
								<div class="col-12 col-sm-4">
									<div class="card__cover">
										<img src="{{asset('uploads/movie/' .$mov->image)}}">
										<a href="{{route('movies',['slug'=>$mov->slug, 'tap'=>$episode_movie->episode])}}" class="card__play">
										<i class="icon ion-ios-play"></i>
										</a>
									</div>
								</div>
								<div class="col-12 col-sm-8">
									<div class="card__content">
										<h3 class="card__title"><a href="{{route('movies',['slug'=>$mov->slug, 'tap'=>$episode_movie->episode])}}">{{$mov->title}}</a></h3>
										<span class="card__category">
											<a href="">{{$mov->genre->title}}</a>
										</span>
										<div class="card__description">
											<p>{{$mov->description}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end card -->
					@endforeach
					@endforeach
				</div>
			</div>
			<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
				<div class="row">
					@foreach($category_hoathinh as $key => $cate_hoathinh)
					@foreach($cate_hoathinh->movie->take(8) as $key => $mov)  
					<!-- card -->
					<div class="col-6 col-sm-12 col-lg-6">
						<div class="card card--list">
							<div class="row">
								<div class="col-12 col-sm-4">
									<div class="card__cover">
										<img src="{{asset('uploads/movie/' .$mov->image)}}">
										<a href="{{route('movies',['slug'=>$mov->slug, 'tap'=>$episode_movie->episode])}}" class="card__play">
										<i class="icon ion-ios-play"></i>
										</a>
									</div>
								</div>
								<div class="col-12 col-sm-8">
									<div class="card__content">
										<h3 class="card__title"><a href="{{route('movies',['slug'=>$mov->slug, 'tap'=>$episode_movie->episode])}}">{{$mov->title}}</a></h3>
										<span class="card__category">
											<a href="">{{$mov->genre->title}}</a>
										</span>
										<div class="card__description">
											<p>{{$mov->description}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end card -->
					@endforeach
					@endforeach
				</div>
			</div>
		</div>
		<!-- end content tabs -->
	</div>
</section>
<!-- end content -->
@endsection