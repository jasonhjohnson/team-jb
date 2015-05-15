<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Config\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }
  
  global $coll_is_mobile;

  $classes[] = 'coll-custom-structure';
  if ($coll_is_mobile) {
      $classes[] = 'coll-mobile';
  }

  $coll_detect = new \Mobile_Detect;
  if( $coll_detect->isiOS() ){
      $ver = $coll_detect->version('iOS');
      if ($ver[0] == 8){
          $classes[] = 'coll-safari8';
      }
  }  

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');
