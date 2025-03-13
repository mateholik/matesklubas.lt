<?php
    $taxonomy = 'product_cat';
    $parent = get_term_by( 'slug', $args['category'], $taxonomy );
    $children_ids = get_term_children( $parent->term_id, $taxonomy );
  ?>

<div class="category">
  <a href="<?php echo get_term_link( $parent, $taxonomy ); ?>" class="parent">
    <div class="image">
      <img class="preview" width="192" height="192" loading="lazy"
        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/<?php echo $args['category'] ?>.png"
        alt="title-mob-wrap">
      <!-- <picture>
        <source media="(max-width: 768px)"
          srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cat-mobile.svg">
        <img class="bg" width="279" height="192" loading="lazy"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-<?php echo $args['category'] ?>-cat.svg"
          alt="title-mob-wrap">
      </picture> -->
    </div>
    <div class="subtitle">

      <?php echo $args['title'] ?>
    </div>
  </a>
  <div class="children">
    <ul>
      <?php
        foreach($children_ids as $children_id){
          $term = get_term( $children_id, $taxonomy );
          $term_link = get_term_link( $term, $taxonomy ); ?>
      <li>
        <a href="<?php echo esc_url( $term_link ); ?>">
          <img loading="lazy"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/<?php echo $args['category'] ?>.svg"
            alt="title-mob-wrap">
          <?php echo $term->name; ?>
          <?php if ($term->name === 'Rinkiniai') { ?>
          <img loading="lazy" class="star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/star.svg"
            alt="star icon">
          <?php } ?>
        </a>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>