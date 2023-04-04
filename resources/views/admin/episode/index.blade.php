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
										<table id="movietable" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
											<thead>
												<tr>
													<th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">ID</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Tên phim</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Tập phim</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Link phim</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												@foreach($list_epsode as $key => $episode)
												<tr class="odd">
													<td class="dtr-control sorting_1" tabindex="0">{{$key}}</td>
													<td>{{$episode->movie->title}}</td>
													<td>{{$episode->episode}}</td>
                                                    <td>{{$episode->linkphim}}</td>
													<td>
														{!! Form::open(['method'=>'DELETE','route'=>['episode.destroy',$episode->id],'onsubmit'=>'return confirm("Bạn có chắc muốn xóa?")']) !!}
														{!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
														<br></br>
														{!! Form::close() !!}
														<a href="{{route('episode.edit',$episode->id)}}" class="btn btn-warning">Sửa</a>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
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