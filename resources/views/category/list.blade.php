@extends('layouts.special')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-product-category" id="category-list">
      <h3 class="panel-title  tbreadcrumb">
      <a href="{!!url('/')!!}" title=""> <i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
      
      <?php if (isset($parentName) && $parentName !="") { ?>

      <i class="fa fa-chevron-right" aria-hidden="true"></i><a href="{!!url($parentSlug)!!}" title=""> {!!$parentName!!}</a>

      <?php } ?>

      <i class="fa fa-chevron-right" aria-hidden="true"></i>
      
      <a href="#" title="">{!! $cateName !!}</a>
    </h3> 
      <div class="row">
        <div class="text-center-home"><?php if (isset($parentName) && $parentName !="") { ?>  {!!$parentName!!} - <?php } ?>{!! $cateName !!}
          <hr>
        </div>
            <?php  if (count($data)) : ?>
              <?php $count =1; 
                foreach($data as $row) { ?>
                <?php
                  $rowArr = (array) $row;
                  if (array_key_exists("pro_id", $rowArr)) {
                    $proId = $rowArr['pro_id'];
                  } else {
                    $proId = $rowArr['id'];
                  }
                  if ($count%4 == 1)
                  {  
                       echo "<div class='row'>";
                  }
                ?>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-pro">
                      <div class="pro-image">
                        <a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}"> <!-- check lại pro_id và id-->
                        <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="img responsive">
                        </a>
                      </div>
                      <div class="pro-title">
                        <h1><a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">{!!$row->name!!}</a></h1>
                      </div> <!-- /div bt -->
                      <div class="pro-price">
                          <?php if ($row->price > 0) { ?> {!!number_format($row->price)!!} đ <?php } else {echo ' Liên hệ';}?>
                      </div>
                </div>  <!-- /div col-4 -->
              <?php 
                if ($count%4 == 0)
                  {
                      echo "</div>";
                  }
                  $count++;
                ?>
                <?php } ?>
                <?php if ($count%4 != 1) echo "</div>"; ?>
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