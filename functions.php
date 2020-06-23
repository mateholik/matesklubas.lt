<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

function addScripts() {
//    $cssTime = filemtime(get_stylesheet_directory() . '/style.css' );
    $jsTime = filemtime(get_stylesheet_directory() . '/main.js' );
    //TODO istrint stuliu registracija, nes defaultu storefront pakrauna is childo stilius. dbr palieku kad versijos skirtusi css failo
//    wp_enqueue_style( 'child-theme-style', get_template_directory_uri() . '/style.css', array(), $cssTime, false);
    wp_enqueue_script('child-theme-script', get_stylesheet_directory_uri() . '/main.js', array(), $jsTime, true);
}
add_action( 'wp_enqueue_scripts', 'addScripts' );

function footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'footer_menu' );

include_once ('inc/header.php');
include_once ('inc/myFunctions.php');
include_once ('inc/homepage.php');
include_once ('inc/woo.php');
include_once ('inc/customTaxPost.php');


add_image_size( 'home-slide', 300, 200, true );

//force guest user registration
function wc_register_guests( $order_id ) {
    // get all the order data
    $order = new WC_Order($order_id);

    //get the user email from the order
    $order_email = $order->billing_email;

    // check if there are any users with the billing email as user or email
    $email = email_exists( $order_email );
    $user = username_exists( $order_email );

    // if the UID is null, then it's a guest checkout
    if( $user == false && $email == false ){

        // random password with 12 chars
        $random_password = wp_generate_password();

        // create new user with email as username & newly created pw
        $user_id = wp_create_user( $order->billing_first_name, $random_password, $order_email );
        //add role
        $user_id_role = new WP_User($user_id);
        $user_id_role->set_role('customer');
        //WC guest customer identification
        update_user_meta( $user_id, 'guest', 'yes' );

        //user's billing data
        update_user_meta( $user_id, 'billing_address_1', $order->billing_address_1 );
        update_user_meta( $user_id, 'billing_address_2', $order->billing_address_2 );
        update_user_meta( $user_id, 'billing_city', $order->billing_city );
        update_user_meta( $user_id, 'billing_company', $order->billing_company );
        update_user_meta( $user_id, 'billing_country', $order->billing_country );
        update_user_meta( $user_id, 'billing_email', $order->billing_email );
        update_user_meta( $user_id, 'billing_first_name', $order->billing_first_name );
        update_user_meta( $user_id, 'billing_last_name', $order->billing_last_name );
        update_user_meta( $user_id, 'billing_phone', $order->billing_phone );
        update_user_meta( $user_id, 'billing_postcode', $order->billing_postcode );
        update_user_meta( $user_id, 'billing_state', $order->billing_state );

        // user's shipping data
        update_user_meta( $user_id, 'shipping_address_1', $order->shipping_address_1 );
        update_user_meta( $user_id, 'shipping_address_2', $order->shipping_address_2 );
        update_user_meta( $user_id, 'shipping_city', $order->shipping_city );
        update_user_meta( $user_id, 'shipping_company', $order->shipping_company );
        update_user_meta( $user_id, 'shipping_country', $order->shipping_country );
        update_user_meta( $user_id, 'shipping_first_name', $order->shipping_first_name );
        update_user_meta( $user_id, 'shipping_last_name', $order->shipping_last_name );
        update_user_meta( $user_id, 'shipping_method', $order->shipping_method );
        update_user_meta( $user_id, 'shipping_postcode', $order->shipping_postcode );
        update_user_meta( $user_id, 'shipping_state', $order->shipping_state );

        // Get all WooCommerce emails Objects from WC_Emails Object instance
        $emails = WC()->mailer()->get_emails();
        // Send WooCommerce "Customer New Account" email notification with the password
        $emails['WC_Email_Customer_New_Account']->trigger( $user_id, $random_password, true );

        // link past orders to this newly created customer
        wc_update_new_customer_past_orders( $user_id );
    }

}

//add this newly created function to the thank you page
add_action( 'woocommerce_thankyou', 'wc_register_guests', 10, 1 );

