<?php

$result = print('test');
var_dump($result);

echo 'qwerty' . PHP_EOL;

echo 'qwe', 'test', 'some string', 123, PHP_EOL;

print_r(['test', 123]);

printf('test %s qwerty %f', 'PHP', 7.1);

echo PHP_EOL;

$q1 = 'some string';
var_dump('=== $q1 ===');
var_dump("=== {$q1} ===");
$js = <<<JS
console.log('test');
JS;
echo $js . PHP_EOL;

"test\r";
"test\n";

$concat1 = 'test';
$concat2 = 'qwerty_' . $concat1;
$concat2 .= '_test';

var_dump($concat2);

$printf = printf('test_%s_test', 'qwerty');
var_dump($printf);
