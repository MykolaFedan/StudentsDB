<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:27:27
         compiled from "/var/www/test/wa-apps/shop/templates/actions/settings/SettingsImages.html" */ ?>
<?php /*%%SmartyHeaderCode:503238439570e817f804ff7-06017976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57dfe3cda935e26f06110f924f1eff2e37e68be5' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/settings/SettingsImages.html',
      1 => 1460566604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '503238439570e817f804ff7-06017976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'saved' => 0,
    'settings' => 0,
    'sizes_set' => 0,
    'size_item' => 0,
    'type' => 0,
    'size' => 0,
    'set_type' => 0,
    'key' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e817f906097_46776623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e817f906097_46776623')) {function content_570e817f906097_46776623($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['saved']->value)&&$_smarty_tpl->tpl_vars['saved']->value){?>
    <div class="block double-padded s-message-success bordered-bottom">
        <i class="icon16 yes"></i>Настройки обновлены
    </div>
<?php }?>

<div class="block double-padded blank s-settings-form">
    <h1 style="margin-bottom: 1em;">Изображения</h1>
    <div id="s-settings-block">
        <form action="?module=settings&action=images" method="post" id="s-settings-form">
            <div class="fields form">
                <h6 class="heading">Эскизы</h6>
                <div class="field-group">
                    <div class="field" id="s-thumbnail-size">
                        <div class="name">
                            Эскизы, формируемые при загрузке изображений
                        </div>
                        <div class="value">
                            <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['image_sizes'])){?>
                            <div id="s-saved-size">
                                <ul class="zebra">
                                <?php  $_smarty_tpl->tpl_vars['sizes_set'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sizes_set']->_loop = false;
 $_smarty_tpl->tpl_vars['set_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['image_sizes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sizes_set']->key => $_smarty_tpl->tpl_vars['sizes_set']->value){
$_smarty_tpl->tpl_vars['sizes_set']->_loop = true;
 $_smarty_tpl->tpl_vars['set_type']->value = $_smarty_tpl->tpl_vars['sizes_set']->key;
?>
                                    <?php  $_smarty_tpl->tpl_vars['size_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['size_item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sizes_set']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['size_item']->key => $_smarty_tpl->tpl_vars['size_item']->value){
$_smarty_tpl->tpl_vars['size_item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['size_item']->key;
?>
                                        <li>
                                            <?php  $_smarty_tpl->tpl_vars['size'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['size']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['size_item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['size']->key => $_smarty_tpl->tpl_vars['size']->value){
$_smarty_tpl->tpl_vars['size']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['size']->key;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['type']->value=='crop'){?>
                                                    Квадратная обрезка: <strong><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
x<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 px</strong>
                                                <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='max'){?>
                                                    Макс. ( Ширина, Высота ) = <strong><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 px</strong>
                                                <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='width'){?>
                                                    Ширина = <strong><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 px</strong>, Высота = авто
                                                <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='height'){?>
                                                    Ширина = авто, Высота = <strong><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 px</strong>
                                                <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='rectangle'){?>
                                                    Ширина = <strong><?php echo $_smarty_tpl->tpl_vars['size']->value[0];?>
 px</strong>, Высота = <strong><?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
 px</strong>
                                                <?php }?>
                                            <?php } ?>
                                            <?php if ($_smarty_tpl->tpl_vars['set_type']->value=='custom'){?>
                                                <a href="javascript:void(0)" class="s-delete-action hint inline-link" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><b><i>удалить</i></b></a>
                                            <?php }?>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                                </ul>
                            </div>
                            <?php }?>
                        </div>
                        <div class="s-size-set block" id="s-size-set" style="display:none">
                            <div class="value no-shift">
                                <label class="s-label-with-check">
                                    <input type="radio" name="size_type[0]" value="max">
                                    Макс. ( Ширина, Высота ) = <strong><span class="star">*</span></strong><input type="text" name="size[0]" value="" size="4" class="small-int short numerical" style="display:none;" disabled>px
                                </label>
                            </div>
                            <div class="value">
                                <label class="s-label-with-check">
                                    <input type="radio" name="size_type[0]" value="width">
                                    Ширина = <strong><span class="star">*</span></strong><input type="text" name="size[0]" value="" size="4" class="small-int short numerical" style="display:none;" disabled>px, Высота = <span class="gray">авто</span>
                                </label>
                            </div>
                            <div class="value">
                                <label class="s-label-with-check">
                                    <input type="radio" name="size_type[0]" value="height">
                                    Ширина = <span class="gray">авто</span>, Высота = <strong><span class="star">*</span></strong><input type="text" name="size[0]" value="" size="4" class="small-int short numerical" style="display:none;" disabled>px
                                </label>
                            </div>
                            <div class="value">
                                <label class="s-label-with-check">
                                    <input type="radio" name="size_type[0]" value="crop">
                                    Квадратная обрезка: Размер = <strong><span class="star">*</span></strong><input type="text" name="size[0]" value="" size="4" class="small-int short numerical" style="display:none;" disabled>px
                                </label>
                            </div>
                            <div class="value">
                                <label class="s-label-with-check">
                                    <input type="radio" name="size_type[0]" value="rectangle">
                                    Прямоугольная обрезка: Ширина = <strong><span class="star">*</span></strong><input type="text" name="width[0]" value="" class="small-int short numerical" style="display:none;" disabled>px, Высота = <strong><span class="star">*</span></strong><input type="text" name="height[0]" value="" size="4" class="small-int short numerical" style="display:none;" disabled>px
                                </label>
                            </div>
                        </div>
                        <div class="value block">
                            <a id="s-add-action" href="javascript:void(0);" class="small inline-link"><i class="icon10 add"></i><b><i>Добавить</i></b></a>
                        </div>
                    </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <div class="name">
                            Эскизы произвольных размеров
                        </div>
                        <div class="value no-shift">
                            <label>
                                <input type="checkbox" name="image_thumbs_on_demand" id="s-thumbs_on_demand" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['image_thumbs_on_demand'])){?>checked<?php }?>> Разрешить создание эскизов произвольных размеров по требованию<br>
                                <span class="hint">Включите, чтобы позволить теме оформления требовать создание «на лету» эскизов фотографий произвольного размера (указанного в дополнение к перечисленным выше, включая обрезанные версии).</span>
                            </label>
                        </div>
                        <div class="value" id="s-max-size" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['image_thumbs_on_demand']){?>style="display:none;"<?php }?>>
                            Максимальный размер эскиза<br>
                            <input type="text" name="image_max_size" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['image_max_size'];?>
" size="4" class="small-int"> px<br>
                            <span class="hint">Ограничение максимальных размеров эскиза изображения, формируемого по требованию (в пикселях). Минимальное значение  — 970.</span>
                        </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <div class="name">
                            Резкость
                        </div>
                        <div class="value no-shift">
                            <label><input type="checkbox" name="image_sharpen" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['image_sharpen'])){?>checked<?php }?>> Применить фильтр резкости при создании эскизов изображений (рекомендуется)</label>
                        </div>

                    </div>
                    <div class="field">
                        <div class="name">
                            Качество эскизов
                        </div>
                        <div class="value">
                            <input type="input" name="image_save_quality" value="<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['image_save_quality'])){?><?php echo str_replace(',','.',$_smarty_tpl->tpl_vars['settings']->value['image_save_quality']);?>
<?php }?>"><br>
                            <span class="hint">Коэффициент качества сжатия JPEG при создании эскизов изображений товаров. От 0 (минимальное качество, минимальный размер файлов) до 100 (максимальное качество, максимальный размер файлов). Рекомендуемое значение — 90.</span>
                        </div>

                    </div>

                    <div class="field">
                        <div class="name">
                            Имена файлов эскизов
                        </div>
                        <div class="value no-shift">
                            <label>
                                <input id="s-image-filename" type="checkbox" name="image_filename" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['image_filename'])){?>checked<?php }?>>
                                Использовать исходные имена файлов
                            </label>
                            <br>
                            <span class="hint">Название файла каждого эскиза (эскизы уменьшенного размера создаются автоматически после загрузки изображения) будет совпадать с названием оригинального файла.</span>
                            <p id="s-image-filename-hint" class="small"<?php if (empty($_smarty_tpl->tpl_vars['settings']->value['image_filename'])){?> style="display: none"<?php }?>><br><em style="background-color: #ffa;"><?php echo sprintf('Если вы включаете эту настройку в первый раз, <strong>настоятельно рекомендуется</strong> 1) Удалить и заново создать эскизы изображений всех товаров (ссылка ниже) после сохранения изменения этой настройки и 2) Обновить код шаблона страницы товара product.html согласно <a href="%s" target="_blank">инструкции</a>.','http://www.shop-script.ru/help/4442/shopscript610-design-theme-changes/');?>
</em></p>
                        </div>
                    </div>
                </div>

                <h6 class="heading">@2x</h6>
                <div class="field-group">
                    <div class="field">
                        <div class="name">
                            Эскизы изображений @2x
                        </div>
                        <div class="value no-shift">
                            <label><input type="checkbox" name="enable_2x" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['enable_2x'])){?>checked<?php }?>> Разрешить создание эскизов @2x по требованию (рекомендуется)</label>
                            <br>
                            <span class="hint">Включение этой настройки позволит автоматически создавать эскизы изображений для устройств с высокой плотностью пикселей, например, для устройств с Retina-дисплеем. Формирование таких изображений требует больше оперативной памяти сервера и больше места для хранения файлов, однако это существенно улучшит отображение товаров на современных мониторах.</span>
                        </div>
                    </div>
                    <div class="field">
                        <div class="name">
                            Качество эскизов @2x
                        </div>
                        <div class="value">
                            <input type="input" name="image_save_quality_2x" value="<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['image_save_quality_2x'])){?><?php echo str_replace(',','.',$_smarty_tpl->tpl_vars['settings']->value['image_save_quality_2x']);?>
<?php }?>"><br>
                            <span class="hint">Качество сжатия JPEG для эскизов. От 0 (низкое качество, минимальный размер файла) до 100 (выше качество, больше размер файла). Рекомендуемое значение: 70.</span>
                        </div>
                    </div>
                </div>
                
                <h6 class="heading">Оригиналы</h6>
                <div class="field-group">
                    <div class="field">
                        <div class="name">
                            Оригиналы
                        </div>
                        <div class="value no-shift">
                            <label><input type="checkbox" name="image_save_original" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['image_save_original'])){?>checked<?php }?>> Сохранять оригинальное изображение</label>
                            <br>
                            <span class="hint">Оригинальные изображения будут сохранены отдельно от полноразмерной версии и не будут меняться, когда вы редактируете фотографию (например, при поворотах изображения, применении к изображению фильтров, наложению водяных знаков). Плюсы: у каждой фотографии есть резервная копия, бекап. Минусы: для хранения оригиналов требуется примерно в два раза больше места на диске.</span>
                        </div>
                    </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <div class="value submit">
                            <input type="submit" name="save" class="button green" value="Сохранить">
                        </div>
                        <div class="value no-shift" id="submit-message" style="display:none;">
                            <p class="small"><em class="highlighted">Обновленные настройки будут использованы только при создании новых эскизов изображений. Чтобы применить обновленные настройки к уже существующим изображениям товаров, запустите процесс повторного создания эскизов изображений товаров.</em></p>
                        </div>
                    </div>
                    <div class="field">
                        <div class="value">
                            <hr>
                        </div>
                    </div>
                    <div class="field">
                        <div></div>
                        <div class="value">
                            <a class="inline-link" href="#" id="s-regenerate-thumbs">Удалить и заново создать эскизы изображений всех товаров</a><br>
                            <span class="hint">Процесс повторного создания эскизов изображений позволяет удалить лишние неиспользуемые файлы изображений, освободить место на сервере и заново создать эскизы изображений существующих товаров с использованием обновленных настроек (фильтра резкости, качества сохранения JPEG и т. п.). В зависимости от количества товаров в вашем интернет-магазине процесс может занять от нескольких секунд до нескольких минут или даже часов в случае очень большого количества товаров.</span>
                        </div>
                    </div>
                </div>

            </div>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </form>
    </div>
</div>



<div class="dialog large" id="s-regenerate-thumbs-dialog">
    <div class="dialog-background"></div>
    <form method="post" action="?module=settings&action=imagesRegenerate">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Удалить и заново создать эскизы изображений товаров</h1>
                <p>Процесс повторного создания эскизов изображений позволяет удалить лишние неиспользуемые файлы изображений, освободить место на сервере и заново сформировать эскизы изображений существующих товаров с использованием обновленных настроек (фильтра резкости, качества сохранения JPEG и т. п.). В зависимости от количества товаров в вашем интернет-магазине процесс может занять от нескольких секунд до нескольких минут или даже часов в случае очень большого количества товаров.</p>
                <p class="small"><i class="icon10 exclamation"></i> <em>В процессе воссоздания эскизов изображений скрипт по очереди обрабатывает все товары, удаляет и заново создает файлы эскизов изображений. Посетители интернет-магазина не должны заметить никаких изменений в работе интернет-магазина, однако в связи с тем, что процесс массового создания новых эскизов изображений требователен к системным ресурсам, не рекомендуется запускать его, когда ваш сайт испытывает высокие нагрузки или принимает много посетителей.</em></p>
                
                <h5 class="heading">Дополнительные настройки</h5>
                
                <br>
                
                <div>
                    <label><input type="checkbox" name="create_thumbnails" value="1"> Сразу создать эскизы изображений предопределенных размеров</label>
                    <br>
                    <span class="hint">Включите, если создание эскизов «на лету» запрещено или если вы уверены в том, что список предопределенных размеров заполнен согласно требованиям темы дизайна вашего интернет-магазина; если вы не уверены, рекомендуется оставить эту настройку выключенной.</span>
                </div>
                
                <br>
                
                <div>
                    <label><input type="checkbox" name="restore_originals" value="1"> Восстановить полноразмерные изображения товаров из оригинальных загруженных версий (бекапов)</label>
                    <br>
                    <span class="hint">Включите, чтобы сбросить все полноразмерные изображения товаров до их исходных изначально загруженных версий. Все изменения, которые установленные плагины накладывают на полноразмерные изображения, будут применены автоматически. Если у изображения нет бекапа, то оно останется без изменений.</span>
                </div>
                
                <div id="s-regenerate-progressbar" style="display:none; margin-top: 20px;">

                    <div class="progressbar blue float-left" style="display: none; width: 70%;">
                        <div class="progressbar-outer">
                            <div class="progressbar-inner" style="width: 0%;"></div>
                        </div>
                    </div>
                    <img style="float:left; margin-top:8px;" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/loading32.gif" />
                    <div class="clear"></div>
                    <span class="progressbar-description">0.000%</span>
                    <em class="hint">Пожалуйста, не закрывайте окно браузера, пока процесс не будет завершен.</em>
                    <br clear="left" />
                    <em class="errormsg"></em>
                </div>

                <div id="s-regenerate-report" style="display: none; margin-top: 20px;">
                </div>

            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button green" type="submit" value="Запустить процесс повторной генерации">
                или <a class="cancel" href="javascript:void(0);">отмена</a>
            </div>
        </div>
    </div>
    </form>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/images.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Изображения").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
if(typeof($)!='undefined') {
    $.settings.imagesInit();
}
</script><?php }} ?>