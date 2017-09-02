<?php

defined('DS') || define('DS', DIRECTORY_SEPARATOR);
define('FILE_ROUT', __DIR__ . DS . 'test.txt');

require_once __DIR__ . DS . 'FileReader.php';

$fileReader = new FileReader(FILE_ROUT);

foreach ($fileReader as $line) {
    var_dump($line);
}

require_once __DIR__ . DS . '/generator.php';
foreach (getLinesFromFile(FILE_ROUT) as $line) {
    var_dump($line);
}
