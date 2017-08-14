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
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 item-pro">
                <div class="pro-image">
                  <a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">
                  <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}">
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
          <!-- danh muc noi bat -->

          <div class="clearfix">
          </div>

        <!--========================== phan danh muc rieng   =========================================  -->

      <?php 
        foreach ($data as $group) :
        $category = $group['category'];
        $products = $group['products'];
      ?>
      <?php if (count($products)):?>
      <script type="text/javascript">
        jQuery(document).ready(function(){
          var ownGroup = jQuery("#owl-group-cate<?php echo $category->cateId; ?>");

            ownGroup.owlCarousel({
                slideSpeed: 500,
                paginationSpeed: 400,
                //autoPlay: true,
                stopOnHover: true,
                pagination: false,
                navigation: true,
                lazyLoad: true,
                navigationText: [
                  "<i class='fa fa-chevron-left'></i>",
                  "<i class='fa fa-chevron-right'></i>"
                  ],
                items : 3,
                itemsDesktop : [1000,3],
                itemsDesktopSmall : [900,3], 
                itemsTablet: [600,2], 
                itemsMobile : [320,1] 
            });
        });
        
      </script>
      <div class="text-center-home"><?php echo $category->cateName; ?>
        <hr>
      </div>
      <div class="row list-owl">
        <?php if ($category->cateType == '1') {?>
        <!-- left -->
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-cate-advs">
            <a href="{!!  $category->cateSlug !!}"><img src="uploads/category/<?php echo $category->cateImage; ?>" alt="<?php echo $category->cateName; ?>" /></a>
        </div>          

         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
             <ul id="owl-group-cate<?php echo $category->cateId; ?>" class="owl-carousel owl-theme owl-listChoise">
               @foreach($products as $row)
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
                <div class="graycolor">- - - -</div><div class="pro-price">
                    <?php if ($row->price > 0) { ?> {!!number_format($row->price)!!} đ <?php } else {echo "<span class='lienhe'>Giá: Liên hệ</span>";}?>
                </div>

                 </li>
              @endforeach
           </ul>
         </div>

         <?php } else { ?>
         <!-- right -->

           <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
               <ul id="owl-group-cate<?php echo $category->cateId; ?>" class="owl-carousel owl-theme owl-listChoise">
               @foreach($products as $row)
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
                  <div class="graycolor">- - - -</div><div class="pro-price">
                      <?php if ($row->price > 0) { ?> {!!number_format($row->price)!!} đ <?php } else {echo "<span class='lienhe'>Giá: Liên hệ</span>";}?>
                  </div>

                   </li>
                @endforeach
             </ul>
            
           </div>

           <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-cate-advs">
               <a href="{!!  $category->cateSlug !!}"><img src="uploads/category/<?php echo $category->cateImage; ?>" alt="<?php echo $category->cateName; ?>" /></a>
          </div>  

         <?php } ?>

      </div>

    <?php endif; ?>
    <?php endforeach;?>
        

    <div class="clearfix">
    </div>
    <?php
    $homeAdvs = DB::table('advs')->where('type', '0')->where('status','1')->select('url','image')->get()[0];
    ?>
    <div class="box-advs">
      <a href="{!! $homeAdvs->url !!}" target="_blank">
        <img src="{!!url('/uploads/advs/'.$homeAdvs->image)!!}" alt="" border="0" width="100%" />
      </a>
    </div>
</div>
@endsection

@section('homeOther')
<?php
$bigCollectGet= DB::table('group_watch')->where('status',1)->select('name','link','image')->orderBy('id', 'asc')->get();
$bigCollect = array();
if (count($bigCollectGet) > 0) {
  $bigCollect = $bigCollectGet[0];
}

$collection = DB::table('group_watch')->where('status',1)->select('group_watch.*')->orderBy('id', 'asc')->paginate(20);

if ( (count($bigCollect) > 0) || (count($collection) > 0) ) :

?>
<div class="fluid_container" id="box-collection"> 
    <div class="container">

     <div class="text-center-home">BỘ SƯU TẬP
        <hr>
      </div>

      <div class="row">
        <?php if (count($bigCollect) > 0) :?>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <a href="{!! $bigCollect->link !!}">
            <img src="{!!url('/uploads/group_watch/'.$bigCollect->image)!!}" alt="{!! $bigCollect->name !!}" border="0" width="100%"/>
          </a>
        </div>
        <?php endif;?>

        <?php if (count($collection) > 0) : ?>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="row">
            <?php if (count($collection)) : $i=0; foreach($collection as $row): $i++;?>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 item-adv-<?php echo $i;?>">
                      <a href="{!! $row->link !!}">
                    <img src="{!!url('/uploads/group_watch/'.$row->image)!!}" alt="{!! $row->name !!}" border="0" width="100%"/>
                  </a>
                </div>

          <?php endforeach; endif;?>
            </div>
        </div>
      <?php endif;?>
      </div>
    </div>
</div>

<?php endif; ?>

@endsection

