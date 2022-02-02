<?php

$page_title ?? 'Staff Menu';

setUrlPath('/stylesheets/staff.css');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBI - <?= htmlChars($page_title)?></title>
    <link rel="stylesheet" media="all" href="<?= setUrlPath('/stylesheets/staff.css')?>"/>
</head>
<body>
    <header>
        <h1>GBI Staff Area</h1>
    </header>
    <navigation>
        <ul>
            <li><a href="<?= setUrlPath('/staff/index.php') ?>">Menu</a></li>
        </ul>
    </navigation>


