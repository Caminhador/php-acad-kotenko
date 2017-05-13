<?php

function getFileName($template)
{
    $i = 0;
    do {
        $file = str_replace("{iterator}", $i, $template);
        $i++;
    } while(file_exists($file));

    return $file;
}

/**
 * @param string $stringData
 * @return int
 */
function createCustomFile($stringData)
{
    global $config;
    $file = $config['commentDirectory']."/comment-{iterator}.txt";
    $file = getFileName($file);
    return file_put_contents($file, $stringData);
}

function readCustomFile($route)
{
    $content = file_get_contents($route);
    $result = json_decode($content, true);
    $result['file'] = basename($route);
    return $result;
}

function updateCustomFile($file, $comment)
{
    return file_put_contents($file, $comment);
}

function deleteCustomFile($file)
{
    return unlink($file);
}

/**
 * @param string $dir
 * @return array
 */
function readCustomDirectory($dir)
{
    return array_diff(scandir($dir), [".",".."]);
}
