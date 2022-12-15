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

<div class="homepage2">

  <section class="hero">
    <div class="container">
      <div class="wrapper">
        <div class="wrapper__content">
          <h1>Matės klubas - tai bendruomenė</h1>
          <p>Susitikimai, patarimai, matės pasaulio naujienos, matės rūšių apžvalgos, receptai bei daug kitų
            įdomybių</p>
          <div class="btn__holder">
            <div class="btn">prisijungti</div>
          </div>
        </div>
        <div class="wrapper__img">
          <img class="desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-hipster-desktop.png"
            alt="text-wrap">
          <img class="mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-hipster-mobile.png"
            alt="text-wrap">
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
        <img class="background" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cats.jpeg"
          alt="title-mob-wrap">
        <?php get_template_part('templates/category', null, array( 'category' => 'mate', 'title' => 'Matė arbatos' )); ?>
        <?php get_template_part('templates/category', null, array( 'category' => 'kalabasos', 'title' => 'Kalabasos' )); ?>
        <?php get_template_part('templates/category', null, array( 'category' => 'bombiles', 'title' => 'Bombilės' )); ?>
        <?php get_template_part('templates/category', null, array( 'category' => 'kita', 'title' => 'Kita' )); ?>

      </div>
    </div>
  </section>
  <section class="newsletter distortion-bg">
    <div class="container">
      <div class="section-title">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/title-icon-mate.png" alt="romb">
        <h2>prenumeruoti naujienlaiškį</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/title-icon-mate.png" alt="romb">
      </div>
      <p>Gauk informaciją apie naujas prekes, naujus straipsnius bei video apžvalgas</p>
      <div class="wrapper">
        <?php echo do_shortcode('[mailpoet_form id=1]'); ?>
        <!-- <input type="email" placeholder="Įveskite el. pašto adresą">

        <div class="btn__holder">
          <div class="btn">prenumeruoti</div>
        </div> -->
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
            <div class="btn">testas</div>
          </div>
        </div>
        <div class="block">
          <div class="top">
            <?php get_template_part( 'templates/title', null, array( 'title' => 'visa informacija naujokui' ) ); ?>
            <p>Kas per augalas ta matė? Kokios yra jos rūšys? Kodėl išvis verta ją gerti? Kuom skiriasi medinis nuo
              moliūgo kalabasas? Čia rasi trumpą ir aiškią informaciją, kuri padės tau pasinerti į matės pasaulį</p>
          </div>
          <div class="btn__holder">
            <div class="btn">instrukcija</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="community">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'tapk bendruomenės dalimi' ) ); ?>
      <div class="wrapper">
        <div class="contacts">
          <p>Prisijunk prie svetainės ir rink nuolaidas mūsų el. parduotuvėje! <a href="">Prisijunk!</a></p>
          <p>Užsisakyk naujienlaiškį ir gauk informaciją apie naujas prekes bei straipsnius! <a href="">užsisakyk!!</a>
          </p>
          <div class="social">
            <div class="subtitle">Sekite mus!</div>
            <a href="https://www.facebook.com/groups/1098983160306904/" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="fb-icon">
              Facebook grupė
            </a>
            <a href="https://www.facebook.com/matesklubass" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="fb-icon">
              Facebook puslapis
            </a>
            <a href="https://www.instagram.com/matesklubas" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/instagram.svg"
                alt="instagram-icon">
              Instagram
            </a>
            <a href="https://www.youtube.com/channel/UCiL5qWJ7cer2tAvY7Y7sNwA" target="_blank"
              rel="noopener noreferrer">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/youtube.svg" alt="youtube-icon">
              Youtube
            </a>
          </div>
        </div>
        <div class="image">
          <img class="bg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-community.jpeg"
            alt="fb-icon">
          <img class="person" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footbal-player.png"
            alt="fb-icon">
        </div>
      </div>
    </div>
  </section>

</div>


