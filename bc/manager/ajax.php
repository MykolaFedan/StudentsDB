<?php
require '../config.php';
require 'lib/lib.php';


switch ($_REQUEST['action']) {
    default:
        die('Error. Undefined variable $_REQUEST[\'action\'].');
        break;

    
    case 'delete_tire':
        $sql = 'DELETE FROM `bc_tires_autos` WHERE `id` = '.$_GET['id'];
        if (db_put($sql)) {
            die('<div class="alert alert-danger">Возникла ошибка во время удаления записи.<br />'.db_error().'</div>');
        }
        $sql = 'DELETE FROM `bc_tires_def_front_tires` WHERE `id_auto` = '.$_GET['id'];
        if (db_put($sql)) {
            die('<div class="alert alert-danger">Возникла ошибка во время удаления записи.<br />'.db_error().'</div>');
        }
        $sql = 'DELETE FROM `bc_tires_def_front_wheels` WHERE `id_auto` = '.$_GET['id'];
        if (db_put($sql)) {
            die('<div class="alert alert-danger">Возникла ошибка во время удаления записи.<br />'.db_error().'</div>');
        }
        $sql = 'DELETE FROM `bc_tires_def_rear_tires` WHERE `id_auto` = '.$_GET['id'];
        if (db_put($sql)) {
            die('<div class="alert alert-danger">Возникла ошибка во время удаления записи.<br />'.db_error().'</div>');
        }
        $sql = 'DELETE FROM `bc_tires_def_rear_wheels` WHERE `id_auto` = '.$_GET['id'];
        if (db_put($sql)) {
            die('<div class="alert alert-danger">Возникла ошибка во время удаления записи.<br />'.db_error().'</div>');
        }
        $sql = 'DELETE FROM `bc_tires_alt_front_tires` WHERE `id_auto` = '.$_GET['id'];
        if (db_put($sql)) {
            die('<div class="alert alert-danger">Возникла ошибка во время удаления записи.<br />'.db_error().'</div>');
        }
        $sql = 'DELETE FROM `bc_tires_alt_front_wheels` WHERE `id_auto` = '.$_GET['id'];
        if (db_put($sql)) {
            die('<div class="alert alert-danger">Возникла ошибка во время удаления записи.<br />'.db_error().'</div>');
        }
        $sql = 'DELETE FROM `bc_tires_alt_rear_tires` WHERE `id_auto` = '.$_GET['id'];
        if (db_put($sql)) {
            die('<div class="alert alert-danger">Возникла ошибка во время удаления записи.<br />'.db_error().'</div>');
        }
        $sql = 'DELETE FROM `bc_tires_alt_rear_wheels` WHERE `id_auto` = '.$_GET['id'];
        if (db_put($sql)) {
            die('<div class="alert alert-danger">Возникла ошибка во время удаления записи.<br />'.db_error().'</div>');
        }
        echo '<div class="alert alert-success">Запись была удалена</div>';
        break;


    case 'get_list_of_auto_brands_tires':
        if (empty($_GET['id_auto_type'])) {
            $_GET['id_auto_type'] = '"%"';
        }   
        create_select($list_of_auto_brands, '
SELECT                                                                                                  
    `bc_tires_auto_brands_dict`.*
FROM
    `bc_tires_autos`, `bc_tires_auto_brands_dict`
WHERE
    `bc_tires_autos`.`id_type_vehicle` = '.$_GET['id_auto_type'].' AND
    `bc_tires_autos`.`id_brand` = `bc_tires_auto_brands_dict`.`id`
GROUP BY
    `bc_tires_auto_brands_dict`.`value`',
    'id_model');
        echo $list_of_auto_brands;
        break;


    case 'get_list_of_auto_models_tires':
        if (empty($_GET['id_auto_brand'])) {
            $_GET['id_auto_brand'] = '"%"';
        }   
        create_select($list_of_auto_models, '
SELECT
    `bc_tires_auto_models_dict`.*
FROM
    `bc_tires_autos`, `bc_tires_auto_models_dict`
WHERE
    `bc_tires_autos`.`id_brand` = '.$_GET['id_auto_brand'].' AND
    `bc_tires_autos`.`id_model` = `bc_tires_auto_models_dict`.`id`
GROUP BY
    `bc_tires_auto_models_dict`.`value`',
    'id_model');
        echo $list_of_auto_models;
        break;


    case 'get_list_of_auto_modifications_tires':
        if (empty($_GET['id_auto_model'])) {
            $_GET['id_auto_model'] = '"%"';
        }
        create_select($list_of_auto_modifications, '
SELECT
    `bc_tires_auto_modifications_dict`.*
FROM
    `bc_tires_autos`, `bc_tires_auto_modifications_dict`
WHERE
    `bc_tires_autos`.`id_brand` = '.$_GET['id_auto_brand'].' AND
    `bc_tires_autos`.`id_model` LIKE '.$_GET['id_auto_model'].' AND
    `bc_tires_autos`.`id_modification` = `bc_tires_auto_modifications_dict`.`id`
GROUP BY
    `bc_tires_auto_modifications_dict`.`value`',
    'id_modification');
        echo $list_of_auto_modifications;
        break;
}
?>
