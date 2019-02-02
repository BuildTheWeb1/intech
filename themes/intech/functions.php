<?php 

function theme_files() {
  wp_enqueue_script('main_scripts', get_theme_file_uri('/src/js/main.js'), NULL, '', true);
  wp_enqueue_script('lightbox_js', get_theme_file_uri('/src/js/lightbox-plus-jquery.js'), array('jquery'), '', true);
  wp_enqueue_script('font_awesome_4', '//use.fontawesome.com/ff08611e14.js', array('jquery'), '', true);
  wp_enqueue_script('bootbox', '//cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js', array('jquery'), '', true);
  wp_enqueue_script('bootstrap_popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '', true);
  wp_enqueue_script('bootstrap_jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'), '', true);
  wp_enqueue_script('bootstrap_js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '', true);
  wp_enqueue_style('lightbox_css', get_theme_file_uri('/src/css/lightbox.css'));
  wp_enqueue_style('font_awesome_5', '//use.fontawesome.com/releases/v5.6.3/css/all.css');
  wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600|Questrial');
  wp_enqueue_style('bootstrap_css', '//stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
  wp_enqueue_style('main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_files');


// Theme Features
function theme_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');


// Products Custom Post type
function theme_post_types() {
  register_post_type('product', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Products',
      'add_new_item' => 'Add New Product',
      'edit_item' => 'Edit Product',
      'all_items' => 'All Products',
      'singular_name' => 'Product'
    ),
    'menu_icon' => 'dashicons-desktop',
    'taxonomies' => array( 'category' )
  ));
}
add_action('init', 'theme_post_types');





?>