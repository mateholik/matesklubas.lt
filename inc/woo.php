<?php
add_action( 'init', 'removeSorting' );

function removeSorting() {
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
}

add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    unset( $tabs['description'] );
}

//woo checkout page
add_filter( 'woocommerce_checkout_fields' , 'custom_remove_woo_checkout_fields' );

function custom_remove_woo_checkout_fields( $fields ) {

    // remove billing fields
//     unset($fields['billing']['billing_first_name']);
//     unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
//     unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
//     unset($fields['billing']['billing_city']);
//     unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
//     unset($fields['billing']['billing_phone']);
//     unset($fields['billing']['billing_email']);

    // remove shipping fields
//     unset($fields['shipping']['shipping_first_name']);
//     unset($fields['shipping']['shipping_last_name']);
//     unset($fields['shipping']['shipping_company']);
//     unset($fields['shipping']['shipping_address_1']);
//     unset($fields['shipping']['shipping_address_2']);
//     unset($fields['shipping']['shipping_city']);
//     unset($fields['shipping']['shipping_postcode']);
//     unset($fields['shipping']['shipping_country']);
//     unset($fields['shipping']['shipping_state']);

    // remove order comment fields
    unset($fields['order']['order_comments']);

    return $fields;
}