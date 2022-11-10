<?php
    $latestPost = wp_get_recent_posts(array(
        'numberposts' => 1, // Number of recent posts thumbnails to display
        'post_status' => 'publish', // Show only the published posts
        'category__not_in' => array(112)
    ))
  ;?>

<section class="news">
  <div class="container">
    <?php get_template_part( 'templates/title', null, array( 'title' => 'naujienos' ) 
     ); ?>

    <div class="wrapper">
      <div class="block">
        <h3>video</h3>
        <div class="block__items">
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>

        </div>
      </div>
      <div class="block">
        <h3>Straipsniai</h3>
        <div class="block__items">
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>
          <div class="block__card">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder-news.jpg" alt="thumb">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <p>Naujas būdas ruošti matė arbatą pridedant kitų žolelių pridedant kitų žolelių </p>
              <span>plačiau »</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


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