@extends('layout')
@section('content')
<!-- details -->
<section class="section details">
	<!-- details background -->
	<div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
	<!-- end details background -->
	<!-- details content -->
	<div class="container">
		<div class="row">
			<!-- title -->
			<div class="col-12">
				<h1 class="details__title">{{$movie->title}}</h1>
			</div>
			<!-- end title -->
			<!-- content -->
			<div class="col-10">
				<div class="card card--details card--series">
					<div class="row">
						<!-- card cover -->
						<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3">
							<div class="card__cover">
								<img src="{{asset('uploads/movie/' .$movie->image)}}">
							</div>
						</div>
						<!-- end card cover -->
						<!-- card content -->
						<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-9">
							<div class="card__content">
								<div class="card__wrap">
									<ul class="card__meta">
										<li><span>Danh mục:</span> <a href="#">{{$movie->category->title}}</a></li>
										<li><span>Quốc gia:</span> <a href="#">{{$movie->country->title}}</a></li>
										<li><span>Thể loại:</span> <a href="#">{{$movie->genre->title}}</a></li>
										<li><span>Tập phim:</span> <a href="#">{{$movie->sotap}}</a></li>
									</ul>
								</div>
								<div class="card__description card__description--details">
									{{$movie->description}}
								</div>
							</div>
						</div>
						<!-- end card content -->
					</div>
				</div>
			</div>
			<!-- end content -->
			<!-- player -->
			<div class="col-12 col-xl-6">
				{!! $episode_watch->linkphim !!}
			</div>
			<!-- end player -->
			<!-- accordion -->
			<div class="col-12 col-xl-6">
				<div class="accordion" id="accordion">
					@foreach($episode as $key => $eps)
					<a href="{{route('movies',['slug'=>$eps->movie->slug, 'tap'=>$eps->episode])}}">
						<div class="accordion__card">
							<div class="card-header">
								<button type="button">
								<span>Tập {{$eps->episode}}</span>
								</button>
							</div>
						</div>
					</a>
					@endforeach
				</div>
			</div>
			<!-- end accordion -->
		</div>
	</div>
	<!-- end details content -->
</section>
<!-- end details -->
@endsection