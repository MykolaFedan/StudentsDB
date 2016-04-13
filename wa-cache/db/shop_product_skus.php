<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'product_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'sku' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'sort' => 
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
    'default' => '',
  ),
  'image_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'primary_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'purchase_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'compare_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'count' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'available' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '1',
  ),
  'dimension_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'file_name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'file_size' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'file_description' => 
  array (
    'type' => 'text',
  ),
  'virtual' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
);
