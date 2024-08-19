<?php


use App\{App, Router, Request};


// App::bind('config', require 'config-local.php');


// $pdo = Connection::make(App::get('config'));
//CreateTable::postsTable(connect());

Router::load("routes.php")->show(Request::uri(), Request::method());
