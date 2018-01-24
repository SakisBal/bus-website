<?php

 get_header();

 ?>
 <div class='container-fluid main-content'  style="background-image:url('<?php header_image()?>');">
  <div class='row'  style='padding-top:180px;'>
    <div class='space-tab animated fadeInLeft'>
    </div>
    <div class='tabs tab-s animated fadeInLeft tab-0'>
      <p>ΔΡΟΜΟΛΟΓΙΑ</p>
    </div>
    <div class='tabs tab-s active animated fadeInLeft tab-1'  id="active-tab">
        <p>ΕΚΠΤΩΣΕΙΣ</p>
    </div>
    <div class='tabs tab-s animated fadeInLeft tab-2'>
       <p>ΥΠΗΡΕΣΙΕΣ</p>
    </div>
    <div class='tabs tab-s animated fadeInLeft tab-3'>
      <p>ΣΥΝΔΕΣΕΙΣ</p>
    </div>
 </div>
 <div class='row'>
   <div class='space-tab animated fadeInLeft'>
   </div>
   <div class='tab-content tab-content-s animated fadeInLeft'>
     <form>
       <div class='row'>

       </div>
     </form>
   </div>
   <div class='more-info animated fadeInDown'>
     <div>
       <p style='padding:20px 10px 5px 10px;font-size:22px;color:#FFFFFF;text-align:center;'><b>ΤΟ ΕΠΟΜΕΝΟ ΕΙΣΗΤΗΡΕΙΟ ΜΕ ΛΙΓΟΤΕΡΟ</b></p>
       <p style='padding:0px 10px 0px 10px;font-size:15px;color:#FFFFFF;text-align:center;'>ΕΙΔΙΚΕΣ ΠΡΟΣΦΟΡΕΣ ΩΣΤΕ ΝΑ ΚΕΡΔΙΖΕΙΣ ΜΕΧΡΙ ΚΑΙ 60%</p>
       <a href='#' style='border:1px solid white;margin-left:20%;padding:5px 15px 5px 15px;border-radius:10px;font-size:13px;color:#FFFFFF'>ΠΡΟΣΦΟΡΕΣ ΕΔΩ</a>
     </div>
   </div>
 </div>
</div>
<div id='invinsible-diadromes' style='opacity:0;'>
  <?php  if (function_exists(clean_custom_menus_diadromes())) {clean_custom_menus_diadromes();} ?>
</div>
<?php
$args_cat = array(
  'include' => '9'
);

$categories = get_categories($args_cat);
foreach($categories as $category){

  $args = array(
    'type'=>'post',
    'posts_per_page'=>1,
    'category__in'=> $category->term_id, //include the id of the category
    'offset'=>1
  );
  $home_post = new WP_Query($args); //creating a copy of wp_query to handle it

  if( $home_post->have_posts() ){ /*the have posts and the_post uses WP_query in a certain way that it is created
                       while above we create a new copy so we wont mess with this one*/
    while($home_post->have_posts()){
      $home_post->the_post();
      ?>

      <?php get_template_part('content', 'quote'); ?>
      <?php
    }

  }
  wp_reset_postdata(); //cleaning the query post, reseting it


}
?>
<section>
  <div style='width:88%;margin:0 auto;'>
    <div class='row'>
  <?php
  $args_cat = array(
    'include' => '10'
  );

  $categories = get_categories($args_cat);
  foreach($categories as $category){
    $i=3;
    $idarray = array('plep','tota','onei','mepa');
    $idicon = array(' fa-info-circle fa-4x ',' fa-bus fa-4x ',' fa-ticket fa-4x ',' fa-cubes fa-4x ');
    $args = array(
      'type'=>'post',
      'posts_per_page'=>4,
      'category__in'=> $category->term_id, //include the id of the category
    );
    $home_post = new WP_Query($args); //creating a copy of wp_query to handle it

    if( $home_post->have_posts() ){ /*the have posts and the_post uses WP_query in a certain way that it is created
                         while above we create a new copy so we wont mess with this one*/
      while($home_post->have_posts()){
        $home_post->the_post();
        ?>

        <div class='col-lg-3 info-foot-container <?php echo $idarray[$i]; ?>' id='<?php echo $idarray[$i]; ?>' style='background-image:url("<?php the_post_thumbnail_url(); ?>")'>
          <div class='info-foot' >
            <p id='<?php $str=$idarray[$i];$str.="3";echo $str ?>' class='<?php $str=$idarray[$i];$str.="3";echo $str ?>'><?php  the_title();?></p>
            <i class="fa <?php $str=$idicon[$i];echo $str ?> <?php $str=$idarray[$i];$str.='2';echo $str ?>" style='color:#313131'aria-hidden="true"></i>
            <p class='<?php $str=$idarray[$i];$str.="1";echo $str ?>'><?php remove_filter ('the_content', 'wpautop'); ?><?php  the_content();  ?></p>
          </div>
        </div>

        <?php
        $i--;
      }

    }
    wp_reset_postdata(); //cleaning the query post, reseting it


  }
  ?>

  </div>
 </div>
</section>
<?php
$args_cat = array(
  'include' => '9'
);

$categories = get_categories($args_cat);
foreach($categories as $category){

  $args = array(
    'type'=>'post',
    'posts_per_page'=>1,
    'category__in'=> $category->term_id, //include the id of the category
  );
  $home_post = new WP_Query($args); //creating a copy of wp_query to handle it

  if( $home_post->have_posts() ){ /*the have posts and the_post uses WP_query in a certain way that it is created
                       while above we create a new copy so we wont mess with this one*/
    while($home_post->have_posts()){
      $home_post->the_post();
      ?>

      <?php get_template_part('content', 'quote'); ?>
      <?php
    }

  }
  wp_reset_postdata(); //cleaning the query post, reseting it


}
?>

 <?php

  get_footer();

  ?>
