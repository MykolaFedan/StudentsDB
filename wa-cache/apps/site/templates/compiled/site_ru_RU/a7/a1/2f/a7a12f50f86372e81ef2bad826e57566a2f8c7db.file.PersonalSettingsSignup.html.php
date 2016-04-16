<?php /* Smarty version Smarty-3.1.14, created on 2016-04-14 12:13:33
         compiled from "/var/www/test/wa-apps/site/templates/actions/personal/PersonalSettingsSignup.html" */ ?>
<?php /*%%SmartyHeaderCode:794318277570f5f3dd015f1-77795992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7a12f50f86372e81ef2bad826e57566a2f8c7db' => 
    array (
      0 => '/var/www/test/wa-apps/site/templates/actions/personal/PersonalSettingsSignup.html',
      1 => 1460566766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '794318277570f5f3dd015f1-77795992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'available_fields' => 0,
    'a_field' => 0,
    'enable_fields' => 0,
    'e_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570f5f3ddb6899_96309949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570f5f3ddb6899_96309949')) {function content_570f5f3ddb6899_96309949($_smarty_tpl) {?><style>
    /*
* Form constructor
*/
    .form-constructor .placeholder-col input[type="text"], .placeholder-col textarea {
        color: #888;
    }
    .form-constructor {
        padding: 3px;
        vertical-align: top;
    }
    .form-constructor .show-when-disabled {
        display: block;
    }
    .form-constructor .show-when-enabled {
        display: block;
    }
    /*
    * ---Form constructor
    */

    /*
    * Form constructor preview---
    */
    .form-constructor-preview {
        padding: 15px 30px;
        border: 1px solid #ccc;
        background: #f7f7f7;
        display: inline-block;
        min-width: 300px;
    }
    .form-constructor-fields {
        display: inline-block;
        margin-right: 30px;
        vertical-align: top;
    }
    .form-constructor-preview .icon16 {
        cursor: pointer;
        margin-top: 3px;
        float: left;
    }
    .form-constructor-preview .field .caption {
        /* overflow: hidden; */
        padding-bottom: 2px;
        width: 105px;
    }
    .form-constructor-preview .field .value { margin-left: 140px; }
    .form-constructor-preview .field .value input { min-width: 100px; }
    .form-constructor-preview .field .caption.none {
        max-width: 10%;
    }
    .form-constructor-preview .field .caption.none label {
        max-width: 80%;
    }
    .form-constructor-preview .field .caption.left {
        max-width: 48%;
    }
    .form-constructor-preview .field .caption.above {
        max-width: 100%;
    }
    .form-constructor-preview label {

    }
    .form-constructor-preview .checkbox label {
        white-space: normal;
        margin-bottom: 5px;
    }
    .form-constructor-preview .editable-wrapper{
        position: relative;
    }
    .form-constructor-preview .edit {
        margin: 0;
        margin-top: 4px;
        position: absolute;
        left: -14px;
        cursor:pointer;
    }
    .form-constructor-preview .editable_el {
        display: inline-block;
        margin-top: 0;
        min-width: 0;
        cursor: pointer;
    }
    .form-constructor-preview .editable_el.hidden {
        display: none;
    }
    .form-constructor-preview .editable_text {
        line-height: 18px;
        white-space: normal;
        border: 1px dashed #ccc;
        width: 100%;
        
    }
    .form-constructor-preview .editable_el:hover {
        border: dashed #0000ff 1px;
    }
    .form-constructor-preview .editable_button {
        line-height: normal;
        border: 2px outset buttonface;
    }
    .form-constructor-preview .editable_button:hover {
        border: dashed #0000ff 1px;
        background: none;
    }
    .form-constructor-preview .fill {
        min-width: 0 !important;
        width: 100% !important;
    }
    .form-constructor-preview .placeholder_input {
        color: #888;
    }
    .form-constructor-preview .placeholder_input:focus {
        color: #000;
    }
    .form-constructor-preview .wa-captcha p {
        margin-bottom: 0;
    }
    .form-constructor-preview .wa-captcha-refresh {
        /*display: none;*/
        margin-bottom: 10px;
    }
    .form-constructor-preview .wa-captcha .wa-captcha-refresh {
        display: inline-block;
        clear: left;
        font-size: 0.8em;
        text-decoration: underline;
        color: #aaa;
    }
    .form-constructor-preview .wa-captcha .wa-captcha-input {
        min-width: 58px !important;
        width: 58px !important;
        position: relative;
        top: -17px;
    }
    .form-constructor-preview .wa-captcha strong {
        position: relative;
        top: -16px;
    }
    .constructor-width {
        margin-top: 10px;
        border-left: 2px solid #333;
        border-right: 2px solid #333;
        position: relative;
    }
    .constructor-width input {
        width: 30px !important;
        text-align: center;
        min-width: 20px !important;
        margin: 0 auto !important;
        position: relative;
        top: 10px;
        z-index: 2;
        display: block;
    }
    .constructor-width hr {
        position: absolute;
        width: 100%;
        top: 50%;
        z-index: 0;
    }
    .constructor-width div {
        font-size: 0.8em;
        display: block;
        margin: 10px auto;
        text-align: center;
        position: relative;
        top: 7px;
    }
    /*
    * ---Form constructor preview
    */
