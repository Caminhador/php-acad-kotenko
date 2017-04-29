<?php

define('TABLE_ROWS', mt_rand(1, 20));
define('TABLE_COLS', mt_rand(1, 20));

require_once __DIR__ . '/configs/colors.php';

$colors = BACKGROUND_COLORS;

for ($row = 1; $row <= TABLE_ROWS; $row++) {
    for ($column = 1; $column <= TABLE_COLS; $column++) {
        $value = mt_rand(100, 999);
        $color = array_rand(BACKGROUND_COLORS);

        echo sprintf("|\033[%sm %s \033[0m", $colors[$color], $value);
    }

    echo '|', PHP_EOL;
}
