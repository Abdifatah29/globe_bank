<?php

// This file will take care of loading all files

/*
    buffering page content
    taking those and flsuhing into the web server
    web server then returns them to the browser
*/
ob_start(); //Output buffering is turned on.

define('PRIVATE_PATH', dirname(__FILE__));
define('PROJECT_PATH', dirname(__DIR__));
define('PUBLIC_PATH', PROJECT_PATH . '/public');
define('SHARED_PATH', PRIVATE_PATH . '/shared');

$doc_root = substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '/public') + 7);

define('WWW_ROOT', $doc_root);

require_once('functions.php');
require_once('database.php');
require_once('query_functions.php');


$db = db_connect();