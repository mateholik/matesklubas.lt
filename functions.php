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
    $jsTime = filemtime(get_stylesheet_directory() . '/assets/compiled/js/main.js' );
    $jsTimeProduct = filemtime(get_stylesheet_directory() . '/assets/compiled/js/product.js' );

    wp_enqueue_script('child-theme-script', get_stylesheet_directory_uri() . '/assets/compiled/js/main.js', array(), $jsTime, true);

    if ( is_product_category() || is_shop() || is_front_page() ) {
        wp_enqueue_script('product', get_stylesheet_directory_uri() . '/assets/compiled/js/product.js', array(), $jsTimeProduct, true);
    }
}
add_action( 'wp_enqueue_scripts', 'addScripts' );

function addStyles() {
    $cssTime = filemtime(get_stylesheet_directory() . '/assets/compiled/css/style.css' );
    if(!is_page_template( 'template-introduction.php' )) {
        wp_enqueue_style( 'child-theme-style', get_stylesheet_directory_uri() . '/assets/compiled/css/style.css', array(), $cssTime, false);
    }

    // $cssHomepageTime = filemtime(get_stylesheet_directory() . '/assets/compiled/css/homepage/style.css' );
    // if( is_front_page()) {
    //     wp_enqueue_style( 'homepage-style', get_stylesheet_directory_uri() . '/assets/compiled/css/homepage/style.css', array(), $cssHomepageTime, false);
    // }
}
add_action( 'wp_enqueue_scripts', 'addStyles', 99 );

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
// function wc_register_guests( $order_id ) {
//     // get all the order data
//     $order = new WC_Order($order_id);

//     //get the user email from the order
//     $order_email = $order->billing_email;

//     // check if there are any users with the billing email as user or email
//     $email = email_exists( $order_email );
//     $user = username_exists( $order_email );

//     // if the UID is null, then it's a guest checkout
//     if( $user == false && $email == false ){

//         // random password with 12 chars
//         $random_password = wp_generate_password();

//         // create new user with email as username & newly created pw
//         $user_id = wp_create_user( $order->billing_first_name, $random_password, $order_email );
//         //add role
//         $user_id_role = new WP_User($user_id);
//         $user_id_role->set_role('customer');
//         //WC guest customer identification
//         update_user_meta( $user_id, 'guest', 'yes' );

//         //user's billing data
//         update_user_meta( $user_id, 'billing_address_1', $order->billing_address_1 );
//         update_user_meta( $user_id, 'billing_address_2', $order->billing_address_2 );
//         update_user_meta( $user_id, 'billing_city', $order->billing_city );
//         update_user_meta( $user_id, 'billing_company', $order->billing_company );
//         update_user_meta( $user_id, 'billing_country', $order->billing_country );
//         update_user_meta( $user_id, 'billing_email', $order->billing_email );
//         update_user_meta( $user_id, 'billing_first_name', $order->billing_first_name );
//         update_user_meta( $user_id, 'billing_last_name', $order->billing_last_name );
//         update_user_meta( $user_id, 'billing_phone', $order->billing_phone );
//         update_user_meta( $user_id, 'billing_postcode', $order->billing_postcode );
//         update_user_meta( $user_id, 'billing_state', $order->billing_state );

//         // user's shipping data
//         update_user_meta( $user_id, 'shipping_address_1', $order->shipping_address_1 );
//         update_user_meta( $user_id, 'shipping_address_2', $order->shipping_address_2 );
//         update_user_meta( $user_id, 'shipping_city', $order->shipping_city );
//         update_user_meta( $user_id, 'shipping_company', $order->shipping_company );
//         update_user_meta( $user_id, 'shipping_country', $order->shipping_country );
//         update_user_meta( $user_id, 'shipping_first_name', $order->shipping_first_name );
//         update_user_meta( $user_id, 'shipping_last_name', $order->shipping_last_name );
//         update_user_meta( $user_id, 'shipping_method', $order->shipping_method );
//         update_user_meta( $user_id, 'shipping_postcode', $order->shipping_postcode );
//         update_user_meta( $user_id, 'shipping_state', $order->shipping_state );

//         // Get all WooCommerce emails Objects from WC_Emails Object instance
//         $emails = WC()->mailer()->get_emails();
//         // Send WooCommerce "Customer New Account" email notification with the password
//         $emails['WC_Email_Customer_New_Account']->trigger( $user_id, $random_password, true );

//         // link past orders to this newly created customer
//         wc_update_new_customer_past_orders( $user_id );
//     }

// }

//add this newly created function to the thank you page
// add_action( 'woocommerce_thankyou', 'wc_register_guests', 10, 1 );


//change user avatar
add_filter( 'avatar_defaults', 'crunchifygravatar' );
function crunchifygravatar ($avatar_defaults) {
    $myavatar = get_stylesheet_directory_uri() . '/assets/img/mate_avatar.jpg';
    $avatar_defaults[$myavatar] = "Bendra avatarke";
    return $avatar_defaults;
}

//sale badge
add_filter('woocommerce_sale_flash', 'my_custom_sale_flash');
function my_custom_sale_flash($text) {
    return '<div class="custom-badge"><span class="onsale-custom">Akcija</span></div>';
}
//remove sale badge from single product description
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash' , 10);

