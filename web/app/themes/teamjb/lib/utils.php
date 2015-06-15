<?php

namespace Roots\Sage\Utils;

/**
 * Tell WordPress to use searchform.php from the templates/ directory
 */
function get_search_form() {
  $form = '';
  locate_template('/templates/searchform.php', true, false);
  return $form;
}
add_filter('get_search_form', __NAMESPACE__ . '\\get_search_form');

function get_random_header_image() {
  // Selects at random from a collection of photos.  
  $photo = rand(1, 3);
  
  switch ($photo) {
    case 1:
      $credit = "https://www.flickr.com/photos/three_if_by_bike/3428149800";
      break;
    
    case 2:
      $credit = "https://www.flickr.com/photos/flguardian2/6849866709";
      break;
    
    case 3: 
      $credit = "https://www.flickr.com/photos/the_lylipad/6497519217";
      break;
  }    
  
	$url = "/app/themes/teamjb/assets/images/page-headers/page-header-" . $photo . ".jpg";
  
  return array(
    'url' => $url,
    'credit' => $credit
  );
}
add_filter('get_random_header_image', __NAMESPACE__ . '\\get_random_header_image');