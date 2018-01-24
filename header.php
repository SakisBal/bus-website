<!DOCTYPE html>
<html>
<head lang="<?php language_attributes() ?>">
  <script
			  src="https://code.jquery.com/color/jquery.color-2.1.2.js"
			  integrity="sha256-1Cn7TdfHiMcEbTuku97ZRSGt2b3SvZftEIn68UMgHC8="
			  crossorigin="anonymous"></script>
<meta charset="<?php bloginfo('charset')  ?>">
  <title><?php bloginfo('name'); ?><?php wp_title('|'); ?> </title>
  <?php wp_head(); ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
 <header>
  <nav class="navbar navbar-expand-lg " style="margin-top:0px;">
    <a class="navbar-brand" href="<?php get_template_directory_uri(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ktel.png" height='80' width='200'/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <?php  if (function_exists(clean_custom_menus())) {clean_custom_menus();} ?>
  </div>
 </nav>
 </header>
