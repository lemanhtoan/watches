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
				<h1 class="page-header"><small>Sửa slide</small></h1>
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
								<label for="input-id">Danh mục</label>
								<select name="cateid" id="cateid" required class="form-control">
                                    <?php MenuMulti($cat,0,$str='---| ', $data['cateid']); ?>
								</select>
							</div>

							<div class="form-group" style="width: 100%; float: left; margin-bottom: 20px;">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									Ảnh hiện tại: <br><?php if ( isset($data['image'])) {?><img src="{!!url('uploads/slidecate/'.$data['image'])!!}" alt="" width="300"> <?php } ?>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									Hình ảnh mới : <input type="file" name="image" accept="image" value="{!! old('image',isset($data["image"]) ? $data["image"] : null) !!}" class="form-control" >
								</div>
							</div>

							<div class="form-group">
								<label for="input-id">Trạng thái</label>
								<select name="status" class="form-control">
									<option value="1" <?php if ($data['status'] == '1') {echo 'selected';}?>>Hiển thị</option>
									<option value="0" <?php if ($data['status'] == '0') {echo 'selected';}?>>Khoá</option>
								</select>
							</div>

							<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Cập nhật" class="button" />
				      	</form>					      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection