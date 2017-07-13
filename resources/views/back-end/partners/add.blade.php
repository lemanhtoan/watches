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
				<h1 class="page-header"><small>Thêm mới</small></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body">
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
						<form action="" method="POST" role="form"  enctype="multipart/form-data">
				      		{{ csrf_field() }}

				      		<div class="form-group">
				      			<label for="input-id">Tên đối tác</label>
				      			<input type="text" name="name" class="form-control" value="">
				      		</div>

							<div class="form-group">
								<label for="input-id">Đường dẫn</label>
								<input type="text" name="link" class="form-control" value="">
							</div>

							<div class="form-group">
								<label for="input-id">Thứ tự</label>
								<input type="number" min="1" name="isort" class="form-control" value="">
							</div>

							<div class="form-group">
								<label for="input-id">Hình ảnh</label>
								<input type="file" name="image" accept="image/*" class="form-control">
							</div>

				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection