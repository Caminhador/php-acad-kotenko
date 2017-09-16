<?php

$site = 'https://php-academy.kiev.ua/';

$start = microtime(true);

if (function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $site);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);

    $output = curl_exec($ch);
    curl_close($ch);

//    echo($output);

    echo  'curl: ';
} else {
    $output = file_get_contents($site);
//    echo($output);
    echo  'file_get_contents: ';
}

echo microtime(true) - $start;
