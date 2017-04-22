<?php

$string = ' 2test';
$int = (int)$string;
var_dump($int);

$int = intval('test 3');
var_dump($int);

$string2 = (string)[1,2,3];
var_dump($string2);

$array = (array)'test';
var_dump($array);

$string3 = 'qwerty';
var_dump($string3[3]);
