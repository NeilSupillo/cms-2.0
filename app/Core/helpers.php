<?php

use App\App;
use Database\Connection;

if (!function_exists('view')) {
    function view($view, $data = null)
    {
        if ($data !== null) {
            extract($data);
        }
        require __DIR__ . "/../Views/{$view}View.php";
    }
}
if (!function_exists('dd')) {
    function dd($data)
    {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }
}
if (!function_exists('connect')) {
    function connect()
    {
        App::bind('config', require __DIR__ . '/../../config/config-local.php');


        return Connection::make(App::get('config'));
        CreateTable::postsTable($pdo);
    }
}
connect();

//sessions
if (!function_exists('setSesion')) {
    function setSession($key, $text)
    {
        $_SESSION[$key] = $text;
    }
}
if (!function_exists('startSession')) {
    function startSession()
    {
        //ob_start();
        session_start();
    }
}
if (!function_exists('getSession')) {
    function getSession($name)
    {
        return $_SESSION[$name];
    }
}
if (!function_exists('unsetSession')) {
    function unsetSession($name)
    {
        return $_SESSION[$name];
    }
}
if (!function_exists('redirect')) {
    function redirect($name)
    {
        header("Location: {$name}");
    }
}
