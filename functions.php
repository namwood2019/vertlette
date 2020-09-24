<?php

require_once('widgets/class-wp-widget-categories.php');

// Load CSS files
function load_css(){
  wp_register_style('stylesheet', get_template_directory_uri() . '/dist/css/main.css');
  wp_enqueue_style('stylesheet');
  
  wp_register_style('another_css', get_template_directory_uri() . './style.css');
  wp_enqueue_style('another_css');
}

add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript files
function load_javascript(){
  wp_register_script('app-javascript', get_template_directory_uri() . '/dist/js/app.js', 'jquery', 1, true);
  wp_enqueue_script('app-javascript');
}

add_action('wp_enqueue_scripts', 'load_javascript');

// Theme support
function mytheme_support() {
  
  // Featured Image Support
  add_theme_support('post-thumbnails');

  add_image_size('all-post-image-size', 333, 225);

  // set_post_thumbnail_size(333, 225);

  // Register menus
  register_nav_menus(
    array(
      'primary'     => __('Primary Menu'),
      'footer'      => __('Footer Menu')
    )
  );

  // Post Format Support
  add_theme_support('post-formats', array('gallery'));
}

add_action('after_setup_theme', 'mytheme_support');


// Widget Locations
function init_widgets($id){
  register_sidebar(array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => ''
  ));
}

add_action('widgets_init', 'init_widgets');

// Register Widgets
function custom_register_widgets(){
  register_widget('WP_Widget_Categories_Custom');
}

add_action('widgets_init', 'custom_register_widgets');


// Excerpt Length
function set_excerpt_length(){
  return 25;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Add woocommerce Support
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
