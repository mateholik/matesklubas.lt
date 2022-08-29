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

$block = ($product->get_stock_quantity()>0 ? '' : 'style="display: block;"');
?>
<p class="stock <?php echo esc_attr( $class ); ?>" <?php echo $block; ?>>
  
   
    <?php 
    	if($product->get_stock_quantity()>0) {
    		?> 
    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate.svg" alt="klubas">
    		<?php
	    echo wp_kses_post( $availability );
	} else {
	    echo "Prekė išpirkta, greitu metu turėsime ją vėl! Rezervuok prekę iš anksto. Rašyk mums el. paštu <a href='mailto:mateholikai@gmail.com'>mateholikai@gmail.com</a> arba <a target='_blank' href='https://www.facebook.com/matesklubass'>facebook'e</a>.";
	}
    ?>
</p>
<p class="shippin">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/truck.svg" alt="klubas">
    <span>Nemokamas pristatymas nuo<span class="green"> 25 €</span></span>
</p>
