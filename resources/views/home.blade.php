@extends('layouts.master')
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-product">
      <div class="text-center-home">Sản phẩm nổi bật
        <hr>
      </div>
        <!-- danh muc noi bat -->
        <?php $count =1; 
        foreach($new as $row) { ?>
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
                  <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}">
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
          <!-- danh muc noi bat -->

          <div class="clearfix">
          </div>

        <!--========================== phan danh muc rieng   =========================================  -->

      <!-- ///////////// ĐỒNG HỒ ORIENT -->
      <div class="text-center-home">ĐỒNG HỒ ORIENT
        <hr>
      </div>
      <div class="row">
        
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-cate-advs">
          <a href=""><img src="{!!url('public/images/products/orient/banner-orient-1.png')!!}" /></a>
        </div>  

         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
         <ul id="owl-orient" class="owl-carousel owl-theme owl-listChoise">
           @foreach($group_orient as $row)
             <?php
                 $rowArr = (array) $row;
                 if (array_key_exists("pro_id", $rowArr)) {
                     $proId = $rowArr['pro_id'];
                 } else {
                     $proId = $rowArr['id'];
                 }
             ?>
             <li class="item item-pro">
                <div class="pro-image">
              <a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">
                <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="img responsive">
              </a>
            </div>
            <div class="pro-title">
              <h1><a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">{!!$row->name!!}</a></h1>
            </div> 
            <div class="pro-price">
                <?php if ($row->price > 0) { ?> {!!number_format($row->price)!!} đ <?php } else {echo ' Liên hệ';}?>
            </div>

             </li>
          @endforeach
       </ul>
          
         </div>

      </div>
        
      <!-- ///////////////////////// ĐỒNG HỒ OLYM PIANUS-->  
      
      <div class="text-center-home">ĐỒNG HỒ OLYM PIANUS
        <hr>
      </div>
      <div class="row">
        
         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
         <ul id="owl-olym-painus" class="owl-carousel owl-theme owl-listChoise">
        @foreach($group_olym_pianus as $row)
            <?php
                 $rowArr = (array) $row;
                 if (array_key_exists("pro_id", $rowArr)) {
                     $proId = $rowArr['pro_id'];
                 } else {
                     $proId = $rowArr['id'];
                 }
             ?>
             <li class="item item-pro">
                <div class="pro-image">
              <a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">
                <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="img responsive">
              </a>
            </div>
            <div class="pro-title">
              <h1><a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">{!!$row->name!!}</a></h1>
            </div> 
            <div class="pro-price">
                <?php if ($row->price > 0) { ?> {!!number_format($row->price)!!} đ <?php } else {echo ' Liên hệ';}?>
            </div>

             </li>
          @endforeach
       </ul>
          
         </div>

         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-cate-advs">
          <a href=""><img src="{!!url('public/images/products/olympianus/banner-olympianus.png')!!}" /></a>
        </div>  

      </div>

        <div class="clearfix">
        </div>

        <div class="box-advs">
          <a href="#" target="_blank">
            <img src="{!!url('public/images/slides/thumbs/bn1.png')!!}" alt="" border="0" width="100%" />
          </a>
        </div>
</div>
@endsection

@section('homeOther')
<div class="fluid_container" id="box-collection"> 
    <div class="container">

     <div class="text-center-home">BỘ SƯU TẬP
        <hr>
      </div>

      <div class="row">
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <a href="#">
            <img src="{!!url('public/images/others/dong-ho-nam-trang-chu.jpg')!!}" alt="" border="0" width="100%"/>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="row collection-r1">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <a href="#">
            <img src="{!!url('public/images/others/dong-ho-nam-trang-chu.jpg')!!}" alt="" border="0" width="100%"/>
          </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <a href="#">
            <img src="{!!url('public/images/others/banner-dong-ho-nu.jpg')!!}" alt="" border="0" width="100%"/>
          </a>
            </div>
          </div>
          <div class="row collection-r2">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <a href="#">
            <img src="{!!url('public/images/others/Dong-ho-doi.jpg')!!}" alt="" border="0" width="100%"/>
          </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <a href="#">
            <img src="{!!url('public/images/others/BST-dong-ho-co.jpg')!!}" alt="" border="0" width="100%"/>
          </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

