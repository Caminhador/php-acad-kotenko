<?php

function isAuthorized()
{
    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
        return false;
    }

    $user = $_SESSION['user'];
    if (!isset($_COOKIE['auth_hash']) || $user['auth_hash'] !== $_COOKIE['auth_hash']) {
        return false;
    }

    return true;
}

function authorize($login, $password)
{
    global $config;

    $user = end(array_filter($config, function ($item) use ($login) {
        return $item['login'] == $login;
    }));

    if (empty($user)) {
        $_SESSION['error'] = 'User is undefined';
        return false;
    }

    $isCorrectHash = $user['password'] === md5($password);
    if (!$isCorrectHash) {
        $_SESSION['error'] = 'Password is incorrect';
        return false;
    }

    $authHash = md5(mt_rand());

    $_SESSION['user'] = $user;
    $_SESSION['user']['auth_hash'] = $authHash;

    setcookie('auth_hash', $authHash);
    header('Location: /samples/auth/');
    exit;
}
