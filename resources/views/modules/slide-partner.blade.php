<?php 
 $data = DB::table('partners')->select('partners.*')->orderBy('id', 'asc')->paginate(50);
?>
<div class="container owl-partner">
     <div class="row"><!-- Partner -->
         <ul id="owl-partner" class="owl-carousel owl-theme">
            <?php if (count($data)) : foreach($data as $row):?>
             <li class="item"><a href="<?php echo $row->link?>" target="_blank"><img src="{!!url('/uploads/partners/'.$row->image)!!}" alt="{!! $row->name !!}"></a></li>
             <?php endforeach; endif;?>
         </ul>
     </div> <!-- end Partner -->
</div>

<!--


settings(id, name, content)

logo(1, logo, 'dfdfd.dfd')
footerlink(2, footer, '<div...>')
diachichung(3, diachi, '<div ... >')
copyright(4, copy, '<dddd>')
welcome(5,'welcome, ''),
thanhtoan(6,thanhtoan, 'rer.ere')
social(7,social, '<fgfg>')


-->