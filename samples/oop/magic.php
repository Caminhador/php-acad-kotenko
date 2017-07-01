<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

/**
 * Class Test
 *
 * @property int $qwerty
 * @property int $ytrewq
 *
 * @method someAction($p1, $p2, $p3)
 */
class Test
{
    /**
     * @var array
     */
    private $params = [];

    /**
     * @param string $name
     * @return mixed
     * @throws Exception
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->params)) {
            return $this->params[$name];
        }

        throw new Exception("Param {$name} is undefined");
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->params[$name] = $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ': completed';
    }

    /**
     * @param string $name
     * @param array $arguments
     */
    public function __call($name, $arguments)
    {
        echo "Method {$name} is completed";
    }
}
