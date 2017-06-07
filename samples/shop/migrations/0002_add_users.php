<?php

/**
 * @var mysqli $db
 */

$query = '
INSERT
    INTO users (email, name)
    VALUES ("d.kotenko@i.ua", "Dmytro Kotenko")';
mysqli_query($db, $query);