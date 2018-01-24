<?php

 get_header();




 ?>
   <main class='my'>
    <div style='width:70%;margin:0 auto;border-left:0px solid black;border-bottom:0px solid black;' >
     <div class='row'>
       <div class='col-lg-3'>
         <section>
           <div style='width:100%;margin:0 auto;border-left:0px solid white;border-bottom:0px solid black;'>
             <div class='row'>


           </div>
          </div>
         </section>
       </div>
       <div class='col-lg-12 dromologia' style='border-bottom:0px solid black;background-color:#FEFEFE;border-left:0px solid white;height:100%;margin-top:20px;margin-bottom:70px;'>
         <?php
         $current_page = (get_query_var('paged')) ? get_query_var('paged') : 0;
         $args_cat = array(
           'include' => '19'
         );

         $categories = get_categories($args_cat);
         foreach($categories as $category){

           $args = array(
             'type'=>'post',
             'posts_per_page'=>6,
             'category__in'=> $category->term_id, //include the id of the category
             'paged' => $current_page
           );
           $news = new WP_Query($args); //creating a copy of wp_query to handle it
         if( $news->have_posts() ){
           $i=0;
          ?>
          <h1 style='color:#323232;text-align:center;margin-bottom:100px;margin-left:0px;padding-left:30px;
          padding-right:30px;'>ΟΙ ΝΕΟΤΕΡΕΣ ΕΞΕΛΙΞΕΙΣ ΣΧΕΤΙΚΑ ΜΕ ΤΑ ΔΡΟΜΟΛΟΓΙΑ ΚΑΙ ΓΕΝΙΚΟΤΕΡΑ ΤΟ ΚΤΕΛ ΤΡΙΚΑΛΩΝ ΒΡΙΣΚΟΝΤΑΙ ΠΑΡΑΚΑΤΩ</h1>
          <div class='row' style=''>

            <div class='col-lg-12'>
            <div class='row'> <?php
             $idarray = array('firstNew','secondNew','thirdNew','fourthNew','fifthNew','sixthNew');
             $size_array = array('8','4','3','3','3','3');
             while($news->have_posts()){
               $news->the_post();
               ?>
               <div class='col-lg-<?php echo  $size_array[$i]; ?> news-container <?php echo $idarray[$i]; ?>' id='<?php echo $idarray[$i]; ?>' style='background-image:url("<?php the_post_thumbnail_url(); ?>");'>
                 <div class='news' >
                   <p id='<?php $str=$idarray[$i];$str.="3";echo $str ?>' class='<?php $str=$idarray[$i];$str.="3";echo $str ?>' style='background-color:#007AFF;padding:1px 10px 1px 1px;color:white;margin:0px;margin-left:-15px;margin-right:-15px;border-right:1px solid #323232;border-left:1px solid #323232;'><a href='<?php  the_permalink();  ?>' style='color:white' class='<?php $str=$idarray[$i];$str.="2";echo $str; ?>'>
                     <?php  the_title();?></a><br><span style='font-size:12px;'><?php the_time('l, F jS, Y') ?></span></p>

                   <p class='<?php $str=$idarray[$i];$str.="1";echo $str ?>'><?php remove_filter ('the_excerpt', 'wpautop'); ?><?php  the_excerpt();  ?></p>
                 </div>
               </div>
               <?php
                 if ($i==1){
                   echo '</div>
                   <div class="row">';
                 }

               ?>

               <?php
               $i++;
             }
          //   next_posts_link('older posts'); //the older posts
             //cleaning the query post, reseting it
          //   previous_posts_link('newer posts');//gives you the newer posts
           }
           wp_reset_postdata();
         }


           ?>
          </div>
          <div class='row'>
            <div class='col-lg-1'>
              <i class="fa fa-caret-left" aria-hidden="true"></i>
            </div>
            <div class='col-lg-3'>
              <?php

              next_posts_link('older posts'); //the older posts
              ?>
              </div>
              <div class='col-lg-5'>
              </div>
              <div class='col-lg-2'>
                <p style='margin-left:35%;'>
              <?php
              previous_posts_link('newer posts');//gives you the newer posts
              ?>
                </p>
            </div>
            <div class='col-lg-1'>
              <i style='margin-left:75%;'class="fa fa-caret-right " aria-hidden="true"></i>
            </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </main>

 <?php

  get_footer();

  ?>
