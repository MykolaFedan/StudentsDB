<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:26:43
         compiled from "/var/www/test/wa-apps/shop/templates/actions/backend/BackendStorefronts.html" */ ?>
<?php /*%%SmartyHeaderCode:1948674903570e81532d3889-15306605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7241484f763e1e7b4aadc0c3273732e4e0dd3153' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/backend/BackendStorefronts.html',
      1 => 1460566567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1948674903570e81532d3889-15306605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e8153326ce3_55570595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e8153326ce3_55570595')) {function content_570e8153326ce3_55570595($_smarty_tpl) {?><div class="sidebar right15px">
    <div class="block s-nolevel2-sidebar"></div>
</div>
<div class="sidebar left15px">
    <div class="block s-nolevel2-sidebar"></div>
</div>

<div class="content right15px left15px s-nolevel2-box" id="s-storefronts-content" <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('design')){?>data-design="1"<?php }?> <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('pages')){?>data-pages="1"<?php }?>>
    <div class="block double-padded s-settings-form">
        Загрузка...
        <i class="icon16 loading"></i>
    </div>

    <div class="clear"></div>
    <!-- settings placeholder -->
</div>

<div class="clear"></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/storefronts.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
    $.storefronts.init();
</script><?php }} ?>