<?php
    $latestPosts = wp_get_recent_posts(array(
        'numberposts' => 10, // Number of recent posts thumbnails to display
        'post_status' => 'publish', // Show only the published posts
        'category__not_in' => array(112)
    ));
    $latestVideos = wp_get_recent_posts(array(
      'post_type'=>'videos',
      'numberposts' => 10, // Number of recent posts thumbnails to display
      'post_status' => 'publish' // Show only the published posts
    ))

  ?>

<section class="news">
  <div class="container">
    <?php get_template_part( 'templates/title', null, array( 'title' => 'naujienos' ) 
     ); ?>

    <div class="wrapper">
      <div class="block">
        <h3>Straipsniai</h3>
        <div class="block__items">
          <?php foreach ($latestPosts as $item) {   ?>
          <a href="<?php echo get_permalink($item['ID']) ?>" class="block__card">
            <div class="image">
              <?php echo get_the_post_thumbnail($item['ID'], 'home-news'); ?>
            </div>
            <div class="content">
              <div class="title"> <?php echo $item['post_title'] ?> </div>
              <div class="excerpt"><?php echo substr(get_excerpt_by_id($item['ID']),0,70).'...'; ?></div>
            </div>
          </a>
          <?php } ?>
        </div>
        <div class="btn__holder">
          <a href="#" class="btn">Visi straipsniai</a>
        </div>
      </div>
      <div class="block">
        <h3>video</h3>
        <div class="block__items">
          <?php foreach ($latestVideos as $item) { ?>
          <a href="<?php echo get_permalink($item['ID']) ?>" class="block__card">
            <div class="image">
              <?php echo get_the_post_thumbnail($item['ID'], 'home-news'); ?>
              <div class="icon">
                <img width="20" height="20"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/play.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <div class="title"> <?php echo $item['post_title'] ?> </div>
              <div class="excerpt"><?php echo substr(get_excerpt_by_id($item['ID']),0,70).'...'; ?></div>
            </div>
          </a>
          <?php } ?>
        </div>
        <div class="btn__holder">
          <a href="#" class="btn">Visi video</a>
        </div>
      </div>
    </div>
  </div>
</section>