<?php

/**
 * Class MyArrayObject
 */
class MyArrayObject implements ArrayAccess
{
    /**
     * @var array
     */
    private $container = [];

    /**
     * @param string $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * @param string $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset];
    }

    /**
     * @param string|null $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * @param string $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

$arrayObject = new MyArrayObject();
$arrayObject['test'] = 123;
$arrayObject['test2'] = 31;

var_dump($arrayObject['test']);
var_dump($arrayObject['test2']);

unset($arrayObject['test2']);

var_dump($arrayObject['test2']);
