<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:13:37
         compiled from "/var/www/test/wa-apps/shop/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:879685800570e7e412a4056-25784927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b650d7bd70954ce5a66915c591ea4c3bb92dad1e' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/backend/BackendLoc.html',
      1 => 1460566568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '879685800570e7e412a4056-25784927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e7e4140b669_11771912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e7e4140b669_11771912')) {function content_570e7e4140b669_11771912($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>