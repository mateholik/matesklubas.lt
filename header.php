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
          })(window,document,'script','dataLayer','GTM-TG2HKXW');
        </script>
        <!-- End Google Tag Manager -->
<?php } ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>
    <header id="header" class="header">
        <div class="top">
           <div class="top--desktop">
               <picture>
                   <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-top.jpg">
                   <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-top.jpg" alt="background">
               </picture>
               <div class="top__content">
                   <div class="top__left">
                       <picture>
                           <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mates.svg">
                           <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mates.svg" alt="mates">
                       </picture>
                   </div>
                   <a href="<?php echo home_url(); ?>" class="top__center">
                       <picture>
                           <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg">
                           <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
                       </picture>
                   </a>
                   <div class="top__right">
                       <picture>
                           <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/klubas.svg">
                           <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/klubas.svg" alt="klubas">
                       </picture>
                   </div>
               </div>
           </div>
            <div class="top--mobile">
                <a href="<?php echo home_url(); ?>" class="logo-link"></a>
                <picture>
                    <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
                    <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-mob-bg.jpg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-mob-bg.jpg" alt="background">
                </picture>
                <div class="top__content top__content--mobile">
                    <picture>
                        <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
                        <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-mob-content.png">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-mob-content.png" alt="mates klubas">
                    </picture>
                </div>
            </div>
        </div>
        <nav class="nav">
            <div class="nav--before">
                <picture>
                    <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-nav-top.svg">
                    <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-nav-top.svg" alt="before">
                </picture>
            </div>
            <div class="nav--after">
                <picture>
                    <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-nav-bottom.svg">
                    <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-nav-bottom.svg" alt="after">
                </picture>
            </div>
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
                    'theme_location' => 'mob_nav',
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

        <?php if( !is_checkout() && !is_cart() && !is_page_template( 'template-quiz.php' ) && !is_account_page() ) { ?>
        <main class="main site-main">
            <?php get_template_part('templates/sidebar'); ?>
            <div class="main__content">
        <?php }?>
