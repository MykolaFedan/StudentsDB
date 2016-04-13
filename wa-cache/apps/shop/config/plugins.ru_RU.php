<?php
return array (
  'redirect' => 
  array (
    'name' => '301 Редирект',
    'description' => 'Помогает перейти на Shop-Script с других CMS и обновить адреса страниц интернет-магазина, сохранив их индексацию поисковыми системами.',
    'vendor' => 'webasyst',
    'version' => '1.1',
    'img' => 'wa-apps/shop/plugins/redirect/img/redirect.png',
    'icons' => 
    array (
      16 => 'img/redirect.png',
    ),
    'shop_settings' => true,
    'handlers' => 
    array (
      'frontend_error' => 'frontendError',
      'frontend_search' => 'frontendSearch',
    ),
    'id' => 'redirect',
    'app_id' => 'shop',
    'custom_settings' => true,
  ),
);
