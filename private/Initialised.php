<!-- This file will take care of loading all files -->

<?php
define('PRIVATE_PATH', dirname(__FILE__));
define('PROJECT_PATH', dirname(__DIR__));
define('PUBLIC_PATH', PROJECT_PATH . '/public');
define('SHARED_PATH', PRIVATE_PATH . '/shared');

var_dump(PRIVATE_PATH);
require_once('functions.php');
