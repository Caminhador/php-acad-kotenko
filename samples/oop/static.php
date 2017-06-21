<?php

class StaticClass
{
    private static $test = 1;

    public static function getTest()
    {
        echo 12;
        return self::$test + self::getSome();
    }

    public function getSome()
    {
        $this->getTest();
        return mt_rand();
    }
}

$object = new StaticClass();
var_dump($object->getSome());
