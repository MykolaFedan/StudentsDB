<?php
/*
    Set up encoding, charset, language and translation.
*/
setlocale(LC_ALL, 'ru_RU.'.CHARSET);
setlocale(LC_NUMERIC, 'C');
mb_internal_encoding(CHARSET);
header('Content-Type: text/html; charset='.CHARSET);



/*
    Tuning up database MySQL.
*/
define('DATABASE_ADAPTER_MYSQL_DEFAULT', 'mysql_default');
define('DATABASE_ADAPTER_MYSQL_IMPROVED', 'mysql_improved');
define('DATABASE_ADAPTER_MYSQL_PDO', 'mysql_pdo');
define('DATABASE_CHARSET', 'utf8'); // The 'utf8', not 'utf-8'!
if (defined('DATABASE_NAME') AND !isset($without_connection_to_db)) {
    switch (DATABASE_ADAPTER) {
        case DATABASE_ADAPTER_MYSQL_DEFAULT:    
            if (trim(DATABASE_PORT) == '') {
                $db_link = mysql_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);    
            } else {
                $db_link = mysql_connect(DATABASE_HOST.':'.DATABASE_PORT, DATABASE_USER, DATABASE_PASSWORD);    
            }
            
            if (!$db_link) {
                die('Could not connect: '.mysql_error($db_link));
            }

            mysql_set_charset(DATABASE_CHARSET, $db_link);
            $db = mysql_select_db(DATABASE_NAME, $db_link);
            if (!$db) {
                die('Could not select db: '.mysql_error($db_link));
            }
            
            if (DATABASE_CACHE) {
                mysql_query('SET SESSION query_cache_type = 1;', $db_link);
            } else {
                mysql_query('SET SESSION query_cache_type = 0;', $db_link);
            }
            break;

        case DATABASE_ADAPTER_MYSQL_IMPROVED:
            if (trim(DATABASE_PORT) == '') {
                $db_link = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);
            } else {
                $db_link = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, '', DATABASE_PORT);
            }
            
            if (!$db_link) {
                die('Could not connect: '.mysqli_error($db_link));
            }

            mysqli_set_charset($db_link, DATABASE_CHARSET);
            $db = mysqli_select_db($db_link, DATABASE_NAME);
            if (!$db) {
                die('Could not select db: '.mysqli_error($db_link));
            }

            if (DATABASE_CACHE) {
                mysqli_query($db_link, 'SET SESSION query_cache_type = 1;');
            } else {
                mysqli_query($db_link, 'SET SESSION query_cache_type = 0;');
            }
            break;

        case DATABASE_ADAPTER_MYSQL_PDO:
            try {
                if(trim(DATABASE_PORT) == ''){
                    $db_link = new PDO('mysql:host='.DATABASE_HOST.';charset='.DATABASE_CHARSET.';dbname='.DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
                }else{
                    $db_link = new PDO('mysql:host='.DATABASE_HOST.';port='.DATABASE_PORT.';charset='.DATABASE_CHARSET.';dbname='.DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
                }
            } catch (PDOException $e) {
                die('DB error: ' . $e->getMessage());
            }
            
            if (!$db_link) {
                die('DB error: '.print_r($db_link->errorInfo(), true));
            }

            if (DATABASE_CACHE) {
                $db_link->exec('SET SESSION query_cache_type = 1;');
            } else {
                $db_link->exec('SET SESSION query_cache_type = 0;');
            }
            break;

        default:
            die('You don\'t select database adapter for script.');
            break;
    }
}



/*
    Translate.
*/
function translate (&$arg1=null, &$arg2=null, &$arg3=null, &$arg4=null, &$arg5=null) {
    include 'translates.php';

    // Translate DB records from English to native language.
    if (is_array($arg1)) {
        foreach ($arg1 as &$db_record) {
            foreach ($translate as $english => $native) {
                if ($db_record['value'] == $english) {
                    $db_record['value'] = $native;
                    break;
                }
            }
        }
        // New reordering list of DB records.
        usort($arg1, 'cmp');
        return 0; // EXIT
    }

    // Translate string from native language to Enlish.
    $translate = array_flip($translate);
    $list_of_args = array(&$arg1, &$arg2, &$arg3, &$arg4, &$arg5);
    foreach ($list_of_args as &$arg) {
        if ($arg != null) {
            $arg = strtr($arg, $translate);
        }
    }
}
function cmp ($a, $b) {
    return strcmp($a['value'], $b['value']);
}



function translate_properties (&$properties) {
    include 'translates.php';
    foreach ($properties as &$property) {
        $property = strtr($property, $translate);
    }
}



function get_list_of_auto_brands (&$list_of_auto_brands, $auto_type_vehicle) {
    translate($auto_type_vehicle);
    db_escape(array(&$auto_type_vehicle));
    $sql = ' 
SELECT
    DISTINCT `bc_tires_auto_brands_dict`.`value`,
    `bc_tires_auto_brands_dict`.`id`
FROM
    `bc_tires_auto_type_vehicles_dict`,
    `bc_tires_auto_brands_dict`,
    `bc_tires_autos`
WHERE
    `bc_tires_auto_type_vehicles_dict`.`value` = "'.$auto_type_vehicle.'" AND
    `bc_tires_autos`.`id_brand` = `bc_tires_auto_brands_dict`.`id` AND
    `bc_tires_autos`.`id_type_vehicle` = `bc_tires_auto_type_vehicles_dict`.`id`
ORDER BY
    `bc_tires_auto_brands_dict`.`value`';
    if (db_get($list_of_auto_brands, $sql)) {
        die(db_error());
    }
    translate($list_of_auto_brands);
    return 0;
}


