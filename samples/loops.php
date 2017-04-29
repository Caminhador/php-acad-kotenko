<?php

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

echo PHP_EOL;

$i = 0;
while ($i < 10) {
    echo $i++;
}

echo PHP_EOL;

$ints = [101, 102, 103, 104];
do {
    $integer = mt_rand(100, 105);
    var_dump($integer);
} while (in_array($integer, $ints));

echo PHP_EOL;

$values = [
    'test' => [
        101 => 'qwerty',
        102 => 'uiop',
        103 => 'asdfgh',
        104 => 'jkl;'
    ]
];
foreach ($values['test'] as $key => $value) {
    echo $key . ' => ' . $value . PHP_EOL;
}

echo PHP_EOL;

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }

    echo $i;
}

echo PHP_EOL;

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }

    echo $i;
}

die('Died');
//die('Exited');
echo 'Yeah';