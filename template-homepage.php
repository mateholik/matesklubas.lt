<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

<div class="homepage">
  <section class="hero">
    <div class="container">
      <div class="wrapper">
        <div class="wrapper__content">
          <h1>Matės klubas - tai bendruomenė</h1>
          <p>Susitikimai, patarimai, matės pasaulio naujienos, matės rūšių apžvalgos, receptai bei daug kitų
            įdomybių</p>
          <div class="btn__holder">
            <a href="#community" class="btn">prisijungti</a>
          </div>
        </div>
        <div class="wrapper__img">
          <img class="desktop" width="390" height="404"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-hipster-desktop.png" alt="text-wrap">
          <img class="mobile" width="130" height="248"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-hipster-mobile.png" alt="text-wrap">
        </div>

      </div>
    </div>
  </section>
  <?php get_template_part('templates/latestNews'); ?>

  <section class="categories">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'prekių kategorijos' ) 
     ); ?>
      <div class="wrapper">
        <img width="1170" height="177" class="background"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cats.jpeg" alt="title-mob-wrap">
        <?php get_template_part('templates/category', null, array( 'category' => 'mate', 'title' => 'Matė arbatos' )); ?>
        <?php get_template_part('templates/category', null, array( 'category' => 'kalabasos', 'title' => 'Kalabasos' )); ?>
        <?php get_template_part('templates/category', null, array( 'category' => 'bombiles', 'title' => 'Bombilės' )); ?>
        <?php get_template_part('templates/category', null, array( 'category' => 'kita', 'title' => 'Kita' )); ?>

      </div>
    </div>
  </section>
  <section id="newsletter" class="newsletter distortion-bg">
    <div class="container">
      <div class="section-title">
        <img width="48" height="32"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/title-icon-mate.png" alt="romb">
        <h2>prenumeruoti naujienlaiškį</h2>
        <img width="48" height="32"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/title-icon-mate.png" alt="romb">
      </div>
      <p>Gauk informaciją apie naujas prekes, naujus straipsnius bei video apžvalgas</p>
      <div class="wrapper">
        <?php echo do_shortcode('[mailpoet_form id=1]'); ?>
      </div>
    </div>
  </section>
  <section id="products" class="products">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'prekės' ) 
     ); ?>
      <div class="options">
        <span class="active">Populiariausios</span>
        <span>Naujienos</span>
        <span>Išpardavimas</span>
      </div>
      <div class="results">
        <div>
          <?php echo do_shortcode('[best_selling_products columns="4" limit="8"]'); ?>
        </div>
        <div>
          <?php echo do_shortcode('[recent_products columns="4" limit="8"]'); ?>
        </div>
        <div>
          <?php echo do_shortcode('[sale_products columns="4" limit="8"]'); ?>
        </div>
      </div>
      <div class="btn__holder">
        <a href="https://www.matesklubas.lt/parduotuve/" class="btn">
          Visos prekės
        </a>
      </div>

    </div>

  </section>
  <section class="help distortion-bg ">
    <div class="container">
      <div class="wrapper">
        <div class="block">
          <div class="top">
            <?php get_template_part( 'templates/title', null, array( 'title' => 'negali išsirinkti?' ) ); ?>
            <p>Matės pasaulyje esi naujokas? Nori išbandyti mate bei jos aksesuarus, bet nežinai ką išsirinkti? Atlik
              testą ir gauk asmeninę rekomendaciją</p>
          </div>
          <div class="btn__holder">
            <a href="<?php echo get_permalink( 330 ); ?>" class="btn">testas</a>
          </div>
        </div>
        <div class="block">
          <div class="top">
            <?php get_template_part( 'templates/title', null, array( 'title' => 'visa informacija naujokui' ) ); ?>
            <p>Kas per augalas ta matė? Kokios yra jos rūšys? Kodėl išvis verta ją gerti? Kuom skiriasi medinis nuo
              moliūgo kalabasas? Čia rasi trumpą ir aiškią informaciją, kuri padės tau pasinerti į matės pasaulį</p>
          </div>
          <div class="btn__holder">
            <a href="<?php echo get_permalink( 681 ); ?>" class="btn">instrukcija</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="community" class="community">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'tapk bendruomenės dalimi' ) ); ?>
      <div class="wrapper">
        <div class="contacts">
          <p>Prisijunk prie svetainės ir rink nuolaidas mūsų el. parduotuvėje! <a
              href="<?php echo get_permalink( 9 ); ?>">Prisijunk!</a></p>
          <p>Užsisakyk naujienlaiškį ir gauk informaciją apie naujas prekes bei straipsnius! <a
              href="#newsletter">užsisakyk!!</a>
          </p>
          <div class="social">
            <div class="subtitle">Sekite mus!</div>
            <a href="https://www.facebook.com/matesklubass" target="_blank" rel="noopener noreferrer">
              <img width="24" height="24"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="fb-icon">
              Facebook puslapis
            </a>
            <a href="https://www.facebook.com/groups/1098983160306904/" target="_blank" rel="noopener noreferrer">
              <img width="24" height="24"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="fb-icon">
              Facebook grupė
            </a>
            <a href="https://www.instagram.com/matesklubas" target="_blank" rel="noopener noreferrer">
              <img width="24" height="24"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/instagram.svg" alt="instagram-icon">
              Instagram
            </a>
            <a href="https://www.youtube.com/channel/UCiL5qWJ7cer2tAvY7Y7sNwA" target="_blank"
              rel="noopener noreferrer">
              <img width="24" height="24"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/youtube.svg" alt="youtube-icon">
              Youtube
            </a>
          </div>
        </div>
        <div class="image">
          <img width="421" height="399" class="bg"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-community.jpeg" alt="fb-icon">
          <img width="190" height="439" class="person"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footbal-player.png" alt="fb-icon">
        </div>
      </div>
    </div>
  </section>
</div>

<?php
get_footer();