function get_list_of_auto_models (&$list_of_auto_models, $auto_type_vehicle, $auto_brand) {
    translate($auto_type_vehicle, $auto_brand);
    db_escape(array(&$auto_type_vehicle, &$auto_brand));
    $sql = '
SELECT
    DISTINCT `bc_tires_auto_models_dict`.`value`,
    `bc_tires_auto_models_dict`.`id`
FROM
    `bc_tires_auto_type_vehicles_dict`,
    `bc_tires_auto_brands_dict`,
    `bc_tires_auto_models_dict`,
    `bc_tires_autos`
WHERE
    `bc_tires_auto_type_vehicles_dict`.`value` = "'.$auto_type_vehicle.'" AND
    `bc_tires_auto_brands_dict`.`value` = "'.$auto_brand.'" AND
    `bc_tires_auto_type_vehicles_dict`.`id` = `bc_tires_autos`.`id_type_vehicle` AND
    `bc_tires_auto_brands_dict`.`id` = `bc_tires_autos`.`id_brand` AND
    `bc_tires_auto_models_dict`.`id` = `bc_tires_autos`.`id_model`
ORDER BY
    `bc_tires_auto_models_dict`.`value`';
    if (db_get($list_of_auto_models, $sql)) {
        die(db_error());
    }
    translate($list_of_auto_models);
}


function get_list_of_auto_years (&$list_of_auto_years, $auto_type_vehicle, $auto_brand, $auto_model) {
    translate($auto_type_vehicle, $auto_brand, $auto_model);
    db_escape(array(&$auto_type_vehicle, &$auto_brand, &$auto_model));
    $sql = '
SELECT
    DISTINCT `bc_tires_auto_years_dict`.`value`,
    `bc_tires_auto_years_dict`.`id`
FROM
    `bc_tires_auto_type_vehicles_dict`,
    `bc_tires_auto_brands_dict`,
    `bc_tires_auto_models_dict`,
    `bc_tires_auto_years_dict`,
    `bc_tires_autos`
WHERE
    `bc_tires_auto_type_vehicles_dict`.`value` = "'.$auto_type_vehicle.'" AND
    `bc_tires_auto_brands_dict`.`value` = "'.$auto_brand.'" AND
    `bc_tires_auto_models_dict`.`value` = "'.$auto_model.'" AND
    `bc_tires_auto_type_vehicles_dict`.`id` = `bc_tires_autos`.`id_type_vehicle` AND
    `bc_tires_auto_brands_dict`.`id` = `bc_tires_autos`.`id_brand` AND
    `bc_tires_auto_models_dict`.`id` = `bc_tires_autos`.`id_model` AND
    `bc_tires_auto_years_dict`.`id` = `bc_tires_autos`.`id_year`
ORDER BY `bc_tires_auto_years_dict`.`value`';
    if (db_get($list_of_auto_years, $sql)) {
        die(db_error());
    }
    if (isset($list_of_auto_years[0]['value']) AND $list_of_auto_years[0]['value'] == 0) {
        $list_of_auto_years[0]['value'] = 'Все года';
    }
    translate($list_of_auto_years);
    rsort($list_of_auto_years);
}


function get_list_of_auto_modifications (&$list_of_auto_modifications, $auto_type_vehicle, $auto_brand, $auto_model, $auto_year) {
    translate($auto_type_vehicle, $auto_brand, $auto_model, $auto_year);
    db_escape(array(&$auto_type_vehicle, &$auto_brand, &$auto_model, &$auto_year));
    $sql = '
SELECT
    DISTINCT `bc_tires_auto_modifications_dict`.`value`,
    `bc_tires_auto_modifications_dict`.`id`
FROM
    `bc_tires_auto_type_vehicles_dict`,
    `bc_tires_auto_brands_dict`,
    `bc_tires_auto_models_dict`,
    `bc_tires_auto_years_dict`,
    `bc_tires_auto_modifications_dict`,
    `bc_tires_autos`
WHERE
    `bc_tires_auto_type_vehicles_dict`.`value` = "'.$auto_type_vehicle.'" AND
    `bc_tires_auto_brands_dict`.`value` = "'.$auto_brand.'" AND
    `bc_tires_auto_models_dict`.`value` = "'.$auto_model.'" AND
    `bc_tires_auto_years_dict`.`value` = "'.$auto_year.'" AND
    `bc_tires_auto_type_vehicles_dict`.`id` = `bc_tires_autos`.`id_type_vehicle` AND
    `bc_tires_auto_brands_dict`.`id` = `bc_tires_autos`.`id_brand` AND
    `bc_tires_auto_models_dict`.`id` = `bc_tires_autos`.`id_model` AND
    `bc_tires_auto_years_dict`.`id` = `bc_tires_autos`.`id_year` AND
    `bc_tires_auto_modifications_dict`.`id` = `bc_tires_autos`.`id_modification`
ORDER BY
    `bc_tires_auto_modifications_dict`.`value`';
    if (db_get($list_of_auto_modifications, $sql)) {
        die(db_error());
    }
    translate($list_of_auto_modifications);
}


