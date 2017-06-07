<?php

require_once __DIR__ . '/lib/db.php';
$dbConfig = require_once __DIR__ . '/configs/db.php';

$db = getDbConnection(
    $dbConfig['server'],
    $dbConfig['user'],
    $dbConfig['password'],
    $dbConfig['db'],
    $dbConfig['charset']
);

$migrations = array_filter(scandir(__DIR__ . '/migrations'), function ($item) {
    return !in_array($item, ['.', '..']);
});

foreach ($migrations as $migration) {
    echo $migration . '...';
    require_once __DIR__ . '/migrations/' . $migration;
    echo 'OK' . PHP_EOL;
}
