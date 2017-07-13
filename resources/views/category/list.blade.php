@extends('layouts.special')

@section('content')

  <?php
  if(isset($slideCate)) {
    if($slideCate) {  ?>
  <div class="cate-slider">

    <ul id="owl-slider-cate" class="owl-carousel owl-theme">
        <?php if (count($slideCate)) : foreach($slideCate as $row):?>
        <li class="item"><img src="{!!url('/uploads/slidecate/'.$row->image)!!}" alt="{!! $row->name !!}"></li>
        <?php endforeach; endif;?>
    </ul>

  </div>
  <?php
  }
  }
  ?>
  <div class="breadcr category">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3 class="panel-title  tbreadcrumb">
          <a href="{!!url('/')!!}" title=""> <i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>

          <i class="fa fa-chevron-right" aria-hidden="true"></i>

          <a href="#" title="">{!! $cateName !!}</a>
        </h3>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-product-category" id="category-list">

      <div class="row">
        <div class="text-center-home">{!! $cateName !!}
          <hr>
        </div>

        <!-- box filter -->
        <div class="box-filter">
          <form class="form-horizontal" role="form" method="POST" id="cateFilter" action="{{ url('/loc-du-lieu') }}">
            {{ csrf_field() }}
            <input type="hidden" name="catSlug" value="<?php echo $catSlug;?>">
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
              <div class="form-group">
                <label for="sel1">Thương hiệu</label>
                <select class="form-control" id="thuonghieu" name="thuonghieu">
                  <option value="">Chọn thương hiệu</option>
                    <?php $w_branch = $dataConstant['w_branch']; ?>
                    <?php foreach ($w_branch as $key => $value): ?>
                  <option value="<?php echo $key?>" <?php if(isset($dataFilter['thuonghieu'])) {if($dataFilter['thuonghieu'] == $key) {echo 'selected';} }?> ><?php echo $value?></option>
                    <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
              <div class="form-group">
                <label for="sel1">Bộ máy</label>
                <select class="form-control" id="bomay" name="bomay">
                  <option value="">Chọn bộ máy</option>
                    <?php $w_type = $dataConstant['w_type']; ?>
                    <?php foreach ($w_type as $key => $value): ?>
                  <option value="<?php echo $key?>" <?php if(isset($dataFilter['bomay'])) {if($dataFilter['bomay'] == $key) {echo 'selected';} }?> ><?php echo $value?></option>
                    <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
              <div class="form-group">
                <label for="sel1">Loại dây</label>
                <select class="form-control" id="loaiday" name="loaiday">
                  <option value="">Chọn loại dây</option>
                    <?php $w_in = $dataConstant['w_in']; ?>
                    <?php foreach ($w_in as $key => $value): ?>
                  <option value="<?php echo $key?>" <?php if(isset($dataFilter['loaiday'])) {if($dataFilter['loaiday'] == $key) {echo 'selected';} }?> ><?php echo $value?></option>
                    <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
              <div class="form-group">
                <label for="sel1">Khoảng giá</label>
                <select class="form-control" id="khoanggia" name="khoanggia">
                  <option value="">Chọn khoảng giá</option>
                    <?php $op_price = $dataConstant['op_price']; ?>
                    <?php foreach ($op_price as $key => $value): ?>
                  <option value="<?php echo $key?>" <?php if(isset($dataFilter['khoanggia'])) {if($dataFilter['khoanggia'] == $key) {echo 'selected';} }?> ><?php echo $value?></option>
                    <?php endforeach; ?>

                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
              <div class="form-group">
                <label for="sel1">Sắp xếp theo</label>
                <select class="form-control" id="sapxep" name="sapxep">
                  <option value="">Sắp xếp</option>
                    <?php $op_sapxep = $dataConstant['op_sapxep']; ?>
                    <?php foreach ($op_sapxep as $key => $value): ?>
                  <option value="<?php echo $key?>" <?php if(isset($dataFilter['sapxep'])) {if($dataFilter['sapxep'] == $key) {echo 'selected';} }?> ><?php echo $value?></option>
                    <?php endforeach; ?>

                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 btnGroup">
              <input type="submit" class="btn btn-primary" value="Lọc Dữ Liệu"/>
            </div>
          </form>
        </div> <!-- end box filter -->
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
            <a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">
              <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="img responsive">
            </a>
          </div>
          <div class="pro-title">
            <h1><a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">{!!$row->name!!}</a></h1>
          </div> <!-- /div bt -->
          <div class="graycolor">- - - -</div><div class="pro-price">
                <?php if ($row->price > 0) { ?> {!!number_format($row->price)!!} đ <?php } else {echo "<span class='lienhe'>Giá: Liên hệ</span>";}?>
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
        <h4 style="text-align: center; font-size: 18px; font-weight: bold; margin-top: 250px;"> Chưa có dữ liệu.</h4>
          <?php endif; ?>
        <div class="clearfix">

        </div>
        <!-- ===================================================================================/products ============================== -->
          <?php  if (strpos($_SERVER['REQUEST_URI'], 'loc-du-lieu') !== false) {} else { ?>
        <div class="center-page">
          {!!$data->render()!!}
        </div>
          <?php }?>

      </div>
    </div>
  </div>

@endsection