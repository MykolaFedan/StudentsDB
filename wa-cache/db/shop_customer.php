<?php
return array (
  'contact_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'unsigned' => 1,
    'null' => 0,
  ),
  'total_spent' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'affiliate_bonus' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'number_of_orders' => 
  array (
    'type' => 'int',
    'params' => '11',
    'unsigned' => 1,
    'null' => 0,
    'default' => '0',
  ),
  'last_order_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'unsigned' => 1,
  ),
  'source' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
);
