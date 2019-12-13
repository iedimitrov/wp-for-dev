<?php

function load_stylesheet()
  {
    wp_register_style('style', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('style');

    wp_register_style('stylesheet', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');

    wp_enqueue_script('bootstrap.js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), false, true);
 
    wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300");
    wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');

  }

add_action('wp_enqueue_scripts', 'load_stylesheet');

function add_supports() 
  { 
    add_theme_support( 'menus' ); 
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
  }


add_action( 'after_setup_theme', 'add_supports' );

function codex_custom_init() 
  {
  $labels = array(
    'name' => _x('Excerpts', 'post type general name'),
    'singular_name' => _x('Excerpt', 'post type singular name'),
    'add_new' => _x('Add New', 'excerpt'),
    'add_new_item' => __('Add New Excerpt'),
    'edit_item' => __('Edit Excerpt'),
    'new_item' => __('New Excerpt'),
    'all_items' => __('All Excerpts'),
    'view_item' => __('View Excerpt'),
    'search_items' => __('Search Excerpts'),
    'not_found' =>  __('No excerpts found'),
    'not_found_in_trash' => __('No excerpts found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('Excerpts')
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments' )
  ); 

register_post_type('excerpt',$args);

  $labels = array(
    'name' => _x('Blinks', 'post type general name'),
    'singular_name' => _x('Blink', 'post type singular name'),
    'add_new' => _x('Add New', 'blink'),
    'add_new_item' => __('Add New Blink'),
    'edit_item' => __('Edit Blink'),
    'new_item' => __('New Blink'),
    'all_items' => __('All Blinks'),
    'view_item' => __('View Blink'),
    'search_items' => __('Search Blinks'),
    'not_found' =>  __('No blinks found'),
    'not_found_in_trash' => __('No blinks found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('Blinks')
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments' )
  ); 
  register_post_type('blink',$args);
  
  }

add_action( 'init', 'codex_custom_init' );

function codex_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Main Sidebar', 'wpb' ),
    'id' => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'codex_widgets_init' );

register_nav_menus (
    array(
        'top-menu' => __('Top Menu Location', 'whoots-theme'),
        'footer-menu' => __('Footer Menu Location', 'whoots-theme'),
    )
);

add_image_size ('smallest', 300, 300, true);
add_image_size ('largest', 600, 600, true);