function get_brand_names ($id) {
    $sql = 'SELECT `value` FROM `bc_tires_auto_brands_dict` WHERE `id` LIKE "'.$id.'"';
    if (db_get($rows, $sql)) {
        die(db_error());
    }   
    print_r($rows);
}


function get_results (&$auto_info, $auto_type_vehicle, $auto_brand, $auto_model, $auto_year, $auto_modification, $get_array = false) {
    translate($auto_type_vehicle, $auto_brand, $auto_model, $auto_year, $auto_modification);
    $sql = '
SELECT
    `bc_tires_autos`.`id` AS `id`,
    `bc_tires_auto_type_vehicles_dict`.`value` AS `type_vehicle`,
    `bc_tires_auto_brands_dict`.`value` AS `brand`,
    `bc_tires_auto_models_dict`.`value` AS `model`,
    `bc_tires_auto_years_dict`.`value` AS `year`,
    `bc_tires_auto_modifications_dict`.`value` AS `modification`,
    `bc_tires_wheel_pcd_number_of_studs_dict`.`value` AS `pcd_number_of_studs`,
    `bc_tires_wheel_pcd_length_of_diameters_dict`.`value` AS `pcd_length_of_diameter`,
    CONCAT(`bc_tires_wheel_pcd_number_of_studs_dict`.`value`, "x", `bc_tires_wheel_pcd_length_of_diameters_dict`.`value`) AS `pcd`,
    `bc_tires_wheel_dias_dict`.`value` AS `dia`,
    `bc_tires_wheel_fastener_sizes_dict`.`value` AS `fastener_size`,
    `bc_tires_wheel_fastener_types_dict`.`value` AS `fastener_type`,
    `bc_tires_tire_load_indexes_dict`.`value` AS `load_index`,
    `bc_tires_tire_speed_indexes_dict`.`value` AS `speed_index`
    
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
    `bc_tires_auto_type_vehicles_dict`.`value` = "'.$auto_type_vehicle.'" AND
    `bc_tires_auto_brands_dict`.`value` = "'.$auto_brand.'" AND
    `bc_tires_auto_models_dict`.`value` = "'.$auto_model.'" AND
    `bc_tires_auto_years_dict`.`value` = "'.$auto_year.'" AND
    `bc_tires_auto_modifications_dict`.`value` = "'.$auto_modification.'" AND
    `bc_tires_auto_type_vehicles_dict`.`id` = `bc_tires_autos`.`id_type_vehicle` AND
    `bc_tires_auto_brands_dict`.`id` = `bc_tires_autos`.`id_brand` AND
    `bc_tires_auto_models_dict`.`id` = `bc_tires_autos`.`id_model` AND
    `bc_tires_auto_years_dict`.`id` = `bc_tires_autos`.`id_year` AND
    `bc_tires_auto_modifications_dict`.`id` = `bc_tires_autos`.`id_modification`';
    if (db_get($info_main, $sql, 'row')) {
        die(db_error());
    }
    if (!isset($info_main['id'])) {
        // If user need get array data, don't abort execution.
        if ($get_array) {
            return 0;
        } else {
            die('<div style="display: none">'.$auto_type_vehicle.' '.$auto_brand.' '.$auto_model.' '.$auto_year.' '.$auto_modification.'</div><p>Нет данных по выбранному автомоблию.</p>');
        }
    }

    $_GET['compose_link_auto_main_info'] = $info_main;
    $auto_info = array(
        'main'              => $info_main,
        'def_front_tires'   => get_axle_tires($info_main['id'], 'bc_tires_def_front_tires'),
        'def_front_wheels'  => get_axle_wheels($info_main['id'], 'bc_tires_def_front_wheels'),
        'def_rear_tires'    => get_axle_tires($info_main['id'], 'bc_tires_def_rear_tires'),
        'def_rear_wheels'   => get_axle_wheels($info_main['id'], 'bc_tires_def_rear_wheels'),
        'alt_front_tires'   => get_axle_tires($info_main['id'], 'bc_tires_alt_front_tires'),
        'alt_front_wheels'  => get_axle_wheels($info_main['id'], 'bc_tires_alt_front_wheels'),
        'alt_rear_tires'    => get_axle_tires($info_main['id'], 'bc_tires_alt_rear_tires'),
        'alt_rear_wheels'   => get_axle_wheels($info_main['id'], 'bc_tires_alt_rear_wheels')
    );
    $auto_info['tuning_different_size_tires'] = get_tuning_different_size($auto_info['alt_front_tires'], $auto_info['alt_rear_tires']);
    $auto_info['tuning_different_size_wheels'] = get_tuning_different_size($auto_info['alt_front_wheels'], $auto_info['alt_rear_wheels']);
    $auto_info['tuning_low_profile_tires'] = get_tuning_low_profile($auto_info['def_front_tires'], $auto_info['alt_front_tires']);
    $auto_info['tuning_low_profile_wheels'] = get_tuning_low_profile($auto_info['def_front_wheels'], $auto_info['alt_front_wheels']);

    translate_properties($auto_info['main']);

    if ($get_array) {
        $temp = $auto_info;
        $auto_info = $auto_info['main'];
        $auto_info['def_front_tires'] = compose_sizes(clean($temp['def_front_tires']));
        $auto_info['def_front_wheels'] = compose_sizes(clean($temp['def_front_wheels']));
        $auto_info['def_rear_tires'] = compose_sizes(clean($temp['def_rear_tires']));
        $auto_info['def_rear_wheels'] = compose_sizes(clean($temp['def_rear_wheels']));
        $auto_info['alt_front_tires'] = compose_sizes(clean($temp['alt_front_tires']));
        $auto_info['alt_front_wheels'] = compose_sizes(clean($temp['alt_front_wheels']));
        $auto_info['alt_rear_tires'] = compose_sizes(clean($temp['alt_rear_tires']));
        $auto_info['alt_rear_wheels'] = compose_sizes(clean($temp['alt_rear_wheels']));
        $auto_info['tuning_different_size_tires'] = compose_sizes(clean($temp['tuning_different_size_tires']));
        $auto_info['tuning_different_size_wheels'] = compose_sizes(clean($temp['tuning_different_size_wheels']));
        $auto_info['tuning_low_profile_tires'] = compose_sizes(clean($temp['tuning_low_profile_tires']));
        $auto_info['tuning_low_profile_wheels'] = compose_sizes(clean($temp['tuning_low_profile_wheels']));
    }
}


