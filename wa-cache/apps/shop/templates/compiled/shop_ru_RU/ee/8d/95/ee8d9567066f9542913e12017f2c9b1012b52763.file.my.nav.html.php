<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:25:56
         compiled from "/var/www/test/wa-data/public/shop/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:1817911269570e81243e8920-07649264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8d9567066f9542913e12017f2c9b1012b52763' => 
    array (
      0 => '/var/www/test/wa-data/public/shop/themes/default/my.nav.html',
      1 => 1456614252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817911269570e81243e8920-07649264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_nav_selected' => 0,
    'wa' => 0,
    'my_app' => 0,
    'frontend_my_nav' => 0,
    '_plugin' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e812445e679_37666299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e812445e679_37666299')) {function content_570e812445e679_37666299($_smarty_tpl) {?><li class="shop <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='orders'){?>selected<?php }?>">
    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myOrders');?>
">Мои заказы</a>
</li>

<?php if (shopAffiliate::isEnabled()){?>
    <li class="shop <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='affiliate'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myAffiliate');?>
">Партнерская программа</a>
    </li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="shop <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
    </li>
<?php }?>

<!-- plugin hook: 'frontend_my_nav' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['_plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_my_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['_plugin']->value = $_smarty_tpl->tpl_vars['_']->key;
?>
<li class="shop <?php if (waRequest::param('plugin')==str_replace('-plugin','',$_smarty_tpl->tpl_vars['_plugin']->value)){?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
</li>
<?php } ?>

<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount',true);?>
<?php }} ?>