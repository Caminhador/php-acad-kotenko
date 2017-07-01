<?php

spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $file = __DIR__ . $ds . str_replace('\\', $ds, $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    } else {
        throw new Exception("Class {$class} in undefined");
    }
});
