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
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Hình ảnh</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Số tập</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Phim hot</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Trạng thái</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Danh mục</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Thể loại</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Quốc gia</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												@foreach($list as $key => $cate)
												<tr class="odd">
													<td class="dtr-control sorting_1" tabindex="0">{{$key}}</td>
													<td>{{$cate->title}}</td>
													<td><img width="100" src="{{asset('uploads/movie/'.$cate->image)}}"></td>
													<td>{{$cate->sotap}}</td>
													<td>@if($cate->phim_hot==0)
															Không
														@else
															Có
														@endif
													</td>
													<td>{{$cate->slug}}</td>
													<td>{{$cate->category->title}}</td>
													<td>{{$cate->genre->title}}</td>
													<td>{{$cate->country->title}}</td>
													<td>
														{!! Form::open(['method'=>'DELETE','route'=>['movie.destroy',$cate->id],'onsubmit'=>'return confirm("Bạn có chắc muốn xóa?")']) !!}
														{!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
														<br></br>
														{!! Form::close() !!}
														<a href="{{route('movie.edit',$cate->id)}}" class="btn btn-warning">Sửa</a>
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