function compose_sizes ($sizes) {
    if (!is_array($sizes)) {
        return '';
    }
    $results = '';
    foreach ($sizes as $size) {
        if (isset($size['value'])) {
            $results .= $size['value'].'|';
        } else {
            // This need for tuning different low wheels and tires.
            if (isset($size['front'])) {
                $results .= $size['front']['value'].'|';
            }
            if (isset($size['rear'])) {
                $results .= $size['rear']['value'].'|';
            }
        }
    }
    $results = substr($results, 0, -1);
    return $results;
}


function get_tuning_different_size ($alt_front, $alt_rear) {
    $tuning = array();
    if (!is_array($alt_front) OR !is_array($alt_rear)) {
        return $tuning;
    }
    foreach ($alt_front as $front) {
        foreach ($alt_rear as $rear) {
            @$front_width = ((isset($front['width']))?$front['width']:$front['rim']);
            @$rear_width = ((isset($rear['width']))?$rear['width']:$rear['rim']);
            if ($front_width != $rear_width AND $front['diameter'] == $rear['diameter']) {
                $tuning[] = array(
                    'front' => $front,
                    'rear'  => $rear
                );
                break;
            }
        }
    }
    return $tuning;
}


function get_tuning_low_profile ($def_front, $alt_front) {
    $tuning = array();
    if (!isset($def_front[0]['diameter']) OR !is_array($alt_front)) {
        return $tuning;
    }
    $diameter = $def_front[0]['diameter']+2;
    foreach ($alt_front as $size) {
        if ($size['diameter'] >= $diameter) {
            $tuning[] = $size;
        }
    }
    return $tuning;
}



function get_axle_wheels ($id, $table_name) {
    $sql = '
SELECT
    CONCAT(`bc_tires_wheel_rims_dict`.`value`,"x",`bc_tires_wheel_diameters_dict`.`value`," ET",`bc_tires_wheel_ets_dict`.`value`) AS `value`,
    `bc_tires_wheel_rims_dict`.`value` AS `rim`,
    `bc_tires_wheel_diameters_dict`.`value` AS `diameter`,
    `bc_tires_wheel_ets_dict`.`value` AS `et`
FROM
    `'.$table_name.'`
LEFT JOIN `bc_tires_wheel_sizes_dict`
    ON `bc_tires_wheel_sizes_dict`.`id` = `'.$table_name.'`.`id_wheel_size`
LEFT JOIN `bc_tires_wheel_rims_dict`
    ON `bc_tires_wheel_rims_dict`.`id` = `bc_tires_wheel_sizes_dict`.`id_rim`
LEFT JOIN `bc_tires_wheel_diameters_dict`
    ON `bc_tires_wheel_diameters_dict`.`id` = `bc_tires_wheel_sizes_dict`.`id_diameter`
LEFT JOIN `bc_tires_wheel_ets_dict`
    ON `bc_tires_wheel_ets_dict`.`id` = `bc_tires_wheel_sizes_dict`.`id_et`
WHERE
    `'.$table_name.'`.`id_auto` = '.$id.'
ORDER BY `diameter`, `rim`, `et`';
    if (db_get($axle, $sql)) {
        die(db_error());
    }
    foreach ($axle as &$a) {
        $a['link'] = compose_wheel_link($a['rim'], $a['diameter'], $a['et']);
    }
    return $axle;
}


