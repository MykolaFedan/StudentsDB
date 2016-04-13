<?php
session_start();

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
define('URL_WHEEL', 'index.php?
diameter=WHEEL_DIAMETER&
pcd=WHEEL_PCD&
dia=WHEEL_DIA&
nut=WHEEL_FASTENER_SIZE&
rim=WHEEL_RIM&
et=WHEEL_ET&
pcd_diameter=WHEEL_PCD_LENGTH_OF_DIAMETER&
pcd_studs=WHEEL_PCD_NUMBER_OF_STUDS');


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
    define('TRANSLATE_LANG', 'ua');
} else {
    define('TRANSLATE_LANG', $_SESSION['lang']);
}


// Variables for connection to database.
define('DATABASE_HOST', 'mysqlua2.ukrhosting.com');
define('DATABASE_PORT', '3306');
define('DATABASE_USER', 'shaleni_dbuser');
define('DATABASE_PASSWORD', 'S8AdEveb');
define('DATABASE_NAME', 'shaleni_shop');
define('DATABASE_ADAPTER', 'mysql_improved');   // Adapters for DBMS (mysql_improved, mysql_default, mysql_pdo).
define('DATABASE_CACHE', 'true');


// Set up encoding, charset, language and translation.
define('CHARSET', 'UTF-8');

// Base url manager.
define('BASEURL', 'http://kolesa.com/filter/bc/manager');
?>