<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:13:24
         compiled from "/var/www/test/wa-apps/shop/widgets/products/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:809004388570e7e3455e3e9-24883098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1928b53f62c33201c17259893a82975cc4b819df' => 
    array (
      0 => '/var/www/test/wa-apps/shop/widgets/products/templates/Default.html',
      1 => 1460566693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '809004388570e7e3455e3e9-24883098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'wa' => 0,
    'products' => 0,
    'p' => 0,
    'size' => 0,
    'widget_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e7e345a8cf6_28675330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e7e345a8cf6_28675330')) {function content_570e7e345a8cf6_28675330($_smarty_tpl) {?><style>
    td.s-product-img img { width: 48px; height: 48px; padding-left: 0.4rem !important; }
    td.s-product-metric { text-align: right; }
    
    .widget-1x1 .s-product-img { display: none; }
    .widget-1x1 .s-product-name { padding-left: 0.7rem !important; }
    .widget-2x2 .s-product-metric { white-space: nowrap; }
    
    .tv td.s-product-img img { width: 4rem; height: 4rem; }
    .tv td.s-product-metric { color: #ffa; }
</style>
<div class="block">
    <h6 class="heading nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h6>
</div>
<table class="zebra s-products-widget-table">
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>
        <?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable('48x48@2x', null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable('48x48', null, 0);?>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
        <tr>
            <td class="s-product-img"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->getProductImgHtml($_smarty_tpl->tpl_vars['p']->value,$_smarty_tpl->tpl_vars['size']->value,array('height'=>96,'width'=>96));?>
</td>
            <td class="s-product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            <td class="s-product-metric"><?php echo $_smarty_tpl->tpl_vars['p']->value['metric'];?>
</td>
        </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
        <tr>
            <td colspan="2"><div class="align-center">Не найдено товаров для отображения.</div></td>
        </tr>
    <?php } ?>
</table>

<script>(function($) {

    var widget_id = "<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
",
        uniqid = '' + (new Date).getTime() + Math.random();

    setTimeout(function() {
        try {
            DashboardWidgets[widget_id].uniqid = uniqid;
            setTimeout(function() {
                try {
                    if (uniqid == DashboardWidgets[widget_id].uniqid) {
                        DashboardWidgets[widget_id].renderWidget();
                    }
                } catch (e) {
                    console && console.log('Error updating Products widget', e);
                }
            }, 60*60*1000);
        } catch (e) {
            console && console.log('Error setting up Products widget updater', e);
        }
    }, 0);

})(jQuery);</script><?php }} ?>