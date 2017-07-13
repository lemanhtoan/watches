<?php 
 $dataPay = DB::table('settings')->where('name', 'logopay')->select('content')->get()[0];
  $dataFooter = DB::table('settings')->where('name', 'footerLink')->select('content')->get()[0];
  $dataSocial = DB::table('settings')->where('name', 'social')->select('content')->get()[0];
?>
<div class="box-intro-footer">
<div class="container">
<div class="row">
  <?php echo $dataFooter->content;?>
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <p class="footer-payment">Hỗ trợ thanh toán <br/> <img src="{!!url('/uploads/commons/'.$dataPay->content)!!}"> </p>
     <?php //echo $dataSocial->content;?>
  </div>
</div>
</div>
</div>