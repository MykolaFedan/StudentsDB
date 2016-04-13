<?php
session_set_cookie_params(-1, '/', $_SERVER['SERVER_NAME'], false, true);
$without_connection_to_db = true;
require '../config.php';
require '../lib.php';
require '../translate.php';
$t = $t[TRANSLATE_LANG];
login($t);
save_config($message, $t);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo $t['page_title']; ?></title>
    <script src="../jquery.js"></script>

    <!-- Include bootstrap lib. -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <a href="javascript:void(0);" onclick="$('#ua').prop('checked', true); $('#config_form').submit();"><img src="flags/ua.png" alt="UA" /> </a>
        <a href="javascript:void(0);" onclick="$('#en').prop('checked', true); $('#config_form').submit();"><img src="flags/us.png" alt="EN" /></a>
        <a href="javascript:void(0);" onclick="$('#de').prop('checked', true); $('#config_form').submit();"><img src="flags/de.png" alt="DE" /></a>
        <a href="javascript:void(0);" onclick="$('#es').prop('checked', true); $('#config_form').submit();"><img src="flags/es.png" alt="ES" /></a>
        <a href="javascript:void(0);" onclick="$('#fr').prop('checked', true); $('#config_form').submit();"><img src="flags/fr.png" alt="FR" /></a>
        <a href="javascript:void(0);" onclick="$('#ru').prop('checked', true); $('#config_form').submit();"><img src="flags/ru.png" alt="RU" /></a>
    </div>
</div>

<div class="row" style="margin-top: 20px;">
    <div class="col-xs-8 col-xs-offset-2">
		<ul class="nav nav-tabs nav-justified">
			<li><a href="../utils/dumper/index.php" target="_blank"><?php echo $t['menu_update_database']; ?></a></li>
            <li><a href="../manager/index.php" target="_blank"><?php echo $t['menu_manager']; ?></a></li>
			<li><a href="?logout"><?php echo $t['menu_exit']; ?></a></li>
        </ul>
    </div>
</div>

<div class="row" style="margin-top: 10px;">
    <div class="col-xs-6 col-xs-offset-3">
	    <?php echo $message; ?>
    </div>
</div>

