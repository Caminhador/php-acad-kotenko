<?php

$string = '[abc]	A single character of: a, b or c
[^abc]	Any single character except: a, b, or c
[a-z]	Any single character in the range a-z
[a-zA-Z]	Any single character in the range a-z or A-Z
^	Start of line
$	End of line
\A	Start of string
\z	End of string';

echo '<pre>', $string, '</pre>';

preg_match('/\[[a-z]\s?\-[a-z][A-Z]\-[A-Z]\]/', $string, $matches);
var_dump($matches);

preg_match_all('/Any/', $string, $matches);
var_dump($matches);




