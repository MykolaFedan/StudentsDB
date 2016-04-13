<?php
if (isset($_POST['id_auto'])) {
    $_GET['id'] = $_POST['id_auto'];
}


if (defined('DATABASE_NAME')) {
    $db_link = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, '', DATABASE_PORT);

    if (!$db_link) {
        die('Could not connect: '.mysqli_error($db_link));
    }   

    mysqli_set_charset($db_link, 'utf8');
    $db = mysqli_select_db($db_link, DATABASE_NAME);
    if (!$db) {
        die('Could not select db: '.mysqli_error($db_link));
    }

    if (DATABASE_CACHE) {
        mysqli_query($db_link, 'SET SESSION query_cache_type = 1;');
    } else {
        mysqli_query($db_link, 'SET SESSION query_cache_type = 0;');
    }
}


if (isset($_GET['id'])) {
    $sql_get_auto_info = '
SELECT
    `bc_tires_autos`.`id` AS `id`,
    `bc_tires_auto_type_vehicles_dict`.`id` AS `id_type`,
    `bc_tires_auto_brands_dict`.`id` AS `id_brand`,
    `bc_tires_auto_models_dict`.`id` AS `id_model`,
    `bc_tires_auto_years_dict`.`id` AS `id_year`,
    `bc_tires_auto_modifications_dict`.`id` AS `id_modification`,
    `bc_tires_wheel_pcds_dict`.`id` AS `id_wheel_pcd`,
    `bc_tires_wheel_dias_dict`.`id` AS `id_wheel_dia`,
    `bc_tires_wheel_fastener_sizes_dict`.`id` AS `id_wheel_fastener_size`,
    `bc_tires_wheel_fastener_types_dict`.`id` AS `id_wheel_fastener_type`,
    `bc_tires_tire_load_indexes_dict`.`id` AS `id_tire_load_index`,
    `bc_tires_tire_speed_indexes_dict`.`id` AS `id_tire_speed_index`

FROM
    `bc_tires_auto_type_vehicles_dict`,
    `bc_tires_auto_brands_dict`,
    `bc_tires_auto_models_dict`,
    `bc_tires_auto_years_dict`,
    `bc_tires_auto_modifications_dict`,
    `bc_tires_autos`

LEFT JOIN `bc_tires_wheel_pcds_dict`
    ON `bc_tires_autos`.`id_wheel_pcd` = `bc_tires_wheel_pcds_dict`.`id`
LEFT JOIN `bc_tires_wheel_dias_dict`
    ON `bc_tires_autos`.`id_wheel_dia` = `bc_tires_wheel_dias_dict`.`id`
LEFT JOIN `bc_tires_wheel_fastener_sizes_dict`
    ON `bc_tires_autos`.`id_wheel_fastener_size` = `bc_tires_wheel_fastener_sizes_dict`.`id`
LEFT JOIN `bc_tires_wheel_fastener_types_dict`
    ON `bc_tires_autos`.`id_wheel_fastener_type` = `bc_tires_wheel_fastener_types_dict`.`id`
LEFT JOIN `bc_tires_tire_load_indexes_dict`
    ON `bc_tires_autos`.`id_tire_load_index` = `bc_tires_tire_load_indexes_dict`.`id`
LEFT JOIN `bc_tires_tire_speed_indexes_dict`
    ON `bc_tires_autos`.`id_tire_speed_index` = `bc_tires_tire_speed_indexes_dict`.`id`

WHERE
    `bc_tires_autos`.`id` = "'.$_GET['id'].'" AND
    `bc_tires_auto_type_vehicles_dict`.`id` = `bc_tires_autos`.`id_type_vehicle` AND
    `bc_tires_auto_brands_dict`.`id` = `bc_tires_autos`.`id_brand` AND
    `bc_tires_auto_models_dict`.`id` = `bc_tires_autos`.`id_model` AND
    `bc_tires_auto_years_dict`.`id` = `bc_tires_autos`.`id_year` AND
    `bc_tires_auto_modifications_dict`.`id` = `bc_tires_autos`.`id_modification`';
}

$sql_get_list_of_pcd = '
SELECT
    `bc_tires_wheel_pcds_dict`.`id`,
    CONCAT(`bc_tires_wheel_pcd_number_of_studs_dict`.`value`, "x", `bc_tires_wheel_pcd_length_of_diameters_dict`.`value`) AS `value`
