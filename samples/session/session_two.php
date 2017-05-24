<?php

session_start();

$_SESSION['key']->test2 = 'qwerty22';

var_dump($_SESSION);
