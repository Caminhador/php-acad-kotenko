<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/excel.php';

$file = createExcelFile();
var_dump($file);

$result = mail($_POST['email'], $_POST['title'], $_POST['message'], 'From: test@test.com');
var_dump($result);
