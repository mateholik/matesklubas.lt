<?php
/**
 * The template for displaying search results pages.
 *
 * @package storefront
 */

get_header(); ?>


<section class="search">
  <div class="container">
    <?php get_search_form(); ?>

    <?php if ( have_posts() ) : ?>

    <?php
	get_template_part( 'loop' );

else :

	get_template_part( 'content', 'none' ); 

endif;
?>
  </div>

</section><!-- #main -->


<?php
get_footer();