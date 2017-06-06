<?php 
 $data = DB::table('sliders')->select('sliders.*')->orderBy('id', 'asc')->paginate(50); 
?>
<div class="hidden-xs">
    <div class="fluid_container">            
     <ul id="owl-slider" class="owl-carousel owl-theme">
        <?php if (count($data)) : foreach($data as $row):?>
         <li class="item"><a href="<?php echo $row->link?>" target="_blank"><img src="{!!url('/uploads/sliders/'.$row->image)!!}" alt="{!! $row->name !!}"></a></li>
         <?php endforeach; endif;?>
     </ul>
    </div><!-- .fluid_container -->   
</div> <!-- /slider event - top -->


 


