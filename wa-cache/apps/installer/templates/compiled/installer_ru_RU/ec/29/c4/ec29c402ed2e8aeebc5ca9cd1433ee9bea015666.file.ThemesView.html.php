<?php /* Smarty version Smarty-3.1.14, created on 2016-04-14 12:14:47
         compiled from "/var/www/test/wa-apps/installer/templates/actions/themes/ThemesView.html" */ ?>
<?php /*%%SmartyHeaderCode:1402701630570f5f87248ec0-99299369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec29c402ed2e8aeebc5ca9cd1433ee9bea015666' => 
    array (
      0 => '/var/www/test/wa-apps/installer/templates/actions/themes/ThemesView.html',
      1 => 1460566247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1402701630570f5f87248ec0-99299369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'themes' => 0,
    'theme' => 0,
    '_url' => 0,
    '_routes' => 0,
    'used_format' => 0,
    'url' => 0,
    'wa_backend_url' => 0,
    'inherited' => 0,
    'identity_hash' => 0,
    'promo_id' => 0,
    'app' => 0,
    'return_url' => 0,
    'dialogs' => 0,
    'dialog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570f5f873aafe5_39876299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570f5f873aafe5_39876299')) {function content_570f5f873aafe5_39876299($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/test/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/test/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "installed_format", null); ob_start(); ?>Тема  «%s» установлена, но не используется ни одним приложением. Чтобы подключить эту тему оформления, выберите ее в настройках маршрутизации приложения «Сайт».<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', "used_format", null); ob_start(); ?>Тема «%s» используется по адресу<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->tpl_vars['dialogs'] = new Smarty_variable(array(), null, 0);?>
<div class="wa-themes-installed" style="background: rgba(0,0,0,0.15);">

    <h5 class="wa-themes-group">Установленные темы дизайна</h5>
    
    <ul class="thumbs li250px">

        <?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['theme']->value['path']){?>
            <li>
                <a href="#/themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
" class="js-theme-info">
                    <div class="wa-theme-cover">
                        <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['cover'])){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['cover'];?>
" />
                        <?php }else{ ?>
                            <span class="hint">Предпросмотр недоступен</span>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['used'])){?>
                            <div class="wa-in-use-badge">
                                
                                <?php $_smarty_tpl->tpl_vars['_routes'] = new Smarty_variable(array(), null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['theme']->value['used']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_url']->key => $_smarty_tpl->tpl_vars['_url']->value){
$_smarty_tpl->tpl_vars['_url']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('_routes', null, 0);
$_smarty_tpl->tpl_vars['_routes']->value[(($_smarty_tpl->tpl_vars['_url']->value['domain']).('/')).(str_replace('*','',$_smarty_tpl->tpl_vars['_url']->value['url']))] = 1;?><?php } ?>
                                
                                <?php  $_smarty_tpl->tpl_vars['_dummy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_dummy']->_loop = false;
 $_smarty_tpl->tpl_vars['_url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_dummy']->key => $_smarty_tpl->tpl_vars['_dummy']->value){
$_smarty_tpl->tpl_vars['_dummy']->_loop = true;
 $_smarty_tpl->tpl_vars['_url']->value = $_smarty_tpl->tpl_vars['_dummy']->key;
?>
                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['_url']->value,23,'...',false,true);?>
<br>
                                <?php } ?>
                            </div>
                        <?php }?>
                    </div>
                    <h5 class="wa-theme-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h5>
                </a>
                <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['used'])){?>
                    <em class="wa-theme-installed"><i class="icon10 yes"></i> <b>Используется</b></em>
                <?php }else{ ?>
                    <span class="wa-theme-not-in-use">Не используется</span>
                <?php }?>
                
                <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['used'])){?>
                    
                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "dialogs"); ob_start(); ?>
                        <div class="dialog width400px" id="wa-theme-use-dialog-<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
">
                            <div class="dialog-background"> </div>
                            <div class="dialog-window">
                                <form>
                                    <div class="dialog-content">
                                        <div class="dialog-content-indent">
                                            <h1 id="wa-dialog-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                                            <?php $_smarty_tpl->_capture_stack[0][] = array("format", null, null); ob_start(); ?>Тема «%s» используется по адресу<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                            <?php echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['used_format']->value,$_smarty_tpl->tpl_vars['theme']->value['name']), ENT_QUOTES, 'UTF-8', true);?>

                                            <ul class="menu-v">
                                            <?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['theme']->value['used']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value){
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
                                                <?php if (!$_smarty_tpl->tpl_vars['url']->value['met']){?>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['preview'];?>
" class="inline" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['url']->value['preview'],50,'...',false,true);?>
</a><i class="icon10 new-window"></i></li>
                                                <?php }?>
                                            <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="dialog-buttons">
                                        <div class="dialog-buttons-gradient">
                                            <input type="submit" value="Закрыть" class="button close">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php }else{ ?>
                    <i class="icon10 settings"></i>
                <?php }?>
                
            </li>
            <?php }?>
        <?php } ?>
    </ul>

</div>

<div class="wa-themes-from-the-store">

    <h5 class="wa-themes-group">Новые темы дизайна из магазина Webasyst</h5>
    
    <ul class="thumbs li250px">
        <?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
            <?php if (!$_smarty_tpl->tpl_vars['theme']->value['path']){?>
            <li>
                <a href="#/themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
" class="js-theme-info">
                    <div class="wa-theme-cover">
                        <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['cover'])){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['cover'];?>
" />
                        <?php }else{ ?>
                            <span class="hint">Предпросмотр недоступен</span>
                        <?php }?>
                    </div>
                    <h5 class="wa-theme-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h5>
                </a>
                
                <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['commercial'])){?>
                    <?php if (true){?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['compare_price'])){?>
                            <strike class="wa-price"><?php echo $_smarty_tpl->tpl_vars['theme']->value['compare_price'];?>
</strike>&nbsp;
                            <strong class="highlighted"><?php echo $_smarty_tpl->tpl_vars['theme']->value['price'];?>
</strong>
                        <?php }else{ ?>
                            <span class="wa-price">
                                <?php echo $_smarty_tpl->tpl_vars['theme']->value['price'];?>

                            </span>
                        <?php }?>
                        <form id="js-theme-info-<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
" action="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
installer/#/themes/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
/" method="GET">
                        </form>
                    <?php }elseif(!empty($_smarty_tpl->tpl_vars['theme']->value['purchase_link'])){?>
                        <form action="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme']->value['purchase_link'])===null||$tmp==='' ? '' : $tmp);?>
" method="post" id="js-theme-buy-<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
">
                            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['payware']['price']['config'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
                            <?php  $_smarty_tpl->tpl_vars['inherited'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inherited']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['theme']->value['inherited']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inherited']->key => $_smarty_tpl->tpl_vars['inherited']->value){
$_smarty_tpl->tpl_vars['inherited']->_loop = true;
?>
                                <input type="hidden" name="app_id[]" value="<?php echo $_smarty_tpl->tpl_vars['inherited']->value['slug'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['theme']->value['edition'];?>
<?php }?>">
                            <?php } ?>
                            <input type="hidden" name="hash" value="<?php echo $_smarty_tpl->tpl_vars['identity_hash']->value;?>
">
                            <?php if (!empty($_smarty_tpl->tpl_vars['promo_id']->value)){?>
                                <input type="hidden" name="promo_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php }?>
                        </form>
                    <?php }?>
                <?php }else{ ?>
                    <span class="wa-price free">
                        Бесплатно
                    </span>
                    <form id="js-theme-install-<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
" action="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
installer/?module=update&action=manager" method="POST" title="<?php echo htmlspecialchars(sprintf('Установить тему «%s» для приложения %s?',$_smarty_tpl->tpl_vars['theme']->value['name'],$_smarty_tpl->tpl_vars['app']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
">
                        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['return_url']->value,'%theme_id%',$_smarty_tpl->tpl_vars['theme']->value['id']), ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php  $_smarty_tpl->tpl_vars['inherited'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inherited']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['theme']->value['inherited']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inherited']->key => $_smarty_tpl->tpl_vars['inherited']->value){
$_smarty_tpl->tpl_vars['inherited']->_loop = true;
?>
                            <input type="hidden" name="app_id[<?php echo $_smarty_tpl->tpl_vars['inherited']->value['slug'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value['vendor'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['theme']->value['edition'];?>
<?php }?>">
                        <?php } ?>
                        <input type="hidden" name="install" value="1">
                    </form>
                <?php }?>
            </li>
            <?php }?>
        <?php } ?>
    </ul>
    
</div>

<?php  $_smarty_tpl->tpl_vars['dialog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dialog']->_loop = false;
 $_smarty_tpl->tpl_vars['dialog_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dialogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dialog']->key => $_smarty_tpl->tpl_vars['dialog']->value){
$_smarty_tpl->tpl_vars['dialog']->_loop = true;
 $_smarty_tpl->tpl_vars['dialog_id']->value = $_smarty_tpl->tpl_vars['dialog']->key;
?>
    <?php echo $_smarty_tpl->tpl_vars['dialog']->value;?>

<?php } ?>
<div class="clear"></div>
<script type="text/javascript">
$("div.wa-themes ul li").on('click', 'a.js-theme-info', function () {
    try {
        var li = $(this).closest('li');
        var theme_id = $(this).attr('href').replace(/^#\/themes\//,'');
        var dialog = $('#wa-theme-use-dialog-' + theme_id);
        var install = $('#js-theme-install-' + theme_id);
        var buy = $('#js-theme-buy-' + theme_id);
        var info = $('#js-theme-info-' + theme_id);
        if(dialog.length) {
            dialog.waDialog({
                height: '100px',
                onLoad: function () {
                    if ($(this).hasClass('js-setup')) {
                        var url = $('#wa-theme-routing-url');
                        if (url.length) {
                            var href = url.attr('href');
                            $(this).find('form').attr('action', href);
                        } else {
//                            $(this).find(':submit').hide().next().hide();
                        }
                    }
                    $(this).find('div.dialog-window').css('height', $(this).find('.dialog-content-indent').height() + 50 + 'px');
                },
                onSubmit: function (d) {
                    if (!d.hasClass('js-setup')) {
                        d.trigger('close');
                        return false;
                    }
                }
            });
        } else if (li.find('.wa-theme-not-in-use').length) {
            $('#wa-theme-start-using-dialog input[name="theme"]').val(theme_id);
            $('#wa-theme-start-using-dialog input:submit').val($('#wa-theme-start-using-dialog input:submit').data('value').replace(/%THEME%/, li.find('h5.wa-theme-name').text()));
            $('#wa-theme-start-using-dialog h1').html(li.find('h5.wa-theme-name').text());
            $('#wa-theme-start-using-dialog').waDialog({
                disableButtonsOnSubmit: true,
                onSubmit: function () {
                    $.post("?module=design&action=themeUse", $(this).serialize(), function (response) {
                        if (response.status == 'ok') {
                            location.hash = $('#wa-theme-start-using-dialog').data('url') + 'theme=' + theme_id;
                            location.reload();
                        } else {
                            alert(response.errors);
                        }
                    }, "json");
                    return false;
                }
            });
        } else if (install.length){
            var question = install.attr('title');
            if(!question || confirm(question)) {
                install.submit();
            }
        } else if (buy.length) {
            buy.submit();
        }else if (info.length) {
            info.submit();
        }
        return false;
    }catch(e){
        console.log(e);
    }
    return false;
});
</script>
<?php }} ?>