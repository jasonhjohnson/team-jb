<?php
header( 'Content-type: application/json' );

 
/**
 * Template Name: Cars JSON page
 * Description: Outputs the list of cars as JSON
 *
 */
 
$args = array(
  'post_type' => 'cars',
  'post_status' => 'publish',
  'posts_per_page' => -1, // all
  'orderby' => 'title',
  'order' => 'ASC'
);
 
$query = new WP_Query( $args );

$cars = array();
 
while( $query->have_posts() ) : $query->the_post();
 
  // Add a car entry
  $cars[] = array(
    'name' => get_the_title(),
    'html' => get_the_content(),
    'author' => get_the_author()
  );
 
endwhile;
 
wp_reset_query();

echo json_encode( $cars );