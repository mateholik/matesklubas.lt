<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
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
    <header id="header" class="header">
        <div class="top">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-top.jpg" alt="background">
            <div class="top__content">
                <div class="top__left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mates.svg" alt="mates">
                </div>
                <a href="<?php echo home_url(); ?>" class="top__center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
                </a>
                <div class="top__right">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/klubas.svg" alt="klubas">
                </div>
            </div>
        </div>
        <nav class="nav">
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
    <?php
    /**
     * Functions hooked in to storefront_before_content
     *
     * @hooked storefront_header_widget_region - 10
     * @hooked woocommerce_breadcrumb - 10
     */
    do_action( 'storefront_before_content' );
    ?>
    <div class="container">