<?php
/**
 * Plugin Name: Affiliates Referral Amount Decimals
 * Plugin URI: http://www.netpad.gr
 * Description: Changes the Affiliates Referral Amount Decimals
 * Version: 1.0.0
 * Author: George Tsiokos
 * Author URI: http://www.netpad.gr
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'affiliates_referral_amount_decimals', 'affiliates_change_decimals_example', 10, 2 );
function affiliates_change_decimals_example( $decimals, $context ) {
	if ( $context === 'display' ) {
		$decimals = 2;
	} else {
		$decimals = 6;
	}
	return $decimals;
}