FROM
    `bc_tires_wheel_pcds_dict`,
    `bc_tires_wheel_pcd_length_of_diameters_dict`,
    `bc_tires_wheel_pcd_number_of_studs_dict`
WHERE
    `bc_tires_wheel_pcds_dict`.`id_pcd_length_of_diameter` = `bc_tires_wheel_pcd_length_of_diameters_dict`.`id` AND
    `bc_tires_wheel_pcds_dict`.`id_pcd_number_of_stud` = `bc_tires_wheel_pcd_number_of_studs_dict`.`id`                                                                  
ORDER BY
    `value`';

$sql_get_list_of_tire_sizes = '
SELECT
    `bc_tires_tire_sizes_dict`.`id`,
    concat(`bc_tires_tire_widths_dict`.`value`,"/",`bc_tires_tire_heights_dict`.`value`," R",`bc_tires_tire_diameters_dict`.`value`) AS `value`
FROM
    `bc_tires_tire_sizes_dict`
LEFT JOIN `bc_tires_tire_diameters_dict`
    ON `bc_tires_tire_diameters_dict`.`id` = `bc_tires_tire_sizes_dict`.`id_diameter`
LEFT JOIN `bc_tires_tire_heights_dict`
    ON `bc_tires_tire_heights_dict`.`id` = `bc_tires_tire_sizes_dict`.`id_height`
LEFT JOIN `bc_tires_tire_widths_dict`
    ON `bc_tires_tire_widths_dict`.`id` = `bc_tires_tire_sizes_dict`.`id_width`
ORDER BY
    `bc_tires_tire_diameters_dict`.`value`,
    `bc_tires_tire_widths_dict`.`value`,
    `bc_tires_tire_heights_dict`.`value`';

$sql_get_list_of_wheel_sizes = '
SELECT
    `bc_tires_wheel_sizes_dict`.`id`,
    CONCAT(`bc_tires_wheel_rims_dict`.`value`,"x",`bc_tires_wheel_diameters_dict`.`value`," ET",`bc_tires_wheel_ets_dict`.`value`) AS `value`
FROM
    `bc_tires_wheel_sizes_dict`
LEFT JOIN `bc_tires_wheel_rims_dict`
    ON `bc_tires_wheel_rims_dict`.`id` = `bc_tires_wheel_sizes_dict`.`id_rim`
LEFT JOIN `bc_tires_wheel_diameters_dict`
    ON `bc_tires_wheel_diameters_dict`.`id` = `bc_tires_wheel_sizes_dict`.`id_diameter`
LEFT JOIN `bc_tires_wheel_ets_dict`
    ON `bc_tires_wheel_ets_dict`.`id` = `bc_tires_wheel_sizes_dict`.`id_et`
ORDER BY
    `bc_tires_wheel_diameters_dict`.`value`,
    `bc_tires_wheel_rims_dict`.`value`,
    `bc_tires_wheel_ets_dict`.`value`';


function get_axle_info ($table_name, $id_auto) {
    $sql = 'SELECT * FROM `'.$table_name.'` WHERE `id_auto` = "'.$id_auto.'"';
    if (db_get($rows, $sql)) {
        die(db_error());
    }
    return $rows;
}


function update_axles ($list_of_sizes, $id_auto) {
    update_axle('bc_tires_def_front_tires', 'id_tire_size', $list_of_sizes[0], $id_auto);
    update_axle('bc_tires_def_rear_tires', 'id_tire_size', $list_of_sizes[1], $id_auto);
    update_axle('bc_tires_def_front_wheels', 'id_wheel_size', $list_of_sizes[2], $id_auto);
    update_axle('bc_tires_def_rear_wheels', 'id_wheel_size', $list_of_sizes[3], $id_auto);
    update_axle('bc_tires_alt_front_tires', 'id_tire_size', $list_of_sizes[4], $id_auto);
    update_axle('bc_tires_alt_rear_tires', 'id_tire_size', $list_of_sizes[5], $id_auto);
    update_axle('bc_tires_alt_front_wheels', 'id_wheel_size', $list_of_sizes[6], $id_auto);
    update_axle('bc_tires_alt_rear_wheels', 'id_wheel_size', $list_of_sizes[7], $id_auto);
}


