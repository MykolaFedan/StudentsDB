<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'order_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'product_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'sku_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'sku_code' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'params' => '\'product\',\'service\'',
    'null' => 0,
  ),
  'service_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'service_variant_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
  ),
  'quantity' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'parent_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'stock_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'purchase_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'total_discount' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
);
