<?php

namespace App;

class Request
{
    static $id = null;

    public static function uri()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $base_path = '/project'; // Adjust based on your actual base path
        $path = trim($path, '/');
        $path = str_replace(trim($base_path, '/'), '', $path); // Remove the base path

        $path = str_replace(trim($base_path, '/'), '', $path); // Remove the base path
        //   dd($path);
        return $path;
        // Split the path into parts
        $pathParts = array_filter(explode('/', $path));

        // if (!empty($pathParts[2])) {
        //     self::setId($pathParts[2]);
        // }
        // return empty($pathParts) ? $path : $pathParts[1];
    }
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
    public static function getUrlId()
    {
        return isset($_GET['id']) ? $_GET['id'] : noId();
    }
    public static function postUrlId()
    {
        return isset($_POST['id']) ? $_POST['id'] : noId();
    }
    public static function values()
    {
        return $_REQUEST;
    }
    public static function setId($i)
    {

        self::$id = (int)$i;
    }
    public static function getId()
    {
        return self::$id;
    }
}
