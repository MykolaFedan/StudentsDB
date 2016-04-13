<?php
session_start();
include '/wa-config/db.php' ;

/*
    TIRE_LOAD_INDEX - load index.
    TIRE_SPEED_INDEX- speed index.
    TIRE_WIDTH      - width.
    TIRE_HEIGHT     - height.
    TIRE_DIAMETER   - diameter.
*/
define('URL_TIRE', 'category/shini/?
shirina[]=TIRE_WIDTH&
prof_l[]=TIRE_HEIGHT&
d_ametr[]=TIRE_DIAMETER');


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
define('URL_WHEEL', 'category/diski/?

diametr_diska[]=WHEEL_DIAMETER&
shirina_diska[]=WHEEL_RIM&
pcd[]=WHEEL_PCD&
dia=WHEEL_DIA&
et[]=WHEEL_ET&');


// Password to admin area (use md5 hash code with salt).
// Usual password hash d5f05802578b91985bdbfac4ddbcf1c8
// Hash for password 'admin' is 415486c02adfbad3bf51c90243aebcde
define('ADMIN_PASSWORD', '415486c02adfbad3bf51c90243aebcde');


/*
    Select translate language.
    Available languages: en, ru, fr, es, de.
*/
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
if (!isset($_SESSION['lang'])) {
    define('TRANSLATE_LANG', 'ru');
} else {
    define('TRANSLATE_LANG', $_SESSION['lang']);
}

$config = require '../wa-config/db.php';
//получение данных


// Variables for connection to database.
define('DATABASE_HOST', $config['default']['host']);
define('DATABASE_PORT', $config['default']['port']);
define('DATABASE_USER', $config['default']['user']);
define('DATABASE_PASSWORD', $config['default']['password']);
define('DATABASE_NAME',   $config['default']['database']);
define('DATABASE_ADAPTER', 'mysql_default');   // Adapters for DBMS (mysql_improved, mysql_default, mysql_pdo).
define('DATABASE_CACHE', 'true');


// Set up encoding, charset, language and translation.
define('CHARSET', 'UTF-8');

// Base url manager.
define('BASEURL', 'http://kolesa.com/filter/bc/manager');
?>