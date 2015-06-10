<?php

namespace Roots\Sage\Extras;

use Roots\Sage\WebApi;
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

 /**
 * Get custom base template
 */
function sage_wrap_base_cpts($templates) {
  $cpt = get_post_type(); // Get the current post type
    
  if ($cpt) {
     array_unshift($templates, 'base-' . $cpt . '.php'); // Shift the template to the front of the array
  }
  return $templates; // Return our modified array with base-$cpt.php at the front of the queue
}
add_filter('sage/wrap_base', __NAMESPACE__ . '\\sage_wrap_base_cpts'); // Add our function to the sage_wrap_base filter

 /**
 * Setup our api
 */
function webapi_init() {
    $webApi = new WebApi();
    add_filter( 'json_endpoints', array( $webApi, 'register_routes' ) );
}
add_action( 'wp_json_server_before_serve', __NAMESPACE__ . '\\webapi_init' );

/**
 * Add <div class='wraper'> classes
 */
function wrapper_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single()) {
    if (!in_array('coll-single', $classes)) {
      $classes[] = 'coll-single';
    }
  }
  
  return $classes;
}
add_filter('wrapper_class', __NAMESPACE__ . '\\wrapper_class');