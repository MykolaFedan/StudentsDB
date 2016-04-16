<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:25:56
         compiled from "/var/www/test/wa-data/public/site/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:892935623570e81244f7a37-06474875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '589964516ffac4d696f45618c4569b0fb21bf674' => 
    array (
      0 => '/var/www/test/wa-data/public/site/themes/default/my.nav.html',
      1 => 1456614266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '892935623570e81244f7a37-06474875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_app' => 0,
    'wa' => 0,
    'my_nav_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e812455e237_25219346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e812455e237_25219346')) {function content_570e812455e237_25219346($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>