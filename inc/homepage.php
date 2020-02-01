<?php

function unHookHomepage(){
    remove_action('homepage', 'storefront_homepage_content', 10);
    remove_action('homepage', 'storefront_product_categories', 20);
    remove_action('homepage', 'storefront_recent_products', 30);
    remove_action('homepage', 'storefront_featured_products', 40);
    remove_action('homepage', 'storefront_popular_products', 50);
    remove_action('homepage', 'storefront_on_sale_products', 60);
    remove_action('homepage', 'storefront_best_selling_products', 70);
}
add_action('init', 'unHookHomepage');


/**
 * Functions hooked in to homepage action
 *
 * @hooked storefront_homepage_content      - 10
 * @hooked storefront_product_categories    - 20
 * @hooked storefront_recent_products       - 30
 * @hooked storefront_featured_products     - 40
 * @hooked storefront_popular_products      - 50
 * @hooked storefront_on_sale_products      - 60
 * @hooked storefront_best_selling_products - 70
 */
do_action('homepage');

function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );