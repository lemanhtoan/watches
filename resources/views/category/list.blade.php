@extends('layouts.special')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-product-category" id="category-list">
      <h3 class="panel-title  tbreadcrumb">
      <span class="glyphicon glyphicon-home"><a href="{!!url('/')!!}" title=""> Trang chủ</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span>
      <a href="#" title="">{!! $cateName !!}</a>
    </h3> 
      <div class="row">
        <div class="text-center-home">{!! $cateName !!}
          <hr>
        </div>
            <?php  if (count($data)) : ?>
              @foreach($data as $row)
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-pro">
                      <div class="pro-image">
                        <a href="{!!url('san-pham/'.$row->id.'-'.$row->slug)!!}"> <!-- check lại pro_id và id-->
                        <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="img responsive">
                        </a>
                      </div>
                      <div class="pro-title">
                        <h1><a href="{!!url('san-pham/'.$row->id.'-'.$row->slug)!!}">{!!$row->name!!}</a></h1>
                      </div> <!-- /div bt -->
                      <div class="pro-price">
                        {!!number_format($row->price)!!} đ
                      </div>
                </div>  <!-- /div col-4 -->
              @endforeach
              <?php else: ?>
                    <h4 style="text-align: center; font-size: 16px;"> Không có sản phẩm.</h4>
                <?php endif; ?>
        <div class="clearfix">
          
        </div>
        <!-- ===================================================================================/products ============================== -->
        <div class="center-page">
          {!!$data->render()!!}
        </div>
        
      </div>
    </div>
@endsection