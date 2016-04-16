<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:27:25
         compiled from "/var/www/test/wa-apps/shop/templates/actions/settings/SettingsFeatures.html" */ ?>
<?php /*%%SmartyHeaderCode:399867011570e817dbb62c1-75259249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2021b9ccebe4fdc98c7141ce3486e8c806d52880' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/settings/SettingsFeatures.html',
      1 => 1460566606,
      2 => 'file',
    ),
    '8e428519a8c6120b9face3e58e8d8ff3e24e2d8e' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/settings/SettingsFeaturesFeatureValues.html',
      1 => 1460566605,
      2 => 'file',
    ),
    'c22fa639b349d08133863ce229e1f0763d8544f7' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/settings/SettingsFeaturesFeatureList.html',
      1 => 1460566606,
      2 => 'file',
    ),
    'a612cb1bdcfa7da946c1a2b1982b31c3c3d3c805' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/includes/featuresValuesTypes.html',
      1 => 1460566619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '399867011570e817dbb62c1-75259249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'show_all_types' => 0,
    'show_all_features' => 0,
    'product_types' => 0,
    'id' => 0,
    'type' => 0,
    'types_per_page' => 0,
    'features' => 0,
    'dimension' => 0,
    'dimensions' => 0,
    'code' => 0,
    'units' => 0,
    'unit' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'name' => 0,
    'template' => 0,
    'icons' => 0,
    'icon' => 0,
    'type_templates' => 0,
    'info' => 0,
    'template_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e817df37c77_80250137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e817df37c77_80250137')) {function content_570e817df37c77_80250137($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/test/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/test/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.css" type="text/css" />

<div class="sidebar left200px s-settings-internal-sidebar">
    <div class="s-inner-sidebar">
        <ul class="menu-v with-icons stack block drop-target" id="s-settings-feature-types">
            <?php if (empty($_smarty_tpl->tpl_vars['show_all_types']->value)){?>
                <li class="not-sortable s-inner-search" id="s-settings-feature-type-filter">
                    <i class="icon16 ss search-bw"></i>
                    <input type="search" placeholder="Введите название типа товаров" class="js-type-filter">
                    <i class="icon16 loading" style="display:none;"></i>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_all_features']->value){?>
                <li class="not-sortable bottom-padded" data-type="">
                    <a href="#/features/">
                        <span class="count"><?php if (($_smarty_tpl->tpl_vars['show_all_features']->value!==true)){?><?php echo $_smarty_tpl->tpl_vars['show_all_features']->value;?>
<?php }else{ ?>0<?php }?></span>
                        <i class="icon16 box"></i><span class="js-type-name">Все характеристики</span>
                    </a>
                </li>
            <?php }?>
            

            

            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['type']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['type']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['type']->key;
 $_smarty_tpl->tpl_vars['type']->iteration++;
?><li data-type="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-icon="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
" class="js-type-item" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if (empty($_smarty_tpl->tpl_vars['show_all_types']->value)&&($_smarty_tpl->tpl_vars['type']->iteration>$_smarty_tpl->tpl_vars['types_per_page']->value)){?> style="display:none"<?php }?>><a href="#/features/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/"><span class="count"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value['features_count'])===null||$tmp==='' ? '0' : $tmp);?>
</span><span class="js-type-icon"><?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['type']->value['icon'],'icon.box');?>
</span><span class="js-type-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></a></li><?php } ?>
            <?php if (empty($_smarty_tpl->tpl_vars['show_all_types']->value)){?>
            <li class="not-sortable js-type-show-all">
                <a href="#/features/type/show/" class="js-action inline-link small">
                    <b><i><?php echo sprintf("Показать еще %d",($_smarty_tpl->tpl_vars['type']->total-$_smarty_tpl->tpl_vars['types_per_page']->value));?>
</i></b>
                </a>
            </li>
            <?php }?>
            <li class="top-padded small not-sortable">

                <a href="#/features/type/add/" class="js-action">
                    <i class="icon10 add"></i>Новый тип товаров
                </a>

            </li>

<!-- jquery template <?php $_smarty_tpl->_capture_stack[0][] = array("feature-type-template-js", null, null); ob_start(); ?> -->
            <li data-type="${id}" data-icon="${icon}" class="js-type-item" data-name="${name}">
                <a href="#/features/${id}/">
                    <span class="count">0</span>
                    <span class="js-type-icon">{{html icon_html}}</span>
                    <span class="js-type-name">${name}</span>
                </a>
            </li>
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> placeholder -->
        </ul>

        <div class="align-center hint hr block double-padded">
            <p>
            Типы товаров позволяют ограничить доступ к товарам отдельным пользователям бекенда и настроить перечень товаров, отображаемых на каждой витрине.
            </p>
        </div>

    </div>
</div>

<div class="content left200px bordered-left s-settings-form blank">
    <div class="s-settings-header" style="display:none;">
        <ul class="menu-h with-icons float-right" id="s-settings-features-type-menu" style="display: none;">
            <li><a href="#/features/type/edit/" class="js-action"> <i class="icon16 edit"></i>Редактировать тип товаров</a>
            </li>
            <li><a href="#/features/type/delete/" class="js-action js-confirm" data-confirm-text="Этот тип товаров будет удален; все товары этого типа останутся без определенного типа. Удалить?"> <i class="icon16 delete"></i>Удалить </a>
            </li>
        </ul>
        <h1 id="s-settings-features-type-name">
            <!-- Type name placeholder -->
        </h1>
        <ul class="menu-h with-icons" id="s-settings-features-feature-menu" style="display: none;">
            <li>
                <a href="#/features/feature/add/" class="inline-link js-action"><i class="icon16 add"></i><b><i>Новая характеристика</i> </b> </a>
            </li>

        </ul>
        <span id="s-settings-features-type-error" class="errormsg" style="display: none;"></span>
    </div>

    <div class="js-loading block double-padded">Загрузка...<i class="icon16 loading"></i></div>

    <div style="display:none;">
        <table class="zebra full-width" id="s-settings-features">
            <thead>
                <tr class="header">
                    <th class="min-width">&nbsp;</th>
                    <th>Название характеристики</th>
                    <th>Тип и значения характеристики</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>

            <tbody style="vertical-align: top !important;">
                <?php if ($_smarty_tpl->tpl_vars['features']->value){?>
                <?php /*  Call merged included template "./SettingsFeaturesFeatureList.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./SettingsFeaturesFeatureList.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '399867011570e817dbb62c1-75259249');
content_570e817dc58db3_96220649($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./SettingsFeaturesFeatureList.html" */?>
                <?php }?>

