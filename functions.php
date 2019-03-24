<?php
//adds featured images to posts
    add_theme_support('post-thumbnails');
//adds widget areas
function blank_widgets_init(){

    //header right
register_sidebar( array(
    'name'          => ('Header Right'),
    'id'            => 'header-right',
    'description'   => 'Right widget area in the header',
    'before_widget' => '<div class="widget-header widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));


    //Hero Image Widget
register_sidebar( array(
    'name'          => ('Hero Image'),
    'id'            => 'hero-image',
    'description'   => 'Hero image on homepage',
    'before_widget' => '<div class="hero-image-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));

     //About Us Text Block Widget
register_sidebar( array(
    'name'          => ('About Us Text Block'),
    'id'            => 'about-us',
    'description'   => 'Widget area for about us section',
    'before_widget' => '<div class="about-us">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));

      //Bottom Left Home Widget
register_sidebar( array(
    'name'          => ('Bottom Left Home'),
    'id'            => 'bottom-left-home',
    'description'   => 'Widget area in bottom left home page',
    'before_widget' => '<div class="bottom-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));

     //Bottom Middle Home Widget
register_sidebar( array(
    'name'          => ('Bottom Middle Home'),
    'id'            => 'bottom-middle-home',
    'description'   => 'Widget area in bottom middle home page',
    'before_widget' => '<div class="bottom-middle">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));

     //Bottom Right Home Widget
register_sidebar( array(
    'name'          => ('Bottom Right Home'),
    'id'            => 'bottom-right-home',
    'description'   => 'Widget area in bottom right home page',
    'before_widget' => '<div class="bottom-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));


     //sidebar
register_sidebar( array(
    'name'          => ('Sidebar'),
    'id'            => 'sidebar',
    'description'   => 'Sidebar widget area in the header',
    'before_widget' => '<div class="widget-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));

    //left footer widget
//name of function created by WordPress sidebar doesn't indicate location
register_sidebar( array(
    'name'          => ('Left Footer'),
    'id'            => 'left-footer',
    'description'   => 'Left widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));

register_sidebar( array(
    'name'          => ('Middle Footer'),
    'id'            => 'middle-footer',
    'description'   => 'Middle widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-middle">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));

register_sidebar( array(
    'name'          => ('Right Footer'),
    'id'            => 'right-footer',
    'description'   => 'Right widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));
}

//Single Page Widgets
register_sidebar( array(
    'name'          => ('About Us Single Text Block'),
    'id'            => 'about-us-single',
    'description'   => 'Widget area for about us section',
    'before_widget' => '<div class="about-us-single">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));


add_action('widgets_init', 'blank_widgets_init');

//add custom menus
function custom_menus(){
    register_nav_menus( array(
        'header-menu' => ('Header Menu'),
    ));
}

add_action('init', 'custom_menus');

?>
