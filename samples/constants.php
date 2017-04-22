<?php

define('TEST_CONST', 1);

defined('TEST_CONST') || define('TEST_CONST', 2);
var_dump(TEST_CONST);

const TEST = 12;
var_dump(TEST);

var_dump(__DIR__, __FILE__, __LINE__);
