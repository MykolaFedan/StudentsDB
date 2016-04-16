<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 21:16:29
         compiled from "/var/www/test/wa-apps/installer/templates/actions/plugins/PluginsView.html" */ ?>
<?php /*%%SmartyHeaderCode:24733318570e8cfd137f24-11862007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe65eb157acbe58995568606eda05a837c6def59' => 
    array (
      0 => '/var/www/test/wa-apps/installer/templates/actions/plugins/PluginsView.html',
      1 => 1460566246,
      2 => 'file',
    ),
    'c8fae3596d5a38ee7e3219fbef0a5a66c59df079' => 
    array (
      0 => '/var/www/test/wa-apps/installer/templates/includes/message.html',
      1 => 1460566250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24733318570e8cfd137f24-11862007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'top' => 0,
    'wa_backend_url' => 0,
    'slug' => 0,
    'key' => 0,
    'apps' => 0,
    'plugin' => 0,
    'sort' => 0,
    'installer' => 0,
    'app' => 0,
    'plugin_id' => 0,
    'options' => 0,
    'return_url' => 0,
    'identity_hash' => 0,
    'domain' => 0,
    'promo_id' => 0,
    '_sort' => 0,
    '_plugin' => 0,
    '_plugins' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e8cfd340dc4_31728054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e8cfd340dc4_31728054')) {function content_570e8cfd340dc4_31728054($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/test/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/test/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php /*  Call merged included template "../../includes/message.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../includes/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '24733318570e8cfd137f24-11862007');
content_570e8cfd180169_76481117($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../../includes/message.html" */?>

<?php if (!empty($_smarty_tpl->tpl_vars['top']->value)){?><h1>Популярные плагины</h1><?php }?>
<p>
    Щелкните по плагину, чтобы автоматически скачать и установить его из магазина Webasyst.
    <br>
    <?php echo sprintf('Или просмотрите все плагины в приложении «<a href="%s">Инсталлер</a>».',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('installer/#/plugins/'));?>

</p>

<style>
    .wa-plugins li { width: 220px; }
    .wa-plugins li img { border: 1px solid #ccc; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); height: 110px; width: 200px; margin-bottom: 5px; }
    .wa-plugins li p { font-size: 0.9em; margin-bottom: 10px; }
    .wa-installed-label { color: #008000; display: inline-block; margin-left: -4px; padding: 2px 7px; }
</style>

<ul class="thumbs wa-plugins">
<?php $_smarty_tpl->tpl_vars['installer'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."installer/", null, 0);?>
<?php $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable(-1000, null, 0);?><?php $_smarty_tpl->tpl_vars['_plugins'] = new Smarty_variable(array(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slug']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
    <?php if (!empty($_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value]['plugins'])){?>
    <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value]['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>
    <?php if (!isset($_smarty_tpl->tpl_vars['plugin']->value['sort'])){?><?php $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['sort']->value+1, null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('plugin', null, 0);
$_smarty_tpl->tpl_vars['plugin']->value['sort'] = $_smarty_tpl->tpl_vars['sort']->value;?><?php }?>
    <?php $_smarty_tpl->tpl_vars['_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['plugin']->value['sort'], null, 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_plugin", null); ob_start(); ?>
    <li<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?> class="i-installed"<?php }?>>
        <?php $_smarty_tpl->tpl_vars['app'] = new Smarty_variable($_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value], null, 0);?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['installer']->value;?>
#/plugins/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['app']->value['slug'])===null||$tmp==='' ? 'undefined' : $tmp);?>
/<?php echo $_smarty_tpl->tpl_vars['plugin_id']->value;?>
/" data-href="<?php echo $_smarty_tpl->tpl_vars['installer']->value;?>
#/plugins%filter%/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['app']->value['slug'])===null||$tmp==='' ? 'undefined' : $tmp);?>
/<?php echo $_smarty_tpl->tpl_vars['plugin_id']->value;?>
/" class="js-item-link">
            <!-- cover -->
            <img src="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['icon'];?>
">

            <!-- name & author -->
            <h5><?php echo smarty_modifier_truncate(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['plugin_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true),30);?>
</h5>
        </a>
        <?php if ($_smarty_tpl->tpl_vars['plugin']->value['description']){?><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p><?php }?>

        <!-- plugin price and status -->
        <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?>
            <?php if ($_smarty_tpl->tpl_vars['plugin']->value['commercial']){?>
                <?php if (ifset($_smarty_tpl->tpl_vars['plugin']->value['lease_price'])=='free'){?>
                    
                    <strong class="black">Бесплатно</strong>
                <?php }else{ ?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['compare_price'])){?>
                        <s class="gray"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['compare_price'];?>
</s>&nbsp;
                        <strong class="highlighted black"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['price'];?>
</strong>
                    <?php }else{ ?>
                        <strong class="black">
                            <?php echo $_smarty_tpl->tpl_vars['plugin']->value['price'];?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['lease_price'])){?>
                                или <?php echo sprintf('%s/мес.',$_smarty_tpl->tpl_vars['plugin']->value['lease_price']);?>

                            <?php }?>
                        </strong>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['purchased'])&&true){?>
                        <form
                                action="<?php echo $_smarty_tpl->tpl_vars['installer']->value;?>
?module=update&action=manager"
                                method="post"
                                class="js-installer <?php if (empty($_smarty_tpl->tpl_vars['options']->value['no_confirm'])){?>js-confirm<?php }?>"
                            <?php if (empty($_smarty_tpl->tpl_vars['options']->value['no_confirm'])){?>
                                data-confirm-text="<?php echo htmlspecialchars(sprintf('Установить плагин «%s»?',$_smarty_tpl->tpl_vars['plugin']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
"
                            <?php }?>
                                style="display: inline-block;"
                                >
                            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['return_url']->value,'%plugin_id%',$_smarty_tpl->tpl_vars['plugin_id']->value), ENT_QUOTES, 'UTF-8', true);?>
">
                            <input type="hidden" name="install" value="1">
                            <input type="hidden" name="app_id[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['slug'])===null||$tmp==='' ? 'undefined' : $tmp);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['vendor'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['plugin']->value['edition'];?>
<?php }?>">
                            <input type="submit" value="Установить"<?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['applicable'])&&false){?> disabled="disabled"<?php }?>>
                        </form>
                    <?php }?>
                    
                    <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['purchased'])&&!empty($_smarty_tpl->tpl_vars['plugin']->value['purchase_url'])&&false){?>
                        <form action="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['purchase_url'])===null||$tmp==='' ? '' : $tmp);?>
" method="post" class="js-installer" style="display: inline-block;">
                            <input type="hidden" name="app_id[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['slug'])===null||$tmp==='' ? 'undefined' : $tmp);?>
<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['plugin']->value['edition'];?>
<?php }?>">
                            <input type="hidden" name="hash" value="<?php echo $_smarty_tpl->tpl_vars['identity_hash']->value;?>
