<?php
$taxonomy = 'product_cat';
$parent   = get_term_by('slug', $args['category'], $taxonomy);

// Stop if parent term not found
if (!$parent || is_wp_error($parent)) {
    return; // or echo nothing, or fallback HTML
}

$children_ids = get_term_children($parent->term_id, $taxonomy);
if (is_wp_error($children_ids)) {
    $children_ids = [];
}
?>

<div class="category">
  <a href="<?php echo esc_url(get_term_link($parent, $taxonomy)); ?>" class="parent">
    <div class="image">
      <img class="preview" width="263" height="263" loading="lazy"
        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/<?php echo esc_attr($args['category']); ?>.png"
        alt="category image">
    </div>

    <div class="subtitle">
      <?php echo esc_html($args['title']); ?>
    </div>
  </a>

  <div class="children">
    <ul>
      <?php foreach ($children_ids as $child_id):
          $term = get_term($child_id, $taxonomy);

          if (!$term || is_wp_error($term)) {
              continue;
          }

          $term_link = get_term_link($term, $taxonomy);
          if (is_wp_error($term_link)) {
              continue;
          }
      ?>
      <li>
        <a href="<?php echo esc_url($term_link); ?>">
          <img loading="lazy"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/<?php echo esc_attr($args['category']); ?>.svg"
            alt="title-mob-wrap">
          <?php echo esc_html($term->name); ?>

          <?php if ($term->name === 'Rinkiniai'): ?>
            <img loading="lazy" class="star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/star.svg"
              alt="star icon">
          <?php endif; ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
