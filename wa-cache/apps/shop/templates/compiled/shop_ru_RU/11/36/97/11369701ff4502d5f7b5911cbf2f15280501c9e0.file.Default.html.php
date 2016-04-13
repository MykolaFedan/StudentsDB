<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:13:24
         compiled from "/var/www/test/wa-apps/shop/widgets/kpi/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:1535129076570e7e343fc243-96798680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11369701ff4502d5f7b5911cbf2f15280501c9e0' => 
    array (
      0 => '/var/www/test/wa-apps/shop/widgets/kpi/templates/Default.html',
      1 => 1460566674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1535129076570e7e343fc243-96798680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'total_formatted' => 0,
    'dynamic' => 0,
    'dynamic_color' => 0,
    'dynamic_html' => 0,
    'widget_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e7e34422456_28456186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e7e34422456_28456186')) {function content_570e7e34422456_28456186($_smarty_tpl) {?><style>
    .heading { cursor: default; }
    .widget-1x1 h1 { margin-bottom: 0.1em; }
</style>

<div class="block top-padded align-center">
    <h3 class="heading">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>

    </h3>
    <h1 class="nowrap"><?php echo $_smarty_tpl->tpl_vars['total_formatted']->value;?>
</h1>
    <?php if ($_smarty_tpl->tpl_vars['dynamic']->value!==null){?>
        <h2 style="color:<?php echo $_smarty_tpl->tpl_vars['dynamic_color']->value;?>
;"><?php echo $_smarty_tpl->tpl_vars['dynamic_html']->value;?>
</h2>
    <?php }?>
</div>

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
                    console && console.log('Error updating KPI widget', e);
                }
            }, 30*60*1000);
        } catch (e) {
            console && console.log('Error setting up KPI widget updater', e);
        }
    }, 0);

})(jQuery);</script><?php }} ?>