<?php

session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: /samples/auth');
    exit;
}

$config = require_once __DIR__ . '/configs/users.php';

require_once __DIR__ . '/lib/auth.php';

if (isAuthorized()) {
    require_once __DIR__ . '/application.php';
} else {
    require_once __DIR__ . '/login.php';
}
