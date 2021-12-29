<?php

/*
    Database Configuration
    (ADD YOUR MAIN SERVER DB DETAILES HERE)
*/
define('DB_HOST', 'shareddb-k.hosting.stackcp.net'); // Your mySQL Host 
define('DB_USER', 'freakplayer_tkuser'); // Your mySQL Databse username
define('DB_PASS', 'freakplayer.tk'); // Your mySQL Databse Password
define('DB_NAME', 'freakplayer.tkdata-39374f07'); // The database where you have dumped the included sql file


/*
    Set main domain
    Example : http://my-super-domain.com
*/
define('MAIN_DOMAIN','https://freakplayer.tk');


/*
    Application firewall
    val : true/false
*/
define('FIREWALL', false);

/**
 * Change Loadbalancer and main script cominication API key here, it is important
 * If you changed it here, you need change it in both server's config
 * default : 12345
 * val : any string
 */
define('LOADBALANCER_API_SECRET_KEY', '12345');

/*
    Application debug mode
    val : true/false
*/
define('DEBUG', false);


/*
    If you install script on sub folder, insert that folder name here
    example : cdn1.mydomain.com/loadbalancer
    define('PROOT', '/loadbalancer');
*/
define('PROOT', '');


/*
    Application root directory
*/
define('ROOT',dirname(__FILE__,2));


define('STREAM_DEBUG', false);
define('CURL_MAX_SPEED', 0);
define('GDRIVE_API', 'AIzaSyD43F1N3Wvj2vfqpgyImQgv81eQylP-bJk');
define('_SEC_LOCK', '#$wel');
define('GDRIVE_IDENTIFY','__001');


$config = [];

function dnd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}