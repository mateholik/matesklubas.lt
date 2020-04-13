<?php

function unHookHeader(){
    remove_action('storefront_header', 'storefront_header_container', 0);
    remove_action('storefront_header', 'storefront_skip_links', 5);
    remove_action('storefront_header', 'storefront_social_icons', 10);
    remove_action('storefront_header', 'storefront_site_branding', 20);
    remove_action('storefront_header', 'storefront_secondary_navigation', 30);
    remove_action('storefront_header', 'storefront_product_search', 40);
    remove_action('storefront_header', 'storefront_header_container_close', 41);
    remove_action('storefront_header', 'storefront_primary_navigation_wrapper', 42);
    remove_action('storefront_header', 'storefront_primary_navigation', 50);
//    remove_action('storefront_header', 'storefront_header_cart', 60);
    remove_action('storefront_header', 'storefront_primary_navigation_wrapper_close', 68);
}
add_action('init', 'unHookHeader');

function customHeader() {
    ?>

<!--    <header id="header" class="header">-->
<!--        <div class="top">-->
<!--            <div class="top__bg">-->
<!--                --><?php //get_template_part('svg/inline', 'bgTop.svg'); ?>
<!--            </div>-->
<!--            <div class="top__content">-->
<!--                <div class="top__left">-->
<!--                    --><?php //get_template_part('svg/inline', 'mates.svg'); ?>
<!--                </div>-->
<!--                <div class="top__center">-->
<!--                    --><?php //get_template_part('svg/inline', 'logo.svg'); ?>
<!--                </div>-->
<!--                <div class="top__right">-->
<!--                    --><?php //get_template_part('svg/inline', 'klubas.svg'); ?>
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <nav class="nav" style="background-image: url('--><?php //echo get_stylesheet_directory_uri(); ?>/*/assets/img/bg-nav.svg');">*/
/*            <div class="container container--nav">*/
/*                */<?php
//                wp_nav_menu( array(
//                    'menu_class' => 'nav__ul',
//                    'theme_location' => 'primary',
//                    'container' => ''
//                ) );
//                ?>
<!--                <div v-on:click="mobMenu = !mobMenu" class="menu-btn-holder">-->
<!--                    <div class="nav-icon" :class="{open: mobMenu}">-->
<!--                        <div></div>-->
<!--                    </div>-->
<!--                    MENIU-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--                <div v-show="mobMenu" style="display: none;">-->
<!--                    --><?php
//                    wp_nav_menu( array(
//                        'menu_class' => 'nav__ul--mob',
//                        'theme_location' => 'primary',
//                        'container' => ''
//                    ) );
//                    ?>
<!--                </div>-->
<!---->
<!--        </nav>-->
<!--    </header>-->
   <!--
    <div class="container container--nav">
       <div class="header__wrap">
           <div class="header__logo">
               <?php storefront_site_title_or_logo(); ?>
           </div>
           <div class="header__navigation">
               <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
                   <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Menu', 'storefront' ) ) ); ?></span></button>
                   <?php
                   wp_nav_menu(
                       array(
                           'theme_location'  => 'primary',
                           'container_class' => 'primary-navigation',
                       )
                   );

                   wp_nav_menu(
                       array(
                           'theme_location'  => 'handheld',
                           'container_class' => 'handheld-navigation',
                       )
                   );
                   ?>
               </nav>
           </div>
           <div class="header__cart">
               <?php
               if ( storefront_is_woocommerce_activated() ) {
                   if ( is_cart() ) {
                       $class = 'current-menu-item';
                   } else {
                       $class = '';
                   }
                   ?>
                   <ul id="site-header-cart" class="site-header-cart menu">
                       <li class="<?php echo esc_attr( $class ); ?>">
                           <?php storefront_cart_link(); ?>
                       </li>
                       <li>
                           <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                       </li>
                   </ul>
                   <?php
               } ?>
           </div>
       </div>
   </div>
    <?php if( !is_front_page()) {?>
    <div class="page-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-bg.jpg');">
        <?php if(is_woocommerce()) {?>
            <h1><?php woocommerce_page_title(); ?></h1>
        <?php } else if (is_category()) { ?>
             <h1><?php single_cat_title(); ?></h1> <?php
        } else { ?>
            <h1><?php echo the_title(); ?></h1>
        <?php } ?>
    </div>
    <?php } ?>
    <div class="container <?php if( !is_front_page()) echo 'container--cannabis'?>">    -->


    <?php

}
add_action( 'storefront_header', 'customHeader', 1 );



/**
 * Change several of the breadcrumb defaults
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<div class="container"><nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav></div>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs', 20 );


register_nav_menu('mob_nav', 'Mobile Menu');

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary' || $args->theme_location == 'mob_nav') {
        $classes[] = 'nav__li';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

