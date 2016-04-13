<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:13:25
         compiled from "/var/www/test/wa-apps/shop/widgets/reviews/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:1565729925570e7e35a47024-52790539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d2669e67f1a71974503e6138d4aa32319b69b54' => 
    array (
      0 => '/var/www/test/wa-apps/shop/widgets/reviews/templates/Default.html',
      1 => 1460566699,
      2 => 'file',
    ),
    'ab3372c1712534db82f792a393226032b42d8477' => 
    array (
      0 => '/var/www/test/wa-apps/shop/widgets/reviews/css/reviews.css',
      1 => 1460566694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1565729925570e7e35a47024-52790539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reviews' => 0,
    'review' => 0,
    '_author_uri' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e7e35ba3d14_81481607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e7e35ba3d14_81481607')) {function content_570e7e35ba3d14_81481607($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/var/www/test/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><style>
    <?php /*  Call merged included template "../css/reviews.css" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../css/reviews.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1565729925570e7e35a47024-52790539');
content_570e7e35acb3b8_50790941($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../css/reviews.css" */?>
</style>

<div class="block s-reviews-widget">

    <?php if (!count($_smarty_tpl->tpl_vars['reviews']->value)){?>

        <h5 class="align-center hint sr-no-reviews">Отзывы о товарах еще не публиковались.</h5>

    <?php }else{ ?>

        <h6 class="heading">Последние отзывы</h6>

        <?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
            <div class="sr-review">

                <header class="sr-header">
                    <?php $_smarty_tpl->tpl_vars['_author_uri'] = new Smarty_variable("javascript:void(0);", null, 0);?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['author']['site'])){?>
                        <?php $_smarty_tpl->tpl_vars['_author_uri'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['author']['site'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
                    <?php }?>

                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['author']['photo_url_50'])){?>
                        <div class="left-column">
                            <a class="sr-author-image" href="<?php echo $_smarty_tpl->tpl_vars['_author_uri']->value;?>
"><img class="userpic" src="<?php echo $_smarty_tpl->tpl_vars['review']->value['author']['photo_url_50'];?>
" alt=""></a>
                        </div>
                    <?php }?>

                    <div class="main-column">
                        
                        <span class="sr-author-name bold">
                            <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['author']['name'])){?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_author_uri']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value['author']['name'];?>
</a>
                            <?php }else{ ?>
                                <?php if (empty($_smarty_tpl->tpl_vars['review']->value['author']['id'])&&!empty($_smarty_tpl->tpl_vars['review']->value['author']['email'])){?>
                                    <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['author']['email'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <?php }?>
                            <?php }?>
                        </span>

                        
                        <span class="sr-review-date hint"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['review']->value['datetime'],"humandatetime");?>
<?php if ($_smarty_tpl->tpl_vars['review']->value['ip']){?>, <?php echo long2ip($_smarty_tpl->tpl_vars['review']->value['ip']);?>
<?php }?></span>
                    </div>
                </header>

                <p class="sr-review-text">
                    <span<?php if (!empty($_smarty_tpl->tpl_vars['review']->value['is_new'])){?> class="highlighted"<?php }?>><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['text'], ENT_QUOTES, 'UTF-8', true));?>
</span>
                </p>

                <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['product_name'])){?>
                    <p class="sr-review-subtext hint">
                        <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo sprintf('к товару <a href="%s">%s</a>',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."shop/?action=products#/product/".((string)$_smarty_tpl->tpl_vars['review']->value['product_id'])."/",$_tmp1);?>

                    </p>
                <?php }?>
            </div>
        <?php } ?>

        <div class="sr-link-to-all-reviews">
            <div class="block">
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
shop/?action=products#/reviews/">
                    Показать все отзывы
                </a>
            </div>
        </div>

    <?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:13:25
         compiled from "/var/www/test/wa-apps/shop/widgets/reviews/css/reviews.css" */ ?>