//sold badge
add_action( 'woocommerce_before_shop_loop_item_title', function() {
   global $product;
   if ( !$product->is_in_stock() ) {
       echo '<div class="custom-badge" style="z-index: 9999"><span class="soldout-custom">Išpirkta</span></div>';
   }
});


//remove shipping methods from cart page
function disable_shipping_calc_on_cart( $show_shipping ) {
    if( is_cart() ) {
        return false;
    }
    return $show_shipping;
}
add_filter( 'woocommerce_cart_ready_to_calc_shipping', 'disable_shipping_calc_on_cart', 99 );


//add terms checkbox in checkout
add_action( 'woocommerce_review_order_before_submit', 'bt_add_checkout_checkbox', 10 );
function bt_add_checkout_checkbox() {

    woocommerce_form_field( 'checkout-checkbox', array( // CSS ID
       'type'          => 'checkbox',
       'class'         => array('form-row mycheckbox'), // CSS Class
       'label_class'   => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
       'input_class'   => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
       'required'      => true, // Mandatory or Optional
       'label'         => 'Sutinku su  <a href="https://www.matesklubas.lt/pirkimo-ir-pristatymo-salygos/" target="_blank" rel="noopener">pirkimo sąlygomis ir taisyklėmis</a>', // Label and Link
    ));    
}

add_action( 'woocommerce_checkout_process', 'bt_add_checkout_checkbox_warning' );
/**
 * Alert if checkbox not checked
 */ 
function bt_add_checkout_checkbox_warning() {
    if ( ! (int) isset( $_POST['checkout-checkbox'] ) ) {
        wc_add_notice( __( 'Prašome sutinki su pirkimo sąlygomis ir taisyklėmis' ), 'error' );
    }
}

add_action('after_setup_theme', 'register_navwalker');
function register_navwalker() {
    require('inc/MkNavWalker.php');
}

function remove_image_zoom_support_webtalkhub() {
    remove_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'wp', 'remove_image_zoom_support_webtalkhub', 100 );


// function get_the_excerpt( $post_id ){
//     global $post;  
//     $save_post = $post;
//     $post = get_post($post_id);
//     setup_postdata( $post );
//     $output = get_the_excerpt();
//     $post = $save_post;
//     return $output;
// }

function get_excerpt_by_id( $post_id ) {
    return apply_filters( 'get_the_excerpt', wp_trim_excerpt( get_post_field( 'post_excerpt', $post_id ), $post_id ), $post_id );
}

//for homepage tabs
function display_top_products_excluding_soldout($limit = 10) {
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $limit,
        'meta_key' => 'total_sales',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'meta_query' => array(
            array(
                'key' => '_stock_status',
                'value' => 'instock',
                'compare' => '='
            )
        )
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        echo '<ul class="products">';
        while ($loop->have_posts()) : $loop->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
        echo '</ul>';
    } else {
        echo '<p>No products found</p>';
    }

    wp_reset_postdata();
}
function display_newest_products_excluding_soldout($limit = 10) {
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $limit,
        'orderby' => 'date',
        'order' => 'DESC',
        'meta_query' => array(
            array(
                'key' => '_stock_status',
                'value' => 'instock',
                'compare' => '='
            )
        )
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        echo '<ul class="products">';
        while ($loop->have_posts()) : $loop->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
        echo '</ul>';
    } else {
        echo '<p>No products found</p>';
    }

    wp_reset_postdata();
}
function display_sale_products_excluding_soldout($limit = 10) {
    // Get all sale products IDs
    $product_ids_on_sale = wc_get_product_ids_on_sale();

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $limit,
        'no_found_rows' => 1,
        'post__in' => array_merge(array(0), $product_ids_on_sale),
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => '_stock_status',
                'value' => 'instock',
                'compare' => '='
            )
        )
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        echo '<ul class="products">';
        while ($loop->have_posts()) : $loop->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
        echo '</ul>';
    } else {
        echo '<p>No sale products found</p>';
    }

    wp_reset_postdata();
}
function display_soldout_products($limit = 10) {
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $limit,
        'no_found_rows' => 1,
        'meta_query' => array(
            array(
                'key' => '_stock_status',
                'value' => 'outofstock',
                'compare' => '='
            )
        )
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        echo '<ul class="products">';
        while ($loop->have_posts()) : $loop->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
        echo '</ul>';
    } else {
        echo '<p>No sold out products found</p>';
    }

    wp_reset_postdata();
}

add_filter( 'woocommerce_related_products', 'mysite_filter_related_products', 10, 1 );
function mysite_filter_related_products( $related_product_ids ) {

    foreach( $related_product_ids as $key => $value ) {
        $relatedProduct = wc_get_product( $value );
        if( ! $relatedProduct->is_in_stock() ) {
            unset( $related_product_ids["$key"] );
        }
    }

    return $related_product_ids;
}

function move_out_of_stock_products_to_end( $query ) {
    if ( ! is_admin() && $query->is_main_query() && ( is_shop() || is_product_category() || is_product_tag() ) ) {
        
        // Modify sorting order
        $query->set( 'meta_key', '_stock_status' );
        $query->set( 'orderby', array(
            'meta_value' => 'ASC',  // Sort by stock status first
            'menu_order' => 'ASC',  // Then use default menu order
        ) );
    }
}
add_action( 'pre_get_posts', 'move_out_of_stock_products_to_end' );