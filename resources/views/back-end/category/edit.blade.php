@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Sửa danh mục</small></h1>
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
						<form action="" method="POST" role="form" enctype="multipart/form-data">
				      		{{ csrf_field() }}
				      		<div class="form-group">
					      		<label for="input-id">Danh mục cha</label>
					      		<select name="sltCate" id="inputSltCate" class="form-control">
					      			<option value="0">-ROOT --</option>
					      			<?php MenuMulti($cat,0,$str='---| ',$data['parent_id']); ?>  		
					      		</select>
				      		</div>

				      		<div class="form-group">
				      			<label for="input-id">Tên danh mục</label>
				      			<input type="text" name="txtCateName" id="inputTxtCateName" class="form-control" value="{!! old('txtCateName', isset($data['name']) ? $data['name'] : null)!!}" required="required">
				      		</div>

				      		<div class="form-group">
					      		<label for="input-id">Hiển thị trang chủ</label>
					      		<select name="isHome" id="isHome" class="form-control">
					      			<option value="1" <?php if($data['isHome'] =='1') {echo 'selected';}?>>Hiển thị</option>
					      			<option value="0" <?php if($data['isHome'] =='0') {echo 'selected';}?>>Tạm ẩn</option>
					      		</select>
				      		</div>

				      		<div class="form-group">
					      		<label for="input-id">Vị trí hiển thị banner	</label>
					      		<select name="type" id="type" class="form-control">
					      			<option value="1" <?php if($data['type'] =='1') {echo 'selected';}?>>Bên trái</option>
					      			<option value="0" <?php if($data['type'] =='0') {echo 'selected';}?>>Bên Phải</option>
					      		</select>
				      		</div>

				      		<div class="form-group">
								<label for="input-id">Thứ tự hiển thị</label>
								<input type="number" value="<?php echo $data['position'];?>" name="position" max="100" min="0" class="form-control">
							</div>

							<div class="form-group" style="width: 100%; float: left; margin-bottom: 20px;">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									Ảnh hiện tại: <br><?php if ( isset($data['banner'])) {?><img src="{!!url('uploads/category/'.$data['banner'])!!}" alt="" width="80"> <?php } ?>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									Hình ảnh mới : <input type="file" name="txtimg" accept="image" value="{!! old('txtimg',isset($data["banner"]) ? $data["banner"] : null) !!}" class="form-control" >
								</div>
							</div>

							<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Sửa danh mục" class="button" />
				      	</form>					      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection