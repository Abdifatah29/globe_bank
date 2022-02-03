<?php

require_once '../../../private/Initialised.php';

$test = $_GET['test'] ?? '';

if ($test == '404') {
    error_404();
} elseif($test == '500') {
    error_500();
} elseif($test == 'redirect')
{
    header('Location: ' . setUrlPath('/staff/subjects/index.php'));
    exit();
} else{
    echo 'no error';
}

