<?php

if (true) {
    echo 'OK' . PHP_EOL;
}
if (1 > 2 && 4 < 6) {
    echo 'OK' . PHP_EOL;
}
if (1 > 2 || 4 < 6) {
    echo 'OK' . PHP_EOL;
}
if (1 > 2 and 4 < 6) {
    echo 'OK' . PHP_EOL;
}
if (1 > 2 or 4 < 6) {
    echo 'OK' . PHP_EOL;
}

echo PHP_EOL;

var_dump((1 < 2 && 2 < 3) ? 'OK' : 'FALSE');
$t = 1 < 2 ? 4 > 5 ? 'OK' : 5 > 3 ? 'true' : 'error' : 'false';
var_dump($t);

$r = 3 - 3 ?: 'false';
$r = '' ?: 'false';
$r = null ?: 'false';
$r = [] ?: 'false';
$r = 4 + 3 ?: 'false';
$r = true ?: 'false';
var_dump($r);

echo PHP_EOL;

if (false) {
    echo 1;
} elseif (3) {
    echo 3;
} else {
    echo 123;
}

if (false) echo 1; elseif (3) echo 3; else echo 123;

echo PHP_EOL;
echo PHP_EOL;

$test = 3;
switch ($test) {
    case 1:
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    default:
        echo 'nothing';
}