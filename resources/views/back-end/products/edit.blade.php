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

					      		<div class="row">
					      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label for="input-id">Thương hiệu</label>
									<select name="sltCate" id="inputSltCate" required class="form-control">
						      			<option value="">--Chọn thương hiệu--</option>
						      			<?php MenuMulti($cat,0,$str='---| ',$pro["cat_id"]); ?> 
						      		</select>
				      			</div>

								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label for="input-id">Đồng hồ dành cho</label>
									<select name="w_sex" id="w_sex" required class="form-control">
										<option value="0" <?php if ($pro->pro_details->w_sex == '0') {echo 'selected';}?>>Nam</option>
										<option value="1" <?php if ($pro->pro_details->w_sex == '1') {echo 'selected';}?>>Nữ</option>
										<option value="2"  <?php if ($pro->pro_details->w_sex == '2') {echo 'selected';}?>>Nam và nữ</option>
									</select>
				      			</div></div>

				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Tên sản phẩm</label>
				      			<input type="text" name="txtname" id="inputTxtname" class="form-control" value="{!! old('txtname',isset($pro["name"]) ? $pro["name"] : null) !!}"  required="required">
				      		</div>

							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<label for="input-id">Hiển thị trang chủ: </label>
										<label style="margin: 0 15px;"><input type="radio" name="isHome" value="1" <?php if ($pro['isHome'] == '1') { echo "checked='checked'";} ?> >  Hiển thị</label>
										<label><input type="radio" name="isHome" value="0" <?php if ($pro['isHome'] == '0') { echo "checked='checked'";} ?> >  Không hiển thị</label>
									</div>

									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<label for="input-id">Hiển thị nhóm thương hiệu: </label>
										<label style="margin: 0 15px;"><input type="radio" name="isGroup" value="1"  <?php if ($pro['isGroup'] == '1') { echo "checked='checked'";} ?> >  Hiển thị</label>
										<label><input type="radio" name="isGroup" value="0"  <?php if ($pro['isGroup'] == '0') { echo "checked='checked'";} ?> >  Không hiển thị</label>
									</div>
								</div>
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
								<label for="input-id"> Chi tiết cấu hình sản phẩm</label>
								<div class="row">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Phân nhóm : <input type="text" name="w_group" value="{!! old('w_group',isset($pro->pro_details->w_group) ? $pro->pro_details->w_group : null) !!}" class="form-control" >
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Xuất xứ : <input type="text" name="w_country" value="{!! old('w_country',isset($pro->pro_details->w_country) ? $pro->pro_details->w_country : null) !!}" class="form-control" >
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Dòng sản phẩm: <input type="text" name="w_role"  value="{!! old('w_role',isset($pro->pro_details->w_role) ? $pro->pro_details->w_role : null) !!}" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Bảo hiểm : <input type="text" name="w_time"  value="{!! old('w_time',isset($pro->pro_details->w_time) ? $pro->pro_details->w_time : null) !!}" class="form-control" >
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Kiểu máy :
										<select name="w_type" id="w_type" required class="form-control">
                                            <?php $w_type = $dataConstant['w_type']; ?>
                                            <?php foreach ($w_type as $key => $value): ?>
											<option value="<?php echo $key?>" <?php if ($pro->pro_details->w_type == $key) {echo 'selected';}?>><?php echo $value?></option>
                                            <?php endforeach; ?>
										</select>
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Kích cỡ : <input type="text" name="w_size"  value="{!! old('w_size',isset($pro->pro_details->w_size) ? $pro->pro_details->w_size : null) !!}" class="form-control" >
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Chất liệu vỏ: <input type="text" name="w_out"  value="{!! old('w_out',isset($pro->pro_details->w_out) ? $pro->pro_details->w_out : null) !!}" class="form-control" >
									</div>

									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Bảo hành quốc tế : <input type="text" name="w_time_base"  value="{!! old('w_time_base',isset($pro->pro_details->w_time_base) ? $pro->pro_details->w_time_base : null) !!}" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Chất liệu dây :
										<select name="w_in" id="w_in" required class="form-control">
											<option value="">Chọn chất liệu dây</option>
                                            <?php $w_in = $dataConstant['w_in']; ?>
                                            <?php foreach ($w_in as $key => $value): ?>
											<option value="<?php echo $key?>"  <?php if ($pro->pro_details->w_in == $key) {echo 'selected';}?>><?php echo $value?></option>
                                            <?php endforeach; ?>
										</select>
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Chất liệu kính : <input type="text" name="w_on"  value="{!! old('w_on',isset($pro->pro_details->w_on) ? $pro->pro_details->w_on : null) !!}" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Độ chịu nước : <input type="text" name="w_water"  value="{!! old('w_water',isset($pro->pro_details->w_water) ? $pro->pro_details->w_water : null) !!}" class="form-control" >
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										Chức năng khác : <input type="text" name="w_other"  value="{!! old('w_other',isset($pro->pro_details->w_other) ? $pro->pro_details->w_other : null) !!}" class="form-control" >
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="input-id">Video youtube sản phẩm</label>
								<input type="text" name="txtintro" id="inputTxtintro" value="{!! old('txtintro',isset($pro["r_intro"]) ? $pro["r_intro"] : null) !!}" class="form-control">
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