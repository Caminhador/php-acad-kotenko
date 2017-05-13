<?php

if($_POST && !isset($_GET['update'])){
    createComment($_POST);
}

function createComment(array $data)
{
    $comment = json_encode($data);
    createCustomFile($comment);
}

if(isset($_GET['delete']) && isset($_GET['file'])) {
    $file = $config['commentDirectory']."/{$_GET['file']}";
    deleteCustomFile($file);
}

if(isset($_GET['edit']) && isset($_GET['file'])) {
    $file = $config['commentDirectory']."/{$_GET['file']}";
    $comment = readCustomFile($file);
}

if(isset($_GET['update']) && isset($_GET['file'])) {
    upDateComment($_GET['file'], $_POST);
}

function upDateComment($file, array $newData)
{
    global $config;
    $file = $config['commentDirectory']."/{$_GET['file']}";
    $comment = json_encode($newData);
    updateCustomFile($file, $comment);
}