<!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-template-js", null, null); ob_start(); ?> feature jquery template -->
                <tr data-types="${feature.types.join(" ")}" data-feature="${feature.id}" data-sort="${feature.sort_json}" data-type="${feature.type}" data-selectable="${feature.selectable}" data-multiple="${feature.multiple}" {{if (feature.type=='divider')}} class="gray"{{/if}}>
                    <td class="min-width"><i class="icon16 sort"></i></td>
                    <td>
                        <span class="js-feature-name">${feature.name}</span><br>
                        <span class="js-feature-code hint">${feature.code}</span>
                    </td>
                    <td>
                        <span class="js-feature-type-name">${feature.type_name}</span>
                        {{if feature.selectable}}
                        <div>
                        {{if feature.values.length}}
                            <ul class="menu-v compact with-icons small s-feature-values js-feature-values">
                                {{each(value_id, value_value) feature.values}}
                                    <li data-value-id="${value_value.id||value_id}">
                                        {{if ((typeof(value_value) == 'object') && (typeof(value_value.code) !='undefined'))}}
                                        <i class="icon16 color" style="background: ${(0xF000000 | value_value.code ).toString(16).toUpperCase().replace(/^F/,"#")};"></i>
                                        {{/if}}
                                        ${(typeof(value_value) == 'object')?value_value.value:value_value}
                                    </li>
                                {{/each}}
                            </ul>
                        {{else}}
                            <p class="hint">Значения характеристики не определены</p>
                            <a href="#/features/feature/edit/${feature.id}/" class="small inline-link js-action"><i class="icon10 add"></i><b><i>Добавить значение характеристики</i></b></a>
                        {{/if}}
                        </div>
                        {{/if}}
                    </td>
                    <td>&nbsp;
                    </td>
                    <td class="align-center">
                        <ul class="menu-h with-icons">
                            <li><a href="#/features/feature/edit/${feature.id}/" class="inline js-action" title="Настройки"><i class="icon16 settings"></i></a></li>
                            <li><a href="#/features/feature/delete/${feature.id}/" class="inline js-action" title="Удалить"><i class="icon16 delete"></i></a></li>
                        </ul>
                    </td>
                </tr>
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> placeholder -->

