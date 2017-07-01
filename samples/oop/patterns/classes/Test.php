<?php

namespace classes;

class Test
{
    public function __construct()
    {
        Single::getInstance()->set('test', 2);

        var_dump(Register::get('single'));
    }
}