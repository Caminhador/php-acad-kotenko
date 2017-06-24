<?php

abstract class Car
{
    const WHEELS_QUANTITY = 4;

    protected $engine;

    public abstract function drive($speed);

    public function brake()
    {
        echo 'Weeeeee';
    }
}

class Citroen extends Car
{
    public function drive($speed)
    {
        echo 'Le dyr-dyr-dyr: ' . $speed;
    }
}

class Mersedes extends Car
{
    public function drive($speed)
    {
        echo 'Das brrrrrr: ' . $speed;
    }
}

abstract class Sedan extends Mersedes
{
}


$citroen = new Citroen();
$citroen->drive(100);

$mersedes = new Mersedes();
$mersedes->drive(120);
