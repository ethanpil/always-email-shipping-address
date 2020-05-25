<?php
/**
 * Plugin Name: Always Email Shipping Address
 * Description: Default behavior of WooCommerce is never to show a shipping adress in email notifications if the shipping cost is zero. This won't work when free delivery options are based on the local pickup method. Activating this plugin ensures that shipping addresses are always included in email notifications from WooCommerce.
 * Plugin URI:  https://github.com/ethanpil/always-email-shipping-address-for-woocommerce
 * Author:      Ethan Piliavin
 * Author URI:  piliavin.com
 * License:     GPL v3 
 * Version:     1.0
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/*--------------------------------------------------------------
# PLUGIN ACTIVATION/DEACTIVATION HOOKS
--------------------------------------------------------------*/

function always_show_ship_address_in_emails( $needs_address, $hide ) {
    $needs_address = true;
    return $needs_address;
}
add_filter( 'woocommerce_order_needs_shipping_address', 'always_show_ship_address_in_emails', 10, 2 );