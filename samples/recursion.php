<?php

function toArray(...$args)
{
    return $args;
}

list($e1, $e2, $e3) = toArray(3, 5, 6, 7, 8);
var_dump($e1, $e2, $e3);

echo PHP_EOL;

list(,,, $e4) = toArray(3, 5, 6, 7, 8);
var_dump($e4);

echo PHP_EOL;

$elements = toArray(3, 5, 6, 7, 8);
var_dump($elements[3]);

echo PHP_EOL;

$e41 = toArray(3, 5, 6, 7, 8)[3];
var_dump($e41);

echo PHP_EOL;

function getAssocArray()
{
    return [
        'id' => 1,
        'title' => 'test',
        'quantity' => 12
    ];
}
$record = getAssocArray();
var_dump($record['title'], $record['quantity']);

echo PHP_EOL;

function power($number, $pow)
{
    if ($pow < 0) {
        return 1 / ($number * power($number, abs($pow) - 1));
    }
    if ($pow == 0) {
        return 1;
    }
    if ($pow == 1) {
        return $number;
    }

    return $number * power($number, $pow - 1);
}

$n1 = 3;
$n2 = 3;
var_dump(power($n1, $n2), pow($n1, $n2));

echo PHP_EOL;

function countRecursive($array) {
    $count = 0;
    foreach($array as $item){
        if(is_array($item)){
            $count += countRecursive($item);
        }
        $count++;
    }
    return $count;
}


$array = [
    1,
    2,
    3,
    [
        2,
        4,
        5,
        [
            3,
            2,
            1,
            3
        ],
        4,
        6
    ],
    3,
    4
];
// res 11
var_dump(countRecursive($array));

$baseDir = 'D:\dkotenko\php-acad-kotenko\samples';

function readRecursive($dir, $level) {
    foreach ( scandir($dir) as $item ) {
        if ( in_array($item, ['.', '..']) ) {
            continue;
        }
        echo str_repeat('-', $level), $item , PHP_EOL;
        $rout = $dir . '/' . $item;
        if ( is_dir($rout) ) {
            readRecursive($rout, $level+1);
        }
    }
}

readRecursive($baseDir, 0);
