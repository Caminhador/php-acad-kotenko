<?php

$q = 1;

function getData($data, $asArray = false)
{
    return $asArray ? [] : new stdClass();
}

$result = getData([], true);
var_dump($result);

echo PHP_EOL;

function oldMultiplyArguments($recordId)
{
    $args = func_get_args();
    // func_get_arg(2);
    var_dump($recordId, $args, func_num_args());
}

oldMultiplyArguments(2, 6, 'test', 321);

echo PHP_EOL;

oldMultiplyArguments(1);

echo PHP_EOL;

function newMultiplyArguments($recordId, ...$args)
{
    var_dump($recordId, $args);
}

newMultiplyArguments(1, 2, 3, 4);
