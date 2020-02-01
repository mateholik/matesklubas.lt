<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container container--no-padding">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
//			do_action( 'storefront_footer' );
			?>

          <div class="row">
              <div class="col">
                  <?php
                  wp_nav_menu( array(
                      'theme_location' => 'footer-menu',
                      'container_class' => 'custom-menu-class' ) );
                  ?>
              </div>
              <div class="col col--copy">
                  <div class="copy">
                      ©Ecochoice <?php echo date("Y"); ?>

                  </div>
              </div>
          </div>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

<!--	--><?php //do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo 'Page generated in '.$total_time.' seconds.';
?>
</body>
</html>
