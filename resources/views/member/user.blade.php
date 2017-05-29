@extends('layouts.master')

@section('content')
	<div class="container customer-page">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr><h1 >Lịch sử mua hàng </h1></tr>
						<tr>
							<th> ID</th>										
							<th> Mã đơn hàng</th>										
							<th> Ngày đặt hàng</th>										
							<th> Tổng tiền</th>		
							<th>Trạng thái</th>								
						</tr>
					</thead>
					<tbody>
					<?php if (count($data)){ ?>
						<?php  $stt=0;?>
							@foreach($data as $row)
								<?php $stt++;?>
								<tr>
									<td>{!!$stt!!}</td>
									<td>{!!$row->id!!}</td>
									<td>{!!$row->created_at!!}</td>
									<td>{!! number_format($row->total) !!} đ</td>
									<td><?php if ($row->status =='1') {echo 'Đã xác nhận';} else {echo 'Chờ duyệt';}?></td>
								</tr>
							@endforeach		
										
					<?php }else{?>
						<tr>
							<td colspan="4">Bạn chưa có đơn hàng nào.</td>
						</tr>
					<?php }?>	
					</tbody>
				</table>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center">
						<thead>
							<tr>
								<th colspan="2"> Thông tin khách hàng : {!!Auth::user()->name !!}</th>										
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Họ tên</td>
								<td>{!!Auth::user()->name!!}</td>
							</tr>
							<tr>
								<td>Địa chỉ E-mail</td>
								<td>{!!Auth::user()->email!!}</td>
							</tr>
							<tr>
								<td>Điện thoại</td>
								<td>{!!Auth::user()->phone !!}</td>
							</tr>
							<tr>
								<td>Địa chỉ Khách hàng</td>
								<td>{!!Auth::user()->address!!}</td>
							</tr>
							<tr>
								<td>Ngày đăng ký</td>
								<td>{!!Auth::user()->created_at !!}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
