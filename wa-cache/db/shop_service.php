<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'description' => 
  array (
    'type' => 'text',
  ),
  'price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'currency' => 
  array (
    'type' => 'char',
    'params' => '3',
  ),
  'variant_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'tax_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'default' => '0',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
);
