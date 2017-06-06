<style>
	.panel-body .row {
		margin: 30px 0;
	}
</style>
@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Cài đặt khác</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Các thiết lập khác
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
					<div class="panel-body" style="float: left;width: 100%; padding: 20px;">
						<div class="row">
							<form action="postsettLogo" method="POST" role="form" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group"> <?php $dataLogoGet = $dataLogo[0]['content']; ?>
									Ảnh hiện tại: <br><?php if ( isset($dataLogoGet)) {?><img src="{!!url('uploads/commons/'.$dataLogoGet)!!}" alt="" width="80"> <?php } ?>
								</div>
								<div class="form-group">
									Logo : <input type="file" name="logo" accept="image/png" class="form-control">
								</div>
								<input type="submit" name="btnLogo" class="btn btn-primary" value="Lưu logo" class="button" />
							</form>
						</div>

						<div class="row">
							<form action="settDiachichung" method="POST" role="form">
								{{ csrf_field() }}
								<div class="form-group">
									Địa chỉ : <input type="text" name="diachi" class="form-control">
								</div>
								<input type="submit" name="btnDiachi" class="btn btn-primary" value="Lưu Địa chỉ" class="button" />
							</form>
						</div>

						<div class="row">
							<form action="settWelcome" method="POST" role="form">
								{{ csrf_field() }}
								<div class="form-group">
									Lời chào mừng : <input type="text" name="welcome" class="form-control">
								</div>
								<input type="submit" name="btnWelcome" class="btn btn-primary" value="Lưu Lời chào" class="button" />
							</form>
						</div>

						<div class="row">
							<form action="settCopyright" method="POST" role="form">
								{{ csrf_field() }}
								<div class="form-group">
									Thông tin bản quyền : <input type="text" name="copyright" class="form-control">
								</div>
								<input type="submit" name="btnCopyright" class="btn btn-primary" value="Lưu Copyright" class="button" />
							</form>
						</div>

						<div class="row">
							<form action="settLogoPay" method="POST" role="form" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									Logo thanh toán : <input type="file" name="paymentlogo" accept="image/png" class="form-control">
								</div>
								<input type="submit" name="btnLogopay" class="btn btn-primary" value="Lưu logo thanh toán" class="button" />
							</form>
						</div>

						<div class="row">
							<form action="settFooterlink" method="POST" role="form" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									Thông tin footer:
									<textarea name="footerlink" id="footerlink" class="form-control" rows="4" value="{{ old('footerlink') }}" ></textarea>
									<script type="text/javascript">
                                        var editor = CKEDITOR.replace('footerlink',{
                                            language:'vi',
                                            filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
                                            filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
                                            filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                        });
									</script>
								</div>
								<input type="submit" name="btnFooter" class="btn btn-primary" value="Lưu Footer link" class="button" />
							</form>
						</div>

						<div class="row">
							<form action="settSocial" method="POST" role="form" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									Thông tin social:
									<textarea name="social" id="social" class="form-control" rows="4" value="{{ old('social') }}" ></textarea>
									<script type="text/javascript">
                                        var editor = CKEDITOR.replace('social',{
                                            language:'vi',
                                            filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
                                            filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
                                            filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                        });
									</script>
								</div>
								<input type="submit" name="btnSocial" class="btn btn-primary" value="Lưu Social" class="button" />
							</form>
						</div>

					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection