<?php

 get_header();



 ?>
 <main>
  <div style='width:70%;margin:0 auto;border-left:0px solid black;' >
   <div class='row'>
     <div class='col-lg-3'>
       <section>
         <div style='width:100%;margin:0 auto;border-left:0px solid white;'>
           <div class='row'>


         </div>
        </div>
       </section>
     </div>
     <div class='col-lg-12 dromologia' style='background-color:#FEFEFE;border-left:0px solid white;height:100%;'>
       <?php
       if( have_posts() ){
         while(have_posts()){
           the_post();
           ?>

           <div class='casual-post'>
             <h1 style="font-size:30px;color:#212529;"><b><?php the_title(); ?></b></h1>
             <div class='container-fluid single-thumbnail' style='background-image:url("<?php the_post_thumbnail_url(); ?>")'>
             </div>
             <div class='row'>
               <div class='col-lg-3'>
               </div>
               <div class='col-lg-9' style='margin-top:20px;margin-bottom:200px;'>


                 <div id='invinsible-diadromes-oles' >
                   <?php  if (function_exists(clean_custom_menus_diadromes_oles())) {clean_custom_menus_diadromes_oles();} ?>
                 </div>


              </div>
            </div>
           </div>
           <?php
         }
      //   next_posts_link('older posts'); //the older posts

      //   previous_posts_link('newer posts');//gives you the newer posts
       }
       $j=0;

       ?>
     </div>
   </div>
 </div>
 </main>
 <?php

  get_footer();

  ?>
