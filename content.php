<?php
/**
 * Template used to display post content.
 *
 * @package storefront
 */

?>


<?php
/**
 * Functions hooked in to storefront_loop_post action.
 *
 * @hooked storefront_post_header          - 10
 * @hooked storefront_post_content         - 30
 */
//	do_action( 'storefront_loop_post' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="postas">
    <a href="<?php the_permalink(); ?>" class="postas__title">
        <?php the_title(); ?>
    </a>
    <div class="postas__block">
        <a href="<?php the_permalink(); ?>" class="postas__img">
            <?php the_post_thumbnail('medium'); ?>
        </a>
        <div class="postas__content">
            <a href="<?php the_permalink(); ?>" class="postas__exerpt">
                <?php the_excerpt(); ?>
            </a>
            <div class="postas__meta">
                <span> Paskelbta: <?php the_time('F j, Y'); ?>. </span>
                <span>Kategorija: <?php the_category(); ?></span>
            </div>
            <div class="postas__btn">
                <a href=" <?php the_permalink(); ?>" class="btn btn--simple">Plačiau</a>
            </div>
        </div>
    </div>
</article><!-- #post-## --> <?php

?>

