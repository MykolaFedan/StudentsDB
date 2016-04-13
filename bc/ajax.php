<?php
require 'config.php';
require 'lib.php';
require 'translate.php';
$t = $t[TRANSLATE_LANG];


if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = '';
}
switch ($_REQUEST['action']) {
	case 'get_form':
		include 'form.php';
		break;

    case 'get_list_of_auto_brands':
        get_list_of_auto_brands($list_of_auto_brands, $_REQUEST['auto_type_vehicle']);
        list_to_json($json_list_of_auto_brands, $list_of_auto_brands);
        echo $json_list_of_auto_brands;
        break;

	case 'get_list_of_auto_models':
        get_list_of_auto_models($list_of_auto_models, $_REQUEST['auto_type_vehicle'], $_REQUEST['auto_brand']);
        list_to_json($json_list_of_auto_models, $list_of_auto_models);
        echo $json_list_of_auto_models;
		break;

	case 'get_list_of_auto_years':
        get_list_of_auto_years($list_of_auto_years, $_REQUEST['auto_type_vehicle'], $_REQUEST['auto_brand'], $_REQUEST['auto_model']);
        list_to_json($json_list_of_auto_years, $list_of_auto_years);
        echo $json_list_of_auto_years;
		break;

	case 'get_list_of_auto_modifications':
        get_list_of_auto_modifications($list_of_auto_modifications, $_REQUEST['auto_type_vehicle'], $_REQUEST['auto_brand'], $_REQUEST['auto_model'], $_REQUEST['auto_year']);
        list_to_json($json_list_of_auto_modifications, $list_of_auto_modifications);
        echo $json_list_of_auto_modifications;
		break;

    case 'get_results':
        get_results($auto_info, $_REQUEST['auto_type_vehicle'], $_REQUEST['auto_brand'], $_REQUEST['auto_model'], $_REQUEST['auto_year'], $_REQUEST['auto_modification']);
        include 'results.php';
        break;

    case 'get_results_json':
        get_results($auto_info, $_REQUEST['auto_type_vehicle'], $_REQUEST['auto_brand'], $_REQUEST['auto_model'], $_REQUEST['auto_year'], $_REQUEST['auto_modification']);
        echo json_encode($auto_info);
        break;

    case 'get_brand_names':
        echo get_brand_names($_REQUEST['id']);
        break;

	default:
        die('Error: you send don\'t exists request.');
		break;
}
?>
