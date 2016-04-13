<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:13:58
         compiled from "/var/www/test/wa-apps/shop/templates/actions/dialog/DialogProductsDelete.html" */ ?>
<?php /*%%SmartyHeaderCode:2026238175570e7e56f3c5e7-92064874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7000ee5275e1a3ff183028e3499f31a44387ab7' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/dialog/DialogProductsDelete.html',
      1 => 1460566578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2026238175570e7e56f3c5e7-92064874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e7e57021ab4_01441401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e7e57021ab4_01441401')) {function content_570e7e57021ab4_01441401($_smarty_tpl) {?><div class="dialog width400px height200px" id="s-product-list-delete-products-dialog" data-not-allowed-string="Невозможно удалить товары (%d), к которым у вас нет доступа.">
    <div class="dialog-background"></div>
    <form method="post" action="">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Удалить</h1>
                <p>
                    <strong class="red"><?php echo _w('%d product will be deleted without the ability to restore.','%d products will be deleted without the ability to restore.',$_smarty_tpl->tpl_vars['count']->value);?>
</strong>
                    При удалении товара все отчеты о его продажах, его данные о перекрестных продажах и связи с ранее оформленными заказами будут также удалены без возможности восстановления.
                </p>
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button red" type="submit" value="Удалить">
                <i class="icon16 loading"></i> 
                или <a class="cancel" href="javascript:void(0);">отмена</a>
            </div>
        </div>
    </div>
    </form>
</div><?php }} ?>