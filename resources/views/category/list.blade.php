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
        <p class="category-well">
          <?php echo count($data);?>+ mẫu <?php if (isset($parentName) && $parentName !="") { ?>  {!!$parentName!!} - <?php } ?>{!! $cateName !!} đeo tay hàng hiệu chính hãng cao cấp đẹp tại các cửa hàng Hà Nội và TPHCM uy tín của Watches
        </p>
        <div class="box-filter">
          <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
            <div class="form-group">
              <label for="sel1">Thương hiệu</label>
              <select class="form-control" id="thuonghieu" name="thuonghieu">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
            <div class="form-group">
              <label for="sel1">Bộ máy</label>
              <select class="form-control" id="bomay" name="bomay">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
            <div class="form-group">
              <label for="sel1">Loại dây</label>
              <select class="form-control" id="loaiday" name="loaiday">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
            <div class="form-group">
              <label for="sel1">Khoảng giá</label>
              <select class="form-control" id="khoanggia" name="khoanggia">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
            <div class="form-group">
              <label for="sel1">Sắp xếp theo</label>
              <select class="form-control" id="sapxep" name="sapxep">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 btnGroup">
            <button type="button" class="btn btn-primary">Lọc</button>
            <button type="button" class="btn btn-default">Xóa</button>
          </div>
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
                        <a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}"> 
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