@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Slide danh mục</li>
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
				      			<label for="input-id">Danh mục</label>
								<select name="cateid" id="cateid" required class="form-control">
									<option value="">--Chọn thương hiệu--</option>
                                    <?php MenuMulti($cat,0,$str='---| ','all'); ?>
								</select>
				      		</div>

							<div class="form-group">
								<label for="input-id">Hình ảnh</label>
								<input type="file" name="image" accept="image/*" class="form-control">
							</div>

							<div class="form-group">
								<label for="input-id">Trạng thái</label>
								<select name="status" class="form-control">
									<option value="1" selected>Hiển thị</option>
									<option value="0">Khoá</option>
								</select>
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