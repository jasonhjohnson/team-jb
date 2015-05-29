<?php

namespace Roots\Sage\Init;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style(Assets\asset_path('styles/editor-style.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Register mobile parallax
 */
$coll_is_mobile = false;
$coll_is_phone = false;
$coll_is_tablet = false;
$coll_is_desktop = false;
$coll_parallax_enabled = true;
function mobile_parallax_init()
{
    global $coll_is_mobile, $coll_is_phone, $coll_is_tablet, $coll_is_desktop, $coll_parallax_enabled;

    $coll_detect = new \Mobile_Detect();
    $opt = ''; //ot_get_option('coll_disable_parallax');
    $phone = !empty($opt) ? $opt[0] : 0;
    $tablet = !empty($opt) ? $opt[1] : 0;
    if ($coll_detect->isMobile()) {
        $coll_is_mobile = true;
        if ($coll_detect->isTablet()) {
            $coll_is_tablet = true;
            if ($tablet) {
                $coll_parallax_enabled = false;
            } else {
                $coll_parallax_enabled = true;
            };
        } else {
            $coll_is_phone = true;
            if ($phone) {
                $coll_parallax_enabled = false;
            } else {
                $coll_parallax_enabled = true;
            };
        }
    } else {
        $coll_is_desktop = true;
        $coll_parallax_enabled = true;
    }
}

add_action('init', __NAMESPACE__ . '\\mobile_parallax_init');

/* Gallery Bank Plugin */
remove_action('init', 'frontend_plugin_js_scripts_gallery_bank');
remove_action('init', 'frontend_plugin_css_scripts_gallery_bank');