<?php

class TestClass
{
    var $test = 1;

    const TEST = 2;

    function test()
    {
        return 3;
    }
}

$object = new TestClass();
var_dump($object->test);
var_dump($object->test());
var_dump(TestClass::TEST, $object::TEST);
