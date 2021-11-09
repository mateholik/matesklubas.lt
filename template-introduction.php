<?php
/**
 * Template name: Intruduction
 *
 * @package storefront
 */

get_header(); ?>

<script>
    window.domain = JSON.stringify('<?php echo get_stylesheet_directory_uri(); ?>')
</script>

<div id="introduction" class="introduction">
    <introduction />
</div>

<?php get_footer();
