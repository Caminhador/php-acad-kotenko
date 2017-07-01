<?php

namespace classes;

class Register
{
    private static $container = [];

    public static function set($key, $object)
    {
        self::$container[$key] = $object;
    }

    public static function get($key)
    {
        return self::$container[$key];
    }
}