function get_axle_tires ($id, $table_name) {
    $sql = '
SELECT
    concat(`bc_tires_tire_widths_dict`.`value`,"/",`bc_tires_tire_heights_dict`.`value`," R",`bc_tires_tire_diameters_dict`.`value`) AS `value`,
    `bc_tires_tire_widths_dict`.`value` AS `width`,
    `bc_tires_tire_heights_dict`.`value` AS `height`,
    `bc_tires_tire_diameters_dict`.`value` AS `diameter`
FROM
    `'.$table_name.'`
LEFT JOIN `bc_tires_tire_sizes_dict`
    ON `bc_tires_tire_sizes_dict`.`id` = `'.$table_name.'`.`id_tire_size`
LEFT JOIN `bc_tires_tire_diameters_dict`
    ON `bc_tires_tire_diameters_dict`.`id` = `bc_tires_tire_sizes_dict`.`id_diameter`
LEFT JOIN `bc_tires_tire_heights_dict`
    ON `bc_tires_tire_heights_dict`.`id` = `bc_tires_tire_sizes_dict`.`id_height`
LEFT JOIN `bc_tires_tire_widths_dict`
    ON `bc_tires_tire_widths_dict`.`id` = `bc_tires_tire_sizes_dict`.`id_width`
WHERE
    `'.$table_name.'`.`id_auto` = '.$id.'
ORDER BY `diameter`, `height`, `width`';
    if (db_get($axle, $sql)) {
        die(db_error());
    }
    foreach ($axle as &$a) {
        $a['link'] = compose_tire_link($a['width'], $a['height'], $a['diameter']);
    }
    return $axle;
}


function list_to_json (&$json, $list) {
    $json = array();
    foreach ($list as $record) {
        $json[] = array(
            'id' => $record['id'],
            'value' => $record['value'],
        );
    }
    $json = json_encode($json);
}


/*
	WARNING: These calculations (and those provided by all online tire dimension calculators) only reflect nominal tire dimensions, which are often subtly or substantially different than the tire's actual physical size and/or the dimensions provided by the tire manufactures.
*/
function get_wheel_full_height (&$checkTireSize, $width, $height, $diameter) {
    global $t;
	static $defSize;
	if (!is_numeric($defSize)) {
		$defSize = ($diameter * 25.4) + ($width * ($height/100) * 2);
	}

	$mm = ($diameter * 25.4) + ($width * ($height/100) * 2);
	$mm = $mm - $defSize;
	$mm = round($mm, 1);
	
	if ($mm == 0) {
		$checkTireSize = $t['lib_some_size'];
	} elseif($mm < 0) {
		$checkTireSize = $t['lib_size'].' '.($mm*-1).' '.$t['lib_less'];
	} else {
		$checkTireSize = $t['lib_size'].' '.$mm.' '.$t['lib_bigger'];
	}
	
	return 0;
}



/*
	If your CMS send id of value parameter instead of value you
	can write code in below function to solve the problem.
	You must get value by id value from database and use php function


	strtr() for replace value to id.

*/

 
    

function compose_tire_link ($width, $height, $diameter) {
    $auto_info = $_GET['compose_link_auto_main_info'];  



    //$adapt_width = adapt('shirina', $width);

    @$url = URL_TIRE;

        $connect = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
            if (!$connect) exit ('MySQL Error!');
            mysqli_set_charset($connect ,"utf8");

            $width_id = $connect->query( "SELECT id FROM shop_feature_values_double WHERE feature_id = 4 AND value = $width ")->fetch_object()->id; 
            $height_id = $connect->query( "SELECT id FROM shop_feature_values_double WHERE feature_id = 5 AND value = $height ")->fetch_object()->id; 
            $diameter_id = $connect->query( "SELECT id FROM shop_feature_values_double WHERE feature_id = 6 AND value = $diameter ")->fetch_object()->id; 
            
                             mysqli_close($connect); 

    




	$url = str_replace('&', '&amp;', $url);
	$url = str_replace('TIRE_LOAD_INDEX', $auto_info['load_index'], $url);
	$url = str_replace('TIRE_SPEED_INDEX', $auto_info['speed_index'], $url);
	$url = str_replace('TIRE_WIDTH', $width_id, $url);
	$url = str_replace('TIRE_HEIGHT', $height_id, $url);
	$url = str_replace('TIRE_DIAMETER', $diameter_id, $url);

	get_wheel_full_height($wheel_full_height, $width, $height, $diameter);

    
   


	$link = '
<span class="bc_link">
    <a href="'.$url.'" class="bc_href_title" owntitle="'.$wheel_full_height.'">
        '.$width.'/'.$height.' R'.$diameter.'
    </a>
</span>';
    return $link;
}