<?php /*
<div class="homepage">
  <section>
    <div class="news">
      <div class="row">
        <div class="row__col">
          <?php
                    $latestPost = wp_get_recent_posts(array(
                        'numberposts' => 1, // Number of recent posts thumbnails to display
                        'post_status' => 'publish', // Show only the published posts
                        'category__not_in' => array(112)
                    ))
                    ;?>
<a href="<?php echo get_permalink($latestPost[0]['ID']) ?>" class="news__block">
  <div class="news__preview">
    <?php echo get_the_post_thumbnail($latestPost[0]['ID'], 'home-news'); ?>
    <p class="news__category">Naujausias Straipsnis</p>
    <div class="news__category-bg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item.svg" alt="text-wrap">
    </div>
  </div>
  <div class="news__text">
    <h1 class="news__text-title"><?php echo $latestPost[0]['post_title'] ?></h1>
    <p class="news__text-more">Plačiau »</p>
  </div>
  <div class="news__border"></div>
</a>
</div>
<div class="row__col">
  <?php
                    $latestVideo = wp_get_recent_posts(array(
                        'post_type'=>'videos',
                        'numberposts' => 1, // Number of recent posts thumbnails to display
                        'post_status' => 'publish' // Show only the published posts
                    ))
                    ;?>
  <a href="<?php echo get_permalink($latestVideo[0]['ID']) ?>" class="news__block">
    <div class="news__preview">
      <?php echo get_the_post_thumbnail($latestVideo[0]['ID'], 'home-news'); ?>
      <p class="news__category">Naujausias vaizdo įrašas</p>
      <div class="news__category-bg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item.svg" alt="text-wrap">
      </div>
      <div class="news__play">
        <div class="news__play-wrap">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="play">
        </div>
      </div>
    </div>
    <div class="news__text">
      <h1 class="news__text-title"><?php echo $latestVideo[0]['post_title'] ?></h1>
      <p class="news__text-more">Plačiau »</p>
    </div>
    <div class="news__border"></div>
  </a>
</div>
</div>
</div>
</section>

<section>
  <div class="cats">
    <h2 class="cats__title">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate-title.jpg" alt="title-img">
      Prekių kategorijos
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate-title.jpg" alt="title-img">
    </h2>
    <div class="cats__wrap">
      <div class="cats__bg">
        <picture>
          <source media="(min-width: 769px)"
            srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat.jpg">
          <source media="(max-width: 768px)"
            srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat.jpg" alt="bg">
        </picture>
      </div>
      <!--                        <a href="--><?php //categoryLink(39) ?>
      <!--" class="block">-->
      <a href="<?php categoryLink(24) ?>" class="block">
        <div class="block__bg-mob">
          <picture>
            <source media="(min-width: 769px)"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
            <source media="(max-width: 768px)"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item-mob.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item-mob.jpg"
              alt="title-mob-wrap">
          </picture>
        </div>
        <div class="block__img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate.png" alt="mate">
        </div>
        <h3 class="block__text">
          <div class="block__text-bg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item-full.svg" alt="title-wrap">
          </div>
          <div class="block__text-content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/daigelis.svg" alt="daigelis">
            <span>Matè arbatos</span>
          </div>
        </h3>
      </a>
      <!--                        <a href="--><?php //categoryLink(44) ?>
      <!--" class="block">-->
      <a href="<?php categoryLink(19) ?>" class="block">
        <div class="block__bg-mob">
          <picture>
            <source media="(min-width: 769px)"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
            <source media="(max-width: 768px)"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item-mob.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item-mob.jpg"
              alt="title-mob-wrap">
          </picture>
        </div>
        <div class="block__img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kalabasas.png" alt="mate">
        </div>
        <h3 class="block__text">
          <div class="block__text-bg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item-full.svg" alt="title-wrap">
          </div>
          <div class="block__text-content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/kalabasas.svg" alt="kalabasas">
            <span>Kalabasos</span>
          </div>
        </h3>
      </a>
      <!--                        <a href="--><?php //categoryLink(49); ?>
      <!--" class="block">-->
      <a href="<?php categoryLink(16); ?>" class="block">
        <div class="block__bg-mob">
          <picture>
            <source media="(min-width: 769px)"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
            <source media="(max-width: 768px)"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item-mob.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item-mob.jpg"
              alt="title-mob-wrap">
          </picture>
        </div>
        <div class="block__img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bombilos.png" alt="mate">
        </div>
        <h3 class="block__text">
          <div class="block__text-bg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item-full.svg" alt="title-wrap">
          </div>
          <div class="block__text-content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bombiles.svg" alt="bombiles">
            <span>Bombilės</span>
          </div>
        </h3>
      </a>
    </div>
  </div>
</section>

<section>
  <h2 class="cats__title">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate-title.jpg" alt="title-img">
    Rinkiniai
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate-title.jpg" alt="title-img">
  </h2>
  <?php echo do_shortcode('[products columns="4" category="rinkiniai"]'); ?>
</section>

<section id="homepage-products">
  <div class="prods">
    <h2 class="cats__title">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate-title.jpg" alt="title-img">
      Prekės
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate-title.jpg" alt="title-img">
    </h2>
    <div class="prods__options">
      <span v-on:click="show = 0" class="option" v-bind:class="{ active: show === 0 }">Populiariausios</span>
      <span v-on:click="show = 1" class="option" v-bind:class="{ active: show === 1 }">Naujienos</span>
      <span v-on:click="show = 2" class="option" v-bind:class="{ active: show === 2 }">Išpardavimas</span>
    </div>
    <div class="prods__results">
      <transition name="animation">
        <div v-if="show === 0" key=0>
          <?php echo do_shortcode('[best_selling_products columns="4" limit="8"]'); ?>
        </div>
        <div v-else-if="show === 1" key=1>
          <?php echo do_shortcode('[recent_products columns="4" limit="8"]'); ?>
        </div>
        <div v-else-if="show === 2" key=2>
          <?php echo do_shortcode('[sale_products columns="4" limit="8"]'); ?>
        </div>
      </transition>
    </div>
    <a href="https://www.matesklubas.lt/parduotuve/" class="single_add_to_cart_button button alt"
      style="margin: 0 auto;">Visos prekės</a>
  </div>
</section>

</div>
*/ ?>




<?php
get_footer();