<?php if ($_valid && !is_callable('content_570e7e35acb3b8_50790941')) {function content_570e7e35acb3b8_50790941($_smarty_tpl) {?>.s-reviews-widget {
  font-size: 14px;
}
.s-reviews-widget:after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  height: 0;
  border: 10px solid #90c108;
  border-left-color: transparent;
  border-bottom-color: transparent;
}
.s-reviews-widget:hover .sr-link-to-all-reviews {
  opacity: 1;
}
.s-reviews-widget .sr-review {
  margin: 1.5em 0 0;
}
.s-reviews-widget .sr-review:first-of-type {
  margin-top: 0.5em;
}
.s-reviews-widget .sr-review .sr-header {
  display: table;
  width: 100%;
  table-layout: fixed;
}
.s-reviews-widget .sr-review .sr-header .left-column,
.s-reviews-widget .sr-review .sr-header .main-column {
  display: table-cell;
  vertical-align: middle;
}
.s-reviews-widget .sr-review .sr-header .left-column {
  width: 2.285714285714286em;
  padding: 0 0.75em 0 0;
}
.s-reviews-widget .sr-review .sr-header .main-column {
  padding: 0 0 0.1em;
}
.s-reviews-widget .sr-review .sr-header .sr-author-image {
  display: block;
  width: 2.285714285714286em;
  height: 2.285714285714286em;
}
.s-reviews-widget .sr-review .sr-header .sr-author-image img {
  width: 100%;
  max-height: 100%;
}
.s-reviews-widget .sr-review .sr-header .sr-author-name,
.s-reviews-widget .sr-review .sr-header .sr-review-date {
  display: block;
  max-width: 100%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.s-reviews-widget .sr-review .sr-header .sr-author-name {
  padding: 0.2em 0 0;
}
.s-reviews-widget .sr-review .sr-header .sr-review-date {
  margin: 0.25em 0 0;
}
.s-reviews-widget .sr-review .sr-review-text {
  margin: 0.3em 0 0;
}
.s-reviews-widget .sr-review .sr-review-subtext {
  margin: 0.2em 0 0;
}
.s-reviews-widget .sr-no-reviews {
  margin: 35px 20px;
  font-weight: normal;
}
.s-reviews-widget .sr-link-to-all-reviews {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  opacity: 0;
  padding: 18px 0 0;
  background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, #fff 50%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255,255,255,0)), color-stop(50%, #fff));
  background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, #fff 50%);
  background: -o-linear-gradient(top, rgba(255,255,255,0) 0%, #fff 50%);
  background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, #fff 50%);
  background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, #fff 50%);
  transition: opacity 0.5s;
}
.widget-2x1 .s-reviews-widget .sr-no-reviews {
  margin: 45px 55px;
}
.widget-2x2 .s-reviews-widget .sr-no-reviews {
  margin: 105px 35px;
}
.tv .s-reviews-widget {
  font-size: 1rem;
}
.tv .s-reviews-widget .hint a {
  color: #e2e25b;
}
.tv .s-reviews-widget .sr-review .sr-header .sr-review-date {
  color: #aaa;
  font-size: 0.9em;
}
.tv .s-reviews-widget .sr-review .sr-header .sr-author-name a {
  color: #eee;
}
.tv .s-reviews-widget .sr-review .sr-review-text {
  font-size: 1.1em;
}
.tv .s-reviews-widget .sr-review .sr-review-subtext {
  font-size: 0.9em;
}
.tv .s-reviews-widget .sr-link-to-all-reviews {
  background: -moz-linear-gradient(top, rgba(51,51,51,0) 0%, #333 50%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(51,51,51,0)), color-stop(50%, #333));
  background: -webkit-linear-gradient(top, rgba(51,51,51,0) 0%, #333 50%);
  background: -o-linear-gradient(top, rgba(51,51,51,0) 0%, #333 50%);
  background: -ms-linear-gradient(top, rgba(51,51,51,0) 0%, #333 50%);
  background: linear-gradient(to bottom, rgba(51,51,51,0) 0%, #333 50%);
}
.mobile .s-reviews-widget {
  font-size: 1rem;
}
<?php }} ?>