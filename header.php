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
<meta name="verify-paysera" content="84b182157eb93faeba9fcb332168b0da">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" />
    <?php
    $env = $_SERVER['SERVER_NAME'];
    if($env == 'matesklubas.lt') { ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-TG2HKXW');</script>
        <!-- End Google Tag Manager -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140396104-5"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-140396104-5');
        </script>

        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '2840767732668145');
          fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2840767732668145&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
<?php } ?>

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

                <div class="nav__cart">
                    <?php
                    if ( storefront_is_woocommerce_activated() ) {?>
                        <ul id="site-header-cart" class="site-header-cart menu">
                            <li class="">
                                <?php storefront_cart_link(); ?>
                            </li>
                            <li>
                                <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                            </li>
                        </ul>
                        <?php
                    } ?>
                </div>


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
<!--        --><?php
//            if(is_single() && 'post' == get_post_type()) {
//                the_title('<h3 class="post__title">', '</h3>');
//            }
//        ?>

        <?php if( !is_checkout() && !is_cart() && !is_page_template( 'template-quiz.php' ) ) { ?>
        <main class="main site-main">
            <?php get_template_part('templates/sidebar'); ?>
            <div class="main__content">
        <?php }?>
