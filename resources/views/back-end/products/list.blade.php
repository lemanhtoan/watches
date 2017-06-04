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
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10"><div class="form-group">
								<label for="inputLoai" class="col-sm-3 control-label" style="font-weight: normal">Quản lý sản phẩm </label>

								<div class="col-md-9">
									<div class="inline-line">
										<label>Lọc sản Phẩm </label>
										<?php 
										$urlGet = $_SERVER['REQUEST_URI'];
										if(preg_match("/\/(\d+)$/",$urlGet,$matches))
										{
										  $end=$matches[1];
										} else {
											$end = 'all';
										}
									?>
									<select name="sltCate" id="inputLoai" class="form-control">
						      			<option value="all">- CHỌN MỘT DANH MỤC --</option>
						      			<?php MenuMulti($cat,0,$str='---| ', $end); ?>   		
						      		</select>
									<script>
									    document.getElementById("inputLoai").onchange = function() {
									        //if (this.selectedIndex!==0) {
									            window.location.href = this.value;
									        //}        
									    };
									</script>
									</div>
									
								</div>
								<!--<div class="col-md-3">
									<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Tìm sản phẩm..." required="required" title="">
								</div>-->
							</div>
								
								
							</div>
							<div class="col-md-2">
								<a href="{!!url('admin/sanpham/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm Mới Sản Phẩm</button></a>
							</div>
						</div> 
						
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
					<div class="panel-body" style="font-size: 12px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Hình ảnh</th>
										<th>Tên sản phẩm</th>
										<th>Chế độ - kèm theo</th>
										<th>Thương hiệu</th>
										<th>Giá bán</th>
										<th>Trạng thái</th>
										<th>Hành động</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
										<tr>
											<td>{!!$row->id!!}</td>
											<td> <img src="{!!url('uploads/products/'.$row->images)!!}" alt="iphone" width="50"></td>
											<td>{!!$row->name!!}</td>
											<td>
												<div class="list-backend">

													@if ($row->promo1!='')
													<p>
										              <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$row->promo1!!}</li>
													</p>
										            @endif
													@if($row->promo2!='') <p>
													<li><span class="glyphicon glyphicon-ok-sign"></span>{!!$row->promo2!!}</li>

													</p>
													@endif  @if ($row->promo3!='')<p>
														<li><span class="glyphicon glyphicon-ok-sign"></span>{!!$row->promo3!!}</li>
													</p>
													@endif
														@if ($row->packet!='')<p>
														<li><span class="glyphicon glyphicon-ok-sign"></span>{!!$row->packet!!}</li>
														</p>
														@endif

												</div>
											</td>
											<td>{!!$row->category->name!!}</td>
											<td><?php if ($row->price > 0) { ?> {!!number_format($row->price)!!} đ <?php } else {echo "<span class='lienhe'>Giá: Liên hệ</span>";}?></td>
											<td>
												@if($row->status ==1)
													<span style="color:blue;">Còn hàng</span>
												@else
													Tạm hết hàng
												@endif
											</td>
											<td>
											    <a href="{!!url('admin/sanpham/edit/'.$row->id)!!}" title="Sửa"><span class="glyphicon glyphicon-edit">Sửa</span> </a>
											    <a href="{!!url('admin/sanpham/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
											</td>
										</tr>
									@endforeach								
								</tbody>
							</table>
						</div>
						{!! $data->render() !!}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection