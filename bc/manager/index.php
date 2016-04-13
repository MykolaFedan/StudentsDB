<?php
include '../config.php';
include 'lib/lib.php';

$tr_list_of_auto_types = array(
    '>passanger<'   => '>Легковое ТС<',
    '>moto<'        => '>Мото техника<',
    '>special<'     => '>Спец./Индуст. ТС<',
    '>truck<'       => '>Грузовое ТС<',
);
$tr_list_of_fastener_types = array(
    '>Bolt<'    => '>Болт<',
    '>Nut<'     => '>Гайка<'
);


if (!isset($_SESSION['auto_brand_id'])) {
    $_SESSION['auto_brand_id'] = '1';
    $_SESSION['auto_model_id'] = '1';
}
if (isset($_GET['auto_brand_id'])) {
    $_SESSION['auto_brand_id'] = $_GET['auto_brand_id'];
}
if (isset($_GET['auto_model_id'])) {
    $_SESSION['auto_model_id'] = $_GET['auto_model_id'];
}



create_select($list_of_auto_types, 'SELECT * FROM `bc_tires_auto_type_vehicles_dict` ORDER BY `value`', 'id_type',
        'onchange="$.get(\'ajax.php?action=get_list_of_auto_brands_tires&id_auto_type=\'+this.value, function(data) { if($(\'#id_brand\').val() == \'0\'){ $(\'#id_brand\').html(data); $(\'#id_brand\').trigger(\'chosen:updated\'); } });"');
create_select($list_of_auto_brands, 'SELECT * FROM `bc_tires_auto_brands_dict` ORDER BY `value`', 'id_brand',
    'onchange="$.get(\'ajax.php?action=get_list_of_auto_models_tires&id_auto_brand=\'+this.value, function(data) { if($(\'#id_model\').val() == \'0\'){ $(\'#id_model\').html(data); $(\'#id_model\').trigger(\'chosen:updated\'); } });"');
if (isset($_REQUEST['id'])) {
    create_select($list_of_auto_models, '
SELECT
    `bc_tires_auto_models_dict`.*
FROM `bc_tires_autos`
JOIN `bc_tires_auto_models_dict`
    ON `bc_tires_autos`.`id_model` = `bc_tires_auto_models_dict`.`id`
WHERE `bc_tires_autos`.`id_brand` = 
    (SELECT `bc_tires_auto_brands_dict`.`id` FROM `bc_tires_autos` JOIN `bc_tires_auto_brands_dict` ON `bc_tires_autos`.`id_brand` = `bc_tires_auto_brands_dict`.`id` WHERE `bc_tires_autos`.`id` = '.$_REQUEST['id'].')
GROUP BY
    `value`', 'id_model',
    'onchange="$.get(\'ajax.php?action=get_list_of_auto_modifications_tires&id_auto_brand=\'+$(\'#id_brand\').val()+\'&id_auto_model=\'+this.value, function(data) { if($(\'#id_modification\').val() == \'0\'){ $(\'#id_modification\').html(data); $(\'#id_modification\').trigger(\'chosen:updated\'); } });"');
} else {
    create_select($list_of_auto_models, 'SELECT * FROM `bc_tires_auto_models_dict` ORDER BY `value`', 'id_model',
    'onchange="$.get(\'ajax.php?action=get_list_of_auto_modifications_tires&id_auto_brand=\'+$(\'#id_brand\').val()+\'&id_auto_model=\'+this.value, function(data) { if($(\'#id_modification\').val() == \'0\'){ $(\'#id_modification\').html(data); $(\'#id_modification\').trigger(\'chosen:updated\'); } });"');
}

