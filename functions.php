<?php

/**
 * Grant admin WC REST API privileges to all users
 */
function test_open_api(){
  return new WP_User(1);
}
add_filter( 'woocommerce_api_check_authentication', 'test_open_api', 99 );

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
function test_product_barcode($sku, $product){
  return $sku;
}
add_filter('woocommerce_pos_product_barcode', 'test_product_barcode', 10, 2);