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

           <?php get_template_part('content', get_post_format()); ?>
           <?php
         }
      //   next_posts_link('older posts'); //the older posts

      //   previous_posts_link('newer posts');//gives you the newer posts
       }
       ?>
       
     </div>
   </div>
 </div>
 </main>
 <?php

  get_footer();

  ?>