/*
	If your CMS send id of value parameter instead of value you
	can write code in below function to solve the problem.
	You must get value by id value from database and use php function
	strtr() for replace value to id.
*/
function compose_wheel_link ($rim, $diameter, $et) {
    $auto_info = $_GET['compose_link_auto_main_info'];
    //$adapt_rim = adapt('shirina', $rim);

    $pcd_length_of_diameter = '';
	if (preg_match('`\d+x(?<value>\d+)`', $auto_info['pcd'], $match)) {
		$pcd_length_of_diameter = $match['value'];
	}

    $pcd_number_of_studs = '';
	if (preg_match('`(?<value>\d+)x\d+`', $auto_info['pcd'], $match)) {
		$pcd_number_of_studs = $match['value'];
	}

    @$url = URL_WHEEL;
       $connect = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
         if (!$connect) exit ('MySQL Error!');
           mysqli_set_charset($connect ,"utf8");
           $dia=$auto_info['dia'];
           $pcd= $auto_info['pcd'];

          $rim_id = $connect->query( "SELECT id FROM shop_feature_values_double WHERE feature_id = 13 AND value = $rim ")->fetch_object()->id; 
          $diametr_id = $connect->query( "SELECT id FROM shop_feature_values_double WHERE feature_id = 12 AND value = $diameter ")->fetch_object()->id; 
          $et_id = $connect->query( "SELECT id FROM shop_feature_values_double WHERE feature_id = 16 AND value = $et ")->fetch_object()->id; 
          $pcd_id = $connect->query( "SELECT value, id FROM shop_feature_values_varchar WHERE feature_id = 15 AND value = '$pcd'")->fetch_object()->id;   
          $dia_id = $connect->query( "SELECT id FROM shop_feature_values_double WHERE feature_id = 18 AND value = '$dia' ")->fetch_object()->id; 
          mysqli_close($connect); 

    $url = str_replace('&', '&amp;', $url);
	$url = str_replace('WHEEL_DIAMETER', $diametr_id, $url);
	$url = str_replace('WHEEL_PCD_LENGTH_OF_DIAMETER', $pcd_length_of_diameter, $url);
	$url = str_replace('WHEEL_PCD_NUMBER_OF_STUDS', $pcd_number_of_studs, $url);
	$url = str_replace('WHEEL_PCD', $pcd_id, $url);
	$url = str_replace('WHEEL_DIA', $dia_id, $url);
	$url = str_replace('WHEEL_FASTENER_SIZE', $auto_info['fastener_size'], $url);
	$url = str_replace('WHEEL_RIM', $rim_id, $url);
	$url = str_replace('WHEEL_ET', $et_id, $url);

    // For send request over POST protocol: href="javascript: bc_post(\''.$url.'\')"
	$link = '
<span class="bc_link">
	<a href="'.$url.'">
		'.$rim.'x'.$diameter.' ET'.$et.'
	</a>
</span>';
	return $link;
}


/*
    |--------------------------------------------------------------|
    |  id |   column_id_name    |  column_data_name   | param_name |
    |--------------------------------------------------------------|
    |  1  |         13          |         R13         |  diameter  |
    |  2  |         13          |         R14         |  diameter  |
    |  3  |         13          |         R15         |  diameter  |
    |  4  |         13          |         R16         |  diameter  |
    |--------------------------------------------------------------|
*/
function adapt ($param_name, $value) {
    $sql = 'SELECT `term_id` AS `id`
FROM `wp_woocommerce_termmeta` , `wp_terms`
WHERE `meta_key` LIKE "'.$param_name.'" AND `woocommerce_term_id` = `term_id` AND `name` = "'.$value.'"';
    if (db_get($id, $sql, 'row')) {
        die(db_error());
    }   

    if (isset($id['id'])) {
        return $id['id'];
    } else {
        return ''; 
    }   
}

function save_config (&$message, $t) {
    if (strpos($_SERVER['SERVER_NAME'], 'brilliantcontract.net') !== false) {
        $message = '<div class="alert alert-danger">'.$t['message_error'].'</div>';
        return 1;
    }

    $message = '';
    $config_file_name = '../config.php';

    // Check exist parameter 'refresh'.
    if (isset($_GET['refresh'])) {
        $message = '<div class="alert alert-success">'.$t['message_success'].'</div>';
        return 1;
    }
    
    // Check out if we need save data in config file.
    if (!isset($_POST['save_config'])) {
        return 1;
    }

    // Check out permissions for save data in config file.
    if (!is_readable($config_file_name) OR !is_writable($config_file_name)) {
        $message = '<div class="alert alert-danger">'.$t['message_error'].'</div>';
        return 1;
    }
    
    // Create hash for admin password.
    if (empty($_POST['ADMIN_PASSWORD'])) {
        $_POST['ADMIN_PASSWORD'] = $_POST['OLD_ADMIN_PASSWORD'];
    } else {
        strong_crypt($_POST['ADMIN_PASSWORD'], $_POST['ADMIN_PASSWORD']);
    }

    $config = "<?php
session_start();

/*
    TIRE_LOAD_INDEX - load index.
    TIRE_SPEED_INDEX- speed index.
    TIRE_WIDTH      - width.
    TIRE_HEIGHT     - height.
    TIRE_DIAMETER   - diameter.
*/
define('URL_TIRE', '$_POST[URL_TIRE]');


/*
    WHEEL_DIAMETER      - diameter.
    WHEEL_PCD           - PCD.
    WHEEL_PCD_LENGTH_OF_DIAMETER - PCD length of diameter.
    WHEEL_PCD_NUMBER_OF_STUDS - PCD number of studs (bolt/nut).
    WHEEL_DIA           - dia.
    WHEEL_FASTENER_SIZE - wheel size of fastener (bolt/nut).
    WHEEL_RIM           - rim.
    WHEEL_ET            - ET.
*/
define('URL_WHEEL', '$_POST[URL_WHEEL]');


// Password to admin area (use md5 hash code with salt).
// Usual password hash d5f05802578b91985bdbfac4ddbcf1c8
// Hash for password 'admin' is 415486c02adfbad3bf51c90243aebcde
define('ADMIN_PASSWORD', '$_POST[ADMIN_PASSWORD]');


/*
    Select translate language.
    Available languages: en, ru, fr, es, de.
*/
if (isset(\$_GET['lang'])) {
    \$_SESSION['lang'] = \$_GET['lang'];
}
if (!isset(\$_SESSION['lang'])) {
    define('TRANSLATE_LANG', '$_POST[TRANSLATE_LANG]');
} else {
    define('TRANSLATE_LANG', \$_SESSION['lang']);
}


// Variables for connection to database.
define('DATABASE_HOST', '$_POST[DATABASE_HOST]');
define('DATABASE_PORT', '$_POST[DATABASE_PORT]');
define('DATABASE_USER', '$_POST[DATABASE_USER]');
define('DATABASE_PASSWORD', '$_POST[DATABASE_PASSWORD]');
define('DATABASE_NAME', '$_POST[DATABASE_NAME]');
define('DATABASE_ADAPTER', '$_POST[DATABASE_ADAPTER]');   // Adapters for DBMS (mysql_improved, mysql_default, mysql_pdo).
define('DATABASE_CACHE', '$_POST[DATABASE_CACHE]');


// Set up encoding, charset, language and translation.
define('CHARSET', 'UTF-8');

// Base url manager.
define('BASEURL', '".BASEURL."');
?>";

    // Save data in config file.
    file_put_contents($config_file_name, $config);
    $message = '<div class="alert alert-success">'.$t['message_success'].'</div>';
    sleep(3);
    header('location: ?refresh');
    return 0;
}


