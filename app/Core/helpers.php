<?php

use App\App;
use Database\Connection;

if (!function_exists('check_data')) {
    function check_data($data)
    {
        if (!$data) {
            require __DIR__ . "/../Views/404.php";
            exit();
        }
    }
}
if (!function_exists('noId')) {
    function noId()
    {

        require __DIR__ . "/../Views/noid.php";
        exit();
    }
}
if (!function_exists('view')) {
    function view($view, $loc, $data = null)
    {

        if ($data !== null) {
            extract($data);
        }

        require __DIR__ . "/../Views/{$loc}/{$view}View.php";
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

        return isset($_SESSION[$name]) ? $_SESSION[$name] : "";
    }
}
if (!function_exists('unsetSession')) {
    function unsetSession($name)
    {
        unset($_SESSION[$name]);
    }
}
if (!function_exists('redirect')) {
    function redirect($name)
    {

        header("Location: {$name}");
    }
}
if (!function_exists('validate')) {
    function validate($data)
    {
        $errors = [];

        if (empty(trim($data['title'] ?? ''))) {
            $errors['title'] = 'Title is required.';
        }

        if (empty(trim($data['summary'] ?? ''))) {
            $errors['summary'] = 'Summary is required.';
        }

        if (empty(trim($data['content'] ?? ''))) {
            $errors['content'] = 'Content is required.';
        }

        return $errors;
    }
}
if (!function_exists('isAuth')) {
    function isAuth()
    {

        if (!isset($_SESSION["user"])) {

            return redirect("/project/admin/login");
        }
    }
}
