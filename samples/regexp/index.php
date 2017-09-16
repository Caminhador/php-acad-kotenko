<?php

$string = '[abc]	A single character of: a, b or c
[^abc]	Any single character except: a, b, or c
[a-z]	Any single character in the range a-z
[a-zA-Z]	Any single character in the range a-z or A-ZD
^	Start of line
$	End of line
\A	Start of string
\z	End of string';

$pattern = '/^\[(.*)\](.*)([A-Z]{2})$/m';

echo '<pre>', $string, '<hr>';

echo 'Pattern: ', $pattern;

echo '<hr> PREG_MATCH:<br>';

preg_match($pattern, $string, $matches);
print_r($matches);

echo '<hr> PREG_MATCH_ALL:<br>';

preg_match_all($pattern, $string, $matches);
print_r($matches);

echo '</pre>';
