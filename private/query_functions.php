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


function find_subject_by_id(int $id) : array
{
    global $db;

    $sql = "SELECT * FROM subjects WHERE id = '" . $id . "'";
    $result = mysqli_query($db, $sql);

    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    if (!$result) {
        die('Database query failed');
    }

    return $subject;
}

function insert_subjects(...$param)
{
    global $db;

    $sql = "INSERT INTO subjects";
    $sql.= "(menu_name, position, visible)";
    $sql.= "VALUES (";
    $sql.= "'" . $param[0]  ."',";
    $sql.= "'" . $param[1] . "',";
    $sql.= "'" . $param[2] .  "')";
  
    $result = mysqli_query($db, $sql);
    if ($result) {
      return true;
    } else{
      echo mysqli_error($db);
    }
}