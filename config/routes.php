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
$router->get('/admin/login', 'AdminController@loginPage');
$router->get('/admin/logout', 'AdminController@logout');
$router->get('/admin/view', 'AdminController@view');
$router->get('/admin/edit', 'AdminController@editPage');
$router->get('/admin/create', 'AdminController@createPage');

$router->post('/admin/create', 'AdminController@create');
$router->post('/admin/edit', 'AdminController@edit');
$router->post('/admin/login', 'AdminController@loginCheck');
