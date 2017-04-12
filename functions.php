<?php

/**
 * Grant admin WC REST API privileges to all users
 */
function wcpos_authenticate($user_id) {
    if( version_compare( WC()->version, '3', '<' ) ){
      return $user_id;
    } else {
      return 1;
    }
}
add_filter( 'determine_current_user', 'wcpos_authenticate', 10 );

/**
 * Test woocommerce_admin_billing_fields filter
 */
//function test_special_field($fields){
//  $fields['special_field'] = array('label' => 'My Special Field');
//  return $fields;
//}
//add_filter('woocommerce_admin_billing_fields', 'test_special_field');

/**
 * Test woocommerce_pos_product_barcode filter
 */
// function test_product_barcode($sku, $product){
//   return $sku;
// }
// add_filter('woocommerce_pos_product_barcode', 'test_product_barcode', 10, 2);
