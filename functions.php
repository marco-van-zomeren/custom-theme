<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js' );
wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' );
wp_enqueue_script( 'aos', 'https://unpkg.com/aos@next/dist/aos.js' );
wp_enqueue_script( 'isotope', 'https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js' );
wp_enqueue_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js' );
wp_enqueue_script( 'audioplayer', get_template_directory_uri().'/js/audioplayer.js', array(), '', true );
wp_enqueue_script( 'custom', get_template_directory_uri().'/js/script.js', array(), '', true );

register_nav_menus( array() );

// THUMBNAILS
add_theme_support( 'post-thumbnails' );
add_image_size( 'featured-image_xxl', 2500, 2500 );
add_image_size( 'featured-image_xl', 1500, 1500 );
add_image_size( 'featured-image_l', 1000, 1000 );
add_image_size( 'featured-image_s', 600, 600 );
add_image_size( 'featured-image_1x1', 800, 800 );

// MENU
function wpb_custom_new_menu() {
  register_nav_menu('main-menu',__( 'Main menu' ));
  register_nav_menu('footer-menu-1',__( 'Footer menu 1' ));
  register_nav_menu('footer-menu-2',__( 'Footer menu 2' ));
  register_nav_menu('footer-menu-3',__( 'Footer menu 3' ));
  register_nav_menu('footer-menu-4',__( 'Footer menu 4' ));    
  register_nav_menu('product-categories-menu',__( 'Product categories menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

// LIST CLASSES
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// EXCERPT SETTINGS
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 30 );

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// NEXT PREV LINKS
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
    $code = 'class="text-black w-1-1"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}

// SIDEBARS
if ( function_exists('register_sidebar') ) {
    $sidebarDefault = array(
		'id'            => 'sidebar-default',
		'description'   => __( 'Add widgets here to appear in your sidebar.' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',        
        'name'=>__( 'Sidebar', 'textdomain' ),  
    );  
    $sidebarCookies = array(
		'id'            => 'sidebar-cookies',
		'description'   => __( 'This is for the cookie notification. Don&rsquo;t place other widgets here.' ),      
        'name'=>__( 'Cookies', 'textdomain' ), 
		'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
    );
	$sidebarShop = array(
		'id'            => 'sidebar-shop',
		'description'   => __( 'This is the sidebar for the shop.' ),      
        'name'=>__( 'Woocommerce', 'textdomain' ),  
    );
	$sidebarFooter = array(
		'id'            => 'sidebar-footer',
		'description'   => __( 'This is a full width custom area in the footer. It will appear at below all content.' ),      
        'name'=>__( 'Footer full width', 'textdomain' ),
		'before_widget' => '',
    	'after_widget' => '',
    );
    $sidebarFooterColumnOne = array(
		'id'            => 'sidebar-footer-col-1',
		'description'   => __( 'This is the footer widget area for column 1' ),      
        'name'=>__( 'Footer column 1', 'textdomain' ),
		'before_widget' => '',
    	'after_widget' => '',
    );
    $sidebarFooterColumnTwo = array(
		'id'            => 'sidebar-footer-col-2',
		'description'   => __( 'This is the footer widget area for column 2' ),      
        'name'=>__( 'Footer column 2', 'textdomain' ),
		'before_widget' => '',
    	'after_widget' => '',
    );
    $sidebarFooterColumnThree = array(
		'id'            => 'sidebar-footer-col-3',
		'description'   => __( 'This is the footer widget area for column 3' ),      
        'name'=>__( 'Footer column 3', 'textdomain' ),
		'before_widget' => '',
    	'after_widget' => '',
    );
    $sidebarFooterColumnFour = array(
		'id'            => 'sidebar-footer-col-4',
		'description'   => __( 'This is the footer widget area for column 4' ),      
        'name'=>__( 'Footer column 4', 'textdomain' ),
		'before_widget' => '',
    	'after_widget' => '',
    );
     
    register_sidebar($sidebarDefault);
    register_sidebar($sidebarCookies);
	register_sidebar($sidebarShop);
	register_sidebar($sidebarFooter);
    register_sidebar($sidebarFooterColumnOne);
    register_sidebar($sidebarFooterColumnTwo);
    register_sidebar($sidebarFooterColumnThree);
    register_sidebar($sidebarFooterColumnFour);
}

// FILE TYPES
add_filter( 'upload_mimes', 'my_myme_types', 1, 1 );
function my_myme_types( $mime_types ) {
  $mime_types['svg'] = 'image/svg+xml';     // Adding .svg extension
  $mime_types['fxp'] = 'application/fxp'; // Adding .fxp extension
  
  unset( $mime_types['xls'] );  // Remove .xls extension
  unset( $mime_types['xlsx'] ); // Remove .xlsx extension
  
  return $mime_types;
}

require_once( get_template_directory() . '/settings/archive.php' );
require_once( get_template_directory() . '/settings/customize.php' );
require_once( get_template_directory() . '/settings/comments.php' );
require_once( get_template_directory() . '/settings/counter.php' );
require_once( get_template_directory() . '/settings/shortcodes.php' );
require_once( get_template_directory() . '/settings/webp.php' );
require_once( get_template_directory() . '/settings/woocommerce.php' );

