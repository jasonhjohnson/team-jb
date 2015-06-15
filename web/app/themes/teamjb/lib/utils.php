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

function get_random_header_image($type = '') {
  // Selects at random from a collection of photos.  
  $photo = rand(1, 3);
  
  switch ($photo) {
    case 1:
      if ($type != "calendar") {
        $credit = "https://www.flickr.com/photos/three_if_by_bike/3428149800";
        $url = "/app/themes/teamjb/assets/images/page-headers/page-header-" . $photo . ".jpg";
      }
      else {
        $credit = "https://www.flickr.com/photos/boston_public_library/8102637908/";
        $url = "/app/themes/teamjb/assets/images/page-headers/calendar-header-" . $photo . ".jpg";
      }
      break;
    
    case 2:
    if ($type != 'calendar') {
        $credit = "https://www.flickr.com/photos/flguardian2/6849866709";
        $url = "/app/themes/teamjb/assets/images/page-headers/page-header-" . $photo . ".jpg";
      }
      else {
        $credit = "https://www.flickr.com/photos/flguardian2/6860055869";
        $url = "/app/themes/teamjb/assets/images/page-headers/calendar-header-" . $photo . ".jpg";
      }
      
      break;
    
    case 3: 
      if ($type != 'calendar') {
        $credit = "https://www.flickr.com/photos/the_lylipad/6497519217";
        $url = "/app/themes/teamjb/assets/images/page-headers/page-header-" . $photo . ".jpg";
      }
      else {
        $credit = "https://www.flickr.com/photos/flguardian2/6859603355";
        $url = "/app/themes/teamjb/assets/images/page-headers/calendar-header-" . $photo . ".jpg";
      }
      
      break;
  }      
  
  return array(
    'url' => $url,
    'credit' => $credit
  );
}
add_filter('get_random_header_image', __NAMESPACE__ . '\\get_random_header_image');