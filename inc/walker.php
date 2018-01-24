<?php

class Walker_Nav_Primary extends Walker_Nav_Menu{
  function start_lvl( &$output, $depth = 0, $args = array() ) {

    $indent = str_repeat("\t", $depth);
    $output .= "\n'ITS BROKEN'\n";
    /* indent adds the identation dropdown menu is the class we add, now
    the ul elements usually at levels > 0 have a sub menu class so we say thats
    if we are on a bigger layer take that sub menu away */
  }
  function start_el(&$output , $item , $depth = 0 , $args = array() , $id = 0){


    $indent = ($depth) ? str_repeat("\t",$depth) : ''; //thats why we need depth
    $li_attr = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';//this created another level of array , we add dropwown to the first li
    $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
    $classes[] = 'menu-item-'.$item->ID;
    $classes[] = ' nav-item';
    if ( $depth && $args->has_children){
      $classes[] = 'dropdown-submenu';
    }
    $class_names = join(' ', apply_filters('nav_menu_css_class',array_filter($classes), $item, $args ));
    $class_names = 'class="' .esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id','menu-item-'.$item->ID, $item , $args);
    $id = strlen( $id ) ? ' id="'. esc_attr($id) .'"': '';

    $output .= $indent . '<li' .$id.$value.$class_names.$li_attr.'>';

    $attributes = ! empty($item->attr_title) ? ' title="' .esc_attr($item->attr_title).'"':'.';
    $attributes .= ! empty($item->target) ? ' target="' .esc_attr($item->target).'"':'.';
    $attributes .= ! empty($item->xfn) ? ' rel="' .esc_attr($item->xfn).'"':'.';
    $attributes .= ! empty($item->url) ? ' href="' .esc_attr($item->url).'"':' href="' .esc_attr($item->url).'"';

    $attributes .= ! empty($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"':'';
    $item_output = $args->before;

    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title',$item->title , $item->ID).$args->link_after;
    $item_output .= ( $depth == 0 && $args->has_children ) ? ' <b class="caret"></b></a>' : '</a>';

    $item_output .= $args->after;

    $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output , $item , $depth , $args);

 }
 /* function end_el(){

  }
  function end_lvl(){

  } */
}
?>
