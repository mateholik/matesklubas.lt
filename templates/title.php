<div class="section-title">
  <?php if (empty($args['hide_rombs']) || !$args['hide_rombs']) : ?>
  <img width="30" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/title-icon.png"
    alt="romb">
  <?php endif; ?>
  <h2><?php echo $args['title'] ?></h2>
  <?php if (empty($args['hide_rombs']) || !$args['hide_rombs']) : ?>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/title-icon.png" alt="romb">
  <?php endif; ?>
</div>