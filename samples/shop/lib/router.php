<?php

function parseUrl($url)
{
    $result = [
        'directory' => 'index',
        'file' => 'index',
        'isAdmin' => false
    ];

    $parts = array_filter(explode('/', trim($url, " \t\n\r\0\x0B/")));
    if (empty($parts)) {
        return $result;
    }

    $dir = array_shift($parts);
    if ($dir == 'admin') {
        $dir = array_shift($parts) ?: 'index';
        $result['directory'] = 'admin/pages/' . $dir;
        $result['isAdmin'] = true;
    } else {
        $result['directory'] = 'pages/' . $dir;
    }

    $file = array_shift($parts);
    if ($file) {
        $result['file'] = $file;
    }

    return $result;
}

function initShop($directory, $file, $isAdmin) {
    $rout = "{$directory}/{$file}.php";
    if (!file_exists($rout)) {
        die('Wrong URL');
    }

    if ($isAdmin) {
        require_once __DIR__ . '/auth.php';
        $authPage = '/admin/auth';
        $isAuthPage = $authPage == $_SERVER['REQUEST_URI'];
        if (!isAuthorized() && !$isAuthPage) {
            header("Location: {$authPage}");
            exit;
        }
    }

    require_once __DIR__ . '/db.php';
    $dbConfig = require_once __DIR__ . '/../configs/db.php';

    global $db;
    $db = getDbConnection(
        $dbConfig['server'],
        $dbConfig['user'],
        $dbConfig['password'],
        $dbConfig['db'],
        $dbConfig['charset']
    );

    require_once __DIR__ . '/template.php';
    $layout = "{$directory}/../layout.php";

    echo render($rout, $layout, []);
    exit;
}
