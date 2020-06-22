<?php
/**
 * Single Product stock.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/stock.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<p class="stock <?php echo esc_attr( $class ); ?>">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate.svg" alt="klubas">
    <?php echo wp_kses_post( $availability ); ?>
</p>
<p class="shippin">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/truck.svg" alt="klubas">
    <span>Nemokamas pristatymas nuo<span class="green"> 20 €</span></span>
</p>
