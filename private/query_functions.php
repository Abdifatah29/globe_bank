<?php


function find_subbjects()
{
    global $db;

    $sql = "SELECT * FROM `pages` ORDER BY position ASC";
    $query = mysqli_query($db, $sql);

    return $query;
}