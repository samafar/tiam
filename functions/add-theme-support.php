<?php 
if ( ! function_exists( 'tiam_setup' ) ) :

function tiam_setup() {

  add_theme_support( 'title-tag' );

  add_theme_support( 'post-thumbnails' );
  add_post_type_support( 'personal', 'thumbnail' );
  add_post_type_support( 'case', 'thumbnail' );

    // This theme uses wp_nav_menu() in one location.
  register_nav_menus( 
    array(
      'tiam' => esc_html__( 'Primary', 'tiam' ),
      'extra-menu' => esc_html__( 'Extra', 'darius' )
  ) );
  
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
  
  add_theme_support( 'custom-background', apply_filters( 'tiam_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );
  
  add_theme_support( 'customize-selective-refresh-widgets' );

  add_theme_support( 'custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
  ) );
}
endif;
add_action( 'after_setup_theme', 'tiam_setup' );

?>