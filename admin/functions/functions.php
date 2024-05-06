<?php
include_once('config.php');
require_once(AUTOLOAD_PATH);

date_default_timezone_set('Asia/Manila');
ini_set('display_errors', 1);

$cookieLifetime = 60;


session_set_cookie_params($cookieLifetime, '/', $_SERVER['HTTP_HOST'], false, true);
session_start();

include_once HELPER_PATH . '/Attachment.php';

include('db.config.php');


//foreach with ending controller name
//NO NEED TO INCLUDE THE FILE HERE, AUTOMATICALLY INCLUDED
foreach (glob(FUNCTION_PATH . '/*Controller.php') as $filename) {
    include_once $filename;
}
