<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php 
	 // Get all customer orders
    $customer_orders = get_posts( array(
        'numberposts' => -1,
        'meta_key'    => '_customer_user',
        'meta_value'  => get_current_user_id(),
        'post_type'   => wc_get_order_types(),
        'post_status' => array_keys( wc_get_order_statuses() ),
    ) );

    $completedOrders = count($customer_orders);
    $remainingOrders = 6 - $completedOrders;
    $user = 'noob';

    if($completedOrders >= 6) {
    	$user = 'pro';
    }
?>

<style type="text/css">
	.circle {
		border: 2px solid orange;
	    border-radius: 50%;
	    padding: 1px;
	    width: 3rem;
	    height: 3rem;
	    display: inline-block;
	    text-align: center;
	}
</style>

<p>
<!--	--><?php
//	printf(
//		/* translators: 1: user display name 2: logout url */
//		__( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ),
//		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
//		esc_url( wc_logout_url() )
//	);
//	?>


    Labas! Kaip laikaisi? Ar jau gėrei šiandien matę?
	<br>
	<?php 
		if($user == 'noob') { ?>
			Matės klube jau apsipirkai <span class="circle"><?php echo $completedOrders; ?></span> <?php echo $completedOrders == 1 ? 'kartą' : 'kartus'; ?>, už tai gauni <strong>5%</strong> nuolaidos kodą <strong>YTEA9QUE</strong> kitiems kartams!
			<br>
			Nori didesnės nuolaidos? Iki jos tau liko apsipirkti dar <span class="circle"><?php echo $remainingOrders; ?></span> <?php echo $remainingOrders == 1 ? 'kartą' : 'kartus'; ?>.
		<?php
		} else {?>
			Matės klube jau apsipirkai <span class="circle"><?php echo $completedOrders; ?></span> <?php echo $completedOrders > 9 ? 'kartų' : 'kartus'; ?>, TU TIKRAS MATERA!!! už tai gauni <strong>10%</strong> nuolaidos kodą <strong>8K96XN76</strong> kitiems kartams!
			<br>
		<?php
		} ?>



		
    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/mate_dash.png" alt="mate"> -->
</p>

<p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mate.gif" alt="mate">
</p>
<!--	--><?php
//	printf(
//		__( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' ),
//		esc_url( wc_get_endpoint_url( 'orders' ) ),
//		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
//		esc_url( wc_get_endpoint_url( 'edit-account' ) )
//	);
//	?>
</p>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
