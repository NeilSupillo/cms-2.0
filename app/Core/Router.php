<?php

namespace App;

use Exception;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];
    // public function define($route)
    // {
    //     $this->routes = $route;
    // }
    public function get($uri, $controller)
    {

        $this->routes['GET'][$uri] = $controller;
        //dd($this->routes);
    }
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    public function show($uri, $method)
    {

        //dd($uri);
        if (array_key_exists($uri, $this->routes[$method])) {
            $contrActArray = (explode('@', $this->routes[$method][$uri]));

            return $this->callMethod($contrActArray[0], $contrActArray[1]);
            //return $this->routes[$method][$uri];
        }
        throw new Exception("Route not found:" . $uri);
    }
    public function callMethod($controller, $action)
    {

        //the $controller is the class name and the $action is the method name
        $link = "App\\Controllers\\{$controller}";

        $cont = new $link;
        return $cont->$action();
    }
    public static function load($file)
    {
        $router = new static;
        require __DIR__ . "/../../config/" . $file;
        return $router;
    }
}
