<?php

$config = require_once __DIR__."/configs/main.php";
$comment = [];

require_once __DIR__."/lib/files.php";
require_once __DIR__."/comment_action.php";
require_once __DIR__."/comments.php";

$comments = getAllComments();
require_once __DIR__."/form.php";



