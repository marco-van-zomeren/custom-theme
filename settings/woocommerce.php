<?php
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