<div class='container-fluid find-us' style='width:100%'>
 <div class='row'>
   <div class='col-4  fb text-center'>
     <i class="fa fa-facebook-square fb2 fa-5x" aria-hidden="true"></i>
   </div>
   <div class='col-4  yt text-center'>
     <i class="fa fa-youtube yt2 fa-5x" aria-hidden="true"></i>
   </div>
   <div class='col-4  gm text-center'>
     <i class="fa fa-map gm2 fa-5x" aria-hidden="true"></i>
   </div>
 </div>
</div>
  <footer>
    <div class='container-fluid' style='height:385px;background-color:#FAFAFA;margin-top:-15px;'>
      <div class='row' style='margin:0 auto;'>
        <div class='col-lg-4 col-xs-4 col-sm-4 col-md-4 footer-content'  style='border-right:1px solid #929292;height:250px;margin-top:75px;margin:0 auto;'>
            <?php  if (function_exists(clean_custom_menus_2())) {clean_custom_menus_2();} ?>
        </div>
        <div class='col-lg-4 col-xs-4 col-sm-4 col-md-4 footer-content-mid'  style='border-right:1px solid #929292;height:250px;margin-top:75px;margin:0 auto;'>
            <?php  if (function_exists(clean_custom_menus_3())) {clean_custom_menus_3();} ?>
        </div>
        <div class='col-lg-4 col-xs-4 col-sm-4 col-md-4 footer-content-end'  style='height:250px;margin-top:75px;margin:0 auto;'>
          <?php  if (function_exists(clean_custom_menus_epikeinwneia())) {clean_custom_menus_epikeinwneia();} ?>
        </div>
      </div>
    </div>
    <div class='container-fluid' style='height:120px;background-color:#BABABA;'>
    </div>
  </footer>
  <?php
    wp_footer();
   ?>
     <script>new WOW().init(); </script>
</body>
</html>
