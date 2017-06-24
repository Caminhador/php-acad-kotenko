<?php

function __autoload($class)
{
    $directories = [
        __DIR__ . '/classes',
        __DIR__ . '/interfaces'
    ];

    foreach($directories as $directory) {
        $file = "{$directory}/{$class}.php";
        var_dump($file);
        if (file_exists($file)) {
            require_once $file;
            break;
        }
    }
}

$object = new Test();
$object->drawLine();
