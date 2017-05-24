<?php

session_start();

$_SESSION['key'] = new stdClass();
$_SESSION['key']->test = 'qwerty';

var_dump(session_id(), $_SESSION);
