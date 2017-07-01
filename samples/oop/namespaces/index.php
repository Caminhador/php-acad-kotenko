<?php

require_once 'spl-autoload.php';

use classes\Animal;
use lib\Animal as AnimalLib;

$animal = new Animal();
$animalLib = new AnimalLib();

var_dump($animal->a(), $animalLib->a());
