<?php
$data = DB::table('advs')->where('type','1')->where('status','1')->select('advs.*')->orderBy('id', 'asc')->paginate(2);
?>
<div class="container">
     <!-- 2 post advs -->
     <div class="row items-adv">
         <?php if (count($data)) : $i=0; foreach($data as $row): $i++;?>
         <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 <?php if ($i==1){echo 'nopd-left';}?> <?php if ($i==2){echo 'nopd-right';}?>">
             <a href="<?php echo $row->url?>" target="_blank"><img src="{!!url('/uploads/advs/'.$row->image)!!}" alt=""></a>
         </div>
         <?php endforeach; endif;?>
     </div>
     <!-- end 2 post advs -->
</div>