function update_axle ($table_name, $row_size_name, $list_of_sizes, $id_auto) {
    $sql = 'DELETE FROM `'.$table_name.'` WHERE `id_auto` = '.$id_auto;
    if (db_put($sql)) {
        die('<div class="message_error">Возникла ошибка во время обновления записи.<br />'.db_error().'</div>');
    }
    foreach ($list_of_sizes as $size) {
        if (empty($size)) {
            continue;
        }
        $sql = 'INSERT INTO `'.$table_name.'` SET
            `id_auto` = '.$id_auto.',
            `'.$row_size_name.'` = '.$size.'';
        if (db_put($sql)) {
            die('<div class="alert-danger">Возникла ошибка во время обновления записи.<br />'.db_error().'</div>');
        }
    }
}


function insert_axle ($table_name, $row_size_name, $list_of_sizes, $id_auto) {
    foreach ($list_of_sizes as $size) {
        if (isset($size['id_tire_size'])) {
            $size = $size['id_tire_size'];
        }
        if (isset($size['id_wheel_size'])) {
            $size = $size['id_wheel_size'];
        }
        if (empty($size)) {
            continue;
        }
        $sql = 'INSERT INTO `'.$table_name.'` SET
            `id_auto` = '.$id_auto.',
            `'.$row_size_name.'` = '.$size.PHP_EOL;
        if (db_put($sql)) {
            die('<div class="message_error">Возникла ошибка во время добавления записи.<br />'.db_error().'</div>');
        }
    }
}


function change_name_select ($list, $new_name) {
    $list = preg_replace('`name="[^"]+" id="[^"]+"`', 'name="'.$new_name.'" id="'.$new_name.'">', $list);
    return $list;
}


function selected ($list, $value) {
    $list = str_replace('value="'.$value.'">', 'value="'.$value.'" selected>', $list);
    return $list;
}


function create_select (&$list, $sql, $name, $js = '') {
    if (db_get($rows, $sql)) {
        die(db_error());
    }

    $list = '<select '.$js.' name="'.htmlspecialchars($name).'" id="'.htmlspecialchars($name).'" style="width: 100%;">
        <option value="0">-</option>'.PHP_EOL;
    foreach ($rows as $row) {
        $list .= '<option value="'.htmlspecialchars($row['id']).'">'.htmlspecialchars($row['value']).'</option>'.PHP_EOL;
    }
    $list .= '</select>'.PHP_EOL;

    return 0;
}



function get_tire_auto_info ($id_brand, $id_model) {
    $sql = ' 
SELECT
    `bc_tires_autos`.`id` AS `id`,
    `bc_tires_auto_type_vehicles_dict`.`value` AS `value_type_vehicle`,
    `bc_tires_auto_brands_dict`.`value` AS `value_brand`,
    `bc_tires_auto_models_dict`.`value` AS `value_model`,
    `bc_tires_auto_years_dict`.`value` AS `value_year`,
    `bc_tires_auto_modifications_dict`.`value` AS `value_modification`,
    `bc_tires_wheel_pcd_number_of_studs_dict`.`value` AS `value_pcd_number_of_studs`,
    `bc_tires_wheel_pcd_length_of_diameters_dict`.`value` AS `value_pcd_length_of_diameter`,
    CONCAT(`bc_tires_wheel_pcd_number_of_studs_dict`.`value`, "x", `bc_tires_wheel_pcd_length_of_diameters_dict`.`value`) AS `value_pcd`,
    `bc_tires_wheel_dias_dict`.`value` AS `value_dia`,
    `bc_tires_wheel_fastener_sizes_dict`.`value` AS `value_fastener_size`,
    `bc_tires_wheel_fastener_types_dict`.`value` AS `value_fastener_type`,
    `bc_tires_tire_load_indexes_dict`.`value` AS `value_load_index`,
    `bc_tires_tire_speed_indexes_dict`.`value` AS `value_speed_index`

FROM
    `bc_tires_auto_type_vehicles_dict`,
    `bc_tires_auto_brands_dict`,
    `bc_tires_auto_models_dict`,
    `bc_tires_auto_years_dict`,
    `bc_tires_auto_modifications_dict`,
    `bc_tires_autos`

LEFT JOIN `bc_tires_wheel_pcds_dict`
    ON `bc_tires_autos`.`id_wheel_pcd` = `bc_tires_wheel_pcds_dict`.`id`
LEFT JOIN `bc_tires_wheel_pcd_length_of_diameters_dict`
    ON `bc_tires_wheel_pcds_dict`.`id_pcd_length_of_diameter` = `bc_tires_wheel_pcd_length_of_diameters_dict`.`id`
LEFT JOIN `bc_tires_wheel_pcd_number_of_studs_dict`
    ON `bc_tires_wheel_pcds_dict`.`id_pcd_number_of_stud` = `bc_tires_wheel_pcd_number_of_studs_dict`.`id`
LEFT JOIN `bc_tires_wheel_dias_dict`
    ON `bc_tires_autos`.`id_wheel_dia` = `bc_tires_wheel_dias_dict`.`id`
LEFT JOIN `bc_tires_wheel_fastener_sizes_dict`
    ON `bc_tires_autos`.`id_wheel_fastener_size` = `bc_tires_wheel_fastener_sizes_dict`.`id`
LEFT JOIN `bc_tires_wheel_fastener_types_dict`
    ON `bc_tires_autos`.`id_wheel_fastener_type` = `bc_tires_wheel_fastener_types_dict`.`id`
LEFT JOIN `bc_tires_tire_load_indexes_dict`
    ON `bc_tires_autos`.`id_tire_load_index` = `bc_tires_tire_load_indexes_dict`.`id`
LEFT JOIN `bc_tires_tire_speed_indexes_dict`
    ON `bc_tires_autos`.`id_tire_speed_index` = `bc_tires_tire_speed_indexes_dict`.`id`

WHERE
    `bc_tires_auto_brands_dict`.`id` = "'.$id_brand.'" AND
    `bc_tires_auto_models_dict`.`id` = "'.$id_model.'" AND
    `bc_tires_auto_type_vehicles_dict`.`id` = `bc_tires_autos`.`id_type_vehicle` AND
    `bc_tires_auto_brands_dict`.`id` = `bc_tires_autos`.`id_brand` AND
    `bc_tires_auto_models_dict`.`id` = `bc_tires_autos`.`id_model` AND
    `bc_tires_auto_years_dict`.`id` = `bc_tires_autos`.`id_year` AND
    `bc_tires_auto_modifications_dict`.`id` = `bc_tires_autos`.`id_modification`
    
ORDER BY
    `bc_tires_auto_modifications_dict`.`value`,
    `bc_tires_auto_years_dict`.`value` DESC';

    if (db_get($info, $sql)) {
        die(db_error());
    }

    return $info;
}


