<?php

/**
 * Change the "word "Check" to "Wire Transfer" on the checkout page.
 *
 * @since  1.0
 * @return array
 */
function custom_change_checks_to_wire( $gateways ){
	
	$gateways['checks'] = array( 'admin_label' => 'Wire Transfer', 'checkout_label' => __( 'Wire Transfer', 'eddcg' ) );
	return $gateways;
	
}
add_filter('edd_payment_gateways', 'custom_change_checks_to_wire', 11);
