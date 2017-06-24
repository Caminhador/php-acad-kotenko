<?php

spl_autoload_register(function ($class) {
    $directories = [
        __DIR__ . '/classes'
    ];

    foreach($directories as $directory) {
        $file = "{$directory}/{$class}.php";
        if (file_exists($file)) {
            require_once $file;
            break;
        }
    }
});
spl_autoload_register('interfacesFinder');

function interfacesFinder($interface)
{
    $directories = [
        __DIR__ . '/interfaces'
    ];

    foreach($directories as $directory) {
        $file = "{$directory}/{$interface}.php";
        if (file_exists($file)) {
            require_once $file;
            break;
        }
    }
}

(new Test())->drawLine();
spl_autoload_unregister('interfacesFinder');
var_dump(spl_autoload_functions());
