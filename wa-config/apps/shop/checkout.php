<?php
return array (
  'contactinfo' => 
  array (
    'name' => 'Контактная форма',
    'fields' => 
    array (
      'firstname' => 
      array (
        'localized_names' => 'Имя',
        'required' => '1',
      ),
      'lastname' => 
      array (
        'localized_names' => 'Фамилия',
        'required' => '',
      ),
      'phone' => 
      array (
        'localized_names' => 'Телефон',
        'required' => '1',
      ),
      'email' => 
      array (
        'localized_names' => 'Email',
        'required' => '',
      ),
      'address' => 
      array (
        'localized_names' => 'Адрес',
        'fields' => 
        array (
          'street' => 
          array (
            'localized_names' => 'Улица, дом, квартира',
            'required' => '',
          ),
          'city' => 
          array (
            'localized_names' => 'Город',
            'required' => '',
          ),
          'region' => 
          array (
            'localized_names' => 'Регион',
            'required' => '',
          ),
          'zip' => 
          array (
            'localized_names' => 'Индекс',
            'required' => '',
          ),
          'country' => 
          array (
            'localized_names' => 'Страна',
            'required' => '',
          ),
        ),
      ),
    ),
  ),
  'shipping' => true,
  'payment' => 
  array (
    'name' => 'Оплата',
  ),
);
