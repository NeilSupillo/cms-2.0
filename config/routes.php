<?php

// $router->define([
//     '' => "controllers/index.php",
//     '/posts' => 'controllers/index.php',
// ]);

// $router->get('', "controllers/index.php");
// $router->post('/posts', "controllers/posts.php");

$router->get('', 'PostsController@getAll');
$router->get('user', 'PostsController@getOne');
