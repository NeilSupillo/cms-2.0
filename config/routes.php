<?php

// $router->define([
//     '' => "controllers/index.php",
//     '/posts' => 'controllers/index.php',
// ]);

// $router->get('', "controllers/index.php");
// $router->post('/posts', "controllers/posts.php");

$router->get('', 'PostsController@getAll');
$router->get('/user', 'PostsController@getOne');
//admin routes

$router->get('/admin', 'AdminController@index');
$router->get('/admin/login', 'AdminController@login');
$router->post('/admin/login', 'AdminController@login');
