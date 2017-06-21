<?php

class Test extends ParentClass
{
    public function testMethod()
    {
        foreach ($this as $key => $value) {
            echo "{$key} => {$value}<br>";
        }
    }
}

class ParentClass
{
    public $q1 = 1;
    protected $q2 = 2;
    private $q3 = 3;

    public function parentMethod()
    {
        foreach ($this as $key => $value) {
            echo "{$key} => {$value}<br>";
        }
    }
}

$object = new Test();

echo 'Outside:<br>';
foreach ($object as $key => $value) {
    echo "{$key} => {$value}<br>";
}

echo 'Child:<br>';
$object->testMethod();

echo 'Parent:<br>';
$object->parentMethod();