</style>

<div>
    <input type="checkbox" id="confirmation-checkbox" name="params[confirm_email]" value="1"<?php if (!empty($_smarty_tpl->tpl_vars['params']->value['confirm_email'])){?> checked<?php }?>>
    <label for="confirmation-checkbox">Подтверждение email-адреса после регистрации</label>
    <p class="hint">Ссылка на подтверждение регистрации будет отправлена пользователю на указанный им email-адрес. Пользователь сможет авторизоваться на сайте только после того, как перейдет по этой ссылке.</p>
</div>
            
    
    

<h5 class="heading">Поля формы регистрации</h5>

<div class="form-constructor" style="white-space:nowrap;">

    <div class="form-constructor-fields s-personal-field-list" data-form-constructor="available-fields">
        <?php  $_smarty_tpl->tpl_vars['a_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a_field']->key => $_smarty_tpl->tpl_vars['a_field']->value){
$_smarty_tpl->tpl_vars['a_field']->_loop = true;
?>
            <label><input type="checkbox" data-fld-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a_field']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['a_field']->value['checked']){?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['a_field']->value['disabled']){?>disabled<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
        <?php } ?>
    </div>

    <div class="form-constructor-preview shadowed" data-form-constructor="preview">
        <div data-form-constructor="enabled-fields">
            <?php  $_smarty_tpl->tpl_vars['e_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enable_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e_field']->key => $_smarty_tpl->tpl_vars['e_field']->value){
$_smarty_tpl->tpl_vars['e_field']->_loop = true;
?>
            <div data-fld-wrapper="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e_field']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="field sortable hidden <?php if ($_smarty_tpl->tpl_vars['e_field']->value['checked']){?>show-when-enabled<?php }?>" style="position: relative">
                <i class="icon16 sort"></i>
                <input type="checkbox" name="fields[<?php echo $_smarty_tpl->tpl_vars['e_field']->value['id'];?>
][required]" <?php if (isset($_smarty_tpl->tpl_vars['e_field']->value['required'])||$_smarty_tpl->tpl_vars['e_field']->value['disabled']){?>checked<?php }?> value="true" style="position: absolute;left: -20px;top: 7px;" <?php if (!$_smarty_tpl->tpl_vars['e_field']->value['checked']||$_smarty_tpl->tpl_vars['e_field']->value['disabled']){?>disabled<?php }?>/>
                <div class="name caption" data-form-constructor="caption">
                <span class="editable-wrapper" title="Редактировать название поля">
                    <label class="editable_el editable_text" data-editable-element="true" data-form-constructor="label"><?php if (isset($_smarty_tpl->tpl_vars['e_field']->value['caption'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e_field']->value['caption'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></label>
                     <input type="text" class="hidden" name="fields[<?php echo $_smarty_tpl->tpl_vars['e_field']->value['id'];?>
][caption]" value="<?php if (isset($_smarty_tpl->tpl_vars['e_field']->value['caption'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e_field']->value['caption'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['e_field']->value['checked']){?>disabled<?php }?>/>
                </span>
                </div>
                <div class="value placeholder" title="Редактировать подсказку к полю" data-form-constructor="placeholder">
                    <input type="text" class="fill placeholder_input" name="fields[<?php echo $_smarty_tpl->tpl_vars['e_field']->value['id'];?>
][placeholder]" value="<?php if (isset($_smarty_tpl->tpl_vars['e_field']->value['placeholder'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e_field']->value['placeholder'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['e_field']->value['checked']){?>disabled<?php }?>/>
                </div>
            </div>
            <?php } ?>
        </div>

        <span class="editable-wrapper">
            <input type="button" class="editable_el editable_button" data-editable-element="true" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['button_caption'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 'Регистрация' : $tmp);?>
" title="Редактировать текст на кнопке"><input type="text" class="hidden" name="params[button_caption]" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['button_caption'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 'Регистрация' : $tmp);?>
"/>
        </span>

    </div>

</div>



<script>
    (function(){
        (function($) {
            $.fn.toggleDisabled = function(){
                return this.each(function(){
                    this.disabled = !this.disabled;
                });
            };
        })(jQuery);

//    $form.on('click', '#confirmation-checkbox', function(e) {
//        var $confirmation_inputs = $form.find('.email-template-editor :input');
//        if ($(this).is(':checked')) {
//            $form.find('.confirm_mail').removeClass('hidden');
//            $confirmation_inputs.prop('disabled', false);
//        } else {
//            $form.find('.confirm_mail').addClass('hidden');
//            $confirmation_inputs.prop('disabled', true);
//        }
//    })

//    $form.find('.variables-link-wrapper').on('click', 'a', function(e){
//        e.preventDefault();
//        $form.find('.variables-wrapper').slideToggle(100);
//    });

        // Sort fields

        function initSortable()
        {
            var context = $('[data-form-constructor="enabled-fields"]');
            context.sortable({
                distance: 5,
                helper: 'clone',
                items: '.field.sortable',
                opacity: 0.75,
                handle: '.sort',
                tolerance: 'pointer',
                containment: context,
                update: function(event, ui) {

                }
            });
        }

        initSortable();

        /*** Form constructor ***/

        var editableForm = function($el, initial_position) {
            var $preview                    = $el.find('[data-form-constructor="preview"]'),
                    $form_width                 = $el.find('[data-form-constructor="form-width"]'),
                    $available_fields           = $el.find('[data-form-constructor="available-fields"]'),
                    $caption_place              = $el.find('[data-form-constructor="caption-place"]'),
                    $editable_inputs            = $el.find('[data-editable-element="true"]'),
                    delay                       = 100;


            // Makes labels editable
            var editableInput = function (el) {
                var $el = $(el),
                        $input = $el.next(),
                        $icon = $el.prev();

                var switchEls = function(){
                    $el.addClass('hidden');
                    $input.removeClass('hidden').focus();
                    $el.parents('.caption.left').width('48%')
                            .siblings('.placeholder').css('margin-left', '50%');
                };

                $el.on('click', function(e){
                    switchEls();
                });

                $icon.on('click', function(){
                    switchEls();
                });

                $input.on('blur', function(){
                    $input.addClass('hidden');
                    if ($el.hasClass('editable_button')) {
                        $el.val($input.val()).removeClass('hidden');
                    } else {
                        $el.text($input.val()).removeClass('hidden');
                    }
                });

                $input.on('keydown', function(e){
                    var code = e.keyCode || e.which;

                    switch (code) {
                        case 13: //on enter, esc
                        case 27:
                            $(this).trigger('blur');
                            return;
                        default:
                            break;
                    }
                });
            };

            // Switch fields in form constructor
            $available_fields.on('change', 'input', function () {
                var type = $(this).data('fld-id');
                $('[data-fld-wrapper="'+type+'"]').toggleClass('show-when-enabled')
                        .find(':input')
                        .toggleDisabled();
            });

            // On first page load
            var init = function() {
                $editable_inputs.each(function(i,el) {
                    new editableInput(el);
                });
            };

            init();
        }

        new editableForm($('.form-constructor'));

    }());
</script><?php }} ?>