<?php

require_once 'spl-autoload.php';

$animal = new \classes\Animal();
echo $animal->run(), $animal->actionRun();

