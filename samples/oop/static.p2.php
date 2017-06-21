<?php

class ParentClass
{
    public static function test()
    {
        return __CLASS__;
    }

    public static function run()
    {
        echo static::test();
    }
}

class ChildClass extends ParentClass
{
    public static function test()
    {
        return __CLASS__;
    }
}

ChildClass::run();
