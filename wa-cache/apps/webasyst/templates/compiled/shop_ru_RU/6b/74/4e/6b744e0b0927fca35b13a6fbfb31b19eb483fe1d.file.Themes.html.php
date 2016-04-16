<?php /* Smarty version Smarty-3.1.14, created on 2016-04-14 12:14:45
         compiled from "/var/www/test/wa-system/design/templates/Themes.html" */ ?>
<?php /*%%SmartyHeaderCode:755453343570f5f851eb2a9-92401530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b744e0b0927fca35b13a6fbfb31b19eb483fe1d' => 
    array (
      0 => '/var/www/test/wa-system/design/templates/Themes.html',
      1 => 1460565503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '755453343570f5f851eb2a9-92401530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'wa_backend_url' => 0,
    'app_id' => 0,
    'design_url' => 0,
    'wa' => 0,
    'themes_url' => 0,
    'routes' => 0,
    'r' => 0,
    'domains' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570f5f85285f51_73577088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570f5f85285f51_73577088')) {function content_570f5f85285f51_73577088($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/test/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><div class="block wa-design-gray-toolbar">
    

    <div class="float-right">
        <ul class="menu-h">
            <li><a id="wa-theme-upload-link" href="#"><i class="icon16 upload"></i>Загрузить архив с темой <span class="hint">.tar.gz</span></a></li>
            <li id="themes-close" style="display: none"><a href="#" class="cancel gray inline-link" title="Закрыть"><i class="icon10 no-bw"></i> <b><i>Закрыть</i></b></a></li>
        </ul>
    </div>

    <h4><?php echo htmlspecialchars(sprintf('Темы дизайна для приложения «%s»',$_smarty_tpl->tpl_vars['app']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
 <i class="icon16 loading"></i></h4>

</div>
<div class="wa-themes">
    <script type="text/javascript">
    $('div.wa-themes:first').load('<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
installer/?module=themes&action=view&slug=<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
&return_hash=<?php echo rawurlencode(((string)$_smarty_tpl->tpl_vars['design_url']->value)."theme=%theme_id%");?>
',function(){
        $('.wa-design-gray-toolbar h4 i').hide();
    });
    $('#themes-close a').click(function () {
        $('#wa-design-container').addClass('left200px').css('margin-left', '');
        $('#wa-design-sidebar').show();
        $("#wa-theme-list li a:first").click();
        return false;
    });
    </script>
    <div class="clear"></div>
</div>

<div class="dialog" id="wa-theme-upload-dialog">
    <div class="dialog-background"> </div>
    <div class="dialog-window" style="height: 200px; min-height: 200px; width: 400px; min-width: 350px">
        <form target="wa-theme-upload-iframe" id="wa-theme-upload-form" method="post" action="?module=design&amp;action=themeUpload" enctype="multipart/form-data">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h1>Загрузить тему</h1>
                    <span class="wa-theme-dialog-error bold" style="color: red;"></span>
                    <p>Загружаемая тема должна представлять собой правильный архив темы Webasyst (архив в формате .tar.gz с файлами темы и файлом-манифестом theme.xml).</p>
                    <input id="wa-input-file" type="file" name="theme_files[]" >
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                    <div class="loading" style="display:none; margin-top: 10px">
                        <i class="icon16 loading"></i> Загрузка...
                    </div>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" class="button green" value="Загрузить">
                    или <a href="<?php echo $_smarty_tpl->tpl_vars['themes_url']->value;?>
" class="inline-link cancel"><b><i>отмена</i></b></a> </div>
            </div>
        </form>
        <iframe style="display:none" name="wa-theme-upload-iframe" id="wa-theme-upload-iframe"></iframe>
    </div>
</div>

<div class="dialog width600px height300px" id="wa-theme-start-using-dialog" data-url="<?php echo $_smarty_tpl->tpl_vars['design_url']->value;?>
">
    <div class="dialog-background"> </div>
    <div class="dialog-window">
        <form>
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h1></h1>
                    <p><?php echo sprintf("Подключите тему дизайна к одному из существующих поселений приложения «%s» или создайте новое правило маршрутизации:",$_smarty_tpl->tpl_vars['app']->value['name']);?>
</p>

                    <div class="fields width100px form">
                        <div class="field">
                            <div class="name">Выберите правило</div>
                            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['r']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->index++;
 $_smarty_tpl->tpl_vars['r']->first = $_smarty_tpl->tpl_vars['r']->index === 0;
?>
                            <div class="value no-shift">
                                <label>
                                    <input name="route" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['_domain'];?>
|<?php echo $_smarty_tpl->tpl_vars['r']->value['_id'];?>
" type="radio" <?php if ($_smarty_tpl->tpl_vars['r']->first){?>checked<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['r']->value['_domain'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>

                                    <span class="hint"><?php if (isset($_smarty_tpl->tpl_vars['r']->value['theme'])){?><?php echo $_smarty_tpl->tpl_vars['r']->value['theme'];?>
<?php }else{ ?>default<?php }?></span>
                                </label>
                            </div>
                            <?php }
if (!$_smarty_tpl->tpl_vars['r']->_loop) {
?>
                            <div class="value gray">
                                <?php echo sprintf('На этом сайте нет поселений приложения «%s».',$_smarty_tpl->tpl_vars['app']->value['name']);?>

                            </div>
                            <?php } ?>
                        </div>
                        <div class="field">
                            <div class="name">Новое правило</div>
                            <div class="value">
                                <input name="route" id="create-new-route-choice" value="new" type="radio"<?php if (!count($_smarty_tpl->tpl_vars['routes']->value)){?> checked<?php }?>>

                                <?php if (count($_smarty_tpl->tpl_vars['domains']->value)==1){?>
                                <input name="domain" type="hidden" value="<?php echo current($_smarty_tpl->tpl_vars['domains']->value);?>
">
                                <?php echo current($_smarty_tpl->tpl_vars['domains']->value);?>
/<?php }else{ ?>
                                <select name="domain" class="create-new-route-control">
                                    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value;?>
"><?php echo smarty_modifier_truncate(str_replace('www.','',$_smarty_tpl->tpl_vars['d']->value),23,'...',false,true);?>
</option>
                                    <?php } ?>
                                </select>/
                                <?php }?>
                                <input type="text" name="url" value="" placeholder="*" class="short create-new-route-control">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="clear"></div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="hidden" name="theme" value="">
                    <input type="submit" class="button green" data-value="<?php echo sprintf("Начать использовать тему «%s»",'%THEME%');?>
">
                    или <a href="#" class="cancel">отмена</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        function handleError(data) {
            var error = '';
            if (typeof data.errors == 'string') {
                error += (error ? '\n' : '') + data.errors;
            } else {
                for (error_item in data.errors) {
                    error += (error ? '\n' : '') + data.errors[error_item][0];
                }
            }
            if ($(".dialog:visible").length) {
                $(".dialog:visible .wa-theme-dialog-error").html(error + '<br><br>');
            } else if ($(".wa-theme-dialog-error:first:visible").length) {
                $(".wa-theme-dialog-error:first:visible").html('<br><br>' + error + '<br><br>');
            } else {
                alert('Error:' + error);
            }
            $("#wa-theme-name-dialog input[type=submit]").removeAttr('disabled');
            $("#wa-theme-upload-dialog input[type=submit]").removeAttr('disabled');
        };
        $("#wa-theme-upload-link").click(function () {
            if (!waDesignConfirm()) return false;
            $(".wa-theme-dialog-error").text('');
            $("#wa-theme-upload-dialog div.loading").hide();
            $("#wa-theme-upload-dialog").waDialog({
                disableButtonsOnSubmit: true,
                onSubmit: function () {
                    $("#wa-theme-upload-dialog div.loading").show();
                    $("#wa-theme-upload-iframe").one('load', function () {
                        $("#wa-input-file").replaceWith('<input id="wa-input-file" type="file" name="theme_files[]" multiple="" >');
                        $("#wa-input-file").bind('change', function () {
                            $("#wa-theme-upload-form").submit();
                        });
                        var response;
                        try {
                            response = $.parseJSON($(this).contents().text());
                            if (response.status == 'fail') {
                                $("#wa-theme-upload-dialog div.loading").hide();
                                $("#wa-input-file").replaceWith('<input id="wa-input-file" type="file" name="theme_files[]" multiple="" >');
                                handleError(response);
                            } else if (response.status == 'ok') {
                                $("#wa-theme-upload-dialog").hide();
                                $(".wa-theme-dialog-error").text('');
                                location.reload();
                            }
                        } catch (e) {
                            response = {
                                'errors': []
                            };
                            var message = $(this).contents().find('h1:first, h2:first');
                            if (message.length) {
                                response.errors.push([message.text()]);
                            } else {
                                response.errors.push(['JavaScript error: ' + e.message]);
                            }
                            $("#wa-theme-upload-dialog div.loading").hide();
                            $("#wa-input-file").replaceWith('<input id="wa-input-file" type="file" name="theme_files[]" multiple="" >');
                            handleError(response);
                        }
                    });

                },
                onLoad: function () {

                }
            });
            return false;
        });
    });
</script><?php }} ?>