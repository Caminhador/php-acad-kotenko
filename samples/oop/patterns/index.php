<?php

require_once 'spl-autoload.php';

$config = \classes\Single::getInstance();
$config->set('test', 123);

\classes\Register::set('single', $config);

new \classes\Test();

