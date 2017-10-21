<?php

$result = mail($_POST['email'], $_POST['title'], $_POST['message'], 'From: test@test.com');
var_dump($result);