<!-- <?php $_smarty_tpl->_capture_stack[0][] = array("edit-feature-template-js", null, null); ob_start(); ?> edit feature jquery template -->
                <tr data-types="${feature.types.sort().join(" ")}" class="js-inline-edit" data-feature="${feature.id}" data-multiple="${feature.multiple}" data-selectable="${feature.selectable}" data-type="${feature.type}" {{if (feature.type=='divider')}} class="gray"{{/if}}>
                    <td class="min-width"><i class="icon16 sort"></i></td>
                    <td><input type="text" name="feature[${feature.id}][name]" value="${feature.name}"><br>
                    {{if feature.id>0}}
                    <span class="js-feature-code hint">${feature.code}<a href="#/features/feature/code/edit/${feature.id}/" class="js-action" style="display: inline;"><i class="icon10 edit"></i></a></span>
                    {{/if}}
                    <input type="text" class="small" name="feature[${feature.id}][code]" value="${feature.code}" style="width:50px; display: none;">
                    </td>
                    <td>
                        <input type="hidden" name="feature[${feature.id}][type]" value="${feature.type}">
                        {{if feature.id > 0}}
                           <span class="js-feature-type-name">${feature.type_name}</span>
                        {{else}}
                        
                        <?php /*  Call merged included template "../../includes/featuresValuesTypes.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../includes/featuresValuesTypes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('base'=>'/features/feature/value/type/edit/${feature.id}','class'=>"js-action",'available'=>1,'action'=>''), 0, '399867011570e817dbb62c1-75259249');
content_570e817dd7b736_93626344($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../../includes/featuresValuesTypes.html" */?>
                        
                        {{/if}}
                        <input type="hidden" name="feature[${feature.id}][selectable]" value="${feature.selectable}">
                        <input type="hidden"  name="feature[${feature.id}][multiple]" value="${feature.multiple}">


                        <div style="white-space: nowrap;max-height: 500px;overflow-y: auto;overflow-x: hidden;">
                            <ul class="menu-v compact with-icons small s-feature-values js-feature-values" data-values_template="${feature.values_template}">
                                {{each(id, feature_value) feature.values}}

{{if feature.type == 'color'}}

<!-- <?php $_smarty_tpl->_capture_stack[0][] = array("edit-feature-value-color-template-js", null, null); ob_start(); ?> edit feature value color jquery template   -->
<li data-value-id="${id}">
    <i class="icon16 sort"></i>

    <input name="feature[${feature.id}][values][${id}][value]" type="text" value="${$.settings.featuresHelper.value(feature_value,"value")}" placeholder="название цвета" {{if feature_value.error}} class="error" title="${feature_value.error.message}" data-original-id="${feature_value.error.original_id}"{{/if}}>

    <a href="#/features/feature/value/color/${feature.id}/${id}/" class="js-action" style="display: inline;padding-left: 20px;">
        <i class="icon16 color" style="background: ${$.settings.featuresHelper.value(feature_value,"color")}"></i>
    </a>

    #<input name="feature[${feature.id}][values][${id}][code]" type="text" value="${$.settings.featuresHelper.value(feature_value,"hex")}" placeholder="FFFFFF">
    <a href="#/features/feature/value/delete/${feature.id}/${id}/" class="js-action" style="display: inline;">
        <i class="icon10 delete no-overhanging"></i>
    </a>
