<?php

namespace classes;

class Single
{
    private $properties = [];

    private static $instance = null;

    private function __construct() {}
    private function __clone() {}

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function set($attribute, $value)
    {
        $this->properties[$attribute] = $value;
    }

    public function get($attribute, $defaultValue = null)
    {
        return array_key_exists($attribute, $this->properties) ?
            $this->properties[$attribute] : $defaultValue;
    }
}