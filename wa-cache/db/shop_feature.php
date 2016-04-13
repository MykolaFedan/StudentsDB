<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'parent_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'code' => 
  array (
    'type' => 'varchar',
    'params' => '64',
    'null' => 0,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'params' => '\'public\',\'hidden\',\'private\'',
    'null' => 0,
    'default' => 'public',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'selectable' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'multiple' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'count' => 
  array (
    'type' => 'int',
    'params' => '10',
    'unsigned' => 1,
    'null' => 0,
    'default' => '0',
  ),
);
