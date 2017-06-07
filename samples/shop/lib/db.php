<?php

function getDbConnection($host, $user, $pass, $db, $charset = 'utf8')
{
    $connection = mysqli_connect($host, $user, $pass, $db);
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    mysqli_set_charset($connection, $charset);

    return $connection;
}
