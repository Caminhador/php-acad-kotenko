<?php

error_reporting(E_ALL);

$file = __DIR__ . '/filestorage/stream-test.txt';

function readMyFile($file, $length = null)
{
    $length = $length ?: filesize($file);
    $result = '';

    $resource = fopen($file, 'r');
    while (!feof($resource)) {
        $result .= fread($resource, $length);
    }

    fclose($resource);
    return $result;
}

echo nl2br(readMyFile($file));

$data = [
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed ',
    'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ',
    'nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
];

$resource = fopen($file, 'a');
foreach ($data as $row) {
    fwrite($resource, $row . PHP_EOL);
}
fclose($resource);

echo nl2br(readMyFile($file));

echo '<hr>';

var_dump(glob('tasks/m*.php'));