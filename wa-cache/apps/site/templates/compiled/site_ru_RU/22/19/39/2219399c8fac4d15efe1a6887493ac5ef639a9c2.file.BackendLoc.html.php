<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:25:31
         compiled from "/var/www/test/wa-apps/site/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:1077656479570e810ba53807-53584364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2219399c8fac4d15efe1a6887493ac5ef639a9c2' => 
    array (
      0 => '/var/www/test/wa-apps/site/templates/actions/backend/BackendLoc.html',
      1 => 1460566763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077656479570e810ba53807-53584364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e810c07ff61_91020738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e810c07ff61_91020738')) {function content_570e810c07ff61_91020738($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>