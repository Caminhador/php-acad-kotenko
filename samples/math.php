<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

$i1 = 1;
$i2 = 2;
$i3 = 3;
$i4 = 4;

var_dump($i1 + $i2 * $i3);
var_dump(($i1 + $i2) * $i3);

var_dump($i4 / $i3);

var_dump(102 % 2);
var_dump(101 % 2);

var_dump(pow(3, 3));

echo PHP_EOL;

$i1++;
var_dump($i1);

++$i1;
var_dump($i1);

var_dump($i1 + $i1++ + ++$i1);
var_dump($i2 - $i2-- - --$i2);

echo PHP_EOL;

var_dump(isset($re));
$re = null;
var_dump(isset($re));

var_dump(empty($re));
unset($re);
var_dump(empty($re));

echo PHP_EOL;

var_dump(5.0 == 5);
var_dump(5.0 === 5);


$x = true;
if ($x == 0) {
    echo 0;
}
if ($x == 1) {
    echo 1;
}
if ($x == 2) {
    echo 2;
}
if ($x == 3) {
    echo 3;
}
