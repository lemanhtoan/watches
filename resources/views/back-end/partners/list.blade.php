@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Đối tác</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Dánh sách Đối tác
						<a href="{!!url('admin/sliders/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới</button></a>
					</div>
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					    @elseif (Session()->has('flash_level'))
					    	<div class="alert alert-success">
						        <ul>
						            {!! Session::get('flash_massage') !!}	
						        </ul>
						    </div>
						@endif
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Tên đối tác</th>
										<th>Hình ảnh</th>
										<th>Đường dẫn</th>
										<th>Hành động</th>
									</tr>
								</thead>
								<tbody>
								@foreach($data as $row)
									<tr>
										<td>{!!$row->id!!}</td>
										<td>{!!$row->name!!}</td>
										<td> <img src="{!!url('uploads/advs/'.$row->images)!!}" alt="" width="200"> </td>
										<td>{!!$row->link!!}</td>
										<td style="width: 120px;">
											<a href="{!!url('admin/sliders/edit/'.$row->id)!!}" title="Sửa"><span class="glyphicon glyphicon-edit">Sửa</span> </a>
											<a href="{!!url('admin/sliders/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Bạn chắc muốn xóa?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection