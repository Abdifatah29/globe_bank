<?php

require_once 'db_credentials.php';

function db_connect()
{
        $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE );

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
          
        return $conn;
}


function db_close($conn)
{
    return isset($conn) ? mysqli_close($conn) : $conn;
}

