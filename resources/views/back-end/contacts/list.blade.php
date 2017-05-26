@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Phản hồi khách hàng</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh sách phản hồi
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Họ và tên</th>
										<th>Số điện thoại (hoặc email)</th>
										<th>Nội dung</th>
										<th>Ngày liên hệ</th>
										<th>Hành động</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($data as $row): ?>
									<tr>
										<td><?php echo $row->id; ?></td>
										<td><?php echo $row->contact_name; ?></td>
										<td><?php echo $row->contact_email; ?></td>
										<td><?php echo $row->contact_message; ?></td>
										<td><?php echo $row->created_at; ?></td>
										<td><a href="{!!url('admin/contacts/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa liên hệ này ?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a></td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>

						{!!$data->render()!!}

					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection