@extends('back-end.layouts.master')
@section('content')
    <?php
		$oder = DB::table('oders')->count('*');
		$oder_new = DB::table('oders')->where('status',0)->count('*');
		$mem = DB::table('users')->count('*');
		$pro = DB::table('products')->count('*');
		$newOrder = DB::table('oders')->whereRaw(DB::raw('created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()'))->count('*');
    	$newProduct = DB::table('products')->whereRaw(DB::raw('created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()'))->count('*');
		$newCustomer = DB::table('users')->whereRaw(DB::raw('created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()'))->count('*');
		$newContact = DB::table('contacts')->whereRaw(DB::raw('created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()'))->count('*');
    ?>
    <!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản trị cửa hàng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
					<a href="{!!url('admin/donhang')!!}">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
						
							<div class="large">{!!$oder!!}</div>
							<div class="text-muted"> Tổng đơn hàng</div>
							
						</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget ">
					<div class="row no-padding">
					<a href="{!!url('admin/donhang')!!}">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{!!$oder_new!!}</div>
							<div class="text-muted"> Đơn hàng mới</div>
						</div>
					</a>
						</use>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">

					<div class="row no-padding">
					<a href="{!!url('admin/sanpham/all')!!}">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{!!$pro!!}</div>
							<div class="text-muted">Sản phẩm</div>
						</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
					<a href="{!!url('admin/khachhang')!!}">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{!!$mem!!}</div>
							<div class="text-muted">Khách hàng</div>
						</div>
						</a>
					</div>
				</div>
			</div>		
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Tổng quan cửa hàng</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="100" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Đơn hàng mới</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $newOrder;?>" ><span class="percent"><?php echo $newOrder;?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sản phẩm mới</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo $newProduct;?>" ><span class="percent"><?php echo $newProduct;?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Khách hàng mới</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="<?php echo $newCustomer;?>" ><span class="percent"><?php echo $newCustomer;?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Phản hồi mới</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $newContact;?>" ><span class="percent"><?php echo $newContact;?></span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
								

	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection
