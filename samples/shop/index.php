<?php

require_once __DIR__ . '/lib/router.php';
$parts = parseUrl($_SERVER['REQUEST_URI']);
$directory = __DIR__ . '/' . $parts['directory'];

/** @var $db MySQLi connection (global variable) */
$db = null;

initShop($directory, $parts['file'], $parts['isAdmin']);
