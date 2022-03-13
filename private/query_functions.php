<?php


function find_subbjects()
{
    global $db;

    $sql = "SELECT * FROM `pages` ORDER BY position ASC";
    $query = mysqli_query($db, $sql);

    if (!$query) {
        die('Database query failed');
    }

    return $query;
}


function find_pages()
{
    global $db;

    $sql = "SELECT * FROM pages ORDER BY subject_id ASC , position ASC";
    $query = mysqli_query($db, $sql);

    if (!$query) {
        die('Database query failed');
    }

    return $query;
}