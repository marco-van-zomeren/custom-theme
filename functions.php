<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

wp_enqueue_script( 'audioplayer', get_template_directory_uri().'/js/audioplayer.js', array(), '', true );
wp_enqueue_script( 'jquery3.3.1', 'https://code.jquery.com/jquery-1.12.0.min.js' );
wp_enqueue_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js' );

register_nav_menus( array() );

// THUMBNAILS
add_theme_support( 'post-thumbnails' );

add_image_size( 'featured-image_xxl', 2500, 2500 );
add_image_size( 'featured-image_xl', 1500, 1500 );
add_image_size( 'featured-image_l', 1000, 1000 );
add_image_size( 'featured-image_s', 600, 600 );
add_image_size( 'featured-image_1x1', 800, 800 );

// ORDER POSTS
function prefix_modify_query_order( $query ) {
  if ( is_main_query() ) {

    $args =  array( 'post_date' => 'DESC' );

    $query->set( 'orderby', $args );
  }
}
add_action( 'pre_get_posts', 'prefix_modify_query_order' );

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

// POST CLASS
add_filter( 'post_class', function( Array $classes ) {

    static $number = 1;

    $classes[] = 'delay_' . $number++;

    // reset the number
    if ( 5 === $number )
    $number = 1;

    return $classes;
});

// SIDEBARS
if ( function_exists('register_sidebar') ) {
    $sidebar1 = array(
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',        
        'name'=>__( 'Sidebar', 'textdomain' ),  
    );  
    $sidebar2 = array(
		'id'            => 'sidebar-2',
		'description'   => __( 'This is for the cookie notification. Don&rsquo;t place other widgets here.' ),      
        'name'=>__( 'Cookies', 'textdomain' ),  
    );
	$sidebar3 = array(
		'id'            => 'sidebar-3',
		'description'   => __( 'This is the sidebar for the shop.' ),      
        'name'=>__( 'Woocommerce', 'textdomain' ),  
    );
	$sidebar4 = array(
		'id'            => 'sidebar-4',
		'description'   => __( 'This is the custom area in the footer.' ),      
        'name'=>__( 'Footer', 'textdomain' ),
		'before_widget' => '',
    	'after_widget' => '',
    );
     
    register_sidebar($sidebar1);
    register_sidebar($sidebar2);
	register_sidebar($sidebar3);
	register_sidebar($sidebar4);
}

// BODY CLASS CATEGORIE
function body_class_add_categories( $classes ) {

if ( !is_single() )
    return $classes;

$post_categories = get_the_category();

foreach( $post_categories as $current_category ) {

    $classes[] = 'category-' . $current_category->slug;
}

return $classes;
}
add_filter( 'body_class', 'body_class_add_categories' );

// BODY CLASS FOR PAGES
add_filter( 'body_class', 'body_class_for_pages' );

function body_class_for_pages( $classes ) {

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
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

// COUNTER
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '<i class="far fa-eye"></i> 0';
    }
    return '<i class="far fa-eye"></i> '.$count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// CUSTOMIZE THEME
// LOGO
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
        'flex-width'  => true,
		'flex-height' => true
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

// COMMENTS
add_filter( 'comment_form_default_fields', 'mo_comment_fields_custom_html' );
function mo_comment_fields_custom_html( $fields ) {
	// first unset the existing fields:
	unset( $fields['comment'] );
	unset( $fields['author'] );
	unset( $fields['email'] );
	unset( $fields['url'] );
	// then re-define them as needed:
	$fields = [
		'comment_field' => '<div class="comment-form-comment float-left w-1-1 mb-20"><label for="comment">' . _x( 'Comment', 'noun', 'textdomain' ) . '</label> ' .
			'<textarea class="js__textarea" id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></div>',
		
		'author' => '<div class="comment-form-author float-left w-1-1 mb-20">' . '<label for="author">' . __( 'Name', 'textdomain'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></div>',
		
		'email'  => '<div class="comment-form-email float-left w-1-1 mb-20"><label for="email">' . __( 'E-mails', 'textdomain'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></div>'
	];
	// done customizing, now return the fields:
	return $fields;
}
// remove default comment form so it won't appear twice
add_filter( 'comment_form_defaults', 'mo_remove_default_comment_field', 10, 1 ); 
function mo_remove_default_comment_field( $defaults ) { if ( isset( $defaults[ 'comment_field' ] ) ) { $defaults[ 'comment_field' ] = ''; } return $defaults; }

// WOOCOMMERCE
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

// Remove related products output
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// Remove order notes field title
add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

// Remove order notes field
add_filter( 'woocommerce_checkout_fields' , 'remove_order_notes' );

function remove_order_notes( $fields ) {
     unset($fields['order']['order_comments']);
     return $fields;
}

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

// Remove tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

// Reorder order button
remove_action( 'woocommerce_single_product_summary', 
               'woocommerce_template_single_add_to_cart', 30 );
    add_action( 'woocommerce_single_product_summary', 
            'woocommerce_template_single_add_to_cart', 9 );

// Remove fields from account
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
add_filter( 'woocommerce_billing_fields' , 'custom_override_billing_fields' );
add_filter( 'woocommerce_shipping_fields' , 'custom_override_shipping_fields' );

function custom_override_checkout_fields( $fields ) {
	unset( $fields['billing']['billing_address_1'] );
 	unset( $fields['billing']['billing_address_2'] );
	unset( $fields['billing']['billing_city'] );	
	unset( $fields['billing']['billing_company'] );
  	unset( $fields['billing']['billing_country']);
  	unset( $fields['shipping']['shipping_country']);
	unset( $fields['billing']['billing_postcode'] );
	unset( $fields['billing']['billing_state'] );
	unset( $fields['billing']['billing_phone'] );
  return $fields;
}

function custom_override_billing_fields( $fields ) {
  unset( $fields['billing_address_1'] );
  unset( $fields['billing_address_2'] );	
  unset( $fields['billing_city'] );	
  unset( $fields['billing_company'] );
  unset( $fields['billing_country']);
  unset( $fields['billing_postcode'] );	
  return $fields;
}

function custom_override_shipping_fields( $fields ) {
  unset( $fields['shipping_country']);
  return $fields;
}

// Hide cart when empty
add_action( 'wp_footer', function() {    
    if ( WC()->cart->is_empty() ) {
        echo '<style type="text/css">.cart__total{ display: none; }</style>';
    }
});

require_once( get_template_directory() . '/customize.php' );