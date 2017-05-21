@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Sửa sản phẩm </small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
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
					      		<label for="input-id">Chọn danh mục</label>
					      		<select name="sltCate" id="inputSltCate" required class="form-control">
					      			<?php MenuMulti($cat,0,$str='---| ', $pro["cat_id"]); ?> 
					      		</select>
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Tên sản phẩm</label>
				      			<input type="text" name="txtname" id="inputTxtname" class="form-control" value="{!! old('txtname',isset($pro["name"]) ? $pro["name"] : null) !!}"  required="required">
				      		</div>

							<div class="form-group">
								<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      			<label for="input-id">Giá bán</label>
									<input type="number" name="txtprice" id="inputtxtprice" class="form-control" value="{!! old('txtproname',isset($pro["price"]) ? $pro["price"] : null) !!}" required="required">
					      			</div>

						      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<label for="input-id">Trạng thái</label>
										<select name="w_status" id="w_status" required class="form-control">
											<option <?php if ($pro['status'] == '1') { echo "selected='selected'";} ?>  value="1" >Còn hàng</option>
											<option <?php if ($pro['status'] == '0') { echo "selected='selected'";} ?> value="0" >Hết hàng</option>
										</select>
					      			</div>
				      			</div>
							</div>


				      		<div class="form-group">
				      			<label for="input-id">Chế độ khuyến mãi  </label>
				      			<input type="text" name="txtpacket" id="inputtxtpacket" value="{!! old('txtpacket',isset($pro["packet"]) ? $pro["packet"] : null) !!}" class="form-control" >
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Chế độ kèm theo (tối đa 3 mục vào 3 ô)</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
										Kèm theo 1 : <input type="text" name="txtpromo1" id="inputtxtpromo1" value="{!! old('txtpromo1',isset($pro["promo1"]) ? $pro["promo1"] : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
										Kèm theo 2 : <input type="text" name="txtpromo2" id="inputtxtpromo2" value="{!! old('txtpromo2',isset($pro["promo2"]) ? $pro["promo2"] : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
										Kèm theo 3 : <input type="text" name="txtpromo3" id="inputtxtpromo3" value="{!! old('txtpromo3',isset($pro["promo3"]) ? $pro["promo3"] : null) !!}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Hình ảnh : <input type="file" name="txtimg" accept="image/png" id="inputtxtimg"  class="form-control" >
					      				Ảnh cũ: <img src="{!!url('uploads/products/'.$pro->images)!!}" alt="{!!$pro->images!!}" width="80">
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Tag : <input type="text" name="txttag" id="inputtag" value="{!! old('txtproname',isset($pro["tag"]) ? $pro["tag"] : null) !!}" class="form-control">
					      			</div>
					      		</div>				      			
				      		</div>
				      	
				      		<div class="form-group">
				      			<label for="input-id">Hình ảnh chi tiết sản phẩm</label>
				      			<?php $stt=0; ?>
				      			<div class="row">
					      			@foreach($pro->detail_img as $row)
					      				<?php $stt++; ?>
					      				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">						 
						      				Ảnh cũ: {!!$stt!!}<img src="{!!url('uploads/products/details/'.$row->images_url)!!}" alt="{!!$row->images_url!!}" width="80">
						      			</div>
					      			@endforeach
					      		</div>
					      		<div class="row">
					      			@for( $i=1; $i<=12; $i++)
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Hình ảnh mới {!!$i!!} : <input type="file" name="txtdetail_img[]" value="{{ old('txtdetail_img[]') }}" accept="image" id="inputtxtdetail_img" class="form-control">
					      			</div>
					      			@endfor
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Nội dung chi tiết sản phẩm</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<textarea name="txtReview" id="inputtxtReview" class="form-control" rows="10">{!! old('txtReview',isset($pro->review) ? $pro->review : null) !!}</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtReview',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      		</div>				      			
				      		</div>		      				      		

				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Lưu lại" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection