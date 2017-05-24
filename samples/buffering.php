<?php

ob_start();

var_dump(['test' => 123]);
echo 123 . 'test';

$content = ob_get_clean();

setcookie('test', 1);

echo $content;
