<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:27:22
         compiled from "/var/www/test/wa-apps/shop/templates/actions/settings/SettingsGeneral.html" */ ?>
<?php /*%%SmartyHeaderCode:619591160570e817a1eb339-91202923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a0a8dc535ada0fdf5907004a65e58627b1a3940' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/settings/SettingsGeneral.html',
      1 => 1460566605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619591160570e817a1eb339-91202923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'phone' => 0,
    'workhours' => 0,
    'email' => 0,
    'country' => 0,
    'countries' => 0,
    'c' => 0,
    'routes' => 0,
    '_d_routes' => 0,
    '_r' => 0,
    '_d' => 0,
    '_r_id' => 0,
    'order_format' => 0,
    'use_gravatar' => 0,
    'gravatar_default' => 0,
    'saved' => 0,
    'wa' => 0,
    'require_authorization' => 0,
    'wa_backend_url' => 0,
    'require_captcha' => 0,
    'captcha' => 0,
    'captcha_options' => 0,
    'map_adapters' => 0,
    'map' => 0,
    'a' => 0,
    'sms_adapters' => 0,
    'i' => 0,
    'k' => 0,
    'v' => 0,
    'lazy_loading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e817a40c5c0_27305018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e817a40c5c0_27305018')) {function content_570e817a40c5c0_27305018($_smarty_tpl) {?><div class="blank block double-padded s-settings-form">
    <h1>Общие настройки</h1>
    <form id="s-settings-general-form" action="?module=settings&action=general">
        <div class="fields form">
            <div class="field-group">
                <div class="field">
                    <div class="name">Название магазина</div>
                    <div class="value">
                        <input type="text" class="large bold" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    </div>
                </div>
                <div class="field">
                    <div class="name">Номер телефона и часы работы</div>
                    <div class="value">
                        <input type="text" name="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="+7 (916) 123-55-00"><br />
                        <span class="hint">Телефонный номер публикуется на витрине и добавляется в текст email-уведомлений</span>
                    </div>
                    <div class="value no-shift">
                        <label><input type="radio" name="workhours_type" value="0" <?php if ($_smarty_tpl->tpl_vars['workhours']->value===''){?>checked<?php }?>> Круглосуточно</label>
                    </div>
                    <div class="value no-shift">
                        <label><input type="radio" name="workhours_type" value="1" <?php if (is_array($_smarty_tpl->tpl_vars['workhours']->value)){?>checked<?php }?>> Указать часы работы</label>
                    </div>
                    <div id="workhours-div"<?php if (!is_array($_smarty_tpl->tpl_vars['workhours']->value)){?> style="display:none"<?php }?>>
                        <div class="value">
                            <ul class="menu-h s-workhours">
                                <li><label><input value="1" type="checkbox" name="workhours_days[]" <?php if ($_smarty_tpl->tpl_vars['workhours']->value&&in_array(1,$_smarty_tpl->tpl_vars['workhours']->value['days'])){?>checked="checked"<?php }?>> Пн</label></li>
                                <li><label><input value="2" type="checkbox" name="workhours_days[]" <?php if ($_smarty_tpl->tpl_vars['workhours']->value&&in_array(2,$_smarty_tpl->tpl_vars['workhours']->value['days'])){?>checked="checked"<?php }?>> Вт</label></li>
                                <li><label><input value="3" type="checkbox" name="workhours_days[]" <?php if ($_smarty_tpl->tpl_vars['workhours']->value&&in_array(3,$_smarty_tpl->tpl_vars['workhours']->value['days'])){?>checked="checked"<?php }?>> Ср</label></li>
                                <li><label><input value="4" type="checkbox" name="workhours_days[]" <?php if ($_smarty_tpl->tpl_vars['workhours']->value&&in_array(4,$_smarty_tpl->tpl_vars['workhours']->value['days'])){?>checked="checked"<?php }?>> Чт</label></li>
                                <li><label><input value="5" type="checkbox" name="workhours_days[]" <?php if ($_smarty_tpl->tpl_vars['workhours']->value&&in_array(5,$_smarty_tpl->tpl_vars['workhours']->value['days'])){?>checked="checked"<?php }?>> Пт</label></li>
                                <li><label><input value="6" type="checkbox" name="workhours_days[]" <?php if ($_smarty_tpl->tpl_vars['workhours']->value&&in_array(6,$_smarty_tpl->tpl_vars['workhours']->value['days'])){?>checked="checked"<?php }?>> Сб</label></li>
                                <li><label><input value="0" type="checkbox" name="workhours_days[]" <?php if ($_smarty_tpl->tpl_vars['workhours']->value&&in_array(0,$_smarty_tpl->tpl_vars['workhours']->value['days'])){?>checked="checked"<?php }?>> Вс</label></li>
                            </ul>
                        </div>
                        <div class="value">
                            <input type="text" class="short" name="workhours_from" placeholder="9:00" <?php if ($_smarty_tpl->tpl_vars['workhours']->value){?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['workhours']->value['from'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                            &mdash;
                            <input type="text" class="short" name="workhours_to" placeholder="17:00" <?php if ($_smarty_tpl->tpl_vars['workhours']->value){?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['workhours']->value['to'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                        </div>
                    </div>
                    <div class="value">
                        <span class="hint">Часы работы отображаются на витрине интернет-магазина</span>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Основной email-адрес</div>
                    <div class="value">
                        <input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
"><br />
                        <span class="hint">Используется в качестве адреса отправителя для автоматических уведомлений, отправляемых магазином.</span>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Страна</div>
                    <div class="value">
                        <select name="country">
                            <?php if (empty($_smarty_tpl->tpl_vars['country']->value)){?>
                                <option value=""></option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['iso3letter'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['country']->value==$_smarty_tpl->tpl_vars['c']->value['iso3letter']){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select><br />
                        <span class="hint">Страна, в которой располагается ваш интернет-магазин.</span>
                    </div>
                </div>
            </div>

            <div class="field-group">
                <div class="field">
                    <div class="name">Настройки витрины</div>
                    <?php  $_smarty_tpl->tpl_vars['_d_routes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_d_routes']->_loop = false;
 $_smarty_tpl->tpl_vars['_d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_d_routes']->key => $_smarty_tpl->tpl_vars['_d_routes']->value){
$_smarty_tpl->tpl_vars['_d_routes']->_loop = true;
 $_smarty_tpl->tpl_vars['_d']->value = $_smarty_tpl->tpl_vars['_d_routes']->key;
?>
                        <?php  $_smarty_tpl->tpl_vars['_r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_r']->_loop = false;
 $_smarty_tpl->tpl_vars['_r_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_d_routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_r']->key => $_smarty_tpl->tpl_vars['_r']->value){
$_smarty_tpl->tpl_vars['_r']->_loop = true;
 $_smarty_tpl->tpl_vars['_r_id']->value = $_smarty_tpl->tpl_vars['_r']->key;
?>
                            <div class="value no-shift s-settings-storefront-list">
                                <a href="?action=storefronts#/design/theme=<?php echo ifset($_smarty_tpl->tpl_vars['_r']->value['theme'],'default');?>
&domain=<?php echo urlencode($_smarty_tpl->tpl_vars['_d']->value);?>
&route=<?php echo $_smarty_tpl->tpl_vars['_r_id']->value;?>
&action=settings">
                                    <?php echo $_smarty_tpl->tpl_vars['_d']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_r']->value['url'];?>

                                    <i class="icon10 settings"></i>
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

            <h5 class="heading">Заказы и покупатели</h5>
            <div class="field-group">
                <div class="field">
                    <div class="name">Формат номеров заказов</div>
                    <div class="value">
                        <input type="text" name="order_format" value="<?php echo $_smarty_tpl->tpl_vars['order_format']->value;?>
">
                        <p class="hint"><strong>&#123;$order.id&#125;</strong> будет заменен на фактический номер заказа. Не удаляйте фрагмент &#123;$order.id&#125; из этой строки.</p>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Gravatar</div>
                    <div class="value no-shift">
                        <label>
                            <input type="checkbox" name="use_gravatar" value="1" <?php if ($_smarty_tpl->tpl_vars['use_gravatar']->value){?>checked="checked"<?php }?>>
                            Показывать юзерпики Gravatar
                            <p class="hint">Gravatar.com (Globally Recognized Avatars) — это веб-сервис, который возвращает юзерпик пользователя (фотографию, аватар) по его email-адресу. Если фотография не загружена для покупателя в его профиле в приложении «Контакты», будет показан его юзерпик из сервиса Gravatar.</p>
                        </label>
                    </div>
                    <div class="value no-shift">
                        <label>
                        Если у покупателя не загружен юзерпик в сервисе Gravatar:
                            <select name="gravatar_default">
                                <option value="custom" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='custom'){?>selected="selected"<?php }?>>Использовать стандартное изображение из приложения «Контакты»</option>
                                <option value="mm" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='mm'){?>selected="selected"<?php }?>>простая фигурка человека на сером фоне (одинаковая для всех покупателей)</option>
                                <option value="identicon" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='identicon'){?>selected="selected"<?php }?>>геометрический рисунок, генерируемый на основе email-адреса</option>
                                <option value="monsterid" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='monsterid'){?>selected="selected"<?php }?>>автоматически сгенерированная фигурка монстра</option>
                                <option value="wavatar" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='wavatar'){?>selected="selected"<?php }?>>сгенерированные лица с разным фоном</option>
                                <option value="retro" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='retro'){?>selected="selected"<?php }?>>изображение лица в стиле старых компьютерных игр</option>
                            </select>
                            <img id="s-settings-general-gravatar" class="userpic" <?php if ($_smarty_tpl->tpl_vars['saved']->value){?>src="<?php echo shopHelper::getGravatar($_smarty_tpl->tpl_vars['wa']->value->user('email','default'),50,$_smarty_tpl->tpl_vars['gravatar_default']->value);?>
"<?php }?> style='width: 50px; <?php if (!$_smarty_tpl->tpl_vars['saved']->value){?>display:none;<?php }else{ ?>display:block;<?php }?> margin-top: 10px;'>
                        </label>
                    </div>
                </div>
            </div>
            <div class="field-group">
                <div class="field">
                    <div class="name">Отзывы</div>
                    <div id="setting-require-auth" class="value no-shift">
                        <label>
                            <input type="checkbox" name="require_authorization" <?php if ($_smarty_tpl->tpl_vars['require_authorization']->value=='1'){?>checked="checked"<?php }?> value="1">
                            Отзывы о товарах могут оставлять только зарегистрированные пользователи
                            <br>
                            <p class="hint">
                                Пользователь должен авторизоваться на сайте для того, чтобы оставить отзыв.<br>
                                <strong><?php echo sprintf('Убедитесь в том, что формы регистрации и входа для пользователей включены <a href="%s">в настройках приложения «Сайт»</a>.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('site/#/settings/'));?>
</strong>
                            </p>
                        </label>
                    </div>
                    <div id="setting-require-captcha" class="value no-shift">
                        <label>
                            <input type="checkbox" name="require_captcha" <?php if ($_smarty_tpl->tpl_vars['require_captcha']->value=='1'){?>checked="checked"<?php }?> value="1">
                            Защитить форму добавления отзыва о товаре с помощью <em>капчи</em> (CAPTCHA)
                        </label>
                    </div>
                </div>
            </div>
            <div class="field-group">
                <div class="field s-captcha">
                    <div class="name">Капча</div>
                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="captcha" <?php if (empty($_smarty_tpl->tpl_vars['captcha']->value)){?>checked<?php }?> value="waCaptcha"> Капча Webasyst
                        </label>
                    </div>
                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="captcha" <?php if (ifset($_smarty_tpl->tpl_vars['captcha']->value)=='waReCaptcha'){?>checked<?php }?> value="waReCaptcha"> Google reCAPTCHA
                            <p class="hint">Выбранный тип будет использован на витрине вашего интернет-магазина везде, где показывается капча.</p>
                            <div<?php if (ifset($_smarty_tpl->tpl_vars['captcha']->value)!='waReCaptcha'){?> style="display: none"<?php }?>>
                                <div class="field">
                                    <div class="name">Site Key</div>
                                    <div class="value">
                                        <input type="text" name="captcha_options[sitekey]" value="<?php echo ifset($_smarty_tpl->tpl_vars['captcha_options']->value['sitekey']);?>
">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="name">Secret</div>
                                    <div class="value">
                                        <input type="text" name="captcha_options[secret]" value="<?php echo ifset($_smarty_tpl->tpl_vars['captcha_options']->value['secret']);?>
">
                                        <p class="hint">Получите ключи Google reCAPTCHA для вашего сайта по адресу <a href="https://www.google.com/recaptcha" target="_blank">https://www.google.com/recaptcha</a></p>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['map_adapters']->value)&&count($_smarty_tpl->tpl_vars['map_adapters']->value)>1){?>
                <div class="field">
                    <div class="name">Карты</div>
                    <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['map_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="map" <?php if (ifset($_smarty_tpl->tpl_vars['map']->value,'google')==$_smarty_tpl->tpl_vars['a']->value->getId()){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['a']->value->getId();?>
"> <?php echo $_smarty_tpl->tpl_vars['a']->value->getName();?>

                        </label>
                    </div>
                    <?php } ?>
                </div>
                <?php }?>
            </div>
            <div class="field-group">
                <div class="field">
                    <div class="name">SMS</div>
                    <?php if (count($_smarty_tpl->tpl_vars['sms_adapters']->value)){?>
                        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sms_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['a']->key;
?>
                        <div class="value no-shift">
                            <input name="sms[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][adapter]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
">
                            <strong><i class="icon16" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['a']->value['icon'];?>
');"></i><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</strong><br>
                            <div class="field">
                                <div class="name"><?php if (isset($_smarty_tpl->tpl_vars['a']->value['controls']['from']['title'])){?><?php echo $_smarty_tpl->tpl_vars['a']->value['controls']['from']['title'];?>
<?php }else{ ?>ID отправителей<?php }?></div>
                                <div class="value">
                                    <textarea name="sms[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][from]"><?php if (!empty($_smarty_tpl->tpl_vars['a']->value['config']['from'])){?><?php echo implode("\n",$_smarty_tpl->tpl_vars['a']->value['config']['from']);?>
<?php }?></textarea>
                                    <p class="hint"><?php if (isset($_smarty_tpl->tpl_vars['a']->value['controls']['from']['description'])){?><?php echo $_smarty_tpl->tpl_vars['a']->value['controls']['from']['description'];?>
<?php }else{ ?>Введите идентификаторы отправителей для этого SMS-шлюза (ID отправителя представляет собой либо номер телефона, либо строку длиной до 11 символов). Введите звездочку *, чтобы использовать ID, назначенный SMS-шлюзом.<?php }?></p>
                                </div>
                            </div>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['a']->value['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['k']->value!='from'){?>
                            <div class="field">
                                <div class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</div>
                                <div class="value">
                                    <?php if (ifset($_smarty_tpl->tpl_vars['v']->value['control_type'])=='checkbox'){?>
                                    <input type="hidden" name="sms[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="">
                                    <input type="checkbox" name="sms[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['a']->value['config'][$_smarty_tpl->tpl_vars['k']->value])){?>checked<?php }?>>
                                    <?php }else{ ?>
                                    <input type="text" name="sms[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php if (!empty($_smarty_tpl->tpl_vars['a']->value['config'][$_smarty_tpl->tpl_vars['k']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['config'][$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                                    <?php }?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['description'])){?>
                                    <p class="hint"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</p>
                                    <?php }?>
                                </div>
                            </div>
                            <?php }?>
                            <?php } ?>
                        </div>
                        <div class="value no-shift">
                            <p class="small">
                                <?php echo sprintf('После настройки SMS-шлюза можно добавлять и редактировать SMS-уведомления в разделе настроек «<a href="%s">Уведомления</a>».','#/notifications/');?>

                                <br>
                                <?php echo sprintf('<a href="%s" target="_blank">Посмотрите документацию</a>.','http://www.shop-script.ru/help/17/shop-script-5-sms-setup/');?>

                            </p>
                        </div>
                        <?php } ?>
                    <?php }else{ ?>
                        <div class="value no-shift">
                            <p>
                                <?php echo sprintf('Для отправки SMS-сообщений установите и настройте подключение к какому-либо из SMS-провайдеров.<br />Плагины подключения к SMS-провайдеров доступны для установки <a href="%s">в «Инсталлере»</a>.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('installer/#/plugins/wa-plugins/sms/'));?>

                            </p>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="field-group">
                <div class="field">
                    <div class="name">
                        Списки товаров
                    </div>
                    <div class="value no-shift">
                        <label>
                            <input type="checkbox" name="lazy_loading" <?php if (!empty($_smarty_tpl->tpl_vars['lazy_loading']->value)){?>checked<?php }?> value="1">
                            Использовать автоматическую подгрузку (lazy loading)
                        </label>
                        <p class="hint">Товары в списках будут подгружаться автоматически при скролле. Выключите эту опцию, чтобы использовать постраничную навигацию.</p>
                    </div>
                </div>
            </div>
            <div class="field-group">
                <div class="field">
                    <div class="name">Версия Shop-Script</div>
                    <div class="value no-shift">
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>

                    </div>
                </div>
            </div>
            <div class="field-group">
                <div class="field">
                    <div class="value submit">
                        <input type="submit" class="button green" value="Сохранить">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="clear"></div>
</div>
<script type="text/javascript">

    $('.s-captcha input:radio').change(function () {
        if ($(this).is(":checked")) {
            $('.s-captcha label > div').hide().find('input').attr('disabled');
            $(this).parent().children('div').show().find('input').removeAttr('disabled');
            $(this).parent().find('div input:first').focus();
        }
    });
    $('.s-captcha input:radio:checked').change();

    $('#setting-require-auth input').change(function () {
       if ($(this).is(':checked')) {
           $('#setting-require-captcha').slideUp(200);
       } else {
           $('#setting-require-captcha').slideDown(200);
       }
    }).change();

    $('input[name="workhours_type"]').change(function () {
       if ($(this).val() == '1') {
           $('#workhours-div').show();
       } else {
           $('#workhours-div').hide();
       }
    });

    var form = $('#s-settings-general-form');
    document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Общие настройки").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
    form.submit(function() {
        var self = $(this);
        form.find(':submit').after('<span class="s-msg-after-button"><i class="icon16 loading"></i></span>');
        $.post(self.attr('action'), self.serialize(), function(r) {
            $('#s-settings-content').html(r);
        });
        return false;
    });

    <?php if ($_smarty_tpl->tpl_vars['wa']->value->post('name')){?>
        form.find(':submit').after(
            $('<span class="s-msg-after-button"><i class="icon16 yes"></i></span>').animate({ opacity: 0 }, 1500, function() {
                $(this).remove();
            })
        );
    <?php }?>


    form.find('[name="gravatar_default"]').change(function () {
        $.get('?module=settings&action=generalGetGravatar', {
            'email': '<?php echo $_smarty_tpl->tpl_vars['wa']->value->user('email','default');?>
',
            'default': form.find('[name="gravatar_default"]').val()
            },
            function(r) {
                $('#s-settings-general-gravatar').css('display', 'block').attr('src', r.data);
            }, 'json'
        );
    });

</script>
<?php }} ?>