</li>
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo Smarty::$_smarty_vars['capture']["edit-feature-value-color-template-js"];?>
 -->
{{/if}}
<?php $_smarty_tpl->tpl_vars['dimension'] = new Smarty_variable(shopDimension::getInstance(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['dimensions'] = new Smarty_variable($_smarty_tpl->tpl_vars['dimension']->value->getList(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['units'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['units']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dimensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['units']->key => $_smarty_tpl->tpl_vars['units']->value){
$_smarty_tpl->tpl_vars['units']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['units']->key;
?>
{{if feature.type == 'dimension.<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
'}}

<!-- <?php $_smarty_tpl->_capture_stack[0][] = array("edit-feature-value-dimension-".((string)$_smarty_tpl->tpl_vars['code']->value)."-template-js", null, null); ob_start(); ?> edit feature value <?php echo $_smarty_tpl->tpl_vars['code']->value;?>
 jquery template   -->
<li data-value-id="${id}">
<i class="icon16 sort"></i>

<input type="text" name="feature[${feature.id}][values][${id}][value]" value="${$.settings.featuresHelper.value(feature_value,"value")}"{{if feature_value.error}} class="error" title="${feature_value.error.message}" data-original-id="${feature_value.error.original_id}"{{/if}}>

<?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['code']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['units']->value){?>
<select name="feature[${feature.id}][values][${id}][unit]">
<?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
?>
    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"{{if (("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"==$.settings.featuresHelper.value(feature_value,"unit") ) || ("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"==$.settings.featuresHelper.value(feature_value,"unit")) ) }} selected="selected"{{/if}}><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php } ?>
</select>
<?php }?>

</select>
<a href="#/features/feature/value/delete/${feature.id}/${id}/" class="js-action" style="display: inline;">
    <i class="icon10 delete no-overhanging"></i>
</a>
</li>

<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo Smarty::$_smarty_vars['capture']["edit-feature-value-dimension-".((string)$_smarty_tpl->tpl_vars['code']->value)."-template-js"];?>
 -->
{{/if}}
<?php } ?>
{{if !feature.values_template}}

<!-- <?php $_smarty_tpl->_capture_stack[0][] = array("edit-feature-value-template-js", null, null); ob_start(); ?> edit feature value jquery template -->

                                <li data-value-id="${id}">
                                    <i class="icon16 sort"></i>
                                    <input type="text" name="feature[${feature.id}][values][${id}]" value="{{if typeof(feature_value) == 'object'}}${feature_value.value}{{else}}${feature_value}{{/if}}"{{if feature_value.error}} class="error" title="${feature_value.error.message}" data-original-id="${feature_value.error.original_id}"{{/if}}>
                                    <a href="#/features/feature/value/delete/${feature.id}/${id}/" class="js-action" style="display: inline;">
                                        <i class="icon10 delete no-overhanging"></i>
                                    </a>
                                </li>
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo Smarty::$_smarty_vars['capture']["edit-feature-value-template-js"];?>
-->
{{/if}}
                                {{/each}}
                                <li>
                                    <a href="#/features/feature/value/add/${feature.id}/" class="inline-link js-action">
                                        <i class="icon10 add"></i><b><i>Добавить значение характеристики</i></b>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        {{if feature.id > 0}}
                        <ul class="menu-v compact with-icons small">
                            <li>
                                <a href="#/features/feature/type/${feature.id}/" class="js-action">
                                    <i class="icon10 settings"></i>Сменить тип этой характеристики
                                </a>
                            </li>
                        </ul>
                        {{/if}}

                    </td>
                    <td>
                        <ul class="menu-v compact collapsible small s-feature-values js-types" style="max-height: 500px;overflow-y: auto;overflow-x: hidden;">
                            <li data-type="0">
                                <label>
                                    <input type="checkbox" name="feature[${feature.id}][types][0]" value="0"{{if feature.types.length > 1 && feature.types.indexOf(parseInt(0)) >= 0}} checked="checked"{{/if}}>
                                    <strong>Все типы товаров</strong>
                                </label>
                            </li>
                            {{each(id, name_html) types}}
                            <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("edit-feature-type-template-js", null, null); ob_start(); ?> edit feature jquery template -->
                                <li data-type="${id}">
                                    <label>
                                        <input type="checkbox" name="feature[${feature.id}][types][${id}]" value="${id}"{{if typeof(feature) != 'undefined' && feature.types.indexOf(parseInt(id)) >= 0}} checked="checked"{{/if}}>&nbsp;{{html name_html}}
                                    </label>
                                </li>
                            <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo Smarty::$_smarty_vars['capture']["edit-feature-type-template-js"];?>
 -->
                            {{/each}}
                        </ul>
                    </td>
                    <td class="align-center">

                        <a href="#/features/feature/save/${feature.id}/" class="js-action inline button green">Сохранить</a>

                        </li>

                        <br>
                    </td>
                </tr>
<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> placeholder -->

            </tbody>
        </table>
    </div>

    <div class="clear"></div>
</div>

<div class="clear"></div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/features.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<script type="text/javascript">
if(typeof($)!='undefined') {

$.settings.settingsOptions({
    value_templates:{

<?php $_smarty_tpl->tpl_vars['dimensions'] = new Smarty_variable($_smarty_tpl->tpl_vars['dimension']->value->getList(), null, 0);?>
        'color':'-color'<?php if ($_smarty_tpl->tpl_vars['dimensions']->value){?>,<?php }?>
<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dimensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['var']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['var']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
$_smarty_tpl->tpl_vars['var']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['var']->key;
 $_smarty_tpl->tpl_vars['var']->iteration++;
 $_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;
?>'dimension.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
':'-dimension-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!$_smarty_tpl->tpl_vars['var']->last){?>,<?php }?>

<?php } ?>
    },
    show_all_types:<?php echo htmlspecialchars(var_export($_smarty_tpl->tpl_vars['show_all_types']->value,true), ENT_QUOTES, 'UTF-8', true);?>
,
    show_all_features:<?php echo htmlspecialchars(var_export(!!$_smarty_tpl->tpl_vars['show_all_features']->value,true), ENT_QUOTES, 'UTF-8', true);?>
,
    types_per_page:<?php echo htmlspecialchars(var_export($_smarty_tpl->tpl_vars['types_per_page']->value,true), ENT_QUOTES, 'UTF-8', true);?>

});
$.settings.featuresInit();
}

</script>

<script>document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Типы и характеристики товаров").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';</script>

<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = Smarty::$_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['template']->key;
?> <?php if (strpos($_smarty_tpl->tpl_vars['name']->value,'template-js')){?>
<!-- begin <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 -->
<script type="text/x-jquery-tmpl" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
<?php echo smarty_modifier_replace(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['template']->value,'@(^.*-->)|(<!\-\-.*$)@m',''),'</','<\/');?>

</script>
<!-- end <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 -->
<?php }?> <?php } ?>


<div id="s-settings-features-type-dialog" class="dialog width600px height350px">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <form action="?module=settings&amp;action=featuresTypeSave" method="post">
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>
 <input type="hidden" name="id" value="">
            <div class="dialog-content">
                <div class="dialog-content-indent block">
                    <h1 class="js-add-type">Новый тип товаров</h1>
                    <h1 class="js-edit-type">Настройки типа товаров</h1>
                    <ul class="menu-h js-add-type">
                        <li class="selected"><a href="#/features/type/add/custom/" class="small inline-link js-action">Новый тип товаров</a></li>
                        <li><a href="#/features/type/add/template/" class="small inline-link js-action">Выбрать из шаблонов</a></li>
                    </ul>

                    <div class="fields form">
                        <input type="hidden" name="source" value="custom">
                        <div class="field-group js-add-type-custom">
                            <div class="field">
                                <div class="name">Название типа товаров</div>
                                <div class="value">
                                    <input type="text" name="name" class="large bold">
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">Иконка типа товаров</div>
                                <div class="value">
                                    <ul class="menu-h js-type-icon">
                                        <?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value){
$_smarty_tpl->tpl_vars['icon']->_loop = true;
?>
                                        <li data-icon="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="#/features/type/edit/icon/" class="js-action"><?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['icon']->value);?>
</a></li> <?php } ?>
                                    </ul>
                                    <input type="hidden" name="icon" value=""> <br> <span class="small">Или введите URL иконки (16 х 16 пикселей):</span><br> <input type="text" value="" name="icon_url">
                                </div>
                            </div>
                        </div>
                        <div class="field-group js-add-type-template" style="display: none;">
                            <?php if ($_smarty_tpl->tpl_vars['type_templates']->value){?>
                                <div class="field">
                                    <div class="name">Шаблон типа товаров</div>
                                    <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['template_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['template_id']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
                                    <div class="value">

                                    <label><?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['info']->value['icon']);?>
<input type="radio" name="template" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!empty($_smarty_tpl->tpl_vars['info']->value['description'])){?>
                                                    <span class="hint"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</span><?php }?>
                                        </label>
                                    </div>
                                    <?php } ?>

                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input class="button green" type="submit" value="Сохранить"> или <a class="cancel" href="javascript:void(0);">отмена</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="s-settings-features-feature-type-dialog"  class="dialog width600px height350px">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <form action="?module=settings&action=featuresValuesTypeConvert" method="post">
            <input type="hidden" name="id" value="">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h1>Сменить тип характеристики</h1>
                    <div class="fields form">
                        <div class="field-group">
                            <div class="field">
                                <div class="name">Текущий тип данных</div>
                                <div class="value feature-old-type no-shift">
                                    /* Old feature type */
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">Новый тип данных</div>
                                <div class="value features no-shift">
                                    <?php /*  Call merged included template "../../includes/featuresValuesTypes.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../includes/featuresValuesTypes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>"js-action",'available'=>1,'action'=>''), 0, '399867011570e817dbb62c1-75259249');
content_570e817dd7b736_93626344($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../../includes/featuresValuesTypes.html" */?>
                                </div>
                                <div class="value features no-shift">
                                    <p class="small">
                                        <i class="icon10 exclamation"></i> При изменении типа данных характеристики будут автоматически обновлены значения этой характеристики для всех товаров. В случаях когда приведение значения характеристики к новому типу данных невозможно, данные этого значения могут быть потеряны. Например, при смене типа характеристики с текстового (Текст) на числовой (Значение) такие строки как «100» и «200» будут конвертированы в числовой тип правильно, а значения, не имеющие числового представления («да», «нет», «красный») получат значение 0. В случае потери данных возможности автоматического восстановления прежних значений не предусмотрено.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <em class="errormsg"></em>
                    </div>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input class="button green" type="submit" value="Сохранить"> или <a class="cancel" href="javascript:void(0);">отмена</a>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </form>
    </div>
