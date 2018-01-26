<?php
 /*
  ============================

   ------script setup-------

  ============================
 */

 function ktel_script_enqueue(){
   remove_action('wp_head', '_admin_bar_bump_cb');
   wp_deregister_script('jquery');
   wp_register_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_register_script('jquery', "https://code.jquery.com/jquery-3.2.1.min.js");
   wp_enqueue_script('jquery');
   wp_register_script('jquery_color',"https://code.jquery.com/color/jquery.color-2.1.2.min.js",['jquery']);
   wp_register_style('bootstrapcss','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css');
   wp_register_script('bootstrapscript','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js',false,true);
   wp_enqueue_style('customstyle',get_template_directory_uri().'/css/ktel.css',array(),'1.0.0');
   wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css',array(),'1.0.0');
   wp_enqueue_style('bootstrapcss');
   wp_enqueue_style('font-awesome');
   wp_enqueue_script('jquery_color',['jquery']);
   wp_enqueue_script('customscript',get_template_directory_uri().'/js/ktel.js',array(),'1.0.0',true);
   wp_enqueue_script('wowscript',get_template_directory_uri().'/js/wow.min.js',array(),'1.0.0',true);
   wp_enqueue_script('bootstrapscript');
 }

 add_action('wp_enqueue_scripts','ktel_script_enqueue');

 /*
  ============================

   ------cusotm menu -------

  ============================
 */
 function clean_custom_menus() {
	$menu_name = 'main'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = "\t\t\t\t". '<ul class="navbar-nav">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li class="nav-item"><a class="nav-link" href="'. $url .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

function clean_custom_menus_2() {
 $menu_name = 'eteria'; // specify custom menu slug
 if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
   $menu = wp_get_nav_menu_object($locations[$menu_name]);
   $menu_items = wp_get_nav_menu_items($menu->term_id);

   $menu_list = "\t\t\t\t". '<p  class="text-center"><b >Εταιρια μας </b></p>';
   foreach ((array) $menu_items as $key => $menu_item) {
     $title = $menu_item->title;
     $url = $menu_item->url;
     $menu_list .= "\t\t\t\t\t". '<p><a  class="nav-link text-center" href="'. $url .'" style="font-size:16px;line-height:5px;">'. $title .'</a></p>' ."\n";
   }

 } else {
   // $menu_list = '<!-- no list defined -->';
 }
 echo $menu_list;
}

function clean_custom_menus_3() {
 $menu_name = 'loipes'; // specify custom menu slug
 if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
   $menu = wp_get_nav_menu_object($locations[$menu_name]);
   $menu_items = wp_get_nav_menu_items($menu->term_id);

   $menu_list = "\t\t\t\t". '<p  class="text-center"><b>ΛΟΙΠΕΣ ΥΠΗΡΕΣΙΕΣ </b></p>';
   foreach ((array) $menu_items as $key => $menu_item) {
     $title = $menu_item->title;
     $url = $menu_item->url;
     $menu_list .= "\t\t\t\t\t". '<p ><a class="nav-link text-center" href="'. $url .'" style="font-size:16px;line-height:5px;">'. $title .'</a></p>' ."\n";
   }

 } else {
   // $menu_list = '<!-- no list defined -->';
 }
 echo $menu_list;
}
function clean_custom_menus_diadromes() {
 $menu_name = 'diadromes'; // specify custom menu slug
 if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
   $items=array();
   $menu = wp_get_nav_menu_object($locations[$menu_name]);
   $menu_items = wp_get_nav_menu_items($menu->term_id);
   foreach ((array) $menu_items as $key => $menu_item) {
     $title = $menu_item->title;
     array_push($items,$title);
   }

 } else {
   // $menu_list = '<!-- no list defined -->';
 }
 for($i=0;$i<sizeof($items);$i++){
    print_r(' '.$items[$i]);
 }
}

function clean_custom_menus_diadromes_oles() {
 $menu_name = 'diadromes'; // specify custom menu slug
 if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
   $items=array();
   $menu = wp_get_nav_menu_object($locations[$menu_name]);
   $menu_items = wp_get_nav_menu_items($menu->term_id);
   foreach ((array) $menu_items as $key => $menu_item) {
     $title = $menu_item->title;
     array_push($items,$title);
   }

 } else {
   // $menu_list = '<!-- no list defined -->';
 }
 for($i=0;$i<sizeof($items);$i++){ //localhost/wp-folder/wordpress/διαδρομεσ?from='+yourSelect1+'&'+'to='+yourSelect2
   if($items[$i]!='ΤΡΙΚΑΛΑ'){
    print_r('<a href="localhost/wp-folder/wordpress/διαδρομεσ?from=ΤΡΙΚΑΛΑ&to='.$items[$i].'">'.$items[$i].'</a>');
   }
 }
}



function clean_custom_menus_epikeinwneia() {
 $menu_name = 'epikeinwneia'; // specify custom menu slug
 if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
   $menu = wp_get_nav_menu_object($locations[$menu_name]);
   $menu_items = wp_get_nav_menu_items($menu->term_id);

   $menu_list = "\t\t\t\t". '<p class="text-center"><b>ΕΠΙΚΕΙΝΩΝΕΙΑ </b></p>';
   foreach ((array) $menu_items as $key => $menu_item) {
     $title = $menu_item->title;
     $url = $menu_item->url;
     $menu_list .= "\t\t\t\t\t". '<p ><a class="nav-link text-center" href="'. $url .'" style="font-size:16px;line-height:5px;">'. $title .'</a></p>' ."\n";
   }

 } else {
   // $menu_list = '<!-- no list defined -->';
 }
 echo $menu_list;
}

/*
 ============================

  ------theme excetpt-------

 ============================
*/

function new_excerpt_length($length) {
return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');
/*
 ============================

  ------theme setup-------

 ============================
*/


 show_admin_bar(false);


 function ktel_theme_setup(){
   add_theme_support('menus');

   register_nav_menu('main','the main nav menu');
   register_nav_menu('eteria','the eteria  menu');
   register_nav_menu('loipes','the loipes  menu');
   register_nav_menu('diadromes','the diadromes  menu');
   register_nav_menu('epikeinwneia','the epikeinwneia  menu');
 }

 add_action('init','ktel_theme_setup');

 /*
  ============================

   ------theme support-------

  ============================
 */

 add_theme_support('custom-background');
 add_theme_support('custom-header');
 add_theme_support( 'post-thumbnails' );
 add_theme_support('html5',array('search-form'));

 add_action( 'after_setup_theme', 'wpsites_child_theme_posts_formats', 11 );
 function wpsites_child_theme_posts_formats(){
  add_theme_support( 'post-formats', array(
     'aside',
     'audio',
     'chat',
     'gallery',
     'image',
     'link',
     'quote',
     'status',
     'video',
     ) );
 }

 /*
  ============================

   ------include walker-------

  ============================
 */

 require get_template_directory().'/inc/walker.php';
 ?>
