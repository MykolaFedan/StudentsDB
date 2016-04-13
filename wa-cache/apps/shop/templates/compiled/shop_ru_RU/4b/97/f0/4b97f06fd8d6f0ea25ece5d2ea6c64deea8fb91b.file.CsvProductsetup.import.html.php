<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 20:18:24
         compiled from "/var/www/test/wa-apps/shop/templates/actions/csv/CsvProductsetup.import.html" */ ?>
<?php /*%%SmartyHeaderCode:813718919570e7f603c7200-37749546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b97f06fd8d6f0ea25ece5d2ea6c64deea8fb91b' => 
    array (
      0 => '/var/www/test/wa-apps/shop/templates/actions/csv/CsvProductsetup.import.html',
      1 => 1460566570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '813718919570e7f603c7200-37749546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'encoding' => 0,
    'enc' => 0,
    'profile' => 0,
    'types' => 0,
    'type_id' => 0,
    'type' => 0,
    'app_path' => 0,
    'app_id' => 0,
    'upload_app' => 0,
    'path' => 0,
    'upload_path' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e7f60436b96_93068579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e7f60436b96_93068579')) {function content_570e7f60436b96_93068579($_smarty_tpl) {?><h1>Импорт товаров из CSV-файла</h1>
<p>
    <?php echo sprintf('Импорт новых и обновление информации о существующих товарах из CSV-файла. CSV-файлы можно создавать и редактировать с помощью электронных табличных редакторов, например, Microsoft Excel, OpenOffice и iWork. Подробное описание структуры CSV-файлов для импорта в Shop-Script читайте в <a href="%s" target="_blank">руководстве</a>.','http://www.shop-script.ru/help/26/import-products-from-csv-file/');?>

    <i class="icon10 new-window"></i>
</p>


<!-- FILE UPLOAD -->
<div class="field-group">
    
    <div class="field">
        <div class="name" id="reset">
           Кількість всіх товарів буде обнулена
        </div>
         
        <div class="value" id="button">
                
                <a href="javascript: void(0);" onclick="reset()" class="button red">Обнулити</a>

            
          </div>
    </div>   
    <div class="field">
        <div class="name">
           Кодировка
        </div>
       
      

        <div class="value">
            <select name="encoding" class="js-ignore-change">
            <?php  $_smarty_tpl->tpl_vars['enc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['enc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encoding']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['enc']->key => $_smarty_tpl->tpl_vars['enc']->value){
$_smarty_tpl->tpl_vars['enc']->_loop = true;
?><option<?php if ($_smarty_tpl->tpl_vars['enc']->value==$_smarty_tpl->tpl_vars['profile']->value['config']['encoding']){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['enc']->value, ENT_QUOTES, 'UTF-8', true);?>
</option><?php } ?>
            </select>
        </div>
    </div>
    <div class="field">
        <div class="name">
           Разделитель данных
        </div>
        <div class="value">

            <select name="delimiter" class="js-ignore-change">
                <option value=";"<?php if ($_smarty_tpl->tpl_vars['profile']->value['config']['delimiter']==';'){?> selected="selected"<?php }?>>Точка с запятой (;)</option>
                <option value=","<?php if ($_smarty_tpl->tpl_vars['profile']->value['config']['delimiter']==','){?> selected="selected"<?php }?>>Запятая (,)</option>
                <option value="tab"<?php if ($_smarty_tpl->tpl_vars['profile']->value['config']['delimiter']=='tab'){?> selected="selected"<?php }?>>Табуляция</option>
            </select>
        </div>
    </div>

    <div class="field">
        <div class="name">
            Файл
        </div>
        <div class="value no-shift">
            <input type="file" name="" class="fileupload">
            <div class="js-fileupload-progress" style="display:none;">
                <i class="icon16 loading"></i><span><!-- upload progress handler --></span>
            </div>
            <span class="errormsg" style="display:none;"><br><br><i class="icon10 no"></i> <span></span></span>

            <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("file-info-template-js", null, null); ob_start(); ?> -->
            {% file=o.file; %}
            <input type="hidden" name="file" value="{%=file.name%}">
            <input type="hidden" name="delimiter" value="{%=file.delimiter%}">
            <i class="icon16 yes"></i>
            <strong{% if(file.name != file.original_name){ %} title="{%=file.name%}"{% } %}>{%=file.original_name%}</strong><br>
            <span class="hint">{% if(file.size != file.original_size){ %}{%=file.original_size%} &rarr; {% } %}{%=file.size%}</span>
            {% if(file.header && false){ %}
            <p><br>В загруженном файле обнаружены следующие столбцы:</p>
            <ul class="menu-h hint">
                {% for (var column in file.header){if(file.header.hasOwnProperty(column)){ %}
                <li title="{%=column%}">{%=file.header[column]%}</li>
                {% }} %}
            </ul>
            {% } %}
            <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->

        </div>
    </div>
</div>


<!-- BASIC SETTINGS AND CSV PREVIEW -->
<div class="field-group" style="display: none;">

    <div class="field" id="s_import_csv_table"><!-- CSV TABLE MAP PLACEHOLDER --></div>
    <div class="field">
        <div class="name">
            Столбец идентификации товаров
        </div>
        <div class="value no-shift">
            <input type="hidden" name="emulate" value="1">
            <select name="primary" class="bold">
                <option value="name">Наименование</option>
                <option value="url">Ссылка</option>
                <option value="null" class="italic">(нет)</option>
            </select>
            &nbsp;
            <span class="s-csv-primary-column-helper"></span>
            <br>
            <span class="hint">Выберите столбец (свойство), значения которого однозначно идентифицируют каждый товар. В зависимости от значений этого столбца процедура импорта либо обновит существующий товар, либо создаст новый.</span>
        </div>
    </div>

    <div class="field">
        <div class="name">
            Столбец идентификации артикулов
        </div>
        <div class="value no-shift">
            <select name="secondary" class="bold">
                <option value="skus:-1:sku">Артикул</option>
                <option value="skus:-1:name">Наименование артикула</option>
            </select>
            &nbsp;
            <span class="s-csv-secondary-column-helper"></span>
            <br>
            <span class="hint">Так же, как и для товаров, выберите столбец (свойство) идентификации артикулов, который уникальным образом отличает каждый артикул. В зависимости от значения в столбце идентификации, указанного в CSV-файле, операция импорта либо обновит существующий артикул, либо создаст новый артикул для данного товара.</span>
        </div>
    </div>
    <div class="field">
        <div class="value">
            <a href="#/csv_product/settings/advanced/" class="js-action inline-link"><b><i>Расширенные настройки</i></b> <i class="icon10 darr"></i></a>
        </div>
    </div>
</div>


<!-- ADVANCED SETTINGS -->
<div class="field-group" style="display: none;">
    <div class="field">
        <div class="value no-shift">
            <label><input type="checkbox" name="ignore_category" value="1" checked="checked"> Игнорировать принадлежность категориям при поиске совпадений товаров (рекомендуется)</label>
            <br>
            <span class="hint">Поиск соответствий товаров в CSV-файле и каталоге магазина будет производиться по всем категориям магазина, а не только внутри категории, заданной для товара в CSV-файле.</span>
        </div>
    </div>

    <div class="field">
        <div class="name">Тип товаров</div>
        <div class="value">
            <select name="type_id">
                <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['type_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['type_id']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
            </select>
            <br>
            <span class="hint">Если тип товаров не задан в отдельной колонке в CSV-файле, то выбранный тип будет применен ко всем новым товарам, созданным в результате импорта.</span>
        </div>
    </div>

    <div class="field">
        <div class="name">Описания товаров</div>
        <div class="value no-shift">
            <label><input type="checkbox" name="nl2br_description" value="1"> Описания без использования HTML</label>
            <p class="hint">Включите, чтобы автоматически добавить форматирование описания товара с помощью тегов &lt;br&gt;.</p>
        </div>
    </div>

    <div class="field">
        <div class="name">Путь к директории с изображениями товаров</div>

        <div class="value">
            <select  name="upload_app">
            <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['app_path']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value){
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['path']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['upload_app']->value==$_smarty_tpl->tpl_vars['app_id']->value){?> selected="selected" <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
            <?php } ?>
            </select>
            <input type="text" class="long" name="upload_path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['upload_path']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="path/to/folder/with/source/images/">
            <br>
            <span class="hint">Если в CSV-файле указаны ссылки на изображения товаров, будет выполнена попытка прикрепить такие изображения к импортируемым товарам. Ссылка на изображение может быть либо глобальной (в виде полного URL), либо локальной (в виде имени файла). Для импорта изображений, для которых указано только имя файла укажите путь к директории, в которую вы загрузили импортируемые изображения. Если изображение с указанным адресом не будет найдено, то оно не будет прикреплено к товару.</span>
        </div>
    </div>

    <div class="field">
        <div class="name">Складские остатки товаров в режиме выбора значений характеристик, указанных в виде <{ … }></div>
        <div class="value no-shift">
            <label>
                <input type="radio" name="virtual_sku_stock" value="distribute" checked="checked"/>
                Поровну разделить складские остатки между всеми артикулами товара
                <br/>
                <span class="hint">(например, если значение 24 указано для товара с 8 артикулами, то для каждого артикула будет импортировано значение, равное 3; общее количество единиц товара на складе будет равно 8 &times; 3 = 24)</span>
            </label>
        </div>
        <div class="value">
            <label>
                <input type="radio" name="virtual_sku_stock" value="set"/>
                Установить указанное значение для всех импортированных артикулов
                <br/>
                <span class="hint">(например, если значение 24 указано для товара с 8 артикулами, то для каждого артикула будет импортировано значение, равное 24; общее количество единиц товара на складе будет равно 8 &times; 24 = 192)</span>
            </label>
        </div>
        <div class="value">
            <label>
                <input type="radio" name="virtual_sku_stock" value=""/>
                Не импортировать складские остатки для таких артикулов
            </label>
        </div>
    </div>

</div>

<div class="field-group" id="s-csvproduct-info" style="display: none;">
    <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("file-header-template-js", null, null); ob_start(); ?> -->
    {% file=o.file; %}
    {% if(file.header){ %}
    <div class="field">
        <div class="name">Список столбцов</div>
        <div class="value"><p class="js-csv-columns-counter bold"><!-- placeholder for column counters --></p></div>
        <div class="value">
            <ul class="menu-h hint s-csv-header" id="s_import_csv_header">
                {% for (var column in file.header){if(file.header.hasOwnProperty(column)){ %}
                <li data-column="{%=column%}" title="{%=$.importexport.csv_product_helper.id2name(column)%}">{%=file.header[column]%}</li>
                {% }} %}
            </ul>
        </div>
    </div>
    {% } %}
    <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->
    <div class="field">
        <div class="value">
            <ol class="s-csv-import-navigator">
                <li data-mode="emulate">Загрузка файла и выбор соответствия столбцов</li>
                <li data-mode="import">Проверка параметров</li>
                <li data-mode="finish">Импорт</li>
            </ol>
        </div>
    </div>
</div>

<div class="field-group" id="s-csvproduct-report" style="display: none;">
    <div class="field">
        <div class="value"></div>
    </div>
</div>

<div class="field-group" id="s-csvproduct-submit" style="display: none;">
    <div class="field">
        <div class="value submit">
            <input data-emulate-class="" data-emulate-value="Проверить параметры импорта" data-import-class="large green" data-import-value="Начать импорт" type="submit" class="button green" value="Проверить параметры импорта">
        </div>

        <div class="js-progressbar-container value" style="display:none;">
            <div class="progressbar blue float-left" style="display: none; width: 70%;">
                <div class="progressbar-outer">
                    <div class="progressbar-inner" style="width: 0;"></div>
                </div>
            </div>
            <img style="float:left; margin-top:8px;" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/loading32.gif" />
            <div class="clear"></div>
                <span class="progressbar-description"></span>
            <br clear="left" />
            <br>
            <span class="small" data-mode="import">
                Не закрывайте браузер и не покидайте эту страницу до окончания импорта.
            </span>
            <span class="small italic" data-mode="emulate">
                Загрузка содержимого файла...
            </span>
        </div>
        <br>
        <br>

        <em class="errormsg"></em>
    </div>
</div>

<div class="clear-left"></div>
<script type="text/javascript">

$.wa.locale = $.extend($.wa.locale, {
    'Collision at rows #':'Совпадение в строках #'
});
</script>
<script type="text/javascript">
    function reset(){
       $.ajax({  
          url: "/bc/product_reset.php",  
          cache: false,  
          success: function(html){  
                        $("#reset").html(html);  
                    }  
            }); 
       
     $( "#button" ).remove();

   }
</script><?php }} ?>