</div>

<div id="s-settings-features-feature-delete-dialog"  class="dialog width600px height150px">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <form action="?module=settings&action=featuresFeatureDelete" method="post">
            <input type="hidden" name="id" value="">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h1>Удалить характеристику</h1>
                    <p class="js-features-feature-usage-counter">

                    </p>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input class="button red" type="submit" value="Удалить"> или <a class="cancel" href="javascript:void(0);">отмена</a>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </form>
    </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:27:25
         compiled from "/var/www/test/wa-apps/shop/templates/actions/settings/SettingsFeaturesFeatureList.html" */ ?>
<?php if ($_valid && !is_callable('content_570e817dc58db3_96220649')) {function content_570e817dc58db3_96220649($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['feature']->key;
?><?php $_smarty_tpl->tpl_vars['_types'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['feature']->value['types']), null, 0);?><?php if (sort($_smarty_tpl->tpl_vars['_types']->value)){?><?php }?><tr data-types="<?php echo htmlspecialchars(implode(' ',$_smarty_tpl->tpl_vars['_types']->value), ENT_QUOTES, 'UTF-8', true);?>
" data-feature="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"data-type="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['type'])===null||$tmp==='' ? shopFeatureModel::TYPE_VARCHAR : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"data-sort="<?php echo htmlspecialchars(json_encode((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['sort'])===null||$tmp==='' ? array() : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
"data-selectable="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['selectable'], ENT_QUOTES, 'UTF-8', true);?>
"data-multiple="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['multiple'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['feature']->value['type']=='divider'){?> class="gray"<?php }?>><td class="min-width"><i class="icon16 sort"></i></td><td><span class="js-feature-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><br><span class="js-feature-code hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span></td><td><span class="js-feature-type-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['type_name'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php if ($_smarty_tpl->tpl_vars['feature']->value['selectable']){?><div><?php if (false){?><ul class="menu-h with-icons"><li><a href="#/features/feature/value/view/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="small inline-link js-action"><i class="icon10 view-table" title="Просмотреть"></i></a></li><li><a href="#/features/feature/value/edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="small inline-link js-action"><i class="icon10 edit" title="Редактировать"></i></a></li></ul><?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['values'])){?><ul class="menu-v compact with-icons small s-feature-values js-feature-values" style="max-width: 200px;"><?php /*  Call merged included template "./SettingsFeaturesFeatureValues.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./SettingsFeaturesFeatureValues.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '399867011570e817dbb62c1-75259249');
content_570e817dcecd90_59533774($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./SettingsFeaturesFeatureValues.html" */?></ul><?php }else{ ?><p class="hint">Значения характеристики не определены</p><a href="#/features/feature/value/add/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="small inline-link js-action"><i class="icon10 add"></i><b><i>Добавить значение характеристики</i></b></a><?php }?><?php }?></div><?php }?></td><td>&nbsp;</td><td class="align-center"><ul class="menu-h with-icons"><li><a href="#/features/feature/edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="inline js-action" title="Настройки"><i class="icon16 settings"></i></a></li><li><a href="#/features/feature/delete/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="inline js-action"><i class="icon16 delete"></i></a></li></ul></td></tr><?php } ?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:27:25
         compiled from "/var/www/test/wa-apps/shop/templates/actions/settings/SettingsFeaturesFeatureValues.html" */ ?>
<?php if ($_valid && !is_callable('content_570e817dcecd90_59533774')) {function content_570e817dcecd90_59533774($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['more'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['values_per_feature']->value)&&(($_smarty_tpl->tpl_vars['feature']->value['count']>($_smarty_tpl->tpl_vars['values_per_feature']->value+2))||($_smarty_tpl->tpl_vars['feature']->value['count']>count($_smarty_tpl->tpl_vars['feature']->value['values']))) ? ($_smarty_tpl->tpl_vars['feature']->value['count']-count($_smarty_tpl->tpl_vars['feature']->value['values'])) : null, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <li data-value-id="<?php echo $_smarty_tpl->tpl_vars['value_id']->value;?>
"><?php if (is_object($_smarty_tpl->tpl_vars['value']->value)&&isset($_smarty_tpl->tpl_vars['value']->value['icon'])){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['icon'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['more']->value){?>
    <li class="js-more-link"><a href="#/features/feature/values/show/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="js-action inline-link"><b><i><?php echo sprintf("Показать еще %d",$_smarty_tpl->tpl_vars['more']->value);?>
</i></b></a></li>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:27:25
         compiled from "/var/www/test/wa-apps/shop/templates/includes/featuresValuesTypes.html" */ ?>
<?php if ($_valid && !is_callable('content_570e817dd7b736_93626344')) {function content_570e817dd7b736_93626344($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['base']->value)){?><?php $_smarty_tpl->tpl_vars['base'] = new Smarty_variable('', null, 0);?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['available']->value)){?><?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable(2, null, 0);?><?php }?>
<?php $_smarty_tpl->tpl_vars['variants'] = new Smarty_variable(shopFeatureModel::getTypes(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['subtypes'] = new Smarty_variable(array(), null, 0);?>
<select<?php if (!empty($_smarty_tpl->tpl_vars['link']->value)){?> style="display:none;"<?php }?> class="js-feature-types-control">
    <?php if ($_smarty_tpl->tpl_vars['available']->value>1){?><option>—</option><?php }?>
    <?php $_smarty_tpl->tpl_vars['group'] = new Smarty_variable(false, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['group']->value&&(empty($_smarty_tpl->tpl_vars['v']->value['group'])||($_smarty_tpl->tpl_vars['v']->value['group']!=$_smarty_tpl->tpl_vars['group']->value))){?>
        </optgroup>
        <?php $_smarty_tpl->tpl_vars['group'] = new Smarty_variable(false, null, 0);?>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['group'])&&!$_smarty_tpl->tpl_vars['group']->value){?>
        <optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['group'], ENT_QUOTES, 'UTF-8', true);?>
">
        <?php $_smarty_tpl->tpl_vars['group'] = new Smarty_variable($_smarty_tpl->tpl_vars['v']->value['group'], null, 0);?>
    <?php }?>

    <option<?php if ($_smarty_tpl->tpl_vars['v']->value['available']<$_smarty_tpl->tpl_vars['available']->value){?> disabled="disabled"<?php }?> data-type="<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
" data-multiple="<?php echo $_smarty_tpl->tpl_vars['v']->value['multiple'];?>
" data-selectable="<?php echo $_smarty_tpl->tpl_vars['v']->value['selectable'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
    <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['subtype'])){?><?php $_smarty_tpl->createLocalArrayVariable('subtypes', null, 0);
$_smarty_tpl->tpl_vars['subtypes']->value[$_smarty_tpl->tpl_vars['v']->value['type']] = $_smarty_tpl->tpl_vars['v']->value['subtype'];?><?php }?>
    <?php } ?>
    <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
        </optgroup>
    <?php }?>
</select>


<?php $_smarty_tpl->tpl_vars['v'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['variants']->value), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['link']->value)){?>
<a href="#<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['class']->value)){?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon16 settings"></i></a>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['subtype'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subtype']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subtypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subtype']->key => $_smarty_tpl->tpl_vars['subtype']->value){
$_smarty_tpl->tpl_vars['subtype']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['subtype']->key;
?>
<select style="display:none;" class="js-feature-subtypes-control" data-subtype="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['available']->value>1){?><option>—</option><?php }?>
<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
<option<?php if ($_smarty_tpl->tpl_vars['s']->value['available']<$_smarty_tpl->tpl_vars['available']->value){?> disabled="disabled"<?php }?> data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['type'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</option>
<?php } ?>
</select>
<?php } ?>

<?php if (!empty($_smarty_tpl->tpl_vars['link']->value)){?>
<br>
<span class="hint" style="display:none;">Если добавляемый вами тип характеристики недоступен для выбора в этом списке, сначала добавьте эту характеристику в разделе «Настройки» и затем укажите ее значение в свойствах данного товара.</span>
<?php }?>
<?php }} ?>