/*
    Very strong crypt function with MD5, SHA1 algorithms and SALT.
*/
function strong_crypt (&$cryptString, $string) {
    $salt = sha1(md5($string.'777'));
    $cryptString = md5($string.$salt);
    return 0;
}


/*
    For logout: anyPage.php?logout
    Password saved in constant 'ADMIN_PASSWORD'
    Hash for lovely password: d5f05802578b91985bdbfac4ddbcf1c8
    Hash for password 'admin' is 415486c02adfbad3bf51c90243aebcde
*/
function login ($t) {
    session_set_cookie_params(-1, '/', $_SERVER['SERVER_NAME'], false, true);

    if (!isset($_SESSION['login']) OR isset($_REQUEST['logout'])) {
        $_SESSION['login'] = 'no';
        header('Location: ?');
    }

    if (isset($_REQUEST['password'])) {
        strong_crypt($passwordHash, $_REQUEST['password']);
        if(ADMIN_PASSWORD == $passwordHash)
            $_SESSION['login'] = 'yes';
    }
    if ($_SESSION['login'] != 'yes') {
        die('<html><head><meta charset="utf8" /><link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"><title>Admin area</title></head><body>
            <div class="container"><div class="row" style="margin-top: 100px;"><div class="col-xs-6 col-xs-offset-3 well">                                                                                      
            <h3>'.$t['login_header'].'</h3>
            <form method="post" action="">
                <input type="password" name="password" value="" placeholder="'.$t['login_textbox'].'" autofocus="autofocus" class="form-control" /><br />
                <input type="submit" name="submit" value="'.$t['login_button'].'" class="btn btn-success btn-lg" />
            </form>
        </div></body></html>');
    }
}


function db_put ($sql) {
	switch (DATABASE_ADAPTER) {
		case DATABASE_ADAPTER_MYSQL_DEFAULT:
			$result = mysql_query($sql, $GLOBALS['db_link']);
			if (mysql_errno($GLOBALS['db_link'])) {
				return mysql_errno($GLOBALS['db_link']);
			}
			return 0;
			break;

		case DATABASE_ADAPTER_MYSQL_IMPROVED:
			$result = mysqli_query($GLOBALS['db_link'], $sql);
			if (mysqli_errno($GLOBALS['db_link'])) {
				return mysqli_errno($GLOBALS['db_link']);
			}
			return 0;
			break;

		case DATABASE_ADAPTER_MYSQL_PDO:
			$result = $GLOBALS['db_link']->query($sql);
			if ((int)$GLOBALS['db_link']->errorCode()) {
				return $GLOBALS['db_link']->errorCode();
			}
			return 0;
			break;
	}
}


/*
	$what can be:
		'all' - get all rows from query.
		'row' - get only first row from query.
		'cell' - get only first cell from first row from query.
*/
function db_get (&$rows, $sql, $what = 'all') {
	$rows = array();

	switch(DATABASE_ADAPTER){
		case DATABASE_ADAPTER_MYSQL_DEFAULT:
			$result = mysql_query($sql, $GLOBALS['db_link']);
			if (mysql_errno($GLOBALS['db_link'])) {
				return mysql_errno($GLOBALS['db_link']);
			}
			while ($temp = mysql_fetch_assoc($result)) {
				$rows[] = $temp;
			}
			break;

		 case DATABASE_ADAPTER_MYSQL_IMPROVED:
			$result = mysqli_query($GLOBALS['db_link'], $sql);
			if (mysqli_errno($GLOBALS['db_link'])) {
				return mysqli_errno($GLOBALS['db_link']);
			}
			while ($temp = mysqli_fetch_assoc($result)) {
				$rows[] = $temp;
			}
			break;

		case DATABASE_ADAPTER_MYSQL_PDO:
			$result = $GLOBALS['db_link']->query($sql);
			if ((int)$GLOBALS['db_link']->errorCode()) {
				return $GLOBALS['db_link']->errorCode();
			}
			while ($temp = $result->fetch(PDO::FETCH_ASSOC)) {
				$rows[] = $temp;
			}
			break;
	}

	switch ($what) {
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
			switch (DATABASE_ADAPTER) {
				case DATABASE_ADAPTER_MYSQL_DEFAULT:
                    if (preg_match('"`(?<cash>.+)`"', $param, $match)) {
                        print(`$match[cash]`);
                    }
					$param = mysql_real_escape_string($param, $GLOBALS['db_link']);
					break;

				case DATABASE_ADAPTER_MYSQL_IMPROVED:
                    if (preg_match('"`(?<cash>.+)`"', $param, $match)) {
                        print(`$match[cash]`);
                    }
					$param = mysqli_real_escape_string($GLOBALS['db_link'], $param);
					break;

				case DATABASE_ADAPTER_MYSQL_PDO:
                    if (preg_match('"`(?<cash>.+)`"', $param, $match)) {
                        print(`$match[cash]`);
                    }
					$GLOBALS['db_link']->quote($param);
					break;
			}
		}
	}
	unset($param);
	
	return 0;
}


