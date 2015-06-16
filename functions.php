<?php

/**
 * Grant admin WC REST API privileges to all users
 */
function test_open_access(){
  return new WP_User(1);
}
add_filter( 'woocommerce_api_check_authentication', 'test_open_access', 99 );

/**
 * Add special field to customer billing
 */
function test_special_field(array $fields){
  $fields['special_field'] = array('label' => 'My Special Field');
  return $fields;
}
add_filter('woocommerce_admin_billing_fields', 'test_special_field');