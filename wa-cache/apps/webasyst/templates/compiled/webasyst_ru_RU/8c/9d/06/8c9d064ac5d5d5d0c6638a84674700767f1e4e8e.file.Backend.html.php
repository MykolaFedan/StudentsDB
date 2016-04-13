<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:13:23
         compiled from "/var/www/test/wa-system/webasyst/templates/layouts/Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:2053061910570e7e3317a491-38115960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c9d064ac5d5d5d0c6638a84674700767f1e4e8e' => 
    array (
      0 => '/var/www/test/wa-system/webasyst/templates/layouts/Backend.html',
      1 => 1460565772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2053061910570e7e3317a491-38115960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'wa_app' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e7e33195a92_29572732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e7e33195a92_29572732')) {function content_570e7e33195a92_29572732($_smarty_tpl) {?><!DOCTYPE html><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js"></script>
</head>
<body<?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='webasyst'&&$_smarty_tpl->tpl_vars['wa']->value->get('tv')===''){?> class="tv"<?php }?>>
    <div id="wa">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

        <div id="wa-app" class="block double-padded">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    </div>
</body>
</html><?php }} ?>