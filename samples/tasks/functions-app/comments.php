<?php
function getAllComments()
{
    global $config;
    $files = readCustomDirectory($config['commentDirectory']);
    $comments = [];
    foreach ($files as $file) {
        $route = $config['commentDirectory']."/{$file}";
        $comments[] = readCustomFile($route);
    }
    return $comments;
}
