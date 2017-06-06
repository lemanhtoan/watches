<?php 
 $branch = DB::table('branchs')->select('branchs.*')->orderBy('id', 'asc')->paginate(50);
 $dataAddress = DB::table('settings')->where('name', 'diachi')->get(['content']);
?>
<div class="fluid_container" id="box-branch"> 
    <div class="container">

     <div class="text-center-home">Hệ thống cửa hàng - đại lý
        <hr>
      </div>

      <div class="row al-center big-font">
        <p>
          <?php $dataAddress = $dataAddress[0]->content; ?>
          <?php echo nl2br($dataAddress);?>
        </p>
      </div>

      <?php if (count($branch)) : $count =1; foreach($branch as $row) { ?>
      <?php 
        if ($count%4 == 1)
          {  
               echo "<div class='row'>";
          }
      ?>
        
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
           <span><i class="fa fa-map-marker"></i>{!!$row->address!!}</span>
           <span><i class="fa fa-phone"></i><a href="tel:{!!$row->phone!!}" rel="nofollow">{!!$row->phone!!}</a></span>
        </div>
        <?php 
          if ($count%4 == 0)
            {
                echo "</div>";
            }
            $count++;
          ?>
          <?php } ?>
          <?php if ($count%4 != 1) echo "</div>"; ?>
              
      <?php endif;?>  
    </div>
  </div>

