

    <div class="container-fluid">
      <div class="container">
        <hr>
        <footer>
          © <?php echo date('Y'); ?> Công Ty Cổ Phần Watches / Địa chỉ: TP. HN / GPĐKKD số: Website đang thử nghiệm. <br>
      </footer>
      </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-info btn-lg back-to-top" role="button" title="Click lên đầu trang" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{!!url('public/bootstrap/js/bootstrap.min.js')!!}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{-- <script src="{!!url('public/bootstrap/js/ie10-viewport-bug-workaround.js')!!}"></script> --}}
    <!-- menu js -->
    <script src="{!!url('public/js/menu.js')!!}"></script> 
    <script type='text/javascript' src='{!!url('public/js/jquery.easing.1.3.js')!!}'></script> 
    <script type='text/javascript' src='{!!url('public/js/camera.min.js')!!}'></script> 
    <script type='text/javascript' src='{!!url('public/js/myscript.js')!!}'></script> 
    <script type='text/javascript' src='{!!url('public/js/active-menu.js')!!}'></script> 
    {{--<script src="{!!url('public/js/bootstrap-image-gallery.min.js')!!}"></script>--}}
    {{--<script src="{!!url('public/js/jquery.blueimp-gallery.min.js')!!}"></script>--}}


    {{-- validate --}}
    <script src="{!!url('public/js/validate/jquery.validate.min.js')!!}"></script>
    <script src="{!!url('public/js/validate/jquery.validate.js')!!}"></script>

    <script src="{!!url('public/js/owl-carousel/owl.carousel.js')!!}"></script>

    <script type='text/javascript' src="{!!url('public/mega/js/jquery.menu-aim.js')!!}"></script>
    <script type='text/javascript' src="{!!url('public/mega/js/main.js')!!}"></script>

    <script type='text/javascript' src="{!!url('public/js/site.js')!!}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function(){

            jQuery("#txtkeyword").on("keyup", function() {
              var outPut ='';  
              if (jQuery(this).val().length >=1 ) {
                var dataString = 'txtkeyword='+ jQuery(this).val();
                var urlBase = "{!! url('/') !!}";
                jQuery.ajax({
                    type: "GET",
                    url: "{!! url('search-ajax') !!}",
                    data: dataString,
                    cache: false,
                    beforeSend: function(html) 
                    {
                    },
                    success: function(html)
                    {
                     if(html.data.length) {
                        outPut += "<ul  class='suggest-items'>";
                        jQuery.each(html.data, function(key, item) {
                            outPut += "<li>";
                            outPut += '<a href="'+urlBase+'/san-pham/'+item.id +'-'+ item.slug +'">' + '<img width="50" src="'+ urlBase + '/uploads/products/' + item.images +'" alt="'+ item.name +'" />' + '<label>' + item.name + '</label>' + '</a>';
                            outPut += "</li>";
                        });
                        outPut += "</ul>";
                     }   else {
                        outPut = 'Không có kết quả.';
                     } 
                     jQuery('#resultSuggest').html(outPut);
                     jQuery('#resultSuggest').show();
                    }
                });

              }
            });

            

        });
    </script>
    </body>
</html>