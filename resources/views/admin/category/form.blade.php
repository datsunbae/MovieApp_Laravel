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
										<div class="card-header">Quản Lý Danh Mục</div>
										<div class="card-body">
											@if (session('status'))
											<div class="alert alert-success" role="alert">
												{{ session('status') }}
											</div>
											@endif
											@if(!isset($category))
											{!! Form::open(['route'=>'category.store','method'=>'POST']) !!}
											@else
											{!! Form::open(['route'=>['category.update',$category->id],'method'=>'PUT']) !!}
											@endif
											<div class="form-group">
												{!! Form::label('title', 'Tên danh mục', []) !!}
												{!! Form::text('title', isset($category) ? $category->title : '', ['class'=>'form-control','id'=>'slug','onkeyup'=>'ChangeToSlug()']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('slug', 'Đường dẫn', []) !!}
												{!! Form::text('slug', isset($category) ? $category->slug : '', ['class'=>'form-control','id'=>'convert_slug']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('description', 'Mô tả danh mục', []) !!}
												{!! Form::textarea('description', isset($category) ? $category->description : '', ['style'=>'resize:none', 'class'=>'form-control','id'=>'description']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('status', 'Trạng thái', []) !!}
												{!! Form::select('status', ['1'=>'Hiển thị','0'=>'Không hiển thị'], isset($category) ? $category->status : '', ['class'=>'form-control']) !!}
											</div>
											@if(!isset($category))
											{!! Form::submit('Thêm Danh Mục', ['class'=>'btn btn-success']) !!}
											@else
											{!! Form::submit('Cập Nhật Danh Mục', ['class'=>'btn btn-success']) !!}
											@endif
											{!! Form::close() !!}
										</div>
										<table id="movietable" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
											<thead>
												<tr>
													<th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">ID</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Tên danh mục</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Mô tả</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Đường dẫn</th>
													<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Trạng thái</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												@foreach($list as $key => $cate)
												<tr id="{{$cate->id}}">
													<th scope="row">{{$key}}</th>
													<td>{{$cate->title}}</td>
													<td>{{$cate->description}}</td>
													<td>{{$cate->slug}}</td>
													<td>
														@if($cate->status)
														Hiển thị
														@else
														Không hiển thị
														@endif
													</td>
													<td>
														{!! Form::open(['method'=>'DELETE','route'=>['category.destroy',$cate->id],'onsubmit'=>'return confirm("Bạn có chắc muốn xóa?")']) !!}
														{!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
														<br></br>
														{!! Form::close() !!}
														<a href="{{route('category.edit',$cate->id)}}" class="btn btn-warning">Sửa</a>
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