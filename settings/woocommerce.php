<?php
// Add support
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

// Remove single product title 
remove_action( 'woocommerce_single_product_summary','woocommerce_template_single_title', 5 );

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

// Remove product images
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

// Remove tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

// Reorder order button
// remove_action( 'woocommerce_single_product_summary', 
//              'woocommerce_template_single_add_to_cart', 30 );
//   add_action( 'woocommerce_single_product_summary', 
//           'woocommerce_template_single_add_to_cart', 9 );

// Hide cart when empty
add_action( 'wp_footer', function() {    
    if ( WC()->cart->is_empty() ) {
        echo '<style type="text/css">#cart-total{ display: none; }</style>';
    }
});