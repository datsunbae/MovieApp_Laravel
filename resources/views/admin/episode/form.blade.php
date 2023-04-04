@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 2080.12px;">
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div id="example1_wrapper">
								<div class="row">
									<div class="col-sm-12">
										<a href="{{route('episode.index')}}" class="btn btn-primary">Danh Sách Tập Phim</a>
										<div class="card-header">Quản Lý Phim</div>
										<div class="card-body">
											@if(!isset($episode))
											{!! Form::open(['route'=>'episode.store','method'=>'POST']) !!}
											@else
											{!! Form::open(['route'=>['episode.update',$episode->id],'method'=>'PUT']) !!}
											@endif
											<div class="form-group">
												{!! Form::label('movie', 'Chọn phim', []) !!}
												{!! Form::select('movie_id', $list_movie, isset($episode) ? $episode->movie_id : '', ['class'=>'form-control select-movie']) !!}
											</div>
                                            <div class="form-group">
												{!! Form::label('link', 'Link phim', []) !!}
												{!! Form::text('link', isset($episode) ? $episode->linkphim : '', ['class'=>'form-control']) !!}
											</div>
											@if(isset($episode))
											<div class="form-group">
												{!! Form::label('episode', 'Tập phim', []) !!}
												{!! Form::text('episode', isset($episode) ? $episode->episode : '', ['class'=>'form-control',
												isset($episode) ? 'readonly' : '']) !!}
											@else
                                            <div class="form-group">
												{!! Form::label('episode', 'Tập phim', []) !!}
												<select name="episode" id="show_movie" class="form-control">
												</select>
											</div>
											@endif
											@if(!isset($movie))
											{!! Form::submit('Thêm tập phim', ['class'=>'btn btn-success']) !!}
											@else
											{!! Form::submit('Cập nhật tập Phim', ['class'=>'btn btn-success']) !!}
											@endif
											{!! Form::close() !!}
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
@endsection