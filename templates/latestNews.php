<?php
    $latestPosts = wp_get_recent_posts(array(
        'numberposts' => 6, // Number of recent posts thumbnails to display
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

      <?php foreach ($latestPosts as $item) {   ?>
      <div class="card">
        <a href="<?php echo get_permalink($item['ID']) ?>" class=" image">
          <?php echo get_the_post_thumbnail($item['ID'], 'home-news'); ?>
        </a>
        <div class="meta">
          <?php 
          // Get post categories
          $categories = get_the_category($item['ID']);
          if (!empty($categories)) {
            echo '<span class="categories">';
            foreach ($categories as $category) {
              $cat_link = get_category_link($category->term_id);
              echo '<a href="'.esc_url($cat_link).'" class="category-link">'.esc_html($category->name).'</a> ';
            }
            echo '</span>';
          }
        ?>
          <div class="date">
            <?php echo get_the_date('F j, Y', $item['ID']); ?>
          </div>

        </div>


        <a href="<?php echo get_permalink($item['ID']) ?>" class="title"> <?php echo $item['post_title'] ?> </a>
      </div>
      <?php } ?>
    </div>
    <div class="btn__holder">
      <a href="https://www.matesklubas.lt/category/straipsniai/" class="btn">Visi straipsniai</a>
    </div>
  </div>
</section>