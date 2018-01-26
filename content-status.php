<div class='casual-post'>
  <h1 style="font-size:30px;color:#212529;"><b><?php the_title(); ?></b></h1>
  <div class='container single-thumbnail' id='single-thumb' style='background-image:url("<?php the_post_thumbnail_url(); ?>");'>
  </div>
  <div class='container blog-height' style='width:92.5%;'>
    <div class='row' >
      <div class='col-lg-3'>
        <?php
        $args_cat = array(
          'include' => '20'
        );

        $categories = get_categories($args_cat);
        foreach($categories as $category){

          $args = array(
            'type'=>'post',
            'posts_per_page'=>3,
            'category__in'=> $category->term_id //include the id of the category
          );
          $ads = new WP_Query($args); //creating a copy of wp_query to handle it
        if( $ads->have_posts() ){
          $i=0;
          while($ads->have_posts()){
            $ads->the_post();

         ?>
         <div class='ads-pc' style='background-image:url("<?php  the_post_thumbnail_url();  ?>")'>
         </div>

         <?php
           }
         }
         wp_reset_postdata();
       }
         ?>
      </div>
      <div class='col-lg-9' style='margin-top:20px;'>
       <p><?php the_content(); ?></p>
       <?php
       $args_cat = array(
         'include' => '20'
       );

       $categories = get_categories($args_cat);
       foreach($categories as $category){

         $args = array(
           'type'=>'post',
           'posts_per_page'=>3,
           'category__in'=> $category->term_id //include the id of the category
         );
         $ads = new WP_Query($args); //creating a copy of wp_query to handle it
       if( $ads->have_posts() ){
         $i=0;
         while($ads->have_posts()){
           $ads->the_post();

        ?>
        <div class='ads-ph' style='background-image:url("<?php  the_post_thumbnail_url();  ?>")'>
        </div>

        <?php
          }
        }
        wp_reset_postdata();
      }
        ?>
       <div id='invinsible-diadromes' style='opacity:0;'>
         <?php  if (function_exists(clean_custom_menus_diadromes())) {clean_custom_menus_diadromes();} ?>
       </div>
       <div class='more-dromologia col-lg-9 col-sm-9 col-md-9 col-xs-9' style="margin-top:0px;">
         <h3 style='text-align:center;margin-top:10px;color:#212121;font-size:20px;padding-bottom:10px;'> Θελετε να διαλεξετε καποιο <a href="http://localhost/wp-folder/wordpress/δρομολογια/">δρομολογιο?</a> </h3>
       </div>
     </div>
   </div>
 </div>
</div>