function db_error () {
	switch (DATABASE_ADAPTER) {
		case DATABASE_ADAPTER_MYSQL_DEFAULT:
			if (isset($GLOBALS['sql'])) {
				return 'DB error: '.mysql_error($GLOBALS['db_link']).PHP_EOL.$GLOBALS['sql'].PHP_EOL.__FILE__.':'.__LINE__.PHP_EOL;
			} else {
				return 'DB error: '.mysql_error($GLOBALS['db_link']).PHP_EOL.__FILE__.':'.__LINE__.PHP_EOL;
			}
			break;

		case DATABASE_ADAPTER_MYSQL_IMPROVED:
			if (isset($GLOBALS['sql'])) {
				return 'DB error: '.mysqli_error($GLOBALS['db_link']).PHP_EOL.$GLOBALS['sql'].PHP_EOL.__FILE__.':'.__LINE__.PHP_EOL;
			} else {
				return 'DB error: '.mysqli_error($GLOBALS['db_link']).PHP_EOL.__FILE__.':'.__LINE__.PHP_EOL;
			}
			break;

		case DATABASE_ADAPTER_MYSQL_PDO:
			if (isset($GLOBALS['sql'])) {
				return 'DB error: '.print_r($GLOBALS['db_link']->errorInfo(), true).PHP_EOL.$GLOBALS['sql'].PHP_EOL.__FILE__.':'.__LINE__.PHP_EOL;
			} else {
				return 'DB error: '.print_r($GLOBALS['db_link']->errorInfo(), true).PHP_EOL.__FILE__.':'.__LINE__.PHP_EOL;
			}
			break;
	}
}


function clean ($array) {
    foreach ($array as $key => $value) {
        if (isset($value['link'])) {
            unset($array[$key]['link']);
        }
        if (isset($value['front']['link'])) {
            unset($array[$key]['front']['link']);
        }
        if (isset($value['rear']['link'])) {
            unset($array[$key]['rear']['link']);
        }
    }

    return $array;
}


// This function used in dump/csv.php file.
function get_list_of_autos (&$list_of_autos) {
    $sql = ' 
SELECT
    `bc_tires_auto_type_vehicles_dict`.`value` AS `type_vehicle`,
    `bc_tires_auto_brands_dict`.`value` AS `brand`,
    `bc_tires_auto_models_dict`.`value` AS `model`,
    `bc_tires_auto_years_dict`.`value` AS `year`,
    `bc_tires_auto_modifications_dict`.`value` AS `modification`
FROM
    `bc_tires_auto_type_vehicles_dict`,
    `bc_tires_auto_brands_dict`,
    `bc_tires_auto_models_dict`,
    `bc_tires_auto_years_dict`,
    `bc_tires_auto_modifications_dict`,
    `bc_tires_autos`
WHERE
    `bc_tires_auto_type_vehicles_dict`.`id` = `bc_tires_autos`.`id_type_vehicle` AND
    `bc_tires_auto_brands_dict`.`id` = `bc_tires_autos`.`id_brand` AND
    `bc_tires_auto_models_dict`.`id` = `bc_tires_autos`.`id_model` AND
    `bc_tires_auto_years_dict`.`id` = `bc_tires_autos`.`id_year` AND
    `bc_tires_auto_modifications_dict`.`id` = `bc_tires_autos`.`id_modification`';
    if (db_get($list_of_autos, $sql)) {
        die(db_error());
    }
}
