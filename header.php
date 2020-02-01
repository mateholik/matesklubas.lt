<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */


$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:400,600&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
// 		do_action( 'storefront_header' );
		?>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
        <div class="container">
<!--    --><?php //if(!is_front_page())
//      echo '<div class="container">'
//    ?>

    <?php
    do_action( 'storefront_content_top' );
    ?>


<header id="header" class="header">
<?php
include_once ("svg.php");
echo $bgTop;
       ?>
        <div class="top">
          <!--  <div class="top__bg">
                <?php get_template_part('svg/inline', 'bgTop.svg'); ?>
            </div>
            <div class="top__content">
                <div class="top__left">
                    <?php get_template_part('svg/inline', 'mates.svg'); ?>
                </div>
                <div class="top__center">
                    <?php get_template_part('svg/inline', 'logo.svg'); ?>
                </div>
                <div class="top__right">
                    <?php get_template_part('svg/inline', 'klubas.svg'); ?>
                </div>
            </div> -->

        </div>
        <nav class="nav" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-nav.svg');">
            <div class="container container--nav">
                <?php
                wp_nav_menu( array(
                    'menu_class' => 'nav__ul',
                    'theme_location' => 'primary',
                    'container' => ''
                ) );
                ?>
                <div v-on:click="mobMenu = !mobMenu" class="menu-btn-holder">
                    <div class="nav-icon" :class="{open: mobMenu}">
                        <div></div>
                    </div>
                    MENIU
                </div>
            </div>

                <div v-show="mobMenu" style="display: none;">
                    <?php
                    wp_nav_menu( array(
                        'menu_class' => 'nav__ul--mob',
                        'theme_location' => 'primary',
                        'container' => ''
                    ) );
                    ?>
                </div>

        </nav>
    </header>
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

