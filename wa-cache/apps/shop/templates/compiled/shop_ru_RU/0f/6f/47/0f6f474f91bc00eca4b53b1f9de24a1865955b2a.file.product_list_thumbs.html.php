<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:13:50
         compiled from "/var/www/test/wa-apps/shop/templates/actions/products/product_list_thumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:902229788570e7e4e7435f6-59469341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f6f474f91bc00eca4b53b1f9de24a1865955b2a' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/products/product_list_thumbs.html',
      1 => 1460566591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '902229788570e7e4e7435f6-59469341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e7e4e74e232_92859809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e7e4e74e232_92859809')) {function content_570e7e4e74e232_92859809($_smarty_tpl) {?><ul class="thumbs li250px" id="product-list">
    <li style="display:none" class="hidden header"><input type="checkbox" class="s-select-all"></li>
    <script id="template-product-list-thumbs" type="text/html">
    
    {% for (var i = 0, n = o.products.length, p = o.products[0]; i < n; p = o.products[++i]) { %}
    <li class="product
        {% if (i == n-1) { %}last{% } %}
        {% if (p.status == '0') { %}gray{% } %}
        {% if (p.alien) { %}s-alien{% } %}"
        data-product-id="{%#p.id%}"
        {% if (p.alien) { %}title="Этот товар находится в одной из подкатегорий"{% } %}
    >
        <div class="s-product-image s-image">
            <a href="#/product/{%#p.id%}/">
                {% if (p.badge) { %}
                    <div class="s-image-corner top right">{%#p.badge%}</div>
                {% } %}
                {% if (p.image) { %}
                    <img src="{%#p.image.thumb_url%}" class="drag-handle">
                {% } else { %}
                    <img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/image-dummy.png" class="drag-handle not-found">
                {% } %}
            </a>
        </div>
        <div class="s-product-details">
            <input type="checkbox" id="s-product-checkbox-{%#p.id%}">
            <label for="s-product-checkbox-{%#p.id%}">
                <strong>{%#p.name%}</strong>
            </label>
            <span class="small nowrap">{%#p.price_range%}</span>
            <!-- extend info according to sorting method -->
            {% if (o.sort == 'rating') { %}
                <span class="rate nowrap" title="{%#'Средняя оценка покупателей: %s / 5'.replace('%s', p.rating)%}">
                    {%#p.rating_str%}
                </span>
            {% } else if (o.sort == 'total_sales') { %}
                <span class="hint total-sales nowrap">
                    Общие продажи: <strong>{%#p.total_sales_str%}</strong>
                </span>
            {% } else if (o.sort == 'stock_worth') { %}
                <span class="hint stock-worth nowrap">
                    Стоимость активов: <strong>{%#p.stock_worth_html%}</strong>
                </span>
            {% } else if (o.sort == 'count') { %}
                <span class="small stock nowrap">
                    {%#p.icon%} {%#((p.count === null)?'<span class="gray">∞</span>':''+p.count)%}
                </span>
            {% } else if (o.sort == 'create_datetime') { %}
                <a class="small show-on-hover nowrap" href="#/product/{%#p.id%}/edit/"><i class="icon10 edit s-instant-edit"></i> редактировать</a>
                <br>
                <span class="hint stock nowrap">
                    {%#'Добавлен %s'.replace('%s', p.create_datetime_str)%}
                </span>
            {% } %}
            {% if (o.sort != 'create_datetime') { %}
            {% if (p.edit_rights) { %}
                <a class="small show-on-hover nowrap" href="#/product/{%#p.id%}/edit/"><i class="icon10 edit s-instant-edit"></i> редактировать</a>
            {% } %}
            {% } %}
        </div>
    </li>
    {% } %}
    
    </script>
</ul><?php }} ?>