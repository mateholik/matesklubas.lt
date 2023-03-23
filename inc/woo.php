<?php
add_action( 'init', 'removeSorting' );

function removeSorting() {
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
}

//add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
//function wcs_woo_remove_reviews_tab($tabs) {
//    unset($tabs['reviews']);
//    unset( $tabs['description'] );
//}

// add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
// function sb_woo_remove_reviews_tab($tabs) {
//     unset($tabs['reviews']);
//     return $tabs;
// }


//woo checkout page
add_filter( 'woocommerce_checkout_fields' , 'custom_remove_woo_checkout_fields' );

function custom_remove_woo_checkout_fields( $fields ) {

    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_state']);

    $fields[ 'billing' ][ 'billing_company' ][ 'priority' ] = 120;
    $fields[ 'billing' ][ 'billing_company' ][ 'label' ] = 'Įmonės pavadinimas';
    $fields['order']['order_comments']['placeholder'] = 'Jei reikia - palikite papildomą informaciją';

   
    $fields['billing']['checkbox_trigger'] = array(
        'type'      => 'checkbox',
        'label'     => __('Įmonė?', 'woocommerce'),
        'class'     => array('form-row-wide'),
        'clear'     => true,
        'priority'     => 115
    );   

    return $fields;
}


add_action( 'woocommerce_after_checkout_form', 'bbloomer_conditionally_hide_show_new_field', 9999 );
  
function bbloomer_conditionally_hide_show_new_field() {
    
  wc_enqueue_js( "
      jQuery('input#checkbox_trigger').change(function(){
           
         if (! this.checked) {
            // HIDE IF NOT CHECKED
            jQuery('#billing_company_field').hide();
            jQuery('#billing_company_field input').val('');   
            
            jQuery('#VAT_number_field').hide();
            jQuery('#VAT_number_field input').val('');   

            jQuery('#company_code_field').hide();
            jQuery('#company_code_field input').val('');  
            
            jQuery('.woocommerce-additional-fields label').hide();

         } else {
            // SHOW IF CHECKED
            jQuery('#billing_company_field').show();
            jQuery('#VAT_number_field').show();
            jQuery('#company_code_field').show();
            jQuery('.woocommerce-additional-fields label').show();
         }
           
      }).change();
  ");
       
}



//woo nav cart item
if ( ! function_exists( 'storefront_cart_link' ) ) {
    /**
     * Cart Link
     * Displayed a link to the cart including the number of items present and the cart total
     *
     * @return void
     * @since  1.0.0
     */
    function storefront_cart_link() {
        ?>
<a class="nav__cart-link" href="<?php echo esc_url( wc_get_cart_url() ); ?>"
  title="<?php esc_attr_e( 'View your shopping cart', 'storefront' ); ?>">
  <span class="img-wrap">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cart.svg" alt="cart">
    <span class="count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
  </span>
  <span class="krepselis">krepšelis</span>
</a>
<?php
    }
};

//zoom in product page
add_filter( 'woocommerce_single_product_zoom_options', 'custom_single_product_zoom_options', 10, 3 );
function custom_single_product_zoom_options( $zoom_options ) {
    // Changing the magnification level:
    $zoom_options['magnify'] = 0.8;

    return $zoom_options;
}

/**
 * Change number of related products output
 */
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
function jk_related_products_args( $args ) {
    $args['posts_per_page'] = 4; // 4 related products
    $args['columns'] = 4; // arranged in 2 columns
    return $args;
}

/**
 * Show a message at the cart/checkout displaying
 * how much to go for free shipping.
 */
//veikia su nemokamu pristatymu pristatymo bude
function my_custom_wc_free_shipping_notice() {

	if ( ! is_cart() && ! is_checkout() ) { // Remove partial if you don't want to show it on cart/checkout
		return;
	}

	$packages = WC()->cart->get_shipping_packages();
	$package = reset( $packages );
	$zone = wc_get_shipping_zone( $package );

	$cart_total = WC()->cart->get_displayed_subtotal();
	if ( WC()->cart->display_prices_including_tax() ) {
		$cart_total = round( $cart_total - ( WC()->cart->get_discount_total() + WC()->cart->get_discount_tax() ), wc_get_price_decimals() );
	} else {
		$cart_total = round( $cart_total - WC()->cart->get_discount_total(), wc_get_price_decimals() );
	}
	foreach ( $zone->get_shipping_methods( true ) as $k => $method ) {
		$min_amount = $method->get_option( 'min_amount' );


		if ( $method->id == 'free_shipping' && ! empty( $min_amount ) && $cart_total < $min_amount ) {
			$remaining = $min_amount - $cart_total;
            wc_add_notice('Išleisk dar ' . $remaining . 'eu. ir gaut nemokamą pristatymą!');
		}
	}

}
add_action( 'wp', 'my_custom_wc_free_shipping_notice' );