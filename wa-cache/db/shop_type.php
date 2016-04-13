<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'sort' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'icon' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'cross_selling' => 
  array (
    'type' => 'varchar',
    'params' => '64',
    'null' => 0,
    'default' => 'alsobought',
  ),
  'upselling' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'count' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
);
