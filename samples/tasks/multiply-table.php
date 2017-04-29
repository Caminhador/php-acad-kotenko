<?php

define('MIN_NUMBER', 7);
define('MAX_NUMBER', 9);

for ($column = MIN_NUMBER; $column <= MAX_NUMBER; $column++) {
    for ($row = MIN_NUMBER; $row <= MAX_NUMBER; $row++) {
        $result = $column * $row;
        echo vsprintf("%d x %d = %d\r\n", [
            $column,
            $row,
            $result
        ]);
    }

    echo PHP_EOL;
}