function db_last_id (&$id) {
    $id = 0;
    $id = mysqli_insert_id($GLOBALS['db_link']);

    return 0;
}


function db_put ($sql) {
	$result = mysqli_query($GLOBALS['db_link'], $sql);
	if (mysqli_errno($GLOBALS['db_link'])) {
		return mysqli_errno($GLOBALS['db_link']);
	}
    return 0;
}


/*
	$what can be:
		'all' - get all rows from query.
		'row' - get only first row from query.
		'cell' - get only first cell from first row from query.
*/
function db_get (&$rows, $sql, $what = 'all') {
	$rows = array();

	$result = mysqli_query($GLOBALS['db_link'], $sql);
	if (mysqli_errno($GLOBALS['db_link'])) {
		return mysqli_errno($GLOBALS['db_link']);
	}
	while ($temp = mysqli_fetch_assoc($result)) {
		$rows[] = $temp;
	}

	switch($what){
		case 'all':
			break;

		case 'row':
			if (isset($rows[0])) {
				$rows = $rows[0];
			}
			break;

		case 'cell':
			if (isset($rows[0])) {
				$rows = reset($rows[0]);
			}
			break;

		default:
			return 1;
			break;
	}

	return 0;
}


/*
	How to use: dbEscape(array(&$var1, &$var2, &$var3));
	
	Make SQL injection is impossible because function mysql_query()
	can send only single query to DBMS, so you can't do something
	like this: id=1;INSERT INTO users SET name="admin2", pass=777, group="admin".
*/
function db_escape ($listOfParams) {
	if (!is_array($listOfParams)) {
		return 1;
	}
	
	foreach ($listOfParams as &$param) {
		// Escaping string;
		if (is_string($param)) {
			$param = trim($param);
			$param = mysqli_real_escape_string($GLOBALS['db_link'], $param);
		}
	}
	unset($param);
	
	return 0;
}


function db_error () {
	if (isset($GLOBALS['sql'])) {
		return 'DB error: '.mysqli_error($GLOBALS['db_link']).PHP_EOL.$GLOBALS['sql'].PHP_EOL;
	} else {
		return 'DB error: '.mysqli_error($GLOBALS['db_link']).PHP_EOL;
	}
	break;
}
?>
