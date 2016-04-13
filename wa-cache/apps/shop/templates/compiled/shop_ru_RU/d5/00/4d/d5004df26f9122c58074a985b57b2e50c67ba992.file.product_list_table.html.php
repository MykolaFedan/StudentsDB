<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:13:44
         compiled from "/var/www/test/wa-apps/shop/templates/actions/products/product_list_table.html" */ ?>
<?php /*%%SmartyHeaderCode:1091856188570e7e4858b936-23011767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5004df26f9122c58074a985b57b2e50c67ba992' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/products/product_list_table.html',
      1 => 1460566591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1091856188570e7e4858b936-23011767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'additional_columns' => 0,
    'c' => 0,
    'manual' => 0,
    'sort' => 0,
    'total_count' => 0,
    'enabled_columns' => 0,
    'collection_param' => 0,
    'view' => 0,
    'order' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'stocks' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e7e4867ac95_73070389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e7e4867ac95_73070389')) {function content_570e7e4867ac95_73070389($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['enabled_columns'] = new Smarty_variable(array(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['additional_columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['c']->value['enabled']){?>
    <?php $_smarty_tpl->createLocalArrayVariable('enabled_columns', null, 0);
$_smarty_tpl->tpl_vars['enabled_columns']->value[$_smarty_tpl->tpl_vars['c']->value['id']] = $_smarty_tpl->tpl_vars['c']->value;?>
<?php }?><?php } ?>

<div id="s-product-list-table-container">
    <table class="zebra single-lined" id="product-list">
        <tr class="header">
            <?php if ($_smarty_tpl->tpl_vars['manual']->value&&$_smarty_tpl->tpl_vars['sort']->value=='sort'){?><th class="min-width"></th><?php }?>
            <th class="min-width"><input type="checkbox" class="s-select-all" data-count=<?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
></th>
            <?php if (!empty($_smarty_tpl->tpl_vars['enabled_columns']->value['image_crop_small'])){?>
                <th class="min-width" data-additional-column="image_crop_small"></th>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['enabled_columns']->value['sku'])){?>
                <th class="min-width" data-additional-column="sku"><?php echo $_smarty_tpl->tpl_vars['enabled_columns']->value['sku']['name'];?>
</th>
            <?php }?>
            <th>
                <span class="sort" title="Название">
                    <a href="#/products/<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?><?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
&<?php }?>view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
&sort=name&order=<?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'&&$_smarty_tpl->tpl_vars['sort']->value=='name'){?>desc<?php }else{ ?>asc<?php }?>" class="inline-link selected">
                        Название
                    </a><?php if ($_smarty_tpl->tpl_vars['sort']->value=='name'){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr<?php }else{ ?>darr<?php }?>"></i><?php }?>
                </span>
            </th>
            <th class="short align-right" title="Цена">
                <span class="sort">
                    <a href="#/products/<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?><?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
&<?php }?>view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
&sort=price&order=<?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'&&$_smarty_tpl->tpl_vars['sort']->value=='price'){?>desc<?php }else{ ?>asc<?php }?>" class="inline-link selected">
                        Цена
                    </a><?php if ($_smarty_tpl->tpl_vars['sort']->value=='price'){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr<?php }else{ ?>darr<?php }?>"></i><?php }?>
                </span>
            </th>
            <th class="short align-right" title="В наличии">
                <div>
                <span class="sort">
                    <a href="#/products/<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?><?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
&<?php }?>view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
&sort=count&order=<?php if ($_smarty_tpl->tpl_vars['order']->value=='desc'&&$_smarty_tpl->tpl_vars['sort']->value=='count'){?>asc<?php }else{ ?>desc<?php }?>" class="inline-link selected">
                        В наличии
                    </a><?php if ($_smarty_tpl->tpl_vars['sort']->value=='count'){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr<?php }else{ ?>darr<?php }?>"></i><?php }?>
                </span>
                </div>
            </th>

            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enabled_columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['c']->value['id']!='image_crop_small'&&$_smarty_tpl->tpl_vars['c']->value['id']!='sku'){?>
                <th data-additional-column="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <div>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value['sortable']){?>
                            <span class="sort">
                                <a href="#/products/<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?><?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
&<?php }?>view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
&order=<?php if ($_smarty_tpl->tpl_vars['sort']->value==$_smarty_tpl->tpl_vars['c']->value['id']){?><?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?><?php echo ifset($_smarty_tpl->tpl_vars['c']->value['default_sort_order'],'asc');?>
<?php }?>" class="inline-link selected">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                </a><?php if ($_smarty_tpl->tpl_vars['sort']->value==$_smarty_tpl->tpl_vars['c']->value['id']){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr<?php }else{ ?>darr<?php }?>"></i><?php }?>
                            </span>
                        <?php }else{ ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                </th>
            <?php }?><?php } ?>
            <th class="min-width">
                <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('settings')){?>
                    <a href="javascript:void(0)" id="product-list-table-settings"><i class="icon16 settings"></i></a>
                <?php }?>
            </th>
        </tr>
    </table>
</div>

<script id="template-product-list-table" type="text/html">
    
    {% for (var i = 0, n = o.products.length, p = o.products[0]; i < n; p = o.products[++i]) { %}
    <tr class="product {% if (i == n-1) { %}last{% } %}
        {% if (p.status == '0') { %}gray{% } %}
        {% if (o.check_all) { %}selected{% } %}
        {% if (p.alien) { %}s-alien{% } %}"
        data-product-id="{%#p.id%}"
        data-edit-rights="{%#p.edit_rights%}"
        data-sku-count="{%#p.sku_count%}"
        data-min-price="{%#p.min_price%}"
        data-max-price="{%#p.max_price%}"
        data-currency="{%#p.currency%}"
        {% if (p.alien) { %}title="Этот товар находится в одной из подкатегорий"{% } %}
    >
        
        <?php if ($_smarty_tpl->tpl_vars['manual']->value&&$_smarty_tpl->tpl_vars['sort']->value=='sort'){?>
            
                <td class="min-width drag-handle">{% if (!p.alien) { %}<i class="icon16 sort"></i>{% } %}</td>
            
        <?php }?>
        
        <td class="min-width drag-handle">
            <input type="checkbox" {% if (o.check_all) { %}checked{% } %}>
        </td>
        
        <?php if (!empty($_smarty_tpl->tpl_vars['enabled_columns']->value['image_crop_small'])){?>
            
            <td class="min-width drag-handle s-product-list-image">
                <div class="s-image">
                    <a href="#/product/{%#p.id%}/">
                        {% if (p.badge) { %}
                            <div class="s-image-corner">{%#p.badge%}</div>
                        {% } %}
                        <img src="{%#p.image_crop_small || '<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/image-dummy-small.png'%}" width="48" height="48" class="drag-handle">
                    </a>
                </div>
            </td>
            
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['enabled_columns']->value['sku'])){?>
            <td class="s-product-col-sku" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['enabled_columns']->value['sku']['name'], ENT_QUOTES, 'UTF-8', true);?>
">{%#p.sku_html || p.sku%}</td>
        <?php }?>
        
        <td class="drag-handle s-product-name" title="{%#p.name%}">
            <a href="#/product/{%#p.id%}/"><div>{%#p.name%}<i class="shortener"></i></div></a>
        </td>
        <td class="short nowrap align-right s-product-price" title="Цена"><span class="editable">{%#p.price_range%}</span></td>
        <td class="short nowrap align-right s-product-stock" title="В наличии">
            <span class="editable">{%#((p.count === null)?'<span class="gray">∞</span>':p.count)%}</span>
        </td>
        
        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enabled_columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['c']->value['id']!='image_crop_small'&&$_smarty_tpl->tpl_vars['c']->value['id']!='sku'){?>
                <td class="s-product-col-<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">{%#p.<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
_html || p.<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
%}</td>
            <?php }?>
        <?php } ?>
        <td class="min-width">
            {% if (p.edit_rights) { %}<a class="show-on-hover nowrap" href="#/product/{%#p.id%}/edit/" title="Редактировать"><i class="icon16 edit s-instant-edit"></i></a>{% } %}
        </td>

        
    </tr>
    {% } %}
    
</script>

<script id="template-list-stock-editor-many" type="text/html">
    <form><div class="nowrap">
            <input type="hidden" name="product_id" value="{%=o.product_id%}">
        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?><input type="text" class="short small number" name="stock[<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
]" value="{%=o.values[<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
]||''%}" placeholder="∞"><span class="hint">@<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><br><?php } ?><br><input type="submit" value="Сохранить"><a href="javascript:void(0)" class="cancel gray large">&times;</a></div></form>
</script>

<script id="template-list-stock-editor-one" type="text/html">
    <form><div class="nowrap">
        <input type="hidden" name="product_id" value="{%=o.product_id%}">
        <input type="text" class="short number" name="stock" value="{%=o.value%}" placeholder="∞">
        <br>
        <input type="submit" value="Сохранить">
        <a href="javascript:void(0)" class="cancel gray large">&times;</a>
    </div></form>
</script>

<script id="template-list-price-editor-one" type="text/html">
    <form><div class="nowrap">
        <input type="hidden" name="product_id" value="{%=o.product_id%}">
        <input type="text" class="short number" name="price" value="{%=o.value%}">
        {%=o.currency%}
        <br>
        <input type="submit" value="Сохранить">
        <a href="javascript:void(0)" class="cancel gray large">&times;</a>
    </div></form>
</script>


<?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('settings')){?>
<div class="dialog width500px height300px" id="product-list-settings-dialog">
    <div class="dialog-background"></div>
    <form method="post" action="?module=products&action=tableColumns">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">

                <h1>Настройки списка товаров</h1>

                <div class="fields width100px">
                    <div class="field">
                        <p>Выбранный набор столбцов будет использоваться в бекенде магазина для всех списков товаров.</p>
                    </div>
                    <div class="field">
                        <div class="name">Выберите колонки</div>

                        <div class="value"><input type="checkbox" checked disabled> Название</div>
                        <div class="value"><input type="checkbox" checked disabled> Цена</div>
                        <div class="value"><input type="checkbox" checked disabled> В наличии</div>
                        <div class="hidden template value feature-checkbox-wrapper"><label>
                            <input type="checkbox" name="columns[%ID%]" value="1">
                            <span class="column-name"></span>
                        <label></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button green" type="submit" value="Сохранить">
                или <a class="cancel" href="javascript:void(0);">отмена</a>
            </div>
        </div>
    </div>
    </form>
</div>
<script>(function() { "use strict";
    var additional_columns = <?php echo json_encode($_smarty_tpl->tpl_vars['additional_columns']->value);?>
;
    var additional_columns_count = <?php echo count($_smarty_tpl->tpl_vars['additional_columns']->value);?>
;

    var features_initialized = false;

    var $dialog = $('#product-list-settings-dialog');
    $dialog.length && $('#product-list-table-settings').click(function() {

        // Initialize features list (or autocomplete) if not initialized yet
        if (!features_initialized) {
            features_initialized = true;
            var $template = $dialog.find('.feature-checkbox-wrapper.template');
            var new_elements = $.map(additional_columns, function(col) {
                var $wr = $template.clone().removeClass('hidden template');
                var $cb = $wr.find('input:checkbox');
                $cb[0].name = $cb[0].name.replace('%ID%', col.id);
                $cb[0].checked = col.enabled;
                $wr.find('.column-name').text(col.name);
                return $wr[0];
            });
            $template.before($(new_elements));
        }

        $dialog.waDialog({
            disableButtonsOnSubmit: true,
            onSubmit: function () {
                var $form = $dialog.find('form');
                var $loading = $('<i class="icon16 loading"></i>').insertAfter($form.find(':submit:first'));
                $.post($form.attr('action'), $form.serialize(), function() {
                    $.products.dispatch();
                    $dialog.trigger('close');
                    $loading.remove();
                });
                return false;
            }
        });
    });

})();</script>
<?php }?>
<?php }} ?>