if (isset($_REQUEST['id'])) {
    create_select($list_of_auto_modifications, '
SELECT
    `bc_tires_auto_modifications_dict`.*
FROM `bc_tires_autos`
JOIN `bc_tires_auto_modifications_dict`
    ON `bc_tires_autos`.`id_modification` = `bc_tires_auto_modifications_dict`.`id`
WHERE `bc_tires_autos`.`id_model` = 
    (SELECT `bc_tires_auto_models_dict`.`id` FROM `bc_tires_auto_models_dict` JOIN `bc_tires_autos` ON `bc_tires_autos`.`id_model` = `bc_tires_auto_models_dict`.`id` WHERE `bc_tires_autos`.`id` = '.$_REQUEST['id'].')
GROUP BY
    `value`', 'id_modification');
} else {
    create_select($list_of_auto_modifications, 'SELECT * FROM `bc_tires_auto_modifications_dict` ORDER BY `value`', 'id_modification');
}
create_select($list_of_auto_years, 'SELECT * FROM `bc_tires_auto_years_dict` ORDER BY `value` DESC', 'id_year');
create_select($list_of_tire_load_indexes, 'SELECT * FROM `bc_tires_tire_load_indexes_dict` ORDER BY `value`', 'id_tire_load_index');
create_select($list_of_tire_speed_indexes, 'SELECT * FROM `bc_tires_tire_speed_indexes_dict` ORDER BY `value`', 'id_tire_speed_index');
create_select($list_of_tire_sizes, $sql_get_list_of_tire_sizes, 'id_tire_size');
create_select($list_of_wheel_dias, 'SELECT * FROM `bc_tires_wheel_dias_dict` ORDER BY `value`', 'id_wheel_dia');
create_select($list_of_wheel_pcds, $sql_get_list_of_pcd, 'id_wheel_pcd');
create_select($list_of_wheel_fastener_sizes, 'SELECT * FROM `bc_tires_wheel_fastener_sizes_dict` ORDER BY `value`', 'id_wheel_fastener_size');
create_select($list_of_wheel_fastener_types, 'SELECT * FROM `bc_tires_wheel_fastener_types_dict` ORDER BY `value`', 'id_wheel_fastener_type');
create_select($list_of_wheel_sizes, $sql_get_list_of_wheel_sizes, 'id_wheel_size');



if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'show_table';
}
$message = '';
switch($_REQUEST['action']){
    case 'copy':
        $list_of_autos = array();
        // Get id year by send year value.
        $sql = 'SELECT * FROM `bc_tires_auto_years_dict`';
        if (db_get($list_of_years, $sql)) {
            $message = '<div class="alert alert-danger">Возникла ошибка во время копирования записи.<br />'.db_error().'</div>';
            break;
        }
        foreach ($list_of_years as $temp_year) {
            if ($_GET['year'] == $temp_year['value']) {
                $id_year = $temp_year['id'];
                break;
            }
        }
        if (!isset($id_year)) {
            $messgae = '<div class="alert alert-danger">Ошибка. Год задан не верно.</div>';
            break;
        }

        // Create new record in table `bc_tires_autos`.
        $sql ='
INSERT INTO `bc_tires_autos`
    (`id_type_vehicle`, `id_brand`, `id_model`, `id_year`, `id_modification`, `id_wheel_pcd`, `id_wheel_dia`, `id_wheel_fastener_size`, `id_wheel_fastener_type`, `id_tire_speed_index`, `id_tire_load_index`)
SELECT
    `id_type_vehicle`, `id_brand`, `id_model`, '.$id_year.', `id_modification`, `id_wheel_pcd`, `id_wheel_dia`, `id_wheel_fastener_size`, `id_wheel_fastener_type`, `id_tire_speed_index`, `id_tire_load_index`
FROM `bc_tires_autos`
WHERE `id` = '.$_GET['id'];
        if (db_put($sql)) {
            $message = '<div class="alert alert-danger">Возникла ошибка во время копирования записи.<br />'.db_error().'</div>';
            break;
        }
        db_last_id($id_auto);

        $bc_tires_def_front_tires = get_axle_info('bc_tires_def_front_tires', $_GET['id']);
        $bc_tires_def_front_wheels = get_axle_info('bc_tires_def_front_wheels', $_GET['id']);
        $bc_tires_def_rear_tires = get_axle_info('bc_tires_def_rear_tires', $_GET['id']);
        $bc_tires_def_rear_wheels = get_axle_info('bc_tires_def_rear_wheels', $_GET['id']);
        $bc_tires_alt_front_tires = get_axle_info('bc_tires_alt_front_tires', $_GET['id']);
        $bc_tires_alt_front_wheels = get_axle_info('bc_tires_alt_front_wheels', $_GET['id']);
        $bc_tires_alt_rear_tires = get_axle_info('bc_tires_alt_rear_tires', $_GET['id']);
        $bc_tires_alt_rear_wheels = get_axle_info('bc_tires_alt_rear_wheels', $_GET['id']);

        insert_axle('bc_tires_def_front_tires', 'id_tire_size', $bc_tires_def_front_tires, $id_auto);
        insert_axle('bc_tires_def_front_wheels', 'id_wheel_size', $bc_tires_def_front_wheels, $id_auto);
        insert_axle('bc_tires_def_rear_tires', 'id_tire_size', $bc_tires_def_rear_tires, $id_auto);
        insert_axle('bc_tires_def_rear_wheels', 'id_wheel_size', $bc_tires_def_rear_wheels, $id_auto);
        insert_axle('bc_tires_alt_front_tires', 'id_tire_size', $bc_tires_alt_front_tires, $id_auto);
        insert_axle('bc_tires_alt_front_wheels', 'id_wheel_size', $bc_tires_alt_front_wheels, $id_auto);
        insert_axle('bc_tires_alt_rear_tires', 'id_tire_size', $bc_tires_alt_rear_tires, $id_auto);
        insert_axle('bc_tires_alt_rear_wheels', 'id_wheel_size', $bc_tires_alt_rear_wheels, $id_auto);

        $message = '<div class="alert alert-success">Запись была скопирована.<br /><a href="index.php?action=update&id='.$id_auto.'">Редактировать запись</a></div>';
        // There is no break.


    case 'show_table':
        $list_of_autos = get_tire_auto_info($_SESSION['auto_brand_id'], $_SESSION['auto_model_id']);
            
        $sql = 'SELECT * FROM `bc_tires_auto_brands_dict` ORDER BY `value`';
        if (db_get($list_of_auto_brands, $sql)) {
            die(db_error());
        }   
            
        $sql = 'SELECT `bc_tires_auto_models_dict`.* FROM `bc_tires_autos`, `bc_tires_auto_models_dict` WHERE `bc_tires_autos`.`id_brand` = '.$_SESSION['auto_brand_id'].' AND `bc_tires_autos`.`id_model` = `bc_tires_auto_models_dict`.`id` GROUP BY `bc_tires_auto_models_dict`.`value`';
        if (db_get($list_of_auto_models, $sql)) {
            die(db_error());
        }
        break;



    case 'insert':
        if (!isset($_POST['id_type'])) {
            break;
        }
        $sql = '
INSERT INTO `bc_tires_autos` SET
    `id_type_vehicle` = "'.$_POST['id_type'].'",
    `id_brand` = "'.$_POST['id_brand'].'",
    `id_model` = "'.$_POST['id_model'].'",
    `id_year` = "'.$_POST['id_year'].'",
    `id_modification` = "'.$_POST['id_modification'].'",
    `id_wheel_pcd` = "'.$_POST['id_wheel_pcd'].'",
    `id_wheel_dia` = "'.$_POST['id_wheel_dia'].'",
    `id_wheel_fastener_size` = "'.$_POST['id_wheel_fastener_size'].'",
    `id_wheel_fastener_type` = "'.$_POST['id_wheel_fastener_type'].'",
    `id_tire_speed_index` = "'.$_POST['id_tire_speed_index'].'",
    `id_tire_load_index` = "'.$_POST['id_tire_load_index'].'"';
        if (db_put($sql)) {
            $message = '<div class="alert alert-danger">Возникла ошибка во время добавления записи.<br />'.db_error().'</div>';
            break;
        } else {
            $message = '<div class="alert alert-success">Запись была добавлена</div>';
        }
        db_last_id($id_auto);
        
        $list_of_sizes = array($_POST['def_front_axle_tire'], $_POST['def_rear_axle_tire'], $_POST['def_front_axle_wheel'], $_POST['def_rear_axle_wheel'], $_POST['alt_front_axle_tire'], $_POST['alt_rear_axle_tire'], $_POST['alt_front_axle_wheel'], $_POST['alt_rear_axle_wheel']);
        update_axles($list_of_sizes, $id_auto);

        /*
        insert_axle('bc_tires_def_front_tires', 'id_tire_size', $_POST['def_front_axle_tire'], $id_auto);
        insert_axle('bc_tires_def_rear_tires', 'id_tire_size', $_POST['def_rear_axle_tire'], $id_auto);
        insert_axle('bc_tires_def_front_wheels', 'id_wheel_size', $_POST['def_front_axle_wheel'], $id_auto);
        insert_axle('bc_tires_def_rear_wheels', 'id_wheel_size', $_POST['def_rear_axle_wheel'], $id_auto);
        insert_axle('bc_tires_alt_front_tires', 'id_tire_size', $_POST['alt_front_axle_tire'], $id_auto);
        insert_axle('bc_tires_alt_rear_tires', 'id_tire_size', $_POST['alt_rear_axle_tire'], $id_auto);
        insert_axle('bc_tires_alt_front_wheels', 'id_wheel_size', $_POST['alt_front_axle_wheel'], $id_auto);
        insert_axle('bc_tires_alt_rear_wheels', 'id_wheel_size', $_POST['alt_rear_axle_wheel'], $id_auto);
        */
        break;


    case 'update':
        if (isset($_POST['id_type'])) {
            $sql = '
UPDATE `bc_tires_autos` SET
    `id_type_vehicle` = "'.$_POST['id_type'].'",
    `id_brand` = "'.$_POST['id_brand'].'",
    `id_model` = "'.$_POST['id_model'].'",
    `id_year` = "'.$_POST['id_year'].'",
    `id_modification` = "'.$_POST['id_modification'].'",
    `id_wheel_pcd` = "'.$_POST['id_wheel_pcd'].'",
    `id_wheel_dia` = "'.$_POST['id_wheel_dia'].'",
    `id_wheel_fastener_size` = "'.$_POST['id_wheel_fastener_size'].'",
    `id_wheel_fastener_type` = "'.$_POST['id_wheel_fastener_type'].'",
    `id_tire_speed_index` = "'.$_POST['id_tire_speed_index'].'",
    `id_tire_load_index` = "'.$_POST['id_tire_load_index'].'"
WHERE
    `id` = "'.$_POST['id_auto'].'"';
            if (db_put($sql)) {
                $message = '<div class="alert alert-danger">Возникла ошибка во время обновления записи.<br />'.db_error().'</div>';
                break;
            } else {
                $message = '<div class="alert alert-success">Запись была обновлена</div>';
            }
            $list_of_sizes = array($_POST['def_front_axle_tire'], $_POST['def_rear_axle_tire'], $_POST['def_front_axle_wheel'], $_POST['def_rear_axle_wheel'], $_POST['alt_front_axle_tire'], $_POST['alt_rear_axle_tire'], $_POST['alt_front_axle_wheel'], $_POST['alt_rear_axle_wheel']);
            update_axles($list_of_sizes, $_POST['id_auto']);
        }


update_select_auto_info:
        if (db_get($selected_auto, $sql_get_auto_info)) {
            die(db_error());
        }
        $selected_auto = $selected_auto[0];
        
        $selected_def_front_axle_tires = get_axle_info('bc_tires_def_front_tires', $_GET['id']);
        $selected_def_front_axle_wheels = get_axle_info('bc_tires_def_front_wheels', $_GET['id']);
        $selected_def_rear_axle_tires = get_axle_info('bc_tires_def_rear_tires', $_GET['id']);
        $selected_def_rear_axle_wheels = get_axle_info('bc_tires_def_rear_wheels', $_GET['id']);
        $selected_alt_front_axle_tires = get_axle_info('bc_tires_alt_front_tires', $_GET['id']);
        $selected_alt_front_axle_wheels = get_axle_info('bc_tires_alt_front_wheels', $_GET['id']);
        $selected_alt_rear_axle_tires = get_axle_info('bc_tires_alt_rear_tires', $_GET['id']);
        $selected_alt_rear_axle_wheels = get_axle_info('bc_tires_alt_rear_wheels', $_GET['id']);
        break;


    case 'update_range':
        if ($_POST['id_type'] == 0) {
            $_POST['id_type'] = '%';                                                     
        }
        // Brand skip for security.
        //if ($_POST['id_brand'] == 0) {
        //    $_POST['id_brand'] = '%';
        //}
        if ($_POST['id_model'] == 0) {
            $_POST['id_model'] = '%';
        }
        if ($_POST['id_modification'] == 0) {
            $_POST['id_modification'] = '%';
        }
        if ($_POST['id_year'] == 0) {
            $_POST['id_year'] = '%';
        }
        $sql = '
UPDATE `bc_tires_autos` SET
    `id_wheel_pcd` = '.$_POST['id_wheel_pcd'].',
    `id_wheel_dia` = '.$_POST['id_wheel_dia'].',
    `id_wheel_fastener_size` = '.$_POST['id_wheel_fastener_size'].',
    `id_wheel_fastener_type` = '.$_POST['id_wheel_fastener_type'].',
    `id_tire_speed_index` = '.$_POST['id_tire_speed_index'].',
    `id_tire_load_index` = '.$_POST['id_tire_load_index'].'
WHERE
    `id_type_vehicle` LIKE "'.$_POST['id_type'].'" AND
    `id_brand` LIKE "'.$_POST['id_brand'].'" AND
    `id_model` LIKE "'.$_POST['id_model'].'" AND
    `id_year` LIKE "'.$_POST['id_year'].'" AND
    `id_modification` LIKE "'.$_POST['id_modification'].'"';
        if (db_put($sql)) {
            echo $message = '<div class="alert alert-danger">Возникла ошибка во время обновления записи.<br />'.db_error().'</div>';
            break;
        }
        
        // Update axles.
        $sql = 'SELECT * FROM `bc_tires_autos` WHERE
            `id_type_vehicle` LIKE "'.$_POST['id_type'].'" AND
            `id_brand` LIKE "'.$_POST['id_brand'].'" AND
            `id_model` LIKE "'.$_POST['id_model'].'" AND
            `id_year` LIKE "'.$_POST['id_year'].'" AND
            `id_modification` LIKE "'.$_POST['id_modification'].'"';
        if (db_get($list_of_autos, $sql)) {
            die('<div class="alert alert-danger">'.db_error().'</div>');
        }
        if (is_array($list_of_autos)) {
            foreach($list_of_autos as $auto){
                $list_of_sizes = array($_POST['def_front_axle_tire'], $_POST['def_rear_axle_tire'], $_POST['def_front_axle_wheel'], $_POST['def_rear_axle_wheel'], $_POST['alt_front_axle_tire'], $_POST['alt_rear_axle_tire'], $_POST['alt_front_axle_wheel'], $_POST['alt_rear_axle_wheel']);
                update_axles($list_of_sizes, $auto['id']);
            }
        }
        
        // Show info.
        $message = '<div class="alert alert-success">Диапазон был обновлен.</div>';
        $_REQUEST['action'] = 'update';
        $_GET['id'] = $_POST['id_auto'];
        goto update_select_auto_info;
        break;
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Панель администратора</title>
    <link href="styles.css" rel="stylesheet" />
    <script type="text/javascript" src="javascript.js"></script>
    <script type="text/javascript" src="lib/jquery.js"></script>
    <link rel="icon" type="image/png" href="favicon.ico" />
    
    <!-- Include Chusen select element -->
    <script src="lib/chosen/chosen.jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="lib/chosen/chosen.css">
    <script>
        $(document).ready(function() { $('select').chosen(); });
    </script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container gap-lg">

<?php
switch($_REQUEST['action']){
    case 'show_table':
    case 'copy':
?>
<div class="row">
    <div class="col-xs-4 col-xs-offset-2">
        <form id="search_autos">
            <input type="hidden" name="action" value="show_table" />
            <select name="auto_brand_id" onchange="$.get('ajax.php?action=get_list_of_auto_models_tires&id_auto_brand='+this.value, function(contents) { $('#auto_model_id').html(contents); $('#auto_model_id').trigger('chosen:updated');});">
                <option value="%">Бренд</option>
                <?php
                foreach ($list_of_auto_brands as $brand) {
                    echo '<option value="'.$brand['id'].'" '.(($brand['id']==$_SESSION['auto_brand_id'])?'selected':'').'>'.$brand['value'].'</option>';
                }
                ?>
            </select>
            <select name="auto_model_id" id="auto_model_id" onchange="$('#search_autos').submit();" style="width: 150px;">
                <option value="%">Модель</option>
                <?php
                foreach ($list_of_auto_models as $model) {
                    echo '<option value="'.$model['id'].'" '.(($model['id']==$_SESSION['auto_model_id'])?'selected':'').'>'.$model['value'].'</option>';
                }
                ?>
            </select>
        </form>
    </div>
    <div class="col-xs-3 col-xs-offset-1">
        <a href="?action=insert" class="btn btn-primary">Добавить запись</a>
        <a href="lib/crud/index.php/main/bc_tires_autos" class="btn btn-primary" target="_blank">Словари</a>
    </div>
</div>

<div class="row gap-lg">
    <div class="col-xs-4 col-xs-offset-4">
        <div class="gap-md" id="message"><?php echo $message; ?></div>
    </div>
</div>

<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <table class="table table-hover table-striped" id="list_of_autos">
        <thead>
            <tr>
                <th></th>
                <th>Марка</th>
                <th>Модель</th>
                <th>Модификация</th>
                <th>Год</th>
            </tr>
        </thead>
<?php
        foreach ($list_of_autos as $auto) {
            echo '
<tr id="tr_'.$auto['id'].'">
    <td>
        <a href="?action=update&id='.$auto['id'].'" title="Редактировать"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
        <a href="javascript: void(0);" onclick="delete_tire('.$auto['id'].')" title="Удалить"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;&nbsp;
        <a href="?action=copy&id='.$auto['id'].'&year='.($auto['value_year']+1).'" title="Копировать"><span class="glyphicon glyphicon-copy"></span></a>&nbsp;&nbsp;
    </td>
    <td>'.$auto['value_brand'].'</td>
    <td>'.$auto['value_model'].'</td>
    <td>'.$auto['value_modification'].' </td>
    <td>'.$auto['value_year'].'</td>
</tr>';
        }
        echo '</table></div></div>';
        break;


    case 'insert':
?>
<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <h1>Добавить новую запись</h1>
        <a href="index.php">Вернуться к списку</a>
        <div class="gap-md"><?php echo $message; ?></div>
    </div>
</div>

<form method="post" class="gap-lg" action="?">
<input type="hidden" name="action" value="insert" />

<div class="row">
    <div class="col-xs-4 col-xs-offset-2">
        <table class="table">
            <tr>
                <td>Тип</td>
                <td><?php echo strtr($list_of_auto_types, $tr_list_of_auto_types); ?></td>
            </tr>
            <tr>
                <td>Марка</td>
                <td><?php echo $list_of_auto_brands; ?></td>
            </tr>
            <tr>
                <td>Модель</td>
                <td><?php echo $list_of_auto_models; ?></td>
            </tr>
            <tr>
                <td>Модификация</td>
                <td><?php echo $list_of_auto_modifications; ?></td>
            </tr>
            <tr>
                <td>Год выпуска</td>
                <td><?php echo $list_of_auto_years; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-xs-4">
        <table class="table">
            <tr>
                <td>Индекс нагрузки</td>
                <td><?php echo $list_of_tire_load_indexes; ?></td>
            </tr>
            <tr>
                <td>Индекс скорости</td>
                <td><?php echo $list_of_tire_speed_indexes; ?></td>
            </tr>
            <tr>
                <td>Dia</td>
                <td><?php echo $list_of_wheel_dias; ?></td>
            </tr>
            <tr>
                <td>PCD</td>
                <td><?php echo $list_of_wheel_pcds; ?></td>
            </tr>
            <tr>
                <td>Размер крепежа</td>
                <td><?php echo $list_of_wheel_fastener_sizes; ?></td>
            </tr>
            <tr>
                <td>Тип крепежа</td>
                <td><?php echo strtr($list_of_wheel_fastener_types, $tr_list_of_fastener_types); ?></td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <h3>Заводские размеры шин и дисков</h3>
        <table class="table">
            <thead>
            <tr>
                <th>Перед. ось шины</th>
                <th>Зад. ось шины</th>
                <th>Перед. ось диски</th>
                <th>Зад. ось диски</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo change_name_select($list_of_tire_sizes, 'def_front_axle_tire[0]'); ?></td>
                <td><?php echo change_name_select($list_of_tire_sizes, 'def_rear_axle_tire[0]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'def_front_axle_wheel[0]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'def_rear_axle_wheel[0]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select($list_of_tire_sizes, 'def_front_axle_tire[1]'); ?></td>
                <td><?php echo change_name_select($list_of_tire_sizes, 'def_rear_axle_tire[1]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'def_front_axle_wheel[1]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'def_rear_axle_wheel[1]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select($list_of_tire_sizes, 'def_front_axle_tire[2]'); ?></td>
                <td><?php echo change_name_select($list_of_tire_sizes, 'def_rear_axle_tire[2]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'def_front_axle_wheel[2]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'def_rear_axle_wheel[2]'); ?></td>
            </tr>
            </tbody>
        </table>

        <h3>Альтернативные размеры шин и дисков</h3>
        <table class="table">
            <thead>
            <tr>
                <th>Перед. ось шины</th>
                <th>Зад. ось шины</th>
                <th>Перед. ось диски</th>
                <th>Зад. ось диски</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_front_axle_tire[0]'); ?></td>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_rear_axle_tire[0]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_front_axle_wheel[0]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_rear_axle_wheel[0]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_front_axle_tire[1]'); ?></td>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_rear_axle_tire[1]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_front_axle_wheel[1]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_rear_axle_wheel[1]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_front_axle_tire[2]'); ?></td>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_rear_axle_tire[2]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_front_axle_wheel[2]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_rear_axle_wheel[2]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_front_axle_tire[3]'); ?></td>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_rear_axle_tire[3]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_front_axle_wheel[3]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_rear_axle_wheel[3]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_front_axle_tire[4]'); ?></td>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_rear_axle_tire[4]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_front_axle_wheel[4]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_rear_axle_wheel[4]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_front_axle_tire[5]'); ?></td>
                <td><?php echo change_name_select($list_of_tire_sizes, 'alt_rear_axle_tire[5]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_front_axle_wheel[5]'); ?></td>
                <td><?php echo change_name_select($list_of_wheel_sizes, 'alt_rear_axle_wheel[5]'); ?></td>
            </tr>
            </tbody>
        </table>

        <input type="submit" value="Добавить новую запись" class="btn btn-primary" />
        <input type="button" onclick="copy_tire_selects()" class="btn btn-primary" value="Скопировать селекты" />
        </form>
    </div>
</div>
<?php
        break;


    case 'update':
?>
<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <h1>Обновить запись</h1>
        <a href="index.php">Вернуться к списку</a>
        <div class="gap-md"><?php echo $message; ?></div>
    </div>
</div>

<form method="post" id="form_update" action="index.php" class="gap-lg">
<input type="hidden" id="action" name="action" value="update" />
<input type="hidden" id="id_auto" name="id_auto" value="<?php echo $_REQUEST['id']; ?>" />
<input type="hidden" id="id" name="id" value="<?php echo $_REQUEST['id']; ?>" />

<div class="row">
    <div class="col-xs-4 col-xs-offset-2">
        <table class="table">
            <tr>
                <td>Тип</td>
                <td><?php echo strtr(selected($list_of_auto_types, $selected_auto['id_type']), $tr_list_of_auto_types); ?></td>
            </tr>
            <tr>
                <td>Марка</td>
                <td><?php echo selected($list_of_auto_brands, $selected_auto['id_brand']); ?></td>
            </tr>
            <tr>
                <td>Модель</td>
                <td><?php echo selected($list_of_auto_models, $selected_auto['id_model']); ?></td>
            </tr>
            <tr>
                <td>Модификация</td>
                <td><?php echo selected($list_of_auto_modifications, $selected_auto['id_modification']); ?></td>
            </tr>
            <tr>
                <td>Год выпуска</td>
                <td><?php echo selected($list_of_auto_years, $selected_auto['id_year']); ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" class="btn btn-default" onclick="
                        $('#id_year option').prop('selected', false);
                        $('#id_modification option').prop('selected', false);
                        $('select').trigger('chosen:updated');" value="Сброс" />
                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-4">
        <table class="table">
            <tr>
                <td>Индекс нагрузки</td>
                <td><?php echo selected($list_of_tire_load_indexes, $selected_auto['id_tire_load_index']); ?></td>
            </tr>
            <tr>
                <td>Индекс скорости</td>
                <td><?php echo selected($list_of_tire_speed_indexes, $selected_auto['id_tire_speed_index']); ?></td>
            </tr>
            <tr>
                <td>Dia</td>
                <td><?php echo selected($list_of_wheel_dias, $selected_auto['id_wheel_dia']); ?></td>
            </tr>
            <tr>
                <td>PCD</td>
                <td><?php echo selected($list_of_wheel_pcds, $selected_auto['id_wheel_pcd']); ?></td>
            </tr>
            <tr>
                <td>Размер крепежа</td>
                <td><?php echo selected($list_of_wheel_fastener_sizes, $selected_auto['id_wheel_fastener_size']); ?></td>
            </tr>
            <tr>
                <td>Тип крепежа</td>
                <td><?php echo strtr(selected($list_of_wheel_fastener_types, $selected_auto['id_wheel_fastener_type']), $tr_list_of_fastener_types); ?></td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <h3>Заводские размеры шин и дисков</h3>
        <table class="table">
            <thead>
            <tr>
                <th style="width: 300px;">Перед. ось шины</th>
                <th style="width: 300px;">Зад. ось шины</th>
                <th style="width: 300px;">Перед. ось диски</th>
                <th style="width: 300px;">Зад. ось диски</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_def_front_axle_tires[0]['id_tire_size']), 'def_front_axle_tire[0]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_def_rear_axle_tires[0]['id_tire_size']), 'def_rear_axle_tire[0]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_def_front_axle_wheels[0]['id_wheel_size']), 'def_front_axle_wheel[0]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_def_rear_axle_wheels[0]['id_wheel_size']), 'def_rear_axle_wheel[0]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_def_front_axle_tires[1]['id_tire_size']), 'def_front_axle_tire[1]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_def_rear_axle_tires[1]['id_tire_size']), 'def_rear_axle_tire[1]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_def_front_axle_wheels[1]['id_wheel_size']), 'def_front_axle_wheel[1]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_def_rear_axle_wheels[1]['id_wheel_size']), 'def_rear_axle_wheel[1]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_def_front_axle_tires[2]['id_tire_size']), 'def_front_axle_tire[2]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_def_rear_axle_tires[2]['id_tire_size']), 'def_rear_axle_tire[2]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_def_front_axle_wheels[2]['id_wheel_size']), 'def_front_axle_wheel[2]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_def_rear_axle_wheels[2]['id_wheel_size']), 'def_rear_axle_wheel[2]'); ?></td>
            </tr>
            </tbody>
        </table>

        <h3>Альтернативные размеры шин и дисков</h3>
        <table class="table">
            <thead>
            <tr>
                <th>Перед. ось шины</th>
                <th>Зад. ось шины</th>
                <th>Перед. ось диски</th>
                <th>Зад. ось диски</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_front_axle_tires[0]['id_tire_size']), 'alt_front_axle_tire[0]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_rear_axle_tires[0]['id_tire_size']), 'alt_rear_axle_tire[0]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_front_axle_wheels[0]['id_wheel_size']), 'alt_front_axle_wheel[0]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_rear_axle_wheels[0]['id_wheel_size']), 'alt_rear_axle_wheel[0]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_front_axle_tires[1]['id_tire_size']), 'alt_front_axle_tire[1]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_rear_axle_tires[1]['id_tire_size']), 'alt_rear_axle_tire[1]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_front_axle_wheels[1]['id_wheel_size']), 'alt_front_axle_wheel[1]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_rear_axle_wheels[1]['id_wheel_size']), 'alt_rear_axle_wheel[1]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_front_axle_tires[2]['id_tire_size']), 'alt_front_axle_tire[2]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_rear_axle_tires[2]['id_tire_size']), 'alt_rear_axle_tire[2]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_front_axle_wheels[2]['id_wheel_size']), 'alt_front_axle_wheel[2]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_rear_axle_wheels[2]['id_wheel_size']), 'alt_rear_axle_wheel[2]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_front_axle_tires[3]['id_tire_size']), 'alt_front_axle_tire[3]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_rear_axle_tires[3]['id_tire_size']), 'alt_rear_axle_tire[3]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_front_axle_wheels[3]['id_wheel_size']), 'alt_front_axle_wheel[3]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_rear_axle_wheels[3]['id_wheel_size']), 'alt_rear_axle_wheel[3]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_front_axle_tires[4]['id_tire_size']), 'alt_front_axle_tire[4]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_rear_axle_tires[4]['id_tire_size']), 'alt_rear_axle_tire[4]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_front_axle_wheels[4]['id_wheel_size']), 'alt_front_axle_wheel[4]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_rear_axle_wheels[4]['id_wheel_size']), 'alt_rear_axle_wheel[4]'); ?></td>
            </tr>
            <tr>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_front_axle_tires[5]['id_tire_size']), 'alt_front_axle_tire[5]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_tire_sizes, @$selected_alt_rear_axle_tires[5]['id_tire_size']), 'alt_rear_axle_tire[5]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_front_axle_wheels[5]['id_wheel_size']), 'alt_front_axle_wheel[5]'); ?></td>
                <td><?php echo change_name_select(selected($list_of_wheel_sizes, @$selected_alt_rear_axle_wheels[5]['id_wheel_size']), 'alt_rear_axle_wheel[5]'); ?></td>
            </tr>
            </tbody>
        </table>

        <input type="submit" value="Обновить запись" class="btn btn-primary" />
        <input type="button" onclick="copy_tire_selects();" class="btn btn-primary" value="Скопировать селекты" />
        <input type="button" onclick="$('#action').val('update_range'); $('#form_update').submit();" class="btn btn-primary" value="Обновить диапазон" />
        </form>
    </div>
</div>
<?php
        break;
}
?>


<footer class="footer gap-lg">
    <div class="container">
    <div class="col-xs-8 col-xs-offset-2">
        <p class="text-muted"></p>
    </div>
    </div>
</footer>

</div>
</body>
</html>
