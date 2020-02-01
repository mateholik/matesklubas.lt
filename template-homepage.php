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
<div class="container">
    <main class="main">
        <div class="main__sidebar">
            <div class="sidebar">
                <p class="sidebar__text">Mes galime tau padėti išsirinkti tau skirtą matę</p>
                <div class="sidebar__btn">
                    <a href="#" class="btn btn--sidebar">Negali išsirinkti?</a>
                </div>
                <div class="sidebar__block">
                    <h3>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/daigelis.svg" alt="daigelis">
                        Matė arbatos:
                    </h3>
                    <ul>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                    </ul>
                </div>
                <div class="sidebar__block">
                    <h3>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/kalabasas.svg" alt="kalabasas">
                        kalabasai:
                    </h3>
                    <ul>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                    </ul>
                </div>
                <div class="sidebar__block">
                    <h3>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bombiles.svg" alt="bombiles">
                        bombilai:
                    </h3>
                    <ul>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                        <li>
                            Classical
                            <span>(20)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main__content">
            <div class="homepage">
               <div class="news">
                   <div class="row">
                       <div class="row__col">
                            <div class="news__block">
                                <div class="news__preview">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news-thumb.jpg" alt="thumb">
                                    <p class="news__category" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-thumb.svg');">Naujausi Straipsniai</p>
                                </div>
                                <div class="news__text">
                                    <h1 class="news__text-title">Naujas būdas ruošti matė arbatą pridedant kitų žolelių...</h1>
                                    <p class="news__text-more">Plačiau »</p>
                                </div>
                                <div class="news__border"></div>
                            </div>
                       </div>
                       <div class="row__col">
                           <div class="news__block">
                               <div class="news__preview">
                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news-thumb-video.jpg" alt="thumb">
                                   <p class="news__category" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-thumb.svg');">Naujausias vaizdo įrašas</p>
                                   <div class="news__play">
                                       <div class="news__play-wrap">
                                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="play">
                                       </div>
                                   </div>
                               </div>
                               <div class="news__text">
                                   <h1 class="news__text-title">Naujas būdas ruošti matė arbatą pridedant kitų žolelių...</h1>
                                   <p class="news__text-more">Plačiau »</p>
                               </div>
                               <div class="news__border"></div>
                           </div>
                       </div>
                   </div>
               </div>

                <div class="cats">
                    <h2 class="cats__title">Produktų kategorijos</h2>
                    <div class="cats__wrap" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat.jpg');">
                        <div class="block">
                            <div class="block__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate.png" alt="mate">
                            </div>
                            <h3 class="block__text" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item.png');">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/daigelis.svg" alt="daigelis">
                                Matė arbatos:
                            </h3>
                        </div>
                        <div class="block">
                            <div class="block__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bombilos.png" alt="mate">
                            </div>
                            <h3 class="block__text" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item.png');">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bombiles.svg" alt="bombiles">
                                bombilai:
                            </h3>
                        </div>
                        <div class="block">
                            <div class="block__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kalabasas.png" alt="mate">
                            </div>
                            <h3 class="block__text" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-item.png');">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/kalabasas.svg" alt="kalabasas">
                                kalabasai:
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php
get_footer();