">
                            <input type="hidden" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
                            <?php if (!empty($_smarty_tpl->tpl_vars['promo_id']->value)){?>
                                <input type="hidden" name="promo_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php }?>
                            <input type="submit" value="Купить"<?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['applicable'])&&false){?> disabled="disabled"<?php }?>>
                        </form>
                    <?php }?>
                <?php }?>
            <?php }else{ ?>
                <strong class="black">Бесплатно</strong>
                <form
                        action="<?php echo $_smarty_tpl->tpl_vars['installer']->value;?>
?module=update&action=manager"
                        method="post" class="js-installer <?php if (empty($_smarty_tpl->tpl_vars['options']->value['no_confirm'])){?>js-confirm<?php }?>"
                    <?php if (empty($_smarty_tpl->tpl_vars['options']->value['no_confirm'])){?>
                        data-confirm-text="<?php echo htmlspecialchars(sprintf('Установить плагин «%s»?',$_smarty_tpl->tpl_vars['plugin']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
"
                    <?php }?>
                        style="display: inline-block;"
                        >
                    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['return_url']->value,'%plugin_id%',$_smarty_tpl->tpl_vars['plugin_id']->value), ENT_QUOTES, 'UTF-8', true);?>
">
                    <input type="hidden" name="install" value="1">
                    <input type="hidden" name="app_id[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['slug'])===null||$tmp==='' ? 'undefined' : $tmp);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['vendor'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['plugin']->value['edition'];?>
<?php }?>">
                    <input type="submit" value="Установить"<?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['applicable'])&&false){?> disabled="disabled"<?php }?>>
                </form>
            <?php }?>
        <?php }else{ ?>
            <em class="wa-installed-label"><i class="icon10 yes"></i> Установлено</em>
        <?php }?>

    </li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->createLocalArrayVariable('_plugins', null, 0);
$_smarty_tpl->tpl_vars['_plugins']->value[$_smarty_tpl->tpl_vars['_sort']->value] = $_smarty_tpl->tpl_vars['_plugin']->value;?>

  <?php } ?>
  <?php }?>
 <?php }
if (!$_smarty_tpl->tpl_vars['key']->_loop) {
?>
 <?php } ?>
    <?php if (empty($_smarty_tpl->tpl_vars['_plugins']->value)){?>
        <p class="align-center gray">Не найдено ни одного плагина.</p>
    <?php }else{ ?>
    <!-- <?php echo ksort($_smarty_tpl->tpl_vars['_plugins']->value);?>
 -->
    <?php echo implode('',$_smarty_tpl->tpl_vars['_plugins']->value);?>

    <?php }?>
 </ul>
<div class="clear"></div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 21:16:29
         compiled from "/var/www/test/wa-apps/installer/templates/includes/message.html" */ ?>
<?php if ($_valid && !is_callable('content_570e8cfd180169_76481117')) {function content_570e8cfd180169_76481117($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
        <div class="block double-padded i-message-<?php echo $_smarty_tpl->tpl_vars['message']->value['result'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['message']->value['result']=='success'){?>
                <i class="icon16 yes"></i>
            <?php }elseif($_smarty_tpl->tpl_vars['message']->value['result']=='fail'){?>
                <i class="icon16 no"></i>
            <?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true);?>

        </div>
    <?php } ?>
<?php }?><?php }} ?>