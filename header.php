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
<meta name="keywords" content="yerba, matė, yerbamate, mates arbata, matesklubas, kofeinas, energija, mates gerimas">
<meta name="author" content="Vladis Vaisov">
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

<!-- Global site tag (gtag.js) - Google Ads: 10850987414 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10850987414"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10850987414');
</script>

<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-10850987414/aHl0CI7V4c4DEJbbk7Yo'});
</script>



</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">

<?php if( !is_page_template( 'template-introduction.php' )) { ?>

	<?php do_action( 'storefront_before_header' ); ?>
  <?php /*
    <header id="header" class="header">
  
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
            	<div class="lang-switcher-desk">
            	       <?php echo do_shortcode('[gtranslate]'); ?>
                </div>
                <?php
                wp_nav_menu( array(
                    'menu_class' => 'nav__ul',
                    'theme_location' => 'primary',
                    'container' => ''
                ) );
                ?>

                <div class="nav__cart">
                        <ul id="site-header-cart" class="site-header-cart menu">
                            <li class="">
                                <?php storefront_cart_link(); ?>
                            </li>
                            <li>
                                <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                            </li>
                        </ul>
                </div>
              
                <div v-on:click="mobMenu = !mobMenu" class="menu-btn-holder">
                    <div class="nav-icon" :class="{open: mobMenu}">
                        <div></div>
                    </div>
                    MENIU
                </div>
            </div>
            <div v-show="mobMenu" style="display: none;">
            	<div class="lang-switcher-mob">
            	<?php echo do_shortcode('[gtranslate]'); ?>
            </div>
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
     */ ?>
      <?php $loginPermalink = get_permalink( 9 ); ?>
    <header class="header">
      <div class="container">
        <div class="wrapper">
          <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="logo">
          </a>
          <nav class="desktop">
            <?php
              wp_nav_menu( array(
                  'menu_class' => '',
                  'theme_location' => 'primary',
                  'container' => '',
                  'walker' => new mk_wp_nav_menu_walker()
              ) );
              ?>
          </nav>
          <div class="right">
            <nav class="desktop">
            <ul>
              <li>
                <a class="login" href="<?php echo $loginPermalink ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/login.svg" alt="login">
                  <?php is_user_logged_in() ? print 'Paskyra' : print "Prisijungti" ?>
                </a>
              </li>
            </ul>
            </nav>
            <div class="cart">
              <div class="cta">
                <?php storefront_cart_link(); ?>
              </div>
              <div class="dropdown">
                <?php the_widget( 'WC_Widget_Cart','title=' ); ?>
              </div>
            </div>
          </div>
          <div id="hamburger" class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </div>
        </div>
      </div>
      <nav id="mobileMenu" class="mobile">
        <?php
          wp_nav_menu( array(
            'menu_class' => '',
            'theme_location' => 'primary',
            'container' => ''
          ) );
        ?>
         <ul>
         <li>
            <a class="login" href="<?php echo $loginPermalink ?>">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/login.svg" alt="login">
              <?php is_user_logged_in() ? print 'Paskyra' : print "Prisijungti" ?>
            </a>
          </li>
        </ul>
        <div class="cart">
          <div class="cta">
            <?php storefront_cart_link(); ?>
          </div>
          <div class="dropdown">
            <?php the_widget( 'WC_Widget_Cart','title=' ); ?>
          </div>
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

<?php }?>


<?php if( !is_checkout() && !is_cart() && !is_page_template( 'template-quiz.php' ) && !is_page_template( 'template-introduction.php' ) && !is_account_page() ) { ?>
    <main class="main site-main">
        <?php get_template_part('templates/sidebar'); ?>
        <div class="main__content">
<?php }?>
