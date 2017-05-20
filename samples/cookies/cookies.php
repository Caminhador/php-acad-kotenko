<?php

var_dump($_COOKIE);

setcookie('test', 'qwerty');
setcookie('test_limited', 1, time() + 3600);
setcookie('test_limited', false, time() - 3600);

setcookie(
    'test_domain',
    'test.com',
    time() + 3600,
    '/',
    '.localhost'
);

var_dump($_COOKIE['test_domain']);

