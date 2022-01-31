<!-- This file will take care of loading all files -->

<?php
define('PRIVATE_PATH', dirname(__FILE__));
define('PROJECT_PATH', dirname(__DIR__));
define('PUBLIC_PATH', PROJECT_PATH . '/public');
define('SHARED_PATH', PRIVATE_PATH . '/shared');

$doc_root = substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '/public') + 7);

define('WWW_ROOT', $doc_root);

require_once('functions.php');
