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
	function get_user_orders_total($user_id) {
    // Use other args to filter more
    $args = array(
        'customer_id' => $user_id
    );
    // call WC API
    $orders = wc_get_orders($args);

    if (empty($orders) || !is_array($orders)) {
        return false;
    }

    // One implementation of how to sum up all the totals
    $total = array_reduce($orders, function ($carry, $order) {
        $carry += (float)$order->get_total();

        return $carry;
    }, 0.0);

    return $total;
}
	$id = get_current_user_id();
	$totalOrders = get_user_orders_total($id);
	dump($totalOrders);
?>

<p style="display: flex; align-items: center">
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
		Matės klube jau apsipirkai
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/mate_dash.png" alt="mate">
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