<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <form method="post" id="config_form" action="index.php" class="form-inline" style="margin-bottom: 40px;">
            <input type="hidden" name="OLD_ADMIN_PASSWORD" value="<?php echo ADMIN_PASSWORD; ?>" />  
            <input type="hidden" name="save_config" value="true" />

            <h3><?php echo $t['header_change_password']; ?></h3>
            <input type="hidden" name="action" value="change_admin_password" />
            <?php echo $t['label_new_password']; ?><input type="text" name="ADMIN_PASSWORD" class="form-control" />

            <h3><?php echo $t['header_change_translate']; ?></h3>
            <input type="hidden" name="action" value="change_db_translate" />
            <div class="row">
                <div class="col-xs-3">
                    <label>
                        <input type="radio" name="TRANSLATE_LANG" id="ua" value="ua" <?php echo ((TRANSLATE_LANG == 'en')?'checked':''); ?> class="form-control" />
                        <?php echo $t['label_lang_ukranian']; ?>
                    </label>
                </div>
                <div class="col-xs-3">
                    <label>
                        <input type="radio" name="TRANSLATE_LANG" id="en" value="en" <?php echo ((TRANSLATE_LANG == 'en')?'checked':''); ?> class="form-control" />
                        <?php echo $t['label_lang_english']; ?>
                    </label>
                </div>
                <div class="col-xs-3">
                    <label>
                    <input type="radio" name="TRANSLATE_LANG" id="ru" value="ru" <?php echo ((TRANSLATE_LANG == 'ru')?'checked':''); ?> class="form-control" />
                        <?php echo $t['label_lang_russian']; ?>
                    </label>
                </div>
                <div class="col-xs-3">
                    <label>
                        <input type="radio" name="TRANSLATE_LANG" id="es" value="es" <?php echo ((TRANSLATE_LANG == 'es')?'checked':''); ?> class="form-control" />
                        <?php echo $t['label_lang_spanish']; ?>
                    </label>
                </div>
                <div class="col-xs-3">
                    <label>
                        <input type="radio" name="TRANSLATE_LANG" id="de" value="de" <?php echo ((TRANSLATE_LANG == 'de')?'checked':''); ?> class="form-control" />
                        <?php echo $t['label_lang_german']; ?>
                    </label>
                </div>
                <div class="col-xs-3">
                    <label>
                        <input type="radio" name="TRANSLATE_LANG" id="fr" value="fr" <?php echo ((TRANSLATE_LANG == 'fr')?'checked':''); ?> class="form-control" />
                        <?php echo $t['label_lang_french']; ?>
                    </label>
                </div>
            </div>


            <h3><?php echo $t['header_change_address_to_form_search']; ?></h3>
            <table class="table">
                <tr>
                    <td>TIRE_LOAD_INDEX</td>
                    <td><?php echo $t['label_tire_load_index']; ?></td>
                </tr><tr>
                    <td>TIRE_SPEED_INDEX</td>
                    <td><?php echo $t['label_tire_speed_index']; ?></td>
                </tr><tr>
                    <td>TIRE_WIDTH</td>
                    <td><?php echo $t['label_tire_width']; ?></td>
                </tr><tr>
                    <td>TIRE_HEIGHT</td>
                    <td><?php echo $t['label_tire_height']; ?></td>
                </tr><tr>
                    <td>TIRE_DIAMETER</td>
                    <td><?php echo $t['label_tire_diameter']; ?></td>
                </tr>
            </table>
            <p class="text-muted"><?php echo $t['note_all_filds_not_depend']; ?></p>
            <textarea type="text" name="URL_TIRE" class="form-control" style="width: 100%" rows="7"><?php echo URL_TIRE; ?></textarea>
            <table class="table" style="margin-top: 30px;">
                <tr>
                    <td>WHEEL_DIAMETER</td>
                    <td><?php echo $t['label_wheel_diameter']; ?></td>
                </tr><tr>
                    <td>WHEEL_PCD</td>
                    <td><?php echo $t['label_wheel_pcd']; ?></td>
                </tr><tr>
                    <td>WHEEL_PCD_LENGTH_OF_DIAMETER</td>
                    <td><?php echo $t['label_wheel_pcd_length_of_diameter']; ?></td>
                </tr><tr>
                    <td>WHEEL_PCD_NUMBER_OF_STUDS</td>
                    <td><?php echo $t['label_wheel_pcd_number_of_studs']; ?></td>
                </tr><tr>
                    <td>WHEEL_DIA</td>
                    <td><?php echo $t['label_wheel_dia']; ?></td>
                </tr><tr>
                    <td>WHEEL_FASTENER_SIZE</td>
                    <td><?php echo $t['label_wheel_fastener_size']; ?></td>
                </tr><tr>
                    <td>WHEEL_RIM</td>
                    <td><?php echo $t['label_wheel_rim']; ?></td>
                </tr><tr>
                    <td>WHEEL_ET</td>
                    <td><?php echo $t['label_wheel_et']; ?></td>
                </tr>
            </table>
            <p class="text-muted"><?php echo $t['note_all_filds_not_depend']; ?></p>
            <input type="hidden" name="action" value="change_url_to_search_form" />
            <textarea type="text" name="URL_WHEEL" class="form-control" style="width: 100%" rows="7"><?php echo URL_WHEEL; ?></textarea>

            <h3><?php echo $t['header_change_database_properties']; ?></h3>
            <p>
                <?php echo $t['label_note_get_connection']; ?>
            </p>
            <input type="hidden" name="action" value="change_database_config" />
            <table class="table">
                <tr>
                    <td><?php echo $t['label_database_address']; ?></td>
                    <td><input type="text" name="DATABASE_HOST" value="<?php echo htmlspecialchars(DATABASE_HOST); ?>" class="form-control" /></td>
                </tr><tr>
                    <td><?php echo $t['label_database_port']; ?></td>
                    <td><input type="text" name="DATABASE_PORT" value="<?php echo htmlspecialchars(DATABASE_PORT); ?>" class="form-control" /></td>
                </tr><tr>
                    <td><?php echo $t['label_database_user']; ?></td>
                    <td><input type="text" name="DATABASE_USER" value="<?php echo htmlspecialchars(DATABASE_USER); ?>" class="form-control" /></td>
                </tr><tr>
                    <td><?php echo $t['label_database_password']; ?></td>
                    <td><input type="text" name="DATABASE_PASSWORD" value="<?php echo htmlspecialchars(DATABASE_PASSWORD); ?>" class="form-control" /></td>
                </tr><tr>
                    <td><?php echo $t['label_database_name']; ?></td>
                    <td><input type="text" name="DATABASE_NAME" value="<?php echo htmlspecialchars(DATABASE_NAME); ?>" class="form-control" /></td>
                </tr>
                <tr>
                    <td><?php echo $t['label_database_adapter']; ?></td>
                    <td>
                        <select name="DATABASE_ADAPTER" class="form-control">
                            <option value="<?php echo DATABASE_ADAPTER_MYSQL_DEFAULT; ?>"
                                <?php echo (DATABASE_ADAPTER_MYSQL_DEFAULT==DATABASE_ADAPTER?'selected':''); ?>>
                                <?php echo DATABASE_ADAPTER_MYSQL_DEFAULT; ?></option>
                            <option value="<?php echo DATABASE_ADAPTER_MYSQL_IMPROVED; ?>"
                                <?php echo (DATABASE_ADAPTER_MYSQL_IMPROVED==DATABASE_ADAPTER?'selected':''); ?>>                    
                                <?php echo DATABASE_ADAPTER_MYSQL_IMPROVED; ?></option>
                            <option value="<?php echo DATABASE_ADAPTER_MYSQL_PDO; ?>"
                                <?php echo (DATABASE_ADAPTER_MYSQL_PDO==DATABASE_ADAPTER?'selected':''); ?>>                    
                                <?php echo DATABASE_ADAPTER_MYSQL_PDO; ?></option>
                        </select>
                </tr>
                <tr>
                    <td><?php echo $t['label_database_cache']; ?></td>
                    <td>
                        <select name="DATABASE_CACHE" class="form-control">
                            <option value="true" <?php echo (DATABASE_CACHE=='true'?'selected':''); ?>>Да</option>
                            <option value="false" <?php echo (DATABASE_CACHE=='false'?'selected':''); ?>>Нет</option>                                                                                 
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="<?php echo $t['button_save_config']; ?>" class="btn btn-primary" />
        </form>
    </div>
</div>
</div>
</body>
</html>
