<?php

$q = 1;

function getData($data, $asArray = false)
{
    var_dump(__FUNCTION__);
    return $asArray ? [] : new stdClass();
}

$result = getData([], true);
var_dump($result);

echo PHP_EOL;

function oldMultiplyArguments($recordId)
{
    var_dump(__FUNCTION__);
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
    var_dump(__FUNCTION__);
    var_dump($recordId, $args);
}

newMultiplyArguments(1, 2, 3, 4);

var_dump(__FUNCTION__);

echo PHP_EOL;

$test = 'test';
$anonymousFunction = function () use ($test) {
    var_dump($test);
    return 123;
};
$anonymousFunction();

echo PHP_EOL;

$array = [1, 2, 3, 4, 5, 6];
$tester = 2;
$array2 = array_filter($array, function ($item) use ($tester) {
    return $item % $tester == 0;
});
var_dump('>>>>', $array2, $tester);

echo PHP_EOL;

function testAnon(array $args, $var, Closure $callback) {
    $callback($var, $args[0], $args[1]);
}
testAnon([5, 8], $tester, function ($tester, ...$args) {
    var_dump($args);
});

echo PHP_EOL;

$glob = 123;
function globUsage()
{
    global $glob;
    $glob = 'test';

    unset($glob);
}

var_dump($glob);
globUsage();
var_dump($glob);

echo PHP_EOL;

function callFromVariable()
{
    var_dump(__FUNCTION__);
}
$part1 = 'call';
$part2 = 'From';
$part3 = 'Variable';
$funcName = $part1 . $part2 . $part